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
            <h2>Editar Cabeçalho</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#cabecalho"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>
        
    </div>
	
<hr>
    <?php
    if (isset($_SESSION['msg_cabecalho'])) {
        echo $_SESSION['msg_cabecalho'];
        unset($_SESSION['msg_cabecalho']);
    }
    ?>
    <form method="POST" action="">
        <div class="form-group">
            <input name="id" type="hidden" id="id" value="<?php if($valor_form['id']) {echo $valor_form['id'];} ?>">
        </div>
        <div class="form-group">
            <label for="titulo_pagina">Título do site</label>
            <input name="titulo_pagina" type="text" class="form-control" id="titulo_pagina" placeholder="Título do Site" value="<?php if($valor_form['titulo_pagina']) {echo $valor_form['titulo_pagina'];} ?>">
        </div>

        <input name="EditTopoCabecalho" type="submit" class="btn btn-primary" value="Salvar">

    </form>
    

 </div>