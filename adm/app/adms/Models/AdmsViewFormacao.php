<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class
 */
class AdmsViewFormacao extends Conn
{
	private object $conn;
	private $dados;

	public function viewFormacao()	{
			$this->conn = $this->connect();
			$query_home_formacao = "SELECT id, titulo_formacao, ano_1, curso_1, ano_2, curso_2, ano_3, curso_3, ano_4, curso_4 FROM homes_formacao LIMIT 1";
			$result_home_formacao = $this->conn->prepare($query_home_formacao);
			$result_home_formacao->execute();
			$this->dados = $result_home_formacao->fetch();
			return $this->dados;
	}

	public function editFormacao($dados)	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_comp = "UPDATE homes_formacao SET titulo_formacao=:titulo_formacao, ano_1=:ano_1, curso_1=:curso_1, ano_2=:ano_2, curso_2=:curso_2, ano_3=:ano_3, curso_3=:curso_3, ano_4=:ano_4, curso_4=:curso_4, modified=NOW() WHERE id=:id";
		$edit_comp = $this->conn->prepare($query_comp);
		$edit_comp->bindParam(':titulo_formacao', $this->dados['titulo_formacao']);
		$edit_comp->bindParam(':ano_1', $this->dados['ano_1']);
		$edit_comp->bindParam(':curso_1', $this->dados['curso_1']);
		$edit_comp->bindParam(':ano_2', $this->dados['ano_2']);
		$edit_comp->bindParam(':curso_2', $this->dados['curso_2']);
		$edit_comp->bindParam(':ano_3', $this->dados['ano_3']);
		$edit_comp->bindParam(':curso_3', $this->dados['curso_3']);
		$edit_comp->bindParam(':ano_4', $this->dados['ano_4']);
		$edit_comp->bindParam(':curso_4', $this->dados['curso_4']);
		$edit_comp->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_comp->execute();
		if ($edit_comp->rowCount()) {			
			$_SESSION['msg_forma'] = '<div class="alert alert-success" role="alert">O Conteúdo da Formação foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_forma'] = '<div class="alert alert-success" role="alert">O Conteúdo da Formação NÃO foi editado!</div>';
			return false;
		}

	}
	
}