<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class AdmsViewGalprof3
 */
class AdmsViewGalprof3 extends Conn
{
	private object $conn;
	private $dados;

	public function viewGaleriaProf(){
			$this->conn = $this->connect();
			$query_galeria_profissional = "SELECT id, img_gal_prof_1, img_gal_prof_2, img_gal_prof_3, img_gal_prof_4, img_gal_prof_5, img_gal_prof_6 FROM galeria_profissional";
			$result_galeria_profissional = $this->conn->prepare($query_galeria_profissional);
			$result_galeria_profissional->execute();
			$this->dados = $result_galeria_profissional->fetch();
			return $this->dados;
	}
	public function editGaleriaProf($dados)
	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_gal3 = "UPDATE galeria_profissional SET img_gal_prof_3=:img_gal_prof_3, modified=NOW() WHERE id=:id";
		$edit_gal3 = $this->conn->prepare($query_gal3);
		$edit_gal3->bindParam(':img_gal_prof_3', $this->dados['img_nova']['name']);
		$edit_gal3->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_gal3->execute();

		if($edit_gal3->rowCount()) {
			if ($this->upload()) {
				$_SESSION['msg_galerias'] = '<div class="alert alert-success" role="alert">A imagem 3 da galeria profissional foi editado!</div>';
				return true;
			}else{
				$_SESSION['msg_galerias'] = '<div class="alert alert-danger" role="alert"A imagem 3 da galeria profissional NÃO foi editado!</div>';
				return false;
			}
			
		}else{
			$_SESSION['msg_galerias'] = '<div class="alert alert-danger" role="alert"A imagem 3 da galeria profissional NÃO foi editado!</div>';
			return false;
		}

	}
	private function upload(){
		//Diretório onde o arquivo será salvo
		$diretorio = "app/adms/assets/images/galeria/";

		if (move_uploaded_file($this->dados['img_nova']['tmp_name'], $diretorio . $this->dados['img_nova']['name'])) {
			$this->apagarImagem();
			return true;
		}else{
			return false;
		}
	}
	private function apagarImagem(){
		$img_antiga = "app/adms/assets/images/galeria/" . $this->dados['img_gal_prof_3'];
		unlink($img_antiga);
	}
}