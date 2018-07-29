<?php

class loginConection{

    public function buscarContatoDados() {
		return $this->buscarDadosporContato();
    }
    
    public function logar($usuario, $senha){
		require_once '../Connection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		 
		try {

			$stmte = $pdo->prepare ( "SELECT * FROM usuario WHERE funcUsername = '$usuario' AND funcSenha = '$senha'");
			$executa = $stmte->execute (); 
           
            $count = $stmte->rowCount();  
            if($count > 0)  
            {  
                $_SESSION['usuario']=$usuario;
                $_SESSION['senha']=$senha;
                //$_SESSION['id_usuario']=$id_usuario;
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
        //return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    /*private function buscarDadosporContato($id_usuario){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
	
		$contato = null;
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM cliente left join usuario on id_usuario = id_usuario where id_contato ='$id_usuario'");
			$stmte->bindParam(1, $id_usuario , PDO::PARAM_STR);
			$executa = $stmte->execute ();
	
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) {
					$contato[$reg->id_usuario] = $reg;
				}
			}
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
	
		}
		return $contato;
    }*/
    
    /*private function buscarDadosporContato(){
		require_once 'Connection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		
		$contato = null; 
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM usuario");
			$executa = $stmte->execute (); 
				
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) {
					$contato[$reg->id_usuario] = $reg;
				}
			}
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
				
		}
		return $contato;
	}*/
}