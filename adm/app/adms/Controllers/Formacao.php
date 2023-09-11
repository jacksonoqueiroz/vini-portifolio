<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Formacao
 */
class Formacao
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditFormaHome'])) {
			$editForma = new \App\adms\Models\AdmsViewFormacao();
			if($editForma->editFormacao($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#formacao";
				header("Location: $urlDestino"); 
			}else{
				$this->dados['formacao'] = $this->dadosForm;
				$this->viewFormacao();
			}
		}else{
			$this->dadosFormacao();
			$this->viewFormacao();
		}
	}

	private function dadosFormacao(){
		$viewFormacao = new \App\adms\Models\AdmsViewFormacao();
		$this->dados['formacao'] = $viewFormacao->viewFormacao();
	}

	private function viewFormacao() {
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeFormacao",$this->dados);
		$carregarView->renderizar();
	}
}