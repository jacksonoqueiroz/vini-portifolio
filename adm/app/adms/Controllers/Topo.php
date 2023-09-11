<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Topo
 */
class Topo
{
	private $dados;
	private $dadosForm;

	public function index()
	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditTopoHome'])){
			$editTopo = new \App\adms\Models\AdmsViewTopo();
			if($editTopo->editTopo($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#topo";
				header("Location: $urlDestino");
			}else{
				$this->dados['topo'] = $this->dadosForm;
			}
		}else{
			$this->viewTopo();
		}		
		
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeTopo",$this->dados);
		$carregarView->renderizar();
	}

	private function viewTopo(){
		$viewTopo = new \App\adms\Models\AdmsViewTopo();
		$this->dados['topo'] = $viewTopo->viewTopo();
	}
}