<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	            
        $usuario = $_POST ['usuario'];
        $senha = $_POST ['senha'];
        //$id_usuario = $_POST ['id_usuario'];
        
        
        require_once '../Model/loginConection.class.php';
        
        $cadastrar = new loginConection();
        $cadastrar->logar($usuario, $senha);
       print_r ( $_REQUEST );
        //header ( "Location: ../../home.php" );
        //echo "logado";
    }


?>