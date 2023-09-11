<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Editar o Favicon
 */
class Sitefavicon
{
	private $dados;
	private $dadosForm;

	public function index()
	{
		$this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if(!empty($this->dadosForm['EditSiteFavicon'])){
			$this->dadosForm['img_nova'] = ($_FILES['img_nova'] ? $_FILES['img_nova']: null);
			$editImgCabecalho = new \App\adms\Models\AdmsViewFavicon();
			if($editImgCabecalho->editImgCabecalho($this->dadosForm)){
				$urlDestino = URLADM . "view";
				header("Location: $urlDestino");
			}else{
				$this->dados['cabecalho'] = $this->dadosForm;
				$this->viewCabecalho();
			}

			$this->dadosCabecalho();
			$this->viewCabecalho();
		}else{
			$this->dadosCabecalho();
			$this->viewCabecalho();
		}
	

	}

	private function dadosCabecalho()
	{
		$viewCabecalho = new \App\adms\Models\AdmsViewFavicon;
		$this->dados['cabecalho'] = $viewCabecalho->viewImgCabecalho();
	}

	private function viewCabecalho()
	{
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeFavicon",$this->dados);
		$carregarView->renderizar();
	}

}