<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['competencias'])) {
	$valorForm = $this->dados['competencias'];
}

?>


<!-- COMPETENCIAS PESSOAIS DA PÁGINA HOME --->

<div class="container cabecalho">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Competências Pessoais</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#competencias"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>      
       
    </div>
     <hr>
     <?php
				if (isset($_SESSION['msg_comp'])) {
					echo $_SESSION['msg_comp'];
					unset($_SESSION['msg_comp']);
				}
			?>
     <form method="POST" action="">
     		<div class="form-group">
     			<input name="id" type="hidden" id="id" class="form-control" value="<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>">
     			<label for="titulo_competencia">Título Competências Pessoais</label>
		            <input name="titulo_competencia" type="text" class="form-control" id="titulo_competencia" placeholder="Título das Competencias Pessoais" value="<?php 
		            	if($valorForm['titulo_competencia']) { 
		            		echo $valorForm['titulo_competencia']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
     				<label for="desc_comp_1">Descrição 1</label>
		            	<input name="desc_comp_1" type="text" class="form-control" id="desc_comp_1" placeholder="Competência 1" value="<?php 
		            	if($valorForm['desc_comp_1']) { 
		            		echo $valorForm['desc_comp_1']; 
		            	}
		            	?>">
	        	</div>

	        	<div class="form-group">
     				<label for="desc_comp_2">Descrição 2</label>
		            	<input name="desc_comp_2" type="text" class="form-control" id="desc_comp_2" placeholder="Competência 2" value="<?php 
		            	if($valorForm['desc_comp_2']) { 
		            		echo $valorForm['desc_comp_2']; 
		            	}
		            	?>">
	        	</div>

	        	<div class="form-group">
     				<label for="desc_comp_3">Descrição 3</label>
		            	<input name="desc_comp_3" type="text" class="form-control" id="desc_comp_3" placeholder="Competência 3" value="<?php 
		            	if($valorForm['desc_comp_3']) { 
		            		echo $valorForm['desc_comp_3']; 
		            	}
		            	?>">
	        	</div>

	        	<div class="form-group">
     				<label for="desc_comp_4">Descrição 4</label>
		            	<input name="desc_comp_4" type="text" class="form-control" id="desc_comp_4" placeholder="Competência 4" value="<?php 
		            	if($valorForm['desc_comp_4']) { 
		            		echo $valorForm['desc_comp_4']; 
		            	}
		            	?>">
	        	</div>

	        	<div class="form-group">
     				<label for="desc_comp_1">Descrição 5</label>
		            	<input name="desc_comp_5" type="text" class="form-control" id="desc_comp_5" placeholder="Competência 5" value="<?php 
		            	if($valorForm['desc_comp_5']) { 
		            		echo $valorForm['desc_comp_5']; 
		            	}
		            	?>">
	        	</div>
	          <input name="EditCompHome" type="submit" class="btn btn-primary" value="Salvar">
     </form>
 </div>