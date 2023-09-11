<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Sobreimg
 */
class Sobreimg
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditSobreImg'])){
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova'] : null);
			$editImgSobre = new \App\adms\Models\AdmsViewImgSobre();
			if($editImgSobre->editImgSobre($this->dadosForm)){
				$urlDestino = URLADM . "view". "#sobre";
				header("Location: $urlDestino");
			}else{
				$this->dadosSobre();
				$this->viewSobre();
			}
			$this->dadosSobre();
			$this->viewSobre();
		}else{
			$this->dadosSobre();
			$this->viewSobre();
		}
		
		
	}

	private function dadosSobre() {
		$viewSobre = new \App\adms\Models\AdmsViewImgSobre();
		$this->dados['sobre'] = $viewSobre->viewImgSobre();
	}

	private function viewSobre(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeImgSobre",$this->dados);
		$carregarView->renderizar();

	}
}