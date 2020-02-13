<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="description" content="Projeto 02">
	<title>fomulario</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}">

</head>
<body class="corpo" onload="mouse();">

	<div class="form text-center">

		<h1>Enter the Login</h1>

	</div>

	<div class="container formulario">
		
		<form>

	 		<div class="form-group email">

	    		<label for="exampleInputEmail1">Email</label>

	    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"">

	 		</div>

		  	<div class="form-group senha">

		    	<label for="exampleInputPassword1">Senha</label>

		    	<input type="password" class="form-control" id="exampleInputPassword1">

	  		</div>

	  		<div class="text-center">

	  			<button type="submit" class="btn btn-lg botao">Login</button>

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