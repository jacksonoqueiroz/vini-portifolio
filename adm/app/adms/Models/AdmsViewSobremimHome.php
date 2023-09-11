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
class AdmsViewSobremimHome extends Conn
{
	private object $conn;
	private $dados;

	public function viewSobre()	{
			$this->conn = $this->connect();			
			$query_home_sobre = "SELECT id, titulo_sobre, nome, descric_sobre, imagem_sobre, criado_em FROM  homes_sobre LIMIT 1";
			$result_home_sobre = $this->conn->prepare($query_home_sobre);
			$result_home_sobre->execute();
			$this->dados = $result_home_sobre->fetch();
			return $this->dados;
	}

	public function editSobre($dados)	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_sobre = "UPDATE homes_sobre SET titulo_sobre=:titulo_sobre, nome=:nome, descric_sobre=:descric_sobre, criado_em=:criado_em, modified=NOW() WHERE id=:id";
		$edit_sobre = $this->conn->prepare($query_sobre);
		$edit_sobre->bindParam(':titulo_sobre', $this->dados['titulo_sobre']);
		$edit_sobre->bindParam(':nome', $this->dados['nome']);
		$edit_sobre->bindParam(':descric_sobre', $this->dados['descric_sobre']);
		$edit_sobre->bindParam(':criado_em', $this->dados['criado_em']);
		$edit_sobre->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_sobre->execute();

		if ($edit_sobre->rowCount()) {
			$_SESSION['msgsobre'] = '<div class="alert alert-success" role="alert">O Conteúdo Sobre mim foi editado!</div>';
			return true;
		}else{
			$_SESSION['msgsobre'] = '<div class="alert alert-danger" role="alert">O Conteúdo Sobre mim NÃO foi editado!</div>';
			return false;
		}
	}
	
}