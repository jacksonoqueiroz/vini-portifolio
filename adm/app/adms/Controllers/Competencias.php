<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Competencias
 */
class Competencias
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditCompHome'])) {
			$editComp = new \App\adms\Models\AdmsViewCompetencias();
			if($editComp->editCompetencias($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#competencias";
				header("Location: $urlDestino"); 
			}else{
				$this->dados['competencias'] = $this->dadosForm;
				$this->viewCompetencias();
			}
		}else{
			$this->dadosCompetencias();
			$this->viewCompetencias();
		}
	}

	private function dadosCompetencias(){
		$viewCompetencias = new \App\adms\Models\AdmsViewCompetencias();
		$this->dados['competencias'] = $viewCompetencias->viewCompetencias();
	}

	private function viewCompetencias() {
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeCompetencias",$this->dados);
		$carregarView->renderizar();
	}
}