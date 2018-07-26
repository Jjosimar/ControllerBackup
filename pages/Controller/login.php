<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	            
        $usuario = $_POST ['usuario'];
        $senha = $_POST ['senha'];
        $funcName = $_POST ['funcName'];
        
        
        require_once '../Model/loginConection.class.php';
        
        $cadastrar = new loginConection();
        $cadastrar->buscarDados($usuario, $senha, $funcName);
       print_r ( $_REQUEST );
        //header ( "Location: ../../home.php" );
        //echo "logado";
    }


?>