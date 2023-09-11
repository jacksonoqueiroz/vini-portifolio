<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}


/**
 * View
 */
class Sociais
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditSociaisHome'])) {
			$editSociais = new \App\adms\Models\AdmsViewSociais();
			if($editSociais->editSociais($this->dadosForm)) {
				$urlDestino = URLADM . "view" . "#sociais";
				header("Location: $urlDestino");
			}else{
				$this->dados['sociais'] = $this->dadosForm;
				$this->viewSociais();
			}
		}else{
			$this->dadosSociais();
			$this->viewSociais();
		}

	}

	private function dadosSociais(){
		$viewSociais = new \App\adms\Models\AdmsViewSociais();
		$this->dados['sociais'] = $viewSociais->viewSociais();
	}

	private function viewSociais(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeSociais",$this->dados);
		$carregarView->renderizar();
	}
}