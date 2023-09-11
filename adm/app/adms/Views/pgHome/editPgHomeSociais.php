<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['sociais'])) {
		$valorForm = $this->dados['sociais'];
	}	

?>


<!-- CABEÇALHO FAVICON DA PÁGINA HOME --->
<a name="sociais">
<div class="container cabecalho">
	
	<div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Redes Sociais (Os icones são códigos Font awesome)</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#sociais"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>      
       
    </div>
<hr>
 <?php
    if (isset($_SESSION['msg_sociais'])) {
        echo $_SESSION['msg_sociais'];
        unset($_SESSION['msg_sociais']);
    }
    ?>
    <form method="POST" action="">
    		<input name="id" type="hidden" id="id" value="<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>">

    	<div class="form-group">
	        	<label for="titulo_sociais">Título Redes Sociais</label>
		            <input name="titulo_sociais" type="text" class="form-control" id="titulo_sociais" placeholder="Título Redes Sociais" value="<?php 
		            	if($valorForm['titulo_sociais']) { 
		            		echo $valorForm['titulo_sociais']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-row">
	        	<div class="form-group col-md-6">
	        		<label for="icone_sociais_1">Icone sociais 1</label>
		            	<input name="icone_sociais_1"	 type="text" class="form-control" id="icone_sociais_1" placeholder="Icone Sociais 1" value="<?php 
		            	if($valorForm['icone_sociais_1']) { 
		            		echo $valorForm['icone_sociais_1']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group col-md-6">
	        	<label for="link_sociais_1">Link sociais 1</label>
		            <input name="link_sociais_1"	 type="text" class="form-control" id="link_sociais_1" placeholder="Link Sociais 1" value="<?php 
		            	if($valorForm['link_sociais_1']) { 
		            		echo $valorForm['link_sociais_1']; 
		            	}
		            	?>">
	        	</div>
	        	</div>

	        	<div class="form-row">
	        	<div class="form-group col-md-6">
	        		<label for="icone_sociais_2">Icone sociais 2</label>
		            	<input name="icone_sociais_2"	 type="text" class="form-control" id="icone_sociais_2" placeholder="Icone Sociais 2" value="<?php 
		            	if($valorForm['icone_sociais_2']) { 
		            		echo $valorForm['icone_sociais_2']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group col-md-6">
	        	<label for="link_sociais_2">Link sociais 2</label>
		            <input name="link_sociais_2"	 type="text" class="form-control" id="link_sociais_2" placeholder="Link Sociais 2" value="<?php 
		            	if($valorForm['link_sociais_2']) { 
		            		echo $valorForm['link_sociais_2']; 
		            	}
		            	?>">
	        	</div>
	        	</div>

	        	<div class="form-row">
	        	<div class="form-group col-md-6">
	        		<label for="icone_sociais_3">Icone sociais 3</label>
		            	<input name="icone_sociais_3"	 type="text" class="form-control" id="icone_sociais_3" placeholder="Icone Sociais 3" value="<?php 
		            	if($valorForm['icone_sociais_3']) { 
		            		echo $valorForm['icone_sociais_3']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group col-md-6">
	        	<label for="link_sociais_3">Link sociais 3</label>
		            <input name="link_sociais_3"	 type="text" class="form-control" id="link_sociais_3" placeholder="Link Sociais 3" value="<?php 
		            	if($valorForm['link_sociais_3']) { 
		            		echo $valorForm['link_sociais_3']; 
		            	}
		            	?>">
	        	</div>
	        	</div>

	        	<div class="form-row">
	        	<div class="form-group col-md-6">
	        		<label for="icone_sociais_4">Icone sociais 4</label>
		            	<input name="icone_sociais_4"	 type="text" class="form-control" id="icone_sociais_4" placeholder="Icone Sociais 4" value="<?php 
		            	if($valorForm['icone_sociais_4']) { 
		            		echo $valorForm['icone_sociais_4']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group col-md-6">
	        	<label for="link_sociais_4">Link sociais 4</label>
		            <input name="link_sociais_4"	 type="text" class="form-control" id="link_sociais_4" placeholder="Link Sociais 4" value="<?php 
		            	if($valorForm['link_sociais_4']) { 
		            		echo $valorForm['link_sociais_4']; 
		            	}
		            	?>">
	        	</div>
	        	</div>
	        	<input name="EditSociaisHome" type="submit" class="btn btn-primary" value="Salvar">       	

    </form>
</div>