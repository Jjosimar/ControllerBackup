<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	
	if ($_POST ['nome'] || $_POST ['email'])
		header ( "Location: cadastrar.php" );
	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$telefone = $_POST ['telefone'];
	$celular = $_POST ['celular'];
	$skype = $_POST ['skype'];
	$site = $_POST ['site'];
	$cnpj = $_POST ['cnpj'];
	
	require_once '../Model/contato.class.php';
	
	$cadastrar = new contato ();
	$cadastrar->cadastrar ($nome, $email, $telefone, $celular, $skype, $site, $cnpj );
	print_r ( $_REQUEST );
	header ( "Location: ../View/agenda.php" );
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 3) {
	
	if (empty ( $_POST ['nome'] ) || empty ( $_POST ['email'] ))
		header ( "Location: ../View/agenda.php" );
	
	$id = $_POST ['id'];
	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$skype = $_POST['skype'];
	$site = $_POST['site'];
	$cnpj = $_POST['cnpj'];
	$id_contato_dados = $_POST['id_contato_dados'];
		
	require_once '../Model/contato.class.php';
	
	$cadastrar = new contato ();
	$cadastrar->editar ( $id, $nome, $email, $telefone, $celular, $skype, $site, $cnpj, $id_contato_dados);
	header ( "Location: ../View/agenda.php" );
	
}elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 4) {
	if (empty ( $_POST ['apagar'] ))
		header ( "Location: ../View/agenda.php" );
	
		require_once '../Model/contato.class.php';
		
		$id = $_POST ['apagar'];
				
		$cadastrar = new contato ();
		if (! empty ( $id )) {
		
			echo $cadastrar->ApagarDados($id);
		}
		
		
}