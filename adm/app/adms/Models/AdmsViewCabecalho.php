<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Class AdmsViewCabecalho
 */
class AdmsViewCabecalho extends Conn
{
	private object $conn;
	private $dados;

	public function viewCabecalho()
	{
			$this->conn = $this->connect();
			$query_cabecalho = "SELECT id, titulo_pagina, img_favicon FROM homes_cabecalho LIMIT 1";
			$result_cabecalho = $this->conn->prepare($query_cabecalho);
			$result_cabecalho->execute();
			$this->dados = $result_cabecalho->fetch();
			return $this->dados;
	}

	public function editCabecalho($dados)
	{
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_cabecalho = "UPDATE homes_cabecalho SET titulo_pagina=:titulo_pagina, modified=NOW() WHERE id=:id";
		$edit_cabecalho = $this->conn->prepare($query_cabecalho);
		$edit_cabecalho->bindParam(':titulo_pagina', $this->dados['titulo_pagina']);
		$edit_cabecalho->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_cabecalho->execute();

		if($edit_cabecalho->rowCount()) {
			$_SESSION['msg_cabecalho'] = '<div class="alert alert-success" role="alert">Cabeçalho editado com sucesso!</div>';
			return true;
		}else{
			$_SESSION['msg_cabecalho'] = '<div class="alert alert-danger" role="alert">Cabeçalho não foi editado!</div>';
			return false;
		}
	}

	
}