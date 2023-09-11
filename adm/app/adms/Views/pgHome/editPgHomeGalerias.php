<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}



?>


<!-- GALERIAS DA PÁGINA HOME --->
<a name="galerias">
<div class="container cabecalho">
	<div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Conteúdo da Galerias</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#galerias"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>      
       
    </div>
<hr>
 <?php
    if (isset($_SESSION['msg_galerias'])) {
        echo $_SESSION['msg_galerias'];
        unset($_SESSION['msg_galerias']);
    }
    ?>
</div>