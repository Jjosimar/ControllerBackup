<?php
class contato {
	
	//busca todos os contatos com os seus dados
	public function buscar() {
		return $this->buscarDados();
	}
	
	//busca todos os contatos com os seus dados
	public function buscarContatoDados($id_contato) {
		return $this->buscarDadosporContato($id_contato);
	}
	
	//nao esquecer de colocar o id corretamente em geral*********************
	public function cadastrar($nomeEmpresa, $nomeProprietario, $email, $cpf_cnpj, $telefone, $celular, $skype, $municipio, $estado, $cep, $complemento, $bairro) {
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		$existe = 0;
		
		$existe = $this->verificarNomeDaEmpresa($pdo, $nomeEmpresa);
		
		if ($existe < 1) {
			try {
				$stmte = $pdo->prepare ( "INSERT INTO contato (nomeEmpresa, nomeProprietario, email, cpf_cnpj) VALUES (:nomeEmpresa, :nomeProprietario, :email, :cpf_cnpj)" );
				$stmte->bindParam ( ":nomeEmpresa", $nomeEmpresa, PDO::PARAM_STR );
				$stmte->bindParam ( ":nomeProprietario", $nomeProprietario, PDO::PARAM_STR );				
				$stmte->bindParam ( ":email", $email, PDO::PARAM_STR );				
				$stmte->bindParam ( ":cpf_cnpj", $cpf_cnpj, PDO::PARAM_STR );				
				$executa = $stmte->execute ();
				
				if ($executa) {
					echo 'Dados inseridos com sucesso';
					$id_contato = $pdo->lastInsertId();
					$this->cadastrarDados($pdo, $id_contato, $telefone, $celular, $skype);
					$this->cadastrarEndereco($pdo, $id_contato, $municipio, $estado, $cep, $complemento, $bairro);
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
	//nao esquecer de colocar o id corretamente
	public function editar($id, $nomeEmpresa, $nomeProprietario, $email, $cpf_cnpj, $telefone, $celular, $skype, $municipio, $estado, $cep, $complemento, $bairro, $id_contato_dados, $id_endereco){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
			
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		
	    $existe = $this -> verificarNomeEmpresaporId($pdo, $nomeEmpresa, $id);
		if($existe == 2){
		
			
			try{
				$stmte = $pdo->prepare("UPDATE contato SET nomeEmpresa=?, nomeProprietario=?, email=?, cpf_cnpj=? WHERE id_contato=?;");
				$stmte->bindParam(1, $nomeEmpresa , PDO::PARAM_STR);
				$stmte->bindParam(2, $nomeProprietario , PDO::PARAM_STR);
				$stmte->bindParam(3, $email , PDO::PARAM_STR);
				$stmte->bindParam(4, $cpf_cnpj , PDO::PARAM_STR);
				$executa = $stmte->execute();
			
				if($executa){
					echo 'Dados atualizados com sucesso';
					$this->editarDadosAdicionais($pdo, $id, $telefone, $celular, $skype, $id_contato_dados);
					$this->editarDadosDoEndereco($pdo, $id, $municipio, $estado, $cep, $complemento, $bairro, $id_endereco);
				}
				else{
					echo 'Erro ao inserir os dados !';
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}else{
			echo "Nome da empresa esta em outro cadastro.";
		}
			
	}
	
	public function ApagarDados($id){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		$existe = 1;
		$existe = $this -> ApagarDadosCliente($pdo, $id);
		
		if($existe){
		
				
			try{
				$stmte = $pdo->prepare("DELETE FROM contato WHERE id_contato=?;");
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
	
	private function verificarNomeDaEmpresa($pdo, $nomeEmpresa) {
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM contato where nomeEmpresa = ?" );
			$stmte->bindParam ( 1, $nomeEmpresa, PDO::PARAM_STR );
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
	
	private function verificarNomeEmpresaporId($pdo, $nomeEmpresa, $id) {
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM contato where nomeEmpresa = ? and id_contato <> ?" );
			$stmte->bindParam ( 1, $nomeEmpresa, PDO::PARAM_STR );
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
	
	private function cadastrarDados($pdo, $id_contato, $telefone, $celular, $skype){
		try {
			$stmte = $pdo->prepare ( "INSERT INTO contato_dados (telefone, celular, skype, contato_id_contato ) VALUES (:telefone, :celular, :skype, :contato_id_contato)" );
					$stmte->bindParam ( ":telefone", $telefone, PDO::PARAM_STR );
					$stmte->bindParam ( ":celular", $celular, PDO::PARAM_STR );
					$stmte->bindParam ( ":skype", $skype, PDO::PARAM_STR );
					$stmte->bindParam ( ":contato_id_contato", $id_contato, PDO::PARAM_STR );
					$executa = $stmte->execute ();
			if ($executa) {
				echo 'Dados inseridos com sucesso';
					
			} else {
				echo 'Erro ao inserir os dados';
				print_r ( $executa );
			} 
		} catch ( PDOException $e ) {
			echo $e->getMessage ();
		}
	}
	
	private function cadastrarEndereco($pdo, $id_contato, $municipio, $estado, $cep, $complemento, $bairro){
		try {
			$stmte = $pdo->prepare ( "INSERT INTO endereco (municipio, estado, cep, complemento, bairro, contato_id_contato ) VALUES (:municipio, :estado, :cep, :complemento, :bairro, :contato_id_contato)" );
					$stmte->bindParam ( ":municipio", $municipio, PDO::PARAM_STR );
					$stmte->bindParam ( ":estado", $estado, PDO::PARAM_STR );
					$stmte->bindParam ( ":cep", $cep, PDO::PARAM_STR );
					$stmte->bindParam ( ":complemento", $complemento, PDO::PARAM_STR );
					$stmte->bindParam ( ":bairro", $bairro, PDO::PARAM_STR );
					$stmte->bindParam ( ":contato_id_contato", $id_contato, PDO::PARAM_STR );
					$executa = $stmte->execute ();
			if ($executa) {
				echo 'Dados inseridos com sucesso';
					
			} else {
				echo 'Erro ao inserir os dados';
				print_r ( $executa );
			} 
		} catch ( PDOException $e ) {
			echo $e->getMessage ();
		}
	}

	private function editarDadosAdicionais($pdo, $id, $telefone, $celular, $skype, $id_contato_dados){
		try{
			$stmte = $pdo->prepare("UPDATE contato_dados SET telefone=?, celular=?, skype=?, contato_id_contato=? WHERE id_contato_dados =?;");
			$stmte->bindParam(1, $telefone , PDO::PARAM_STR);
			$stmte->bindParam(2, $celular , PDO::PARAM_STR);
			$stmte->bindParam(3, $skype , PDO::PARAM_STR);
			$stmte->bindParam(4, $id, PDO::PARAM_STR);
			$stmte->bindParam(5, $id_contato_dados, PDO::PARAM_STR);
			
			$executa = $stmte->execute();
				
			if($executa){
				echo 'Dados atualizados com sucesso';
			}
			else{
				echo 'Erro ao inserir contato dados !';
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	//verificar o id se vai ser o mesmo do id_endereco
	private function editarDadosDoEndereco($pdo, $id, $municipio, $estado, $cep, $complemento, $bairro, $id_endereco){
		try{
			$stmte = $pdo->prepare("UPDATE endereco SET municipio=?, estado=?, cep=?, complemento=?, bairro=?, contato_id_contato=? WHERE id_endereco =?;");
			$stmte->bindParam(1, $municipio , PDO::PARAM_STR);
			$stmte->bindParam(2, $estado , PDO::PARAM_STR);
			$stmte->bindParam(3, $cep , PDO::PARAM_STR);
			$stmte->bindParam(4, $complemento , PDO::PARAM_STR);
			$stmte->bindParam(5, $bairro , PDO::PARAM_STR);
			$stmte->bindParam(6, $id, PDO::PARAM_STR);
			$stmte->bindParam(7, $id_endereco, PDO::PARAM_STR);
			
			$executa = $stmte->execute();
				
			if($executa){
				echo 'Dados atualizados com sucesso';
			}
			else{
				echo 'Erro ao inserir contato dados !';
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}	
		
	}
	
	private function buscarDados(){
		require_once 'Conection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
		
		$contato = null; 
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM contato left join contato_dados on id_contato = contato_id_contato group by id_contato order by nome;");
			$executa = $stmte->execute (); 
				
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) {
					$contato[$reg->id_contato] = $reg;
				}
			}
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
				
		}
		return $contato;
	}
	
	private function buscarDadosporContato($id_contato){
		require_once '../Conection/conexao.class.php';
		$conec = new conexao ();
		$pdo = new PDO ( "mysql:host=$conec->host;dbname=$conec->dbname", "$conec->usuario", "$conec->senha" );
	
		$contato = null;
		try {
			$stmte = $pdo->prepare ( "SELECT * FROM contato left join contato_dados on id_contato = contato_id_contato where id_contato =? group by id_contato order by telefone LIMIT 1;");
			$stmte->bindParam(1, $id_contato , PDO::PARAM_STR);
			$executa = $stmte->execute ();
	
			if ($executa) {
				while ( $reg = $stmte->fetch ( PDO::FETCH_OBJ ) ) {
					$contato[$reg->id_contato] = $reg;
				}
			}
		} catch ( PDOException $e )  {
			echo $e->getMessage ();
	
		}
		return $contato;
	}
	
	private function ApagarDadosCliente($pdo, $id){
		try{
			$stmte = $pdo->prepare("DELETE FROM contato_dados WHERE id_contato_dados =?;");
		    $stmte->bindParam(1,$id);
				
			$executa = $stmte->execute();
		
			if($executa){
				return true;
			}
			else{
				return false;
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
}