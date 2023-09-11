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
class AdmsViewImgSobre extends Conn
{
	private object $conn;
	private $dados;

	public function viewImgSobre()	{
			$this->conn = $this->connect();			
			$query_home_sobre = "SELECT id, imagem_sobre FROM  homes_sobre LIMIT 1";
			$result_home_sobre = $this->conn->prepare($query_home_sobre);
			$result_home_sobre->execute();
			$this->dados = $result_home_sobre->fetch();
			return $this->dados;
	}

	public function editImgSobre($dados)	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_sobre = "UPDATE homes_sobre SET imagem_sobre=:imagem_sobre, modified=NOW() WHERE id=:id";
		$edit_sobre = $this->conn->prepare($query_sobre);
		$edit_sobre->bindParam(':imagem_sobre', $this->dados['img_nova']['name']);
		$edit_sobre->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_sobre->execute();

		if ($edit_sobre->rowCount()) {
			if($this->upload()){
				$_SESSION['msgsobre'] = '<div class="alert alert-success" role="alert">A imagem Sobre mim foi editado!</div>';
				return true;
			}else{
				$_SESSION['msgsobre'] = '<div class="alert alert-danger" role="alert">A imagem Sobre mim NÃO foi editado!</div>';
				return false;
			}

		}else{
			$_SESSION['msgsobre'] = '<div class="alert alert-danger" role="alert">A imagem Sobre mim NÃO foi editado!</div>';
			return false;
		}
	}

	private function upload(){
		//Diretório aonde o arquivo será salvo
		$diretorio = "app/adms/assets/images/home_sobre/";

		if (move_uploaded_file($this->dados['img_nova']['tmp_name'], $diretorio . $this->dados['img_nova']['name'])) {
			$this->apagarImagem();
			return true;
		}else{
			return true;
		}
	}

	private function apagarImagem(){
		$img_antiga = "app/adms/assets/images/home_sobre/" . $this->dados['imagem_sobre'];
		unlink($img_antiga);
	}
	
}