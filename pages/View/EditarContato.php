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
	<?php
	if (empty ( $_REQUEST ['id'] ))
		header ( "Location: agenda.php" );
	
	$id = $_REQUEST ['id'];
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$contato = $buscar->buscarContatoDados ( $id );
	
	?>
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
	
	
	<?php
	if (! empty ( $contato )) {	foreach ( $contato as $valueContato ) {?>
		
		<div class="row">
		<form class="col s12" method="POST" action="../Controller/contato.php">

			<input style="display: none;" type="text" value="3" name="tipo" /> 
			<input style="display: none;" type="text" value="<?php echo $valueContato->id_contato;?>"
				name="id" /> 
			<input style="display: none;" type="text" value="<?php echo $valueContato->id_contato_dados;?>"
				name="id_contato_dados"/>
			<div class="row">
				<div class="input-field col s6">
					<input type='text' placeholder='Nome' required="required"
						name='nome' value="<?php echo $valueContato->nome;?>" class="validate"> <label
						for="first_name">Nome</label>
				</div>
				<div class="input-field col s6">
					<input type='email' placeholder='Email' name='email'
						required="required" value="<?php echo $valueContato->email;?>" class="validate">
					<label for="last_name">Email</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Telefone' required="required"
						name='telefone' value="<?php echo $valueContato->telefone;?>" class="validate">
					<label for="first_name">Telefone</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Celular' required="required" name='celular' value="<?php echo $valueContato->celular;?>"
						class="validate"> <label for="first_name">Celular</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Skype' required="required" name='skype' value="<?php echo $valueContato->skype;?>"
						class="validate"> <label for="first_name">Skype</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='Site' required="required" name='site' value="<?php echo $valueContato->site;?>"
						class="validate"> <label for="first_name">Site</label>
				</div>
				<div class="input-field col s6">
					<input type='text' placeholder='CNPJ' required="required" name='cnpj' value="<?php echo $valueContato->cnpj;?>"
						class="validate"> <label for="first_name">CNPJ</label>
				</div>
				<div class="col s6">
					<button type="submit" class="waves-effect waves-light btn">Enviar</button>
				</div>
			</div>
		</form>
	</div>

			
			
	<?php }}?>
	
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../../assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>	
	
</body>
</html>