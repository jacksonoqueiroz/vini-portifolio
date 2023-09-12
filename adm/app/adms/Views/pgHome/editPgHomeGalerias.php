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
            <h2>Editar Conteúdo Galeria Profissional</h2>
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

    <form method="POST" action="">
            <div class="form-group">
                <input name="id" type="hidden" id="id" value="<?php 
                if ($valorForm['id']) {
                    echo $valorForm['id'];
                } ?>">

                <label for="titulo_gal_prof">Tútulo Galeria Profissional</label>
                <input name="titulo_gal_prof" type="text" class="form-control" id="titulo_gal_prof" placeholder="Titulo Galeria Profissional" value="<?php if ($valorForm['titulo_gal_prof']) {
                echo $valorForm['titulo_gal_prof'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_1">Descrição galeria 1</label>
                <input name="desc_gal_prof_1" type="text" class="form-control" id="desc_gal_prof_1" placeholder="Descrição galeria 1" value="<?php if ($valorForm['desc_gal_prof_1']) {
                echo $valorForm['desc_gal_prof_1'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_2">Descrição galeria 2</label>
                <input name="desc_gal_prof_2" type="text" class="form-control" id="desc_gal_prof_2" placeholder="Descrição galeria 2" value="<?php if ($valorForm['desc_gal_prof_2']) {
                echo $valorForm['desc_gal_prof_2'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_3">Descrição galeria 3</label>
                <input name="desc_gal_prof_3" type="text" class="form-control" id="desc_gal_prof_3" placeholder="Descrição galeria 3" value="<?php if ($valorForm['desc_gal_prof_3']) {
                echo $valorForm['desc_gal_prof_3'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_4">Descrição galeria 4</label>
                <input name="desc_gal_prof_4" type="text" class="form-control" id="desc_gal_prof_4" placeholder="Descrição galeria 4" value="<?php if ($valorForm['desc_gal_prof_4']) {
                echo $valorForm['desc_gal_prof_4'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_5">Descrição galeria 5</label>
                <input name="desc_gal_prof_5" type="text" class="form-control" id="desc_gal_prof_5" placeholder="Descrição galeria 5" value="<?php if ($valorForm['desc_gal_prof_5']) {
                echo $valorForm['desc_gal_prof_5'];
            } ?>">
            </div>
            <div class="form-group">
                <label for="desc_gal_prof_6">Descrição galeria 6</label>
                <input name="desc_gal_prof_6" type="text" class="form-control" id="desc_gal_prof_6" placeholder="Descrição galeria 6" value="<?php if ($valorForm['desc_gal_prof_6']) {
                echo $valorForm['desc_gal_prof_6'];
            } ?>">
            </div>

            <input name="EditGaleriaHome" type="submit" class="btn btn-primary" value="Salvar">

    </form>
</div>
