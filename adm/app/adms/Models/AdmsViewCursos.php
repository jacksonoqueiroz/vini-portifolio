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
class AdmsViewCursos extends Conn
{
	private object $conn;
	private $dados;

	public function viewCursos()
	{
			$this->conn = $this->connect();
			$query_home_cursos = "SELECT id, titulo_curso, desc_curso_1, desc_curso_2, desc_curso_3, desc_curso_4, desc_curso_5 FROM homes_cursos LIMIT 1";
			$result_home_cursos = $this->conn->prepare($query_home_cursos);
			$result_home_cursos->execute();
			$this->dados = $result_home_cursos->fetch();
			return $this->dados;
	}

	public function editCursos($dados) {
		$this->dados = $dados;
		$this->conn = $this->connect();
		$query_cursos = "UPDATE homes_cursos SET titulo_curso=:titulo_curso, desc_curso_1=:desc_curso_1, desc_curso_2=:desc_curso_2, desc_curso_3=:desc_curso_3, desc_curso_4=:desc_curso_4, desc_curso_5=:desc_curso_5, modified=NOW() WHERE id=:id";
		$edit_cursos = $this->conn->prepare($query_cursos);
		$edit_cursos->bindParam(':titulo_curso', $this->dados['titulo_curso']);
		$edit_cursos->bindParam(':desc_curso_1', $this->dados['desc_curso_1']);
		$edit_cursos->bindParam(':desc_curso_2', $this->dados['desc_curso_2']);
		$edit_cursos->bindParam(':desc_curso_3', $this->dados['desc_curso_3']);
		$edit_cursos->bindParam(':desc_curso_4', $this->dados['desc_curso_4']);
		$edit_cursos->bindParam(':desc_curso_5', $this->dados['desc_curso_5']);
		$edit_cursos->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
		$edit_cursos->execute();

		if ($edit_cursos->rowCount()) {
			$_SESSION['msg_cursos'] = '<div class="alert alert-success" role="alert">O Conteúdo do Cursos Extras foi editado!</div>';
			return true;
		}else{
			$_SESSION['msg_cursos'] = '<div class="alert alert-success" role="alert">Erro: O Conteúdo do Curso Extra NÃO foi editado!</div>';
			return false;
		}
	}

	
	
}