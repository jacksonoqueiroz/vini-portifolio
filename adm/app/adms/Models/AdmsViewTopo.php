<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class AdmsViewTopo
 */
class AdmsViewTopo extends Conn
{
	private object $conn;
	private $dados;

	public function viewTopo()
	{
			$this->conn = $this->connect();
			$query_home_topo = "SELECT id, titulo_topo, frase, autor_frase FROM homes_topos LIMIT 1";
			$result_home_topo = $this->conn->prepare($query_home_topo);
			$result_home_topo->execute();
			$this->dados = $result_home_topo->fetch();
			return $this->dados;
	}

	public function editTopo($dados)
	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_topo = "UPDATE homes_topos SET titulo_topo=:titulo_topo, frase=:frase, autor_frase=:autor_frase, modified=NOW() WHERE id=:id";
		$edit_topo = $this->conn->prepare($query_topo);
		$edit_topo->bindParam(':titulo_topo', $this->dados['titulo_topo']);
		$edit_topo->bindParam(':frase', $this->dados['frase']);
		$edit_topo->bindParam(':autor_frase', $this->dados['autor_frase']);
		$edit_topo->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_topo->execute();

		if($edit_topo->rowCount()) {
			$_SESSION['msg'] = '<div class="alert alert-success" role="alert">O Conteúdo do Topo página home foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">O conteúdo do topo não foi editado!</div>';
			return false;
		}

	}
}