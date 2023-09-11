<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Softwares
 */
class Softwares
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditSoftHome'])) {
			$editSoft = new \App\adms\Models\AdmsViewSoftwares();
			if($editSoft->editSoft($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#softwares";
				header("Location: $urlDestino");
			}else{
				$this->dados['softwares'] = $this->dadosForm;
				$this->viewSoft();
			}
		}else{
			$this->dadosSoft();
			$this->viewSoft();
		}		
		
	}

	private function dadosSoft(){
		$viewSoft = new \App\adms\Models\AdmsViewSoftwares();
		$this->dados['softwares'] = $viewSoft->viewSoft();
	}

	private function viewSoft(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeSoftwares",$this->dados);
		$carregarView->renderizar();
	}
}