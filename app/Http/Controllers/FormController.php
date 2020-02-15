<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request)
    {

        $validacao = $request->validate([
            'fullname' => 'required',
            'birth' => 'required',
            'email' => 'required|email',
            'pessoa' => 'required',
            'cpfcnpj' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        $user = new User();
        $user->fullname = $request->fullname;
        $user->birth = $request->birth;
        $user->email = $request->email;
        $user->kindperson = $request->pessoa;

        if ($user->kindperson === 'Fisica') {
            $user->cpf = $request->cpfcnpj;
            $user->cnpj = "--";
        } else {
            $user->cnpj = $request->cpfcnpj;
            $user->cpf = "--";
        }



        if (
            $request->fullname === '' &&
            $request->birth === '' &&
            $request->email === '' &&
            $request->pessoa === ''
        ) {
            return \redirect()->back()->withInput()->withErrors(['Todos os campos são obrigatorios!']);
        } else {

            $user->save();

            $address = new Addresses();
            $address->cep = $request->cep;
            $address->iduser = $user->id;
            $address->street = $request->street;
            $address->number = $request->number;
            $address->city = $request->city;
            $address->state = $request->state;

            if (
                $request->cep === '' &&
                $request->street === '' &&
                $request->number === '' &&
                $request->city === '' &&
                $request->state === ''
            ) {
                return \redirect()->back()->withInput()->withErrors(['Todos os campos são obrigatorios!']);
            } else {

                $address->save();
                $request->session()->flash('alert-success', 'Cadastro realizado com sucesso!');
                return redirect()->route('home');
            }
        }
    }
}
