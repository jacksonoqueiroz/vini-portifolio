<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Topoimglg
 */
class Topoimglg
{
	private $dados;
	private $dadosForm;

	public function index(){
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditTopoImgLg'])){
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova'] : null);
			$editImgTopo = new \App\adms\Models\AdmsViewImgTopoLg();
			if($editImgTopo->editImgTopoLg($this->dadosForm)){
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
		$viewTopo = new \App\adms\Models\AdmsViewImgTopoLg;
		$this->dados['topo'] = $viewTopo->viewImgTopoLg();
	}

	private function viewTopo(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeImgTopoLg",$this->dados);
		$carregarView->renderizar();
	}
}