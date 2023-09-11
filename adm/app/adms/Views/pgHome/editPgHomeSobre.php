<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['sobre'])) {
	$valorForm = $this->dados['sobre'];
}

?>


<!-- EDITAR SOBREMIM DA PÁGINA HOME --->

<div class="container">

	<div class="mr-auto p-2">
		<div class="p-2">
			<h2>Editar Sobre mim da Página Home</h2>
			
            <a href="<?php echo URLADM ?>view" class="btn btn-warning btn-sm 	bt-view">Visualizar</a>
        </div>
			<hr>
			<?php 
				if (isset($_SESSION['msg_sobre'])) {
					echo $_SESSION['msg_sobre'];
					unset($_SESSION['msg_sobre']);
				}
			?>
			<form method="POST" action="">
				<div class="form-group">
					<input name="id" type="hidden" id="id" value="<?php 
					if ($valorForm['id']) {
				    	echo $valorForm['id']; } ?>">

				    <label for="titulo_sobre">Título sobre mim</label>
				    <input name="titulo_sobre" type="text" class="form-control" id="titulo_sobre" placeholder="Titulo sobre mim" value="<?php if ($valorForm['titulo_sobre']) {
				    	echo $valorForm['titulo_sobre']; } ?>">
				  </div>

				  <div class="form-group">
				    <label for="nome">Nome</label>
				    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do curriculum" value="<?php if ($valorForm['nome']) {
				    	echo $valorForm['nome']; } ?>">
				  </div>

				  <div class="form-group">
				    <label for="descric_sobre">Resumo do Curriculum</label>
				    <textarea name="descric_sobre" type="text" class="form-control" id="descric_sobre" placeholder="Descrição do curriculum" rows="3"><?php if ($valorForm['descric_sobre']) {
				    	echo $valorForm['descric_sobre']; } ?></textarea>
				  </div>

				  <div class="form-group">
				    <label for="criado_em">Data da Criação</label>
				    <input name="criado_em" type="text" class="form-control" id="criado_em" placeholder="Data da Criação" value="<?php if ($valorForm['criado_em']) {
				    	echo $valorForm['criado_em']; } ?>">
				  </div>

				 <input name="EditSobreHome" type="submit" class="btn btn-primary" value="Salvar">
			</form>
</div>