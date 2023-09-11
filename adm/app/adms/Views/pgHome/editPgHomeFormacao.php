<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['formacao'])) {
	$valorForm = $this->dados['formacao'];
}

?>


<!-- FORMAÇÃO PESSOAIS DA PÁGINA HOME --->
<a name="formacao">
<div class="container cabecalho">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Formação Academica</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#formacao"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>      
       
    </div>
     <hr>
     <?php
				if (isset($_SESSION['msg_forma'])) {
					echo $_SESSION['msg_forma'];
					unset($_SESSION['msg_forma']);
				}
			?>
     <form method="POST" action="">
     		<div class="form-group">
     			<input name="id" type="hidden" id="id" class="form-control" value="<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>">
     			<label for="titulo_formacao">Título Formação Academica</label>
		            <input name="titulo_formacao" type="text" class="form-control" id="titulo_formacao" placeholder="Título da Formação Academica" value="<?php 
		            	if($valorForm['titulo_formacao']) { 
		            		echo $valorForm['titulo_formacao']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="curso_1">Curso 1</label>
		            <input name="curso_1" type="text" class="form-control" id="curso_1" placeholder="Curso 1" value="<?php 
		            	if($valorForm['curso_1']) { 
		            		echo $valorForm['curso_1']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="ano_1">Ano Formação 1</label>
		            <input name="ano_1" type="text" class="form-control" id="ano_1" placeholder="Ano Formação 1" value="<?php 
		            	if($valorForm['ano_1']) { 
		            		echo $valorForm['ano_1']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="curso_2">Curso 2</label>
		            <input name="curso_2" type="text" class="form-control" id="curso_2" placeholder="Curso 2" value="<?php 
		            	if($valorForm['curso_2']) { 
		            		echo $valorForm['curso_2']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="ano_2">Ano Formação 2</label>
		            <input name="ano_2" type="text" class="form-control" id="ano_2" placeholder="Ano Formação 2" value="<?php 
		            	if($valorForm['ano_2']) { 
		            		echo $valorForm['ano_2']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="curso_3">Curso 3</label>
		            <input name="curso_3" type="text" class="form-control" id="curso_3" placeholder="Curso 3" value="<?php 
		            	if($valorForm['curso_3']) { 
		            		echo $valorForm['curso_3']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="ano_3">Ano Formação 3</label>
		            <input name="ano_3" type="text" class="form-control" id="ano_3" placeholder="Ano Formação 3" value="<?php 
		            	if($valorForm['ano_3']) { 
		            		echo $valorForm['ano_3']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="curso_4">Curso 4</label>
		            <input name="curso_3" type="text" class="form-control" id="curso_4" placeholder="Curso 4" value="<?php 
		            	if($valorForm['curso_4']) { 
		            		echo $valorForm['curso_4']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
	        	<label for="ano_4">Ano Formação 4</label>
		            <input name="ano_4" type="text" class="form-control" id="ano_4" placeholder="Ano Formação 4" value="<?php 
		            	if($valorForm['ano_4']) { 
		            		echo $valorForm['ano_4']; 
		            	}
		            	?>">
	        	</div>
	          <input name="EditFormaHome" type="submit" class="btn btn-primary" value="Salvar">
     </form>
 </div>