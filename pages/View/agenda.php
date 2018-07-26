<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet"
	href="../../assets/css/materialize.min.css" media="screen,projection">
<!-- 
<link type="text/css" rel="stylesheet" href="../../assets/css/materialize.css"
	media="screen,projection">  -->

<link type="text/css" rel="stylesheet" href="../../assets/css/estilo.css"
	media="screen,projection">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style type="text/css">
.btn-floating:hover {
	-ms-transform: rotate(20deg); /* IE 9 */
	-webkit-transform: rotate(20deg); /* Chrome, Safari, Opera */
	transform: rotate(20deg);
}
</style>

</head>

<body>



	<nav>
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo" style="padding: 0.2%;">Agenda</a> <a
				href="#" data-activates="mobile-demo" class="button-collapse"><i
				class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="../../index.php"><i class="material-icons">refresh</i></a></li>
				<li><a href="#"><i class="material-icons">more_vert</i></a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="agenda.php">Atualizar</a></li>
				<li><a href="#">Perfil</a></li>
			</ul>
		</div>
	</nav>

	<div class="section col s12 m9 l10">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Contatos</h4></li>
	<?php
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$contato = $buscar->buscar ();
	
	/*
	 * if (! empty ( $contato )) {
	 * foreach ( $contato as $value ) {
	 * $link = "editar.php?id=" . $value->id_contato;
	 * ?>
	 * <div id="tabela">
	 * <a href="<?php echo $link;?>">
	 * <li class="collection-item">
	 * <?php echo $value->nome, $value->telefone;?><a href="#!"
	 * class="secondary-content"><i class="material-icons">send</i></a>
	 * </li>
	 * </a>
	 * </div>
	 * <?php
	 * }
	 * }
	 *
	 * ?>
	 */
	if (! empty ( $contato )) {
		foreach ( $contato as $value ) {
			$link = "EditarContato.php?id=" . $value->id_contato;
			
			?>
					
		
				<li class="">
				<table class="bordered striped">
					<th>	
					
					
					<td><?php echo $value->nome;?></td>
					<td><?php echo $value->telefone;?></td>
					<td><a href="<?php echo $link;?>" class="secondary-content"><i
							class="material-icons">mode_edit</i></a></td>
					<td><a href="#" class="secondary-content apagar"
							apagar="<?php echo $value->id_contato;?>">
							<i class="material-icons">delete</i>
						</a></td>

					</th>
				</table>
			</li>

				<?php
		}
	}
	
	?>
		</ul>
	</div>


	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a href="CadastrarContato.php" class="btn-floating btn-large red"> <i
			class="large material-icons">add</i>
		</a>
	</div>


	<script type="text/javascript">
		$(".button-collapse").sideNav();
		
	$(".apagar").click(function(){
		var apagar =  $(this).attr("apagar");
     
		var txt;
		var tipo = 4;
	    var r = confirm("Apagar!");
	    if (r == true) {
	 
		$.post("../Controller/contato.php",
			    {
		 apagar: apagar, 
		 tipo:	tipo
			      
			    },
			    function(data, status){
			        alert(data);
			        location.reload();
			    });

	    } 
		
	});
	</script>
	
		<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../../assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>

</body>
</html>