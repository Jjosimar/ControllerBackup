<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/contato.class.php';
	
	$buscar = new contato ();
	$buscar->buscar ();
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	            
        $funcName = $_POST ['funcName'];
        $funcEmail = $_POST ['funcEmail'];
        $perfil = $_POST ['perfil'];
        $funcUsername = $_POST ['funcUsername'];
        $funcSenha = $_POST ['funcSenha'];
                
        require_once '../Model/cadastroUsuario.class.php';
        
        $cadastrar = new cadastroUsuario();
        $cadastrar->cadastrar($funcName, $funcEmail, $perfil, $funcUsername, $funcSenha);
       // print_r ( $_REQUEST );
        header ( "Location: ../../home.php" );
    }


?>