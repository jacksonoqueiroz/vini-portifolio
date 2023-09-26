<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Galprof2
 */
class Galprof2
{
	private $dados;
	private $dadosForm;

	public function index()
	{

		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($this->dadosForm['EditGal2'])){
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova'] : null);
			$editGaleriaProf = new \App\adms\Models\AdmsViewGalprof2();
			if($editGaleriaProf->editGaleriaProf($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#galerias";
				header("Location: $urlDestino");
			}else{
				$this->dadosGaleriaProf();
				$this->editGaleriaProf();
			}
			$this->dadosGaleriaProf();
			$this->editGaleriaProf();
		}else{
			$this->dadosGaleriaProf();
			$this->editGaleriaProf();
		}		
		
		
	}

	private function dadosGaleriaProf(){
		$viewGal2 = new \App\adms\Models\AdmsViewGalprof2();
		$this->dados['galerias'] = $viewGal2->viewGaleriaProf();
	}

	private function editGaleriaProf(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgGal2ProfHome",$this->dados);
		$carregarView->renderizar();
	}
}