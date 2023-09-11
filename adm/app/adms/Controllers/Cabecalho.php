<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Cabeçalho do site
 */
class Cabecalho
{
	private $dados;
	private $dadosForm;

	public function index()
	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditTopoCabecalho'])){
			$editCabecalho = new \App\adms\Models\AdmsViewCabecalho();
			if($editCabecalho->editCabecalho($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#cabecalho";
				header("Location: $urlDestino");
			}else{
				$this->dados['cabecalho'] = $this->dadosForm;
				$this->viewCabecalho();
			}
		}else{
			$this->dadosCabecalho();
			$this->viewCabecalho();
		}
	

	}

	private function dadosCabecalho()
	{
		$viewCabecalho = new \App\adms\Models\AdmsViewCabecalho;
		$this->dados['cabecalho'] = $viewCabecalho->viewCabecalho();
	}

	private function viewCabecalho()
	{
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeCabecalho",$this->dados);
		$carregarView->renderizar();
	}
}