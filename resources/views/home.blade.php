<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="description" content="Projeto 02">
	<title>fomulario</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}">

</head>
<body class="corpo">

	<div class="form text-center">

		<h1>Fomulário</h1>

	</div>

	<div class="container formulario">
		
		<form>

			<div class="al">

				<div class="es">

					<p><b>Informações pessoais</b></p><br>

					<div class="form-group entrada">
					
						<label>Nome completo</label>

						<input type="text" class="form-control">

					</div>
					
					
					<div class="form-group entrada">
					
						<label>Data de nascimento</label>

						<input type="date" class="form-control">

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-4">

							<label for="inputState">Pessoa</label>
							<select id="inputState" class="form-control">
								<option selected>Fisica</option>
								<option>Jurídica</option>
							</select>

						</div>

						<div class="form-group col-md-8">
						
							<label>CPF/CNPJ</label>

							<input type="text" id="cpfcnpj" class="form-control">

						</div>

					</div>

					<div class="form-group entrada">

						<label >E-mail</label>

						<input type="email" class="form-control">

					</div>

				</div>
	
				<div class="linha-vertical"></div>

				<div class="es">

					<p><b>Endereço</b></p><br>
					
					<div class="form-group entrada">
					
						<label>CEP</label>

						<input type="text" class="form-control">

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-9">
					
							<label>Rua</label>

							<input type="text" class="form-control">

						</div>

						<div class="form-group col-md-3">
					
							<label>Numero</label>

							<input type="text" class="form-control">

						</div>

					</div>

					<div class="form-row entrada">

						<div class="form-group col-md-9">
					
							<label>Cidade</label>

							<input type="text" class="form-control">

						</div>

						<div class="form-group col-md-3">
						
							<label>UF</label>

							<input type="text" class="form-control">

						</div>

					</div>

					<div class="text-center d-botao" style="margin-top: 70px;">

					<button type="submit" class="btn btn-lg botao">Cadastrar!</button>

					</div>

				</div>

			</div>



		</form>

	</div>

	<ul class="squares ">
		<li>
		</li>
	</ul>

	<footer>

		<script type="text/javascript" src="{{ asset('site/js/jquery.js') }}"></script>

		<script type="text/javascript" src="{{ asset('site/js/bootstrap.js') }}"></script>

		<script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>

	</footer>

</body>
</html>