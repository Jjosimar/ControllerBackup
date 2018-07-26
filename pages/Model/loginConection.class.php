<?php

class loginConection{

    public function buscarDados($usuario, $senha, $funcName){
		require_once '../Connection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		 
		try {

			$stmte = $pdo->prepare ( "SELECT * FROM usuario WHERE funcUsername = '$usuario' AND funcSenha = '$senha' AND funcName = '$funcName'");
			$executa = $stmte->execute (); 
           
            $count = $stmte->rowCount();  
            if($count > 0)  
            {  
                $_SESSION['usuario']=$usuario;
                $_SESSION['senha']=$senha;
                $_SESSION['funcName']=$funcName;
                 header("location: ../../home.php");  
            }  
            else  
            {   
                //echo "error";
               header ( "Location: ../../index.php" );
            }  
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
				
		}
	}
}