<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['softwares'])) {
	$valorForm = $this->dados['softwares'];
}

?>


<!-- SOFTWARES DA PÁGINA HOME --->

<div class="container">
	<div class="mr-auto p-2">
	<div class="p-2">
			<h2>Editar Ferramentas da Página Home</h2>			
            <a href="<?php echo URLADM ?>view" class="btn btn-warning btn-sm bt-view">Visualizar</a>
        </div>
		<hr>
		<?php
			if (isset($_SESSION['msg_soft'])) {
				echo $_SESSION['msg_soft'];
				unset($_SESSION['msg_soft']);
			}
		?>
		<form method="POST" action="">
					<div class="form-group">
						<input name="id" type="hidden" id="id" value="<?php if ($valorForm['id']) {
				    	echo $valorForm['id']; } ?>">

				    	<label for="titulo_softwares">Titulo Ferramenta de Trabalho</label>
				    	<input name="titulo_softwares" type="text" class="form-control" id="titulo_softwares" placeholder="Descrição ferramenta 2" value="<?php if ($valorForm['titulo_softwares']) {
				    	echo $valorForm['titulo_softwares']; } ?>">
				  	</div>

				    <div class="form-group">
				    	<label for="desc_soft_1">Descrição Ferramenta 1</label>
				    	<input name="desc_soft_1" type="text" class="form-control" id="desc_soft_1" placeholder="Descrição ferramenta 1" value="<?php if ($valorForm['desc_soft_1']) {
				    	echo $valorForm['desc_soft_1']; } ?>">
				  	</div>

				    <div class="form-group">
				    	<label for="desc_soft_2">Descrição Ferramenta 2</label>
				    	<input name="desc_soft_2" type="text" class="form-control" id="desc_soft_2" placeholder="Descrição ferramenta 2" value="<?php if ($valorForm['desc_soft_2']) {
				    	echo $valorForm['desc_soft_2']; } ?>">
				  	</div>

				  	<div class="form-group">
				    	<label for="desc_soft_3">Descrição Ferramenta 3</label>
				    	<input name="desc_soft_3" type="text" class="form-control" id="desc_soft_3" placeholder="Descrição ferramenta 3" value="<?php if ($valorForm['desc_soft_3']) {
				    	echo $valorForm['desc_soft_3']; } ?>">
				  	</div>

				  	<div class="form-group">
				    	<label for="desc_soft_4">Descrição Ferramenta 4</label>
				    	<input name="desc_soft_4" type="text" class="form-control" id="desc_soft_4" placeholder="Descrição ferramenta 4" value="<?php if ($valorForm['desc_soft_4']) {
				    	echo $valorForm['desc_soft_4']; } ?>">
				  	</div>

				  	<input name="EditSoftHome" type="submit" class="btn btn-primary btn-sm" value="Salvar">
		</form>

</div>
</div>
