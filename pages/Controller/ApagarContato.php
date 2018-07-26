<?php
session_start ();
require_once '../Model/contato.class.php';

$id = $_POST ['apagar'];


$cadastrar = new contato ();
if (! empty ( $id )) {
	
	echo $cadastrar->ApagarDados($id);
}

?>