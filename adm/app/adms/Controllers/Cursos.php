<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Cursos
 */
class Cursos
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditCursoHome'])) {
			$editCursos = new \App\adms\Models\AdmsViewCursos();
			if($editCursos->editCursos($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#cursos";
				header("Location: $urlDestino");
			}else{
				$this->dados['cursos'] = $this->dadosForm;
				$this->viewCursos();
			}
		}else{
			$this->dadosCursos();
			$this->viewCursos();
		}		
		
	}

	private function dadosCursos(){
		$viewCursos = new \App\adms\Models\AdmsViewCursos();
		$this->dados['cursos'] = $viewCursos->viewCursos();
	}

	private function viewCursos(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeCursos",$this->dados);
		$carregarView->renderizar();
	}
}