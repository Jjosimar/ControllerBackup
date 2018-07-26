<?php
if (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 1) {
	
	require_once '../Model/cadPerguntas.class.php';
	
	$buscar = new cadPerguntas ();
	$buscar->buscarPerguntaPeloId($id_contato);
	
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 2) {
	
	if ($_POST ['descricao']){
        echo "ja cadastrado";
        header ( "Location: ../cadperguntas.php" );

    }else{
            
        $descricao = $_POST ['descricao'];
               
        require_once '../Model/cadPerguntas.class.php';
        
        $cadastrar = new cadPerguntas ();
        $cadastrar->cadastrarPergunta($descricao);
        print_r ( $_REQUEST );
        header ( "Location: ../agenda.php" );
    }
} elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 3) {
	
	if (empty ( $_POST ['nome'] ) || empty ( $_POST ['email'] ))
		header ( "Location: index.php" );
	
	$id = $_POST ['id'];
	$descricao = $_POST ['descricao'];
	$id_contato_dados = $_POST['id_contato_dados'];
		
	require_once '../Model/cadPerguntas.class.php';
	
	$editar = new cadPerguntas ();
	$editar->editar($id, $descricao, $id_contato_dados);
	header ( "Location: ../cadpergunta.php" );
	
}elseif (! empty ( $_POST ['tipo'] ) && $_POST ['tipo'] == 4) {
	if (empty ( $_POST ['apagar'] ))
		header ( "Location: ../index.php" );
	
		require_once '../Model/cadPerguntas.class.php';
		
		$id = $_POST ['apagar'];
				
		$cadastrar = new cadPerguntas ();
		if (! empty ( $id )) {
		
			echo $cadastrar->ApagarDados($id);
		}
		
		
}

?>


?>