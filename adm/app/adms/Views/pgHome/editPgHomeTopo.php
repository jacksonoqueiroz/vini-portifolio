<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['topo'])) {
	$valorForm = $this->dados['topo'];
}

?>


<!-- EDITAR TOPO DA PÁGINA HOME --->

<div class="container">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Topo Página Home</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM ?>view" class="btn btn-warning btn-sm">Visualizar</a>
        </div>
        
    </div>
			<hr>
			<?php
				if (isset($_SESSION['msg_topo'])) {
					echo $_SESSION['msg_topo'];
					unset($_SESSION['msg_topo']);
				}
			?>

			<form method="POST" action="">
				<div class="form-group">
					 <input name="id" type="hidden" id="id" value='<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>'>
		            <label for="titulo_topo">Título da Página Home</label>
		            <input name="titulo_topo" type="text" class="form-control" id="titulo_topo" placeholder="Título da Página" value="<?php 
		            	if($valorForm['titulo_topo']) { 
		            		echo $valorForm['titulo_topo']; 
		            	}
		            	?>">
	        	</div>
	        	<div class="form-group">
		            <label for="frase">Frase</label>
		            <input name="frase" type="text" class="form-control" id="frase" placeholder="Frase do Topo" value='<?php 
		            	if($valorForm['frase']) { 
		            		echo $valorForm['frase']; 
		            	}
		            	?>'>
	        	</div>
	        	<div class="form-group">
		            <label for="autor_frase">Autor da Frase</label>
		            <input name="autor_frase" type="text" class="form-control" id="autor_frase" placeholder="Autor da Frase" value='<?php 
		            	if($valorForm['autor_frase']) { 
		            		echo $valorForm['autor_frase']; 
		            	}
		            	?>'>
	        	</div>
	        	<input name="EditTopoHome" type="submit" class="btn btn-primary" value="Salvar" class="btn">
			</form>
</div>