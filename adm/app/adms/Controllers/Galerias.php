<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * View
 */
class Galerias
{
	private $dados;
	private $dadosForm;

	public function index()	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if (!empty($this->dadosForm['EditGaleriaHome'])) {
			$editGaleria = new \App\adms\Models\AdmsViewGalerias();
			if($editGaleria->editGalerias($this->dadosForm)){
				$urlDestino = URLADM . "view" . "#galerias";
				header("Location: $urlDestino");
			}else{
				$this->dados['galerias'] = $this->dadosForm;
				$this->viewGalerias();
			}
		}else{
			$this->dadosGalerias();
			$this->viewGalerias();	
		}	
				
	}
	private function dadosGalerias(){
		$viewGalerias = new \App\adms\Models\AdmsViewGalerias();
		$this->dados['galerias'] = $viewGalerias->viewGalerias();
	}

	private function viewGalerias(){
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeGalerias",$this->dados);
		$carregarView->renderizar();
	}
}
