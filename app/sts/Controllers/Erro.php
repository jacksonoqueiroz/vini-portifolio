<?php

namespace App\sts\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * 
 */
class Erro
{
	
	public function index()
	{
		echo "Página Erro<br>";
	}
}