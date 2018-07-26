<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet"
	href="../../assets/css/materialize.min.css" media="screen,projection" />

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
	<nav>
		<div class="nav-wrapper">
			<a href="agenda.php">
				<div class="input-field">
					 <label for="search" style="cursor: pointer;"><i
						class="material-icons">reply</i></label>
				</div>
			</a>
		</div>
	</nav>
	<div class="row">
		<form class="col s12" method="POST" action="../Controller/contato.php">
		
			<input style="display: none;" type="text" value="2" name="tipo" />
		
			<div class="row">
				<div class="input-field col s6">
					<input type='text' placeholder='Nome' required="required" name='nome'
						class="validate"> <label for="first_name">Nome</label>
				</div>
				<div class="input-field col s6">
					<input type='email' placeholder='Email' name='email' required="required"
						class="validate"> <label for="last_name">Email</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Telefone' required="required" name='telefone'
						class="validate"> <label for="first_name">Telefone</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Celular' required="required" name='celular'
						class="validate"> <label for="first_name">Celular</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Skype' required="required" name='skype'
						class="validate"> <label for="first_name">Skype</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Site' required="required" name='site'
						class="validate"> <label for="first_name">Site</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='CNPJ' required="required" name='cnpj'
						class="validate"> <label for="first_name">CNPJ</label>
				</div>
				<div class="col s6">
					<button type="submit" class="waves-effect waves-light btn">Enviar</button>
				</div>
			</div>
		</form>
	</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../../assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>

</body>
</html>