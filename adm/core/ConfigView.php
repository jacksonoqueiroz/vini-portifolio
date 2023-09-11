<?php

namespace Core;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * 
 */
class ConfigView
{
	
	private  string $nome;

	private $dados;

	public function __construct($nome, array $dados = null) {
		$this->nome = $nome;
		$this->dados = $dados;
	}

	public function renderizar(){
		if (file_exists('app/' . $this->nome . '.php')) {
			include 'app/adms/Views/include/head.php';
			include 'app/adms/Views/include/menu.php';
			include 'app/' . $this->nome . '.php';
			include 'app/adms/Views/include/footer.php';
		}else{
			echo "Erro ao carregar página<br>";
            echo "Erro ao carregar view: {$this->nome}<br>";
		}
	}

	public function renderizarLogin(){
		if (file_exists('app/' . $this->nome . '.php')) {
			include 'app/adms/Views/include/head_login.php';
			include 'app/' . $this->nome . '.php';
			include 'app/adms/Views/include/footer.php';
		}else{
			echo "Erro ao carregar página<br>";
            echo "Erro ao carregar view: {$this->nome}<br>";
		}
	}
}
