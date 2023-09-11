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
            <h2>Editar a Imagem do Topo na Home (dispositivos menores)</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM . "view" . "#topo"?>" class="btn btn-warning btn-sm">Visualizar</a>
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
		            				
				<input name="imagem_topo_sm" type="hidden" id="imagem_topo_sm" value='<?php 
		            if($valorForm['imagem_topo_sm']) { 
		            	echo $valorForm['imagem_topo_sm']; 
		            }
		            ?>'>
				<div class="form-group">
		            <label for="img_nova">Imagem</label>
		            <input name="img_nova" type="file" class="form-control" id="img_nova" onchange="previewimagem()">
	        	</div>
	        	<div class="form-group">
					<?php 
		            if($valorForm['imagem_topo_sm']) { 
		            	$imagem_antiga = $valorForm['imagem_topo_sm']; 
		            }
		            ?>
		            <img src="<?php echo URLADM . 'app/adms/assets/images/home_topo/' . $imagem_antiga; ?>" alt="Imagem topo para dispositivos" id="preview-img" class="img-thumbnail prev-img">
	        	</div>
	        	<input name="EditTopoImg" id="bt-salvar" type="submit" class="btn btn-warning" value="Salvar" class="btn" disabled="true">
			</form>
</div>