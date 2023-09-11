<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['soft'])) {
	$valorForm = $this->dados['soft'];
}

?>


<!-- EDITAR IMAGEM DA FERRAMENTA 3 --->

<div class="container">
	 <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Editar Imagem da Ferramenta 3</h2>
            <a name="ferramenta_1">
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#softwares"?>"  class="btn btn-warning btn-sm">Visualizar</a>
        </div>
        
    </div>
			<hr>
			<?php
				if (isset($_SESSION['msg_soft'])) {
					echo $_SESSION['msg_soft'];
					unset($_SESSION['msg_soft']);
				}
			?>

			<form method="POST" action="" enctype="multipart/form-data">
				<input name="id" type="hidden" id="id" value='<?php 
		            	if($valorForm['id']) { 
		            		echo $valorForm['id']; 
		            	}
		            	?>'>
				<input name="icone_soft_3" type="hidden" id="icone_soft_3" value='<?php 
		            	if($valorForm['icone_soft_3']) { 
		            		echo $valorForm['icone_soft_3']; 
		            	}
		            	?>'>
	        	<div class="form-group">
		            <label for="img_nova">Imagem Ferramenta 3</label>
		            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem();">
	        	</div>
	        	<br>
	        	<div class="form-group">
	        		<?php 
		            	if($valorForm['icone_soft_3']) { 
		            		$img_antiga = $valorForm['icone_soft_3']; 
		            	}
		            	?>
		            <img src="<?php echo URLADM . 'app/adms/assets/images/icons_tools/' . $img_antiga; ?>" alt="Imagem da Ferramenta 1" id="preview-img" class="img-thumbnail prev-img">		   </div>


	        	<input name="EditSoftImg3" id="bt-salvar" type="submit" class="btn btn-primary" value="Salvar" class="btn" disabled="true">
			</form>
</div>
<hr>

<!-- FIM EDITAR IMAGEM DA FERRAMENTA 3 --->