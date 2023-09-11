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
			$query_galeria = "SELECT titulo_gal_prof, desc_gal_prof_1, desc_gal_prof_2,  desc_gal_prof_3, desc_gal_prof_4,  desc_gal_prof_5, desc_gal_prof_6 FROM galeria_profissional";
			$result_galeria = $this->conn->prepare($query_galeria);
			$result_galeria->execute();
			$this->dados = $result_galeria->fetch();
			return $this->dados;
	}
	
	
}