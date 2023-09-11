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
class AdmsViewCompetencias extends Conn
{
	private object $conn;
	private $dados;

	public function viewCompetencias()	{
			$this->conn = $this->connect();
			$query_home_comp = "SELECT id, titulo_competencia, desc_comp_1, desc_comp_2, desc_comp_3, desc_comp_4, desc_comp_5 FROM homes_competencias LIMIT 1";
			$result_home_comp = $this->conn->prepare($query_home_comp);
			$result_home_comp->execute();
			$this->dados = $result_home_comp->fetch();
			return $this->dados;
	}

	public function editCompetencias($dados)	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_comp = "UPDATE homes_competencias SET titulo_competencia=:titulo_competencia, desc_comp_1=:desc_comp_1, desc_comp_2=:desc_comp_2, desc_comp_3=:desc_comp_3, desc_comp_4=:desc_comp_4, desc_comp_5=:desc_comp_5, modified=NOW() WHERE id=:id";
		$edit_comp = $this->conn->prepare($query_comp);
		$edit_comp->bindParam(':titulo_competencia', $this->dados['titulo_competencia']);
		$edit_comp->bindParam(':desc_comp_1', $this->dados['desc_comp_1']);
		$edit_comp->bindParam(':desc_comp_2', $this->dados['desc_comp_2']);
		$edit_comp->bindParam(':desc_comp_3', $this->dados['desc_comp_3']);
		$edit_comp->bindParam(':desc_comp_4', $this->dados['desc_comp_4']);
		$edit_comp->bindParam(':desc_comp_5', $this->dados['desc_comp_5']);
		$edit_comp->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_comp->execute();
		if ($edit_comp->rowCount()) {			
			$_SESSION['msg_comp'] = '<div class="alert alert-success" role="alert">O Conteúdo das Competências Pessoais foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_comp'] = '<div class="alert alert-success" role="alert">O Conteúdo das Competências Pessoais NÃO foi editado!</div>';
			return false;
		}

	}
	
}