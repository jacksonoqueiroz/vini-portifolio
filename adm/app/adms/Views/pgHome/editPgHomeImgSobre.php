<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['sobre'])) {
	$valorForm = $this->dados['sobre'];
}

?>


<!-- EDITAR IMAGEM DA PÁGINA HOME --->

<div class="container">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar a Imagem Sobremim Página Home</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#sobre"?>" class="btn btn-warning btn-sm">Visualizar</a>
        </div>
        
    </div>
			<hr>
			<?php
				if (isset($_SESSION['msg_topo'])) {
					echo $_SESSION['msg_topo'];
					unset($_SESSION['msg_topo']);
				}
			?>

			<form method="POST" action="" enctype="multipart/form-data">
				<input name="id" type="hidden" id="id" value='<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>'>
				<input name="imagem_sobre" type="hidden" id="imagem_sobre" value='<?php 
		            	if($valorForm['imagem_sobre']) { 
		            		echo $valorForm['imagem_sobre']; 
		            	}
		            	?>'>
				<div class="form-group">
		            <label for="img_nova">Imagem</label>
		            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem()">
	        	</div>
	        	<div class="form-group">
	        		<?php 
		            	if($valorForm['imagem_sobre']) { 
		            		$imagem_antiga = $valorForm['imagem_sobre']; 
		            	}
		            ?>
		            <img src="<?php echo URLADM . 'app/adms/assets/images/home_sobre/' . $imagem_antiga; ?>" alt="Imagem sobre mim" id="preview-img" class="img-thumbnail prev-img-lg">
	        	</div>
	        		<input name="EditSobreImg" id="bt-salvar" type="submit" class="btn btn-warning" value="Salvar" class="btn" disabled="true">
			</form>
</div>