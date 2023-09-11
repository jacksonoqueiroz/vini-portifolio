<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Classe Login
 */
class Login
{
   
    private $dados;

    private $dadosForm;

    public function index() {

        $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dadosForm['SendLogin'])){
            $valLogin = new \App\adms\Models\AdmsLogin();
            $valLogin->login($this->dadosForm);
            if ($valLogin->getResultado()) {
                $urlDestino = URLADM . 'home';
                header("Location: $urlDestino");
            }else{
                $this->dados['form'] = $this->dadosForm;
            }
        }
        
        $carregarView = new \Core\ConfigView("adms/Views/login/login", $this->dados);
        $carregarView->renderizarLogin();
    }
}

