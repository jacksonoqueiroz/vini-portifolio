<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Class
 */
class AdmsViewGalerias extends Conn
{
	private object $conn;
	private $dados;

	public function viewGalerias()
	{
			$this->conn = $this->connect();
			$query_galeria = "SELECT id, titulo_gal_prof, desc_gal_prof_1, desc_gal_prof_2,  desc_gal_prof_3, desc_gal_prof_4, desc_gal_prof_5, desc_gal_prof_6 FROM galeria_profissional";
			$result_galeria = $this->conn->prepare($query_galeria);
			$result_galeria->execute();
			$this->dados = $result_galeria->fetch();
			return $this->dados;
	}

	public function editGalerias($dados) {
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_galeria ="UPDATE galeria_profissional SET titulo_gal_prof=:titulo_gal_prof, desc_gal_prof_1=:desc_gal_prof_1, desc_gal_prof_2=:desc_gal_prof_2, desc_gal_prof_3=:desc_gal_prof_3, desc_gal_prof_4=:desc_gal_prof_4, desc_gal_prof_5=:desc_gal_prof_5, desc_gal_prof_6=:desc_gal_prof_6, modified=NOW() WHERE id=:id";
		$edit_galeria = $this->conn->prepare($query_galeria);
		$edit_galeria->bindParam(':titulo_gal_prof', $this->dados['titulo_gal_prof']);
		$edit_galeria->bindParam(':desc_gal_prof_1', $this->dados['desc_gal_prof_1']);
		$edit_galeria->bindParam(':desc_gal_prof_2', $this->dados['desc_gal_prof_2']);
		$edit_galeria->bindParam(':desc_gal_prof_3', $this->dados['desc_gal_prof_3']);
		$edit_galeria->bindParam(':desc_gal_prof_4', $this->dados['desc_gal_prof_4']);
		$edit_galeria->bindParam(':desc_gal_prof_5', $this->dados['desc_gal_prof_5']);
		$edit_galeria->bindParam(':desc_gal_prof_6', $this->dados['desc_gal_prof_6']);
		$edit_galeria->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_galeria->execute();

		if ($edit_galeria->rowCount()) {
			$_SESSION['msg_galerias'] = '<div class="alert alert-success" role="alert">O Conteúdo da Galeria Profissional foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_galerias'] = '<div class="alert alert-success" role="alert">Erro: O Conteúdo dda Galeria Profissional NÃO foi editado!</div>';
			return false;
		}
	}
	
	
}
