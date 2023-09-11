<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class AdmsViewImgTopoLg
 */
class AdmsViewImgTopoLg extends Conn
{
	private object $conn;
	private $dados;

	public function viewImgTopoLg()
	{
			$this->conn = $this->connect();
			$query_home_topo = "SELECT id, imagem_topo FROM homes_topos LIMIT 1";
			$result_home_topo = $this->conn->prepare($query_home_topo);
			$result_home_topo->execute();
			$this->dados = $result_home_topo->fetch();
			return $this->dados;
	}

	public function editImgTopoLg($dados)
	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		
		$query_topo = "UPDATE homes_topos SET imagem_topo=:imagem_topo, modified=NOW() WHERE id=:id";
		$edit_topo = $this->conn->prepare($query_topo);
		$edit_topo->bindParam(':imagem_topo', $this->dados['img_nova']['name']);
		$edit_topo->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_topo->execute();

		if($edit_topo->rowCount()) {
			if($this->upload()){
				$_SESSION['msg'] = '<div class="alert alert-success" role="alert">A imagem para telas maiores do Topo foi editado!</div>';
				return true;
			}else{
				$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">A imagem para telas maiores NÃO foi editado!</div>';
				return false;
			}			
		}else{
			$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">A imagem para telas maiores NÃO foi editado!</div>';
			return false;
		}

	}

	private function upload(){
		//Diretório aonde o arquivo será salvo.
		$diretorio = "app/adms/assets/images/home_topo/";

		if(move_uploaded_file($this->dados['img_nova']['tmp_name'], $diretorio .  $this->dados['img_nova']['name'])){
			$this->apagarImage();
			return true;
		}else{
			return false;
		}
	}

	private function apagarImage(){
		$img_antiga = "app/adms/assets/images/home_topo/" . $this->dados['imagem_topo'];
		unlink($img_antiga);
	}
}