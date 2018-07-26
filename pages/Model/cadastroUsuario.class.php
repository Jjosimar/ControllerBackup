<?php
define('ROOT_PATH', dirname(__FILE__));

class cadastroUsuario{

    	
	//busca todos os contatos com os seus dados
	public function buscar() {
		return $this->buscarDados();
		
	}
    

	public function cadastrar($funcName, $funcEmail, $perfil, $funcUsername, $funcSenha) {
		require_once '../Connection/conexao.class.php';
		$conec = new conexao ();
		
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		$existe = 0;
		
		//$existe = $this->verificarNomeDaEmpresa($pdo, $nomeEmpresa);
		
		if ($existe < 1) {
			try {
				$stmte = $pdo->prepare ( "INSERT INTO usuario (funcName, funcEmail, perfil, funcUsername, funcSenha) VALUES (:funcName, :funcEmail, :perfil, :funcUsername, :funcSenha)" );
				$stmte->bindParam ( ":funcName", $funcName, PDO::PARAM_STR );
				$stmte->bindParam ( ":funcEmail", $funcEmail, PDO::PARAM_STR );				
				$stmte->bindParam ( ":perfil", $perfil, PDO::PARAM_STR );				
				$stmte->bindParam ( ":funcUsername", $funcUsername, PDO::PARAM_STR );				
				$stmte->bindParam ( ":funcSenha", $funcSenha, PDO::PARAM_STR );				
				$executa = $stmte->execute ();
				
				if ($executa) {
					echo 'Dados inseridos com sucesso';
					//$id_contato = $pdo->lastInsertId();
					//$this->cadastrarDados($pdo, $id_contato, $telefone, $celular, $skype);
					//$this->cadastrarEndereco($pdo, $id_contato, $municipio, $estado, $cep, $complemento, $bairro);
					print_r ( $_REQUEST );
					echo "chegou aqui";
					
			
				} else {
					echo 'Erro ao inserir os dados';
					print_r ( $executa );
				}
			} catch ( PDOException $e ) {
				echo $e->getMessage ();
			}
		} else {
			echo "email ja cadastrado";
		}
	}
		private function buscarDados(){
			//require_once  ROOT_PATH . "connection/conexao.class.php";
			require_once 'Connection/conexao.class.php';
			$conec = new conexao ();
			$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );

			$contato = null; 
			try {
				$stmte = $pdo->prepare ( "SELECT * FROM usuario order by funcName;");
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
		}
}