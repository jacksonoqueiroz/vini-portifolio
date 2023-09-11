<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Softimg4
 */
class Softimg4
{
	private $dados;
	private $dadosForm;

	public function index()	{

		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditSoftImg4'])){
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova'] : null);
			$editImgSoft = new \App\adms\Models\AdmsViewImgSoftwares4();
			if($editImgSoft->editImgSoft($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#softwares";
				header("Location: $urlDestino");
			}else{
				$this->dadosSoft();
				$this->viewSoft();
			}
			$this->dadosSoft();
			$this->viewSoft();
		}else{
			$this->dadosSoft();
			$this->viewSoft();
		}		
		
		
	}

	private function dadosSoft(){
		$viewSoft = new \App\adms\Models\AdmsViewImgSoftwares4();
		$this->dados['soft'] = $viewSoft->viewImgSoft();
	}

	private function viewSoft(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeImgSoftwares4",$this->dados);
		$carregarView->renderizar();
	}
}