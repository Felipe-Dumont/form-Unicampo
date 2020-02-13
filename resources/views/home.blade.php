<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="description" content="Projeto 02">
	<title>fomulario</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}">

	<script type="text/javascript" src="{{ asset('site/js/jquery.js') }}"></script>

<script>
	$(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
</script>

</head>
<body class="corpo">

	<div class="form text-center">

		<h1>Fomulário</h1>

	</div>

	<div class="container formulario">
		
		<form >

			<div class="al">

				<div class="es">

					<p><b>Informações pessoais</b></p><br>

					<div class="form-group entrada">
					
						<label>Nome completo</label>

						<input type="text" name="fullname" class="form-control">

					</div>
					
					
					<div class="form-group entrada">
					
						<label>Data de nascimento</label>

						<input type="date" name="birth" class="form-control">

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-8">
						
							<label>CPF/CNPJ</label>

							<input type="text" name="cpf-cnpj" id="cpfcnpj" onkeypress='mascaraMutuario(this,cpfCnpj)' onkeyup='validaCampo()' onblur='clearTimeout()' class="form-control">

						</div>

						<div class="form-group col-md-4 ">

							<label for="inputState">Pessoa</label>
							<select id="cpf-cnpj" onkeyup='validaCampo()' name="pessoa" class="form-control">
								<option value="0" selected>...</option>
								<option value="1" >Fisica</option>
								<option value="2" >Jurídica</option>
							</select>

						</div>

					</div>

					<div class="form-group entrada">

						<label for="email" >E-mail</label>

						<input type="email" name="email" class="form-control">

					</div>

				</div>

				
	
				<div class="linha-vertical"></div>

				<div class="es">

					<p><b>Endereço</b></p><br>
					
					<div class="form-group entrada">
					
						<label>CEP</label>

						<input type="text" id="cep" name="cep" class="form-control">

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-9">
					
							<label>Rua</label>

							<input type="text" id="rua" name="street" class="form-control">

						</div>

						<div class="form-group col-md-3">
					
							<label>Numero</label>

							<input type="text" name="number" class="form-control">

						</div>

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-9">
					
							<label>Cidade</label>

							<input type="text" id="cidade" name="city" class="form-control">

						</div>

						<div class="form-group col-md-3">
						
							<label>UF</label>

							<input type="text" id="uf"	name="state" class="form-control">

						</div>

					</div>

					<div class="text-center d-botao" style="margin-top: 70px;">

					<button type="submit" class="btn btn-lg botao">Cadastrar!</button>

					</div>

				</div>

			</div>
			<div><p style="font-size: 11px">Todos os campos são Obrigatorios!</p></div>

		</form>

	</div>

	<ul class="squares ">
		<li>
		</li>
	</ul>

	<footer>

		<script type="text/javascript" src="{{ asset('site/js/bootstrap.js') }}"></script>

		<script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>

		<script>

			function mascaraMutuario(o,f){
				v_obj=o
				v_fun=f
				setTimeout('execmascara()',1)
			}

			function execmascara(){
				v_obj.value=v_fun(v_obj.value)
			}

			function cpfCnpj(v){

				//Remove tudo o que não é dígito
				v=v.replace(/\D/g,"")

				if (v.length <= 14) { //CPF

					//Coloca um ponto entre o terceiro e o quarto dígitos
					v=v.replace(/(\d{3})(\d)/,"$1.$2")

					//Coloca um ponto entre o terceiro e o quarto dígitos
					//de novo (para o segundo bloco de números)
					v=v.replace(/(\d{3})(\d)/,"$1.$2")

					//Coloca um hífen entre o terceiro e o quarto dígitos
					v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

					

				} else { //CNPJ

					//Coloca ponto entre o segundo e o terceiro dígitos
					v=v.replace(/^(\d{2})(\d)/,"$1.$2")

					//Coloca ponto entre o quinto e o sexto dígitos
					v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

					//Coloca uma barra entre o oitavo e o nono dígitos
					v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

					//Coloca um hífen depois do bloco de quatro dígitos
					v=v.replace(/(\d{4})(\d)/,"$1-$2")

				}

				return v
			}

			function validaCampo() {
				var teste = document.getElementById("cpfcnpj").value;
				var teste2 = teste.length;

				if(teste2 <= 14) {
					document.getElementById("cpf-cnpj").value = "1";
				} else {
					document.getElementById("cpf-cnpj").value = "2";
				}
			}

			
		</script>

	</footer>

</body>
</html>