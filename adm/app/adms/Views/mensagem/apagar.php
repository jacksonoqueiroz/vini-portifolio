<?php
ob_start();
include_once 'conexao.php';

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
echo "<pre>";
var_dump($id);
echo "</pre>";

if(empty($id)){
	$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Registro não encontrado!</div>';
    header('Location:' .  URLADM . 'mensagem');
    exit();
}

$query_msm = "SELECT id FROM msgs_contatos WHERE id = $id LIMIT 1";
$result_msm = $conn->prepare($query_msm);
$result_msm->execute();

if (($result_msm) AND ($result_msm->rowCount() != 0)) {
	$query_del_msm = "DELETE FROM msgs_contatos WHERE id = $id";
	$apagar_msm = $conn->prepare($query_del_msm);
	
	if($apagar_msm->execute()){
		$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Registro Foi excluído!</div>';
		header('Location:' .  URLADM . 'mensagem');
	}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Registro NÃO Foi excluído!</div>';
		header('Location:' .  URLADM . 'mensagem');
	}
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Registro NÃO encontrado!</div>';
    header('Location:' .  URLADM . 'mensagem');
}