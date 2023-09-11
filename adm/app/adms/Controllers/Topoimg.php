<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Topoimg
 */
class Topoimg
{
	private $dados;
	private $dadosForm;

	public function index(){
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);		
		if (!empty($this->dadosForm['EditTopoImg'])) {
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova'] : null);
			
			$editImgTopo = new \App\adms\Models\AdmsViewImgTopo();
			if($editImgTopo->editImgTopo($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#topo";
				header("Location: $urlDestino");
			}else{
				$this->dadosTopo();
				$this->viewTopo();
			}
			$this->dadosTopo();
			$this->viewTopo();
		}else{
			$this->dadosTopo();
			$this->viewTopo();
		}		
		
		
	}

	private function dadosTopo(){
		$viewTopo = new \App\adms\Models\AdmsViewImgTopo;
		$this->dados['topo'] = $viewTopo->viewImgTopo();
	}

	private function viewTopo(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeImgTopo",$this->dados);
		$carregarView->renderizar();
	}
}