<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	
	if ($_POST ['nomeEmpresa'] || $_POST ['email']){
        echo "ja cadastrado";
        header ( "Location: ../agenda.php" );

    }else{
            
        $nomeEmpresa = $_POST ['nomeEmpresa'];
        $nomeProprietario = $_POST ['nomeProprietario'];
        $email = $_POST ['email'];
        $cpf_cnpj = $_POST ['cpf_cnpj'];
        $telefone = $_POST ['telefone'];
        $celular = $_POST ['celular'];
        $skype = $_POST ['skype'];
        $municipio = $_POST ['municipio'];
        $estado = $_POST ['estado'];
        $cep = $_POST ['cep'];
        $complemento = $_POST ['complemento'];
        $bairro = $_POST ['bairro'];

        
        require_once '../Model/contato.class.php';
        
        $cadastrar = new contato ();
        $cadastrar->cadastrar($nomeEmpresa, $nomeProprietario, $email, $cpf_cnpj, $telefone, $celular, $skype, $municipio, $estado, $cep, $complemento, $bairro);
        print_r ( $_REQUEST );
        //header ( "Location: ../agenda.php" );
    }
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 3) {
	
	if (empty ( $_POST ['nome'] ) || empty ( $_POST ['email'] ))
		header ( "Location: index.php" );
	
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
	header ( "Location: ../index.php" );
	
}elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 4) {
	if (empty ( $_POST ['apagar'] ))
		header ( "Location: ../index.php" );
	
		require_once '../Model/contato.class.php';
		
		$id = $_POST ['apagar'];
				
		$cadastrar = new contato ();
		if (! empty ( $id )) {
		
			echo $cadastrar->ApagarDados($id);
		}
		
		
}

?>