<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['cursos'])) {
	$valorForm = $this->dados['cursos'];
}

?>


<!-- CURSOS EXTRA PÁGINA HOME --->

<div class="container cabecalho">
	<div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Cursos Extras</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#cursos"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>      
       
    </div>
<hr>
 <?php
    if (isset($_SESSION['msg_cursos'])) {
        echo $_SESSION['msg_cursos'];
        unset($_SESSION['msg_cursos']);
    }
    ?>

    <form method="POST" action="">
    	<div class="form-group">
    		<input name="id" type="hidden" id="id" value="<?php if ($valorForm['id']) {
    			echo $valorForm['id'];
    		} ?>">
    		<label for="titulo_curso">Título Cursos Extras</label>
    		<input name="titulo_curso" type="text" class="form-control" id="titulo_curso" placeholder="Título do Cursos Extras" value="<?php if ($valorForm['titulo_curso']) {
    			echo $valorForm['titulo_curso'];
    		} ?>">
    	</div>

    	<div class="form-group">
    		<label for="desc_curso_1">Descrição Curso 1</label>
    		<input name="desc_curso_1" type="text" class="form-control" id="desc_curso_1" placeholder="Descrição Curso 1" value="<?php if ($valorForm['desc_curso_1']) {
    			echo $valorForm['desc_curso_1'];
    		} ?>">
    	</div>

    	<div class="form-group">
    		<label for="desc_curso_2">Descrição Curso 2</label>
    		<input name="desc_curso_2" type="text" class="form-control" id="desc_curso_2" placeholder="Descrição Curso 2" value="<?php if ($valorForm['desc_curso_2']) {
    			echo $valorForm['desc_curso_2'];
    		} ?>">
    	</div>

    	<div class="form-group">
    		<label for="desc_curso_3">Descrição Curso 3</label>
    		<input name="desc_curso_3" type="text" class="form-control" id="desc_curso_3" placeholder="Descrição Curso 3" value="<?php if ($valorForm['desc_curso_3']) {
    			echo $valorForm['desc_curso_3'];
    		} ?>">
    	</div>

    	<div class="form-group">
    		<label for="desc_curso_4">Descrição Curso 4</label>
    		<input name="desc_curso_4" type="text" class="form-control" id="desc_curso_4" placeholder="Descrição Curso 4" value="<?php if ($valorForm['desc_curso_4']) {
    			echo $valorForm['desc_curso_4'];
    		} ?>">
    	</div>

    	<div class="form-group">
    		<label for="desc_curso_5">Descrição Curso 5</label>
    		<input name="desc_curso_5" type="text" class="form-control" id="desc_curso_5" placeholder="Descrição Curso 5" value="<?php if ($valorForm['desc_curso_5']) {
    			echo $valorForm['desc_curso_5'];
    		} ?>">
    	</div>
    	
    	<input name="EditCursoHome" type="submit" class="btn btn-primary" value="Salvar">
    </form>
</div>