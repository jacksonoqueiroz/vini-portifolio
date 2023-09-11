<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class AdmsViewFavicon
 */
class AdmsViewFavicon extends Conn
{
	private object $conn;
	private $dados;

	public function viewImgCabecalho()
	{
			$this->conn = $this->connect();
			$query_cabecalho = "SELECT id, img_favicon FROM homes_cabecalho LIMIT 1";
			$result_cabecalho = $this->conn->prepare($query_cabecalho);
			$result_cabecalho->execute();
			$this->dados = $result_cabecalho->fetch();
			return $this->dados;
	}

	public function editImgCabecalho($dados)
	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		
		$query_cabecalho = "UPDATE homes_cabecalho SET img_favicon=:img_favicon, modified=NOW() WHERE id=:id";
		$edit_cabecalho = $this->conn->prepare($query_cabecalho);
		$edit_cabecalho->bindParam(':img_favicon', $this->dados['img_nova']['name']);
		$edit_cabecalho->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_cabecalho->execute();

		if($edit_cabecalho->rowCount()) {
			if($this->upload()){
				$_SESSION['msg_cabecalho'] = '<div class="alert alert-success" role="alert">Imagem do icone do site foi editado!</div>';
				return true;
			}
			
		}else{			
			$_SESSION['msg_cabecalho'] = '<div class="alert alert-danger" role="alert">Imagem do icone do site não foi editado!</div>';
			return false;
		}
	}

	private function upload(){
		//Diretório onde o arquivo será salvo
		$diretorio = "app/adms/assets/images/icone/";

		if(move_uploaded_file($this->dados['img_nova']['tmp_name'], $diretorio . $this->dados['img_nova']['name'])){
			$this->apagarImagem();
			return true;
		}else{
			return false;
		}	
	}

	private function apagarImagem(){
		$img_antiga = "app/adms/assets/images/icone/" . $this->dados['img_favicon'];
		unlink($img_antiga);
	}

	
}