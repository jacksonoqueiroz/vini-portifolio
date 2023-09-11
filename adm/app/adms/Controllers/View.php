<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * View
 */
class View
{
	private $dados;

	public function index()
	{
		$viewHome = new \App\adms\Models\AdmsViewHome();
		$this->dados['home'] = $viewHome->viewHome();
		
		$carregarView = new \Core\ConfigView("adms/views/pgHome/viewPgHome",$this->dados);
		$carregarView->renderizar();
	}
}