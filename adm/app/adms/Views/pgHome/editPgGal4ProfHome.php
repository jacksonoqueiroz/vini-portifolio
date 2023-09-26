<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['galerias'])) {
	$valorForm = $this->dados['galerias'];
}

?>


<!-- IMAGEM GALERIA 4 DA PÁGINA HOME --->

<div class="container">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Galeria imagem 4</h2>
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

			<form method="POST" action="" enctype="multipart/form-data">
					 <input name="id" type="hidden" id="id" value='<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>'>
		            	
					 <input name="img_gal_prof_4" type="hidden" id="img_gal_prof_4" value='<?php 
		            	if($valorForm['img_gal_prof_4']) { 
		            		echo $valorForm['img_gal_prof_4']; 
		            	}
		            	?>'>
				<div class="form-group">
		            <label for="img_nova">Imagem</label>
		            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem();">
	        	</div>
	        	<div class="form-group">
	        		<?php 
		            	if($valorForm['img_gal_prof_4']) { 
		            		$img_antiga = $valorForm['img_gal_prof_4']; 
		            	}
		            	?>
		            <img src="<?php echo URLADM . 'app/adms/assets/images/galeria/' . $img_antiga; ?>" alt="Imagem 4 Galeria profissional" id="preview-img" class="img-thumbnail prev-img">
	        	</div>
	        	<input name="EditGal4" id="bt-salvar" type="submit" class="btn btn-warning" value="Salvar" class="btn" disabled="true">
			</form>
</div>