<?php

namespace Core; 


if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}


class ConfigController
{
	
	private string $url;
	
	public function __construct()
	{
		if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
			$this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
		}else{
			$this->url = "home";
		}
		
		//echo "Página: {$this->url}<br>";
	}

	public function carregar()
	{
		$this->config();
		$urlController = ucwords($this->url);
		$classe = "\\App\\sts\\Controllers\\" . $urlController;
		//echo "Classe: " . $classe . "<br>";
		$classeCarregar = new $classe;
		$classeCarregar->index();				
	}

	private function config()
	{
		define('URL', 'http://localhost/vini-portifolio/'); //ALTERAR A ROTA ONDE VAI ABRIR.
		define('URLADM', 'http://localhost/vini-portifolio/adm/');
	}
}