<?php

namespace App\Http\Controllers\api;

use App\Addresses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return Addresses::all();
    }

    public function store(Request $request)
    {
        Addresses::create($request->all());
    }

    public function show($id)
    {
        return Addresses::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $address = Addresses::findOrFail($id);
        $address->update($request->all());
    }

    public function destroy($id)
    {
        $address = Addresses::findOrFail($id);
        $address->delete();
    }
}
