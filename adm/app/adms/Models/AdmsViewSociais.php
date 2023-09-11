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
class AdmsViewSociais extends Conn
{
	private object $conn;
	private $dados;

	public function viewSociais()
	{
			$this->conn = $this->connect();
			$query_home_sociais = "SELECT id, titulo_sociais, icone_sociais_1, link_sociais_1, icone_sociais_2, link_sociais_2, icone_sociais_3, link_sociais_3, icone_sociais_4, link_sociais_4 FROM homes_sociais LIMIT 1";
			$result_home_sociais = $this->conn->prepare($query_home_sociais);
			$result_home_sociais->execute();
			$this->dados = $result_home_sociais->fetch();
			return $this->dados;
	}

	public function editSociais($dados){
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_sociais = "UPDATE homes_sociais SET titulo_sociais=:titulo_sociais, icone_sociais_1=:icone_sociais_1, link_sociais_1=:link_sociais_1, icone_sociais_2=:icone_sociais_2, link_sociais_2=:link_sociais_2, icone_sociais_3=:icone_sociais_3, link_sociais_3=:link_sociais_3, icone_sociais_4=:icone_sociais_4, link_sociais_4=:link_sociais_4, modified=NOW() WHERE id=:id";
		$edit_sociais = $this->conn->prepare($query_sociais);
		$edit_sociais->bindParam(':titulo_sociais', $this->dados['titulo_sociais']);
		$edit_sociais->bindParam(':icone_sociais_1', $this->dados['icone_sociais_1']);
		$edit_sociais->bindParam(':link_sociais_1', $this->dados['link_sociais_1']);
		$edit_sociais->bindParam(':icone_sociais_2', $this->dados['icone_sociais_2']);
		$edit_sociais->bindParam(':link_sociais_2', $this->dados['link_sociais_2']);
		$edit_sociais->bindParam(':icone_sociais_3', $this->dados['icone_sociais_3']);
		$edit_sociais->bindParam(':link_sociais_3', $this->dados['link_sociais_3']);
		$edit_sociais->bindParam(':icone_sociais_4', $this->dados['icone_sociais_4']);
		$edit_sociais->bindParam(':link_sociais_4', $this->dados['link_sociais_4']);
		$edit_sociais->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_sociais->execute();

		if ($edit_sociais->rowCount()) {
			$_SESSION['msg_sociais'] = '<div class="alert alert-success" role="alert">O Conteúdo da Redes Sociais foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_sociais'] = '<div class="alert alert-success" role="alert">O Conteúdo da Redes Sociais NÃO foi editado!</div>';
			return false;
		}

	}

		
	
}