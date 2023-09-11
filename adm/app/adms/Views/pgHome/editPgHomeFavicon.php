<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['cabecalho'])) {
    $valor_form = $this->dados['cabecalho'];
}

?>

<style type="text/css">


</style>

<!-- CABEÇALHO FAVICON DA PÁGINA HOME --->

<div class="container cabecalho">
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Imagem Favicon</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#favicon"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>
        
    </div>
	
<hr>
    <?php
    if (isset($_SESSION['msg_cabecalho'])) {
        echo $_SESSION['msg_cabecalho'];
        unset($_SESSION['msg_cabecalho']);
    }
    ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <input name="id" type="hidden" id="id" value="<?php 
        if($valor_form['id']) {
            echo $valor_form['id'];
        } 
        ?>">
        
        <input name="img_favicon" type="hidden" id="img_favicon" value="<?php 
        if($valor_form['img_favicon']) {
            echo $valor_form['img_favicon'];
        } 
        ?>">
        <div class="form-group">
            <label for="img_nova">Foto</label>
            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem();">
        </div>

        <div class="form-group">
            <?php 
            if($valor_form['img_favicon']) {
                $imagem_antiga = $valor_form['img_favicon'];
            } 
            ?>
            <img src="<?php echo URLADM . 'app/adms/assets/images/icone/' . $imagem_antiga; ?>" alt="Icone do site" id="preview-img" class="img-thumbnail prev-img">
        </div>

        <input name="EditSiteFavicon" type="submit" class="btn btn-warning" value="Salvar">

    </form>
    

 </div>