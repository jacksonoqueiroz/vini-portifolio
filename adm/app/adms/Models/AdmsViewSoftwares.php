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
class AdmsViewSoftwares extends Conn
{
	private object $conn;
	private $dados;

	public function viewSoft()
	{
			$this->conn = $this->connect();
			$query_home_soft = "SELECT id, titulo_softwares, icone_soft_1, desc_soft_1, icone_soft_2, desc_soft_2, icone_soft_3, desc_soft_3, icone_soft_4, desc_soft_4 FROM  homes_sotwares LIMIT 1";
			$result_home_soft = $this->conn->prepare($query_home_soft);
			$result_home_soft->execute();
			$this->dados = $result_home_soft->fetch();
			return $this->dados;
	}

	public function editSoft($dados){
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_soft = "UPDATE homes_sotwares SET titulo_softwares=:titulo_softwares, desc_soft_1=:desc_soft_1, desc_soft_2=:desc_soft_2, desc_soft_3=:desc_soft_3, desc_soft_4=:desc_soft_4, modified=NOW() WHERE id=:id";
		$edit_soft = $this->conn->prepare($query_soft);
		$edit_soft->bindParam(':titulo_softwares', $this->dados['titulo_softwares']);
		$edit_soft->bindParam(':desc_soft_1', $this->dados['desc_soft_1']);
		$edit_soft->bindParam(':desc_soft_2', $this->dados['desc_soft_2']);
		$edit_soft->bindParam(':desc_soft_3', $this->dados['desc_soft_3']);
		$edit_soft->bindParam(':desc_soft_4', $this->dados['desc_soft_4']);
		$edit_soft->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_soft->execute();

		if ($edit_soft->rowCount()) {
			$_SESSION['msg_soft'] = '<div class="alert alert-success" role="alert">O Conteúdo das Ferramentas foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_soft'] = '<div class="alert alert-danger" role="alert">O Conteúdo das Ferramentas NÃO foi editado!</div>';
			return false;
		}


	}

	
	
}