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

	public function index()	{
		$viewGalerias = new \App\adms\Models\AdmsViewGalerias();
		$this->dados['galerias'] = $viewGalerias->viewGalerias();
		echo "<pre>";
		var_dump($this->dados);
		echo "</pre>";
		
		$carregarView = new \Core\ConfigView("adms/views/pgHome/editPgHomeGalerias",$this->dados);
		$carregarView->renderizar();
	}
}