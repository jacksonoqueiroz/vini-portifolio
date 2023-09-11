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
            <h2>Editar a Imagem telas Maiores do Topo Página Home</h2>
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

			<form method="POST" action="" enctype="multipart/form-data">
				<input name="id" type="hidden" id="id" value='<?php 
		            if($valorForm['id']) { 
		            	echo $valorForm['id']; 
		            }
		            ?>'>
				<input name="imagem_topo" type="hidden" id="imagem_topo" value='<?php 
		            if($valorForm['imagem_topo']) { 
		            	echo $valorForm['imagem_topo']; 
		            }
		            ?>'>

				<div class="form-group">
		            <label for="img_nova">Imagem (Dimensões 1900 X 700)</label>
		            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem();">
	        	</div>

	        	<div class="form-group">
	        		<?php 
		            	if($valorForm['imagem_topo']) { 
		            		$imagem_antiga = $valorForm['imagem_topo'];
		            	}
		            ?>
		            <img src="<?php echo URLADM . 'app/adms/assets/images/home_topo/' .  $imagem_antiga; ?>" alt="Imagem telas maiores" id="preview-img" class="img-thumbnail prev-img-lg">
		            
	        	</div>
	        	<input name="EditTopoImgLg" id="bt-salvar" type="submit" class="btn btn-warning" value="Salvar" class="btn" disabled="true">
			</form>
</div>