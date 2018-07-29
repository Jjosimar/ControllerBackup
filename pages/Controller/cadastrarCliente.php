<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	            
        $codigoLiberacao = $_POST ['codigoLiberacao'];
        $cpf_cnpj = $_POST ['cpf_cnpj'];
        $situacao = $_POST ['situacao'];
        $nomeEmpresa = $_POST ['nomeEmpresa'];
        $acao = $_POST ['acao'];
        $qntCliente = $_POST ['qntCliente'];
        $dateBackup = $_POST ['dateBackup'];
        $id_usuario = $_POST ['id_usuario'];        
        
        require_once '../Model/cadastroCliente.class.php';
        
        $cadastrar = new cadastroCliente ();
        $cadastrar->cadastrar($codigoLiberacao, $cpf_cnpj, $situacao, $nomeEmpresa, $acao, $qntCliente, $dateBackup, $id_usuario);
        print_r ( $_REQUEST );
        header ( "Location: ../../home.php#agenda" );

}elseif(! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 3){
        
        $codigoLiberacao = $_POST ['codigoLiberacao'];
        $cpf_cnpj = $_POST ['cpf_cnpj'];
        $situacao = $_POST ['situacao'];
        $nomeEmpresa = $_POST ['nomeEmpresa'];
        $acao = $_POST ['acao'];
        $qntCliente = $_POST ['qntCliente'];
        $dateBackup = $_POST ['dateBackup'];
        $id = $_POST ['id'];        
        
        require_once '../Model/cadastroCliente.class.php';
        
        $cadastrar = new cadastroCliente ();
        $cadastrar->editar($codigoLiberacao, $cpf_cnpj, $situacao, $nomeEmpresa, $acao, $qntCliente, $dateBackup, $id);
        print_r ( $_REQUEST );
        header ( "Location: ../../home.php#agenda" );

}elseif(! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 4) {
	if (empty ( $_POST ['apagar'] ))
		header ( "Location: ../../home.php" );
	
		require_once '../Model/cadastroCliente.class.php';
		
		$id = $_POST ['apagar'];
				
		$cadastrar = new cadastroCliente();
		if (! empty ( $id )) {
		
			echo $cadastrar->ApagarDados($id);
		}
		
		
}


?>