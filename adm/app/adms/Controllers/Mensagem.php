<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Classe para visizualição dos dados banco
 */
class Mensagem
{
    
    public function index() {
        $carregarView = new \Core\ConfigView("adms/Views/mensagem/mensagem");
        $carregarView->renderizar();
    }
}