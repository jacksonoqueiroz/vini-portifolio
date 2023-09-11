<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Sobremim
 */
class Sobremim
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditSobreHome'])){
			$editSobre = new \App\adms\Models\AdmsViewSobremimHome();
			if($editSobre->editSobre($this->dadosForm)){
				$urlDestino = URLADM . "view". "#sobre";
				header("Location: $urlDestino");
			}else{
				$this->dados['sobre'] = $this->dadosForm;
				$this->viewSobre();
			}
		}else{
			$this->dadosSobre();
			$this->viewSobre();
		}
		
		
	}

	private function dadosSobre() {
		$viewSobre = new \App\adms\Models\AdmsViewSobremimHome();
		$this->dados['sobre'] = $viewSobre->viewSobre();
	}

	private function viewSobre(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeSobre",$this->dados);
		$carregarView->renderizar();

	}
}