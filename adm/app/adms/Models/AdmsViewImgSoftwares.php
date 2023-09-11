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
class AdmsViewImgSoftwares extends Conn
{
	private object $conn;
	private $dados;

	public function viewImgSoft()
	{
			$this->conn = $this->connect();
			$query_home_soft = "SELECT id, icone_soft_1, icone_soft_2, icone_soft_3 FROM  homes_sotwares LIMIT 1";
			$result_home_soft = $this->conn->prepare($query_home_soft);
			$result_home_soft->execute();
			$this->dados = $result_home_soft->fetch();
			return $this->dados;
	}

	public function editImgSoft($dados){
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_soft = "UPDATE homes_sotwares SET icone_soft_1=:icone_soft_1, modified=NOW() WHERE id=:id";
		$edit_soft = $this->conn->prepare($query_soft);
		$edit_soft->bindParam(':icone_soft_1', $this->dados['img_nova']['name']);
		$edit_soft->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_soft->execute();

		if ($edit_soft->rowCount()) {
			if ($this->upload()) {
				$_SESSION['msg_soft'] = '<div class="alert alert-success" role="alert">A imagem da Ferramenta 1 foi editado!</div>';
				return true;
			}else{
				$_SESSION['msg_soft'] = '<div class="alert alert-danger" role="alert">A imagem da Ferramenta 1 NÃO foi editado!!</div>';
				return false;
			}		
			
		}else{
			$_SESSION['msg_soft'] = '<div class="alert alert-danger" role="alert">A imagem da Ferramenta 1 NÃO foi editado!!</div>';
			return false;
		}

	}

	private function upload(){
		//Diretório onde o arquivo será salvo
		$diretorio = "app/adms/assets/images/icons_tools/";

		if(move_uploaded_file($this->dados['img_nova']['tmp_name'], $diretorio . $this->dados['img_nova']['name'])) {
			$this->apagarImagem();
			return true;
		}else{
			return false;
		}
	}

	private function apagarImagem(){
		$img_antiga = "app/adms/assets/images/icons_tools/" . $this->dados['icone_soft_1'];
		unlink($img_antiga);
	}

	
	
}