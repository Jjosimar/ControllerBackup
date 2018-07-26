<?php
class cadPerguntas {
		
	//busca todos os contatos com os seus dados
	public function buscarPerguntaPeloId($id_contato) {
		return $this->buscarPergunta($id_contato);
	}
	
	  //nao esquecer de colocar a id da pergunta
	public function cadastrarPergunta($descricao) {
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		$existe = 0;
		//mudar isso
		$existe = $this->verificarPergunta($pdo, $descricao);
		
		if ($existe < 1) {
			try {
				$stmte = $pdo->prepare ( "INSERT INTO pergunta ($descricao) VALUES (:descricao)" );
				$stmte->bindParam ( ":descricao", $descricao, PDO::PARAM_STR );
							
				$executa = $stmte->execute ();
				
				if ($executa) {
                    //depois que fizer  o banco verificar qual é o id
					echo 'Dados inseridos com sucesso';
					$id_contato = $pdo->lastInsertId();
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
			echo "pergunta ja cadastrado";
		}
	}

	  //nao esquecer de colocar a id da pergunta  
	public function editar($id, $descricao, $id_contato_dados){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
			
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		
	    $existe = $this -> verificarPerguntaPorId($pdo, $descricao, $id);
		if($existe == 2){
		
			
			try{
				$stmte = $pdo->prepare("UPDATE pergunta SET descricao=? WHERE id_contato=?;");
				$stmte->bindParam(1, $descricao , PDO::PARAM_STR);
				$stmte->bindParam(3, $id , PDO::PARAM_STR);
				$executa = $stmte->execute();
			
				if($executa){
					echo 'Dados atualizados com sucesso';					
				}
				else{
					echo 'Erro ao inserir os dados !';
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}else{
			echo "Este email esta para o outro contato.";
		}
			
	}

	  //nao esquecer de colocar a id da pergunta
	public function ApagarDados($id){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		$existe = 1;

		if($existe){
		
				
			try{
				$stmte = $pdo->prepare("DELETE FROM pergunta WHERE id_contato=?;");
				$stmte->bindParam(1,$id);
				$executa = $stmte->execute();
					
				if($executa){
					echo 'Dados excluido com sucesso';
				
						
				}
				else{
					echo 'Erro excluir dados!';
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}else{
			echo "Nao foi possivel deletar contato dados";
		}
			
	}
	
	private function verificarPergunta($pdo, $descricao) {
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM pergunta where descricao = ?" );
			$stmte->bindParam ( 1, $descricao, PDO::PARAM_STR );
			$executa = $stmte->execute ();
				
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) { /* Para recuperar um ARRAY utilize PDO::FETCH_ASSOC */
					return $existe = 1;
				}
			}
		} catch ( PDOException $e ) {
			echo $e->getMessage ();
		}
	}
	
    //nao esquecer de colocAR A id da pergunta na consulta
	private function verificarPerguntaPorId($pdo, $descricao, $id) {
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM pergunta where descricao = ? and id_contato <> ?" );
			$stmte->bindParam ( 1, $descricao, PDO::PARAM_STR );
			$stmte->bindParam ( 2, $id, PDO::PARAM_STR );
			$executa = $stmte->execute ();
			
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) { /* Para recuperar um ARRAY utilize PDO::FETCH_ASSOC */
					return $existe = 1;
				}
			}
		} catch ( PDOException $e ) {
			echo $e->getMessage ();
		}
		return 2;
	}
	

	 //nao esquecer de colocAR A id da pergunta na consulta
	private function buscarPergunta($id_contato){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
	
		$pergunta = null;
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM pergunta  where id_contato =? group by id_contato order by descricao;");
			$stmte->bindParam(1, $id_contato , PDO::PARAM_STR);
			$executa = $stmte->execute ();
	
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) {
					$pergunta[$reg->id_contato] = $reg;
				}
			}
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
	
		}
		return $pergunta;
	}
	
}

?>