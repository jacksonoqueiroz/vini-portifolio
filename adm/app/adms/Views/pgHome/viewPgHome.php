<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}



?>


<!-- CABEÇALHO FAVICON DA PÁGINA HOME --->

<div class="container cabecalho">
	<div class="mr-auto">
			<h2>Detalhes Página Home</h2>
			<h2><a name="home" class="link"></a></h2>
		</div>
	<a name="cabecalho">
<hr>
 <?php
    if (isset($_SESSION['msg_cabecalho'])) {
        echo $_SESSION['msg_cabecalho'];
        unset($_SESSION['msg_cabecalho']);
    }
    ?>
 
 <div class="d-flex">
 		<div>
		 	<img class="mb-4 img-cabecalho" src="<?php URLADM; ?>app/adms/assets/images/detalhes/cabecalho.png" alt="" width="400" height="110">
				<?php
					if (!empty($this->dados['home']['cabecalho'])) {	
					extract($this->dados['home']['cabecalho'])
				?>				
		</div>
		<div class="mr-auto p-2">
			<a href="<?php echo URLADM ?>cabecalho" class="btn btn-warning btn-sm">Editar</a>
		</div>
		
	</div>
 	<div class="conteudo-cabecalho" style="">
		 <dl class="row">
		  <dt class="col-sm-3">Título do cabeçalho</dt>
		  <dd class="col-sm-9"><?php echo $titulo_pagina; ?></dd>
		</dl>

		<dl class="row">
		  <dt class="col-sm-3">Nome da imagem Favicon</dt>
		  <dd class="col-sm-2"><?php echo $img_favicon; ?></dd>
		  <dd class="col-sm-6">(Dimenssões 48 X 48 e salve nome + .ico)</dd>
		</dl>

		<dl class="row">
		  <dt class="col-sm-3">Imagem Favicon (passe o mouse, clique em editar)</dt>
		  <div class="img-fav">
		  	<dd class="col-sm-9 icon-fav"><img src="<?php URLADM; ?>app/adms/assets/images/icone/<?php echo $img_favicon; ?>"></dd>
		  	<div class="edit">
		  		<a href="<?php echo URLADM ?>sitefavicon" class="btn btn-warning btn-sm">
		  			<i class="fas fa-edit"></i>
		  		</a>
		  	</div>
		  </div>
		</dl>
	</div>
	
		
 <?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">O cabeçalho do site não tem nenhum registro!</div>';
 }
?>

<!-- FIM CABEÇALHO FAVICON DA PÁGINA HOME --->
<br>


<!-- TOPO DA PÁGINA HOME --->

<div class="container-topo">
	<a name="topo">
	<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
	
		<div class="mr-auto guia">
			<h2>Home</h2>

			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>topo" class="btn btn-warning btn-sm">Editar</a>
			</div>
	
	</div>
	
	<?php
 if (!empty($this->dados['home']['topo'])) {	
 	extract($this->dados['home']['topo'])
 ?>
	<div class="conteudo">

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Título Home</dt>
			  <dd class="col-sm-9"><?php echo $titulo_topo; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Frase</dt>
			  <dd class="col-sm-9"><?php echo $frase; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Autor da Frase</dt>
			  <dd class="col-sm-9"><?php echo $autor_frase; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Imagem para celular</dt>
			  <dd class="col-sm-3 img-dispositivos img-perfil">
			  	<a href="<?php echo URLADM ?>topoimg">
			  	<img src="<?php URLADM; ?>app/adms/assets/images/home_topo/<?php echo $imagem_topo_sm; ?>">
			  	</a>
			  	<div class="edit-img">
			  	<a href="<?php echo URLADM ?>topoimg" class="btn btn-light btn-sm">
			  		<i class="fas fa-edit"></i>
			  	</a>
			  	</div>
			  </dd>

			  <dt class="col-sm-3">Imagem telas maiores </dt>
			  <dd class="col-sm-3 img-pc">
			  	<div class="img-perfil">
			  		<a href="<?php echo URLADM ?>topoimglg">
			  		<img src="<?php URLADM; ?>app/adms/assets/images/home_topo/<?php echo $imagem_topo; ?>">
			  		</a>
			  		<div class="edit-img">
			  			<a href="<?php echo URLADM ?>topoimglg" class="btn btn-light btn-sm">
			  				<i class="fas fa-edit"></i>
			  			</a>
			  		</div>
			  		</div>
			  	</dd>
			</dl>
		</div>
	</div>
</div>


<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">O TOPO do site não tem nenhum registro!</div>';
 }
?>

<!-- FIM TOPO DA PÁGINA HOME --->

<!-- SOBRE DA PÁGINA HOME --->

<div>

			<a name="sobre">
				<?php
			    if (isset($_SESSION['msgsobre'])) {
			        echo $_SESSION['msgsobre'];
			        unset($_SESSION['msgsobre']);
			    }
			    ?>
				
	<div>
		<div class="mr-auto guia">
			<h2>Sobre Mim</h2>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>sobremim" class="btn btn-warning btn-sm">Editar</a>
			</div>
	</div>
		
	</div>
	<?php
 if (!empty($this->dados['home']['sobre'])) {	
 	extract($this->dados['home']['sobre'])
 ?>
	<div class="conteudo">

		<!-- SOBRE MIM CURRICULUM -->
		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Meu nome</dt>
			  <dd class="col-sm-9"><?php echo $nome; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Resumo do curriculum</dt>
			  <dd class="col-sm-9"><?php echo $descric_sobre; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Imagem só Telas maiores</dt>
			  <dd class="col-sm-6 img-sobre">
			  	<a href="<?php echo URLADM ?>sobreimg">
			  	<img src="<?php URLADM; ?>app/adms/assets/images/home_sobre/<?php echo $imagem_sobre; ?>"></a>
			  	<div class="edit-img-tm">
			  			<a href="<?php echo URLADM ?>sobreimg" class="btn btn-light btn-sm">
			  				<i class="fas fa-edit fa-lg"></i>
			  			</a>
			  		</div>
			  </dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3 texto-sm">Quando foi criado</dt>
			  <dd class="col-sm-9"><?php echo $criado_em; ?></dd>
			</dl>
			<hr>
		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Sobre mim... não tem nenhum registro!</div>';
 }
?>

<!-- FIM SOBRE MIM DA PÁGINA HOME --->

	
		<!-- SOFTWARES FERRAMENTAS -->
	<div class="conteudo">
	<a name="softwares">
		<?php
				if (isset($_SESSION['msg_soft'])) {
					echo $_SESSION['msg_soft'];
					unset($_SESSION['msg_soft']);
				}
			?>		
			<h3>Ferramentas de trabalho</h3>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>softwares" class="btn btn-warning btn-sm">Editar</a>
			</div>
			<hr>



			<?php
 if (!empty($this->dados['home']['softwares'])) {	
 	extract($this->dados['home']['softwares'])
 ?>

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Titulo das Ferramentas</dt>
			  <dd class="col-sm-9"><?php echo $titulo_softwares; ?></dd>
			</dl>
			<hr>

			<dl class="row">
				<dt class="col-sm-3">Imagems icones Ferramenta 1</dt>
				<dd class="col-sm-2 icon-tools">
					<div class="img-tools">
						<a href="<?php echo URLADM ?>softimg">
						<img src="<?php URLADM; ?>app/adms/assets/images/icons_tools/<?php echo $icone_soft_1; ?>">
					</a>
					</div>
				
				</dd>
			</dl>

			<dl class="row">
				<dt class="col-sm-3">Descrição Ferramenta 1</dt>
				<dd class="col-sm-3"><?php echo $desc_soft_1; ?></dd>
			</dl>
			<hr>

			<dl class="row">
				<dt class="col-sm-3">Imagems icones Ferramenta 2</dt>
				<dd class="col-sm-2 icon-tools">
					<div class="img-tools">
						<a href="<?php echo URLADM ?>softimg2">
							<img src="<?php URLADM; ?>app/adms/assets/images/icons_tools/<?php echo $icone_soft_2; ?>">
					</a>
					</div>
				</dd>
			</dl>

			<dl class="row">
				<dt class="col-sm-3">Descrição Ferramenta 2</dt>
				<dd class="col-sm-3"><?php echo $desc_soft_2; ?></dd>
			</dl>
			<hr>

			<dl class="row">
				<dt class="col-sm-3">Imagems icones Ferramenta 3</dt>
				<dd class="col-sm-2 icon-tools">
					<div class="img-tools">
						<a href="<?php echo URLADM ?>softimg3">
						<img src="<?php URLADM; ?>app/adms/assets/images/icons_tools/<?php echo $icone_soft_3; ?>">
						</a>
					</div>
					</dd>
			</dl>

			<dl class="row">
				<dt class="col-sm-3">Descrição Ferramenta 3</dt>
				<dd class="col-sm-3"><?php echo $desc_soft_3; ?></dd>
			</dl>
			<hr>

			<dl class="row">
				<dt class="col-sm-3">Imagens icones Ferramenta 4</dt>
				<dd class="col-sm-2 icon-tools">
					<div class="img-tools">
						<a href="<?php echo URLADM ?>softimg4">
						<img src="<?php URLADM; ?>app/adms/assets/images/icons_tools/<?php echo $icone_soft_4; ?>">
						</a>
					</div>
					</dd>
			</dl>

			<dl class="row">
				<dt class="col-sm-3">Descrição Ferramenta 4</dt>
				<dd class="col-sm-3"><?php echo $desc_soft_4; ?></dd>
			</dl>
			<hr>
		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Ferramentas de trabalho não tem nenhum registro!</div>';
 }
?>

<!-- COMPETÊNCIAS -->
<a name="competencias">		
<?php
				if (isset($_SESSION['msg_comp'])) {
					echo $_SESSION['msg_comp'];
					unset($_SESSION['msg_comp']);
				}
			?>	
	<div class="conteudo">

			<h3>Competências Pessoais</h3>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>competencias" class="btn btn-warning btn-sm">Editar</a>
			</div>
			<hr>

			<?php
 if (!empty($this->dados['home']['competencias'])) {	
 	extract($this->dados['home']['competencias'])
 ?>

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Titulo da Competências</dt>
			  <dd class="col-sm-9"><?php echo $titulo_competencia; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Competência 1</dt>
			  <dd class="col-sm-6"><?php echo $desc_comp_1; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Competência 2</dt>
			  <dd class="col-sm-6"><?php echo $desc_comp_2; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Competência 3</dt>
			  <dd class="col-sm-6"><?php echo $desc_comp_3; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Competência 4</dt>
			  <dd class="col-sm-6"><?php echo $desc_comp_4; ?></dd>
			</dl>
			
			<dl class="row">
			  <dt class="col-sm-3">Competência 5</dt>
			  <dd class="col-sm-6"><?php echo $desc_comp_5; ?></dd>
			</dl>			
			<hr>
		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Competências Pessoais, não há nenhum registro!</div>';
 }
?>

<!-- FORMAÇÃO -->

	<div class="conteudo">
		<a name="formacao">
	<?php
				if (isset($_SESSION['msg_forma'])) {
					echo $_SESSION['msg_forma'];
					unset($_SESSION['msg_forma']);
				}
			?>		
			<h3>Formação</h3>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>formacao" class="btn btn-warning btn-sm">Editar</a>
			</div>
			<hr>
			<?php
 if (!empty($this->dados['home']['formacao'])) {	
 	extract($this->dados['home']['formacao'])
 ?>

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Titulo da Formação</dt>
			  <dd class="col-sm-9"><?php echo $titulo_formacao; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Ano conclusão curso 1</dt>
			  <dd class="col-sm-6"><?php echo $ano_1; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Nome do Curso 1</dt>
			  <dd class="col-sm-6"><?php echo $curso_1; ?></dd>
			</dl>
			<hr>
			<dl class="row">
			  <dt class="col-sm-3">Ano conclusão curso 2</dt>
			  <dd class="col-sm-6"><?php echo $ano_2; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Nome do Curso 2</dt>
			  <dd class="col-sm-6"><?php echo $curso_2; ?></dd>
			</dl>
			<hr>
			<dl class="row">
			  <dt class="col-sm-3">Ano conclusão curso 3</dt>
			  <dd class="col-sm-6"><?php echo $ano_3; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Nome do Curso 3</dt>
			  <dd class="col-sm-6"><?php echo $curso_3; ?></dd>
			</dl>
			<hr>
			<dl class="row">
			  <dt class="col-sm-3">Ano conclusão curso 4</dt>
			  <dd class="col-sm-6"><?php echo $ano_4; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Nome do Curso 4</dt>
			  <dd class="col-sm-6"><?php echo $curso_4; ?></dd>
			</dl>		
			<hr>
		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Competências Pessoais, não há nenhum registro!</div>';
 }
?>

<!-- REDES SOCIAIS -->
	<div class="conteudo">
	<a name="sociais">
	<?php
		if (isset($_SESSION['msg_sociais'])) {
			echo $_SESSION['msg_sociais'];
			unset($_SESSION['msg_sociais']);
		}
	?>	
			<h3>Redes Sociais</h3>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>sociais" class="btn btn-warning btn-sm">Editar</a>
			</div>
			<hr>
			<?php
 if (!empty($this->dados['home']['sociais'])) {	
 	extract($this->dados['home']['sociais'])
 ?>

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Titulo Redes Sociais</dt>
			  <dd class="col-sm-9"><?php echo $titulo_sociais; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Icone Behance (fontawesome não é imagem)</dt>
			  <dd class="col-sm-6 icon-sociais"><i class="<?php echo $icone_sociais_1; ?>"></i></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Código Behance</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $icone_sociais_1; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Link Behance</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $link_sociais_1; ?></dd>
			</dl>			
			<hr>

			<dl class="row">
			  <dt class="col-sm-3">Icone Instagram (font awesome não é imagem)</dt>
			  <dd class="col-sm-6 icon-sociais"><i class="<?php echo $icone_sociais_2; ?>"></i></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Código Instagram</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $icone_sociais_2; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Link Instagram</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $link_sociais_2; ?></dd>
			</dl>			
			<hr>

			<dl class="row">
			  <dt class="col-sm-3">Icone FaceBook (fontawesome não é imagem)</dt>
			  <dd class="col-sm-6 icon-sociais"><i class="<?php echo $icone_sociais_4; ?>"></i></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Código Facebook</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $icone_sociais_4; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Link Facebook</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $link_sociais_4; ?></dd>
			</dl>			
			<hr>

			<dl class="row">
			  <dt class="col-sm-3">Icone Gmail (fontawesome não é imagem)</dt>
			  <dd class="col-sm-6 icon-sociais"><i class="<?php echo $icone_sociais_3; ?>"></i></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Código Gmail</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $icone_sociais_3; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Link Gmail</dt>
			  <dd class="col-sm-6 icon-sociais"><?php echo $link_sociais_3; ?></dd>
			</dl>			
			<hr>


		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Redes Sociais, não há nenhum registro!</div>';
 }
?>

<!-- CURSOS -->
	<div class="conteudo">
	<a name="cursos">
	<?php
		if (isset($_SESSION['msg_cursos'])) {
			echo $_SESSION['msg_cursos'];
			unset($_SESSION['msg_cursos']);
		}
	?>			
			<h3>Cursos Extras</h3>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>cursos" class="btn btn-warning btn-sm">Editar</a>
			</div>
			<hr>
			<?php
 if (!empty($this->dados['home']['cursos'])) {	
 	extract($this->dados['home']['cursos'])
 ?>

		<div>
			 <dl class="row" >
			  <dt class="col-sm-3">Titulo Cursos Extras</dt>
			  <dd class="col-sm-9"><?php echo $titulo_curso; ?></dd>
			</dl>

			<dl class="row" >
			  <dt class="col-sm-3">Cursos Extra 1</dt>
			  <dd class="col-sm-9"><?php echo $desc_curso_1; ?></dd>
			</dl>

			<dl class="row" >
			  <dt class="col-sm-3">Cursos Extra 2</dt>
			  <dd class="col-sm-9"><?php echo $desc_curso_2; ?></dd>
			</dl>

			<dl class="row" >
			  <dt class="col-sm-3">Cursos Extra 3</dt>
			  <dd class="col-sm-9"><?php echo $desc_curso_3; ?></dd>
			</dl>

			<dl class="row" >
			  <dt class="col-sm-3">Cursos Extra 4</dt>
			  <dd class="col-sm-9"><?php echo $desc_curso_4; ?></dd>
			</dl>

			<dl class="row" >
			  <dt class="col-sm-3">Cursos Extra 5</dt>
			  <dd class="col-sm-9"><?php echo $desc_curso_5; ?></dd>
			</dl>
			
			<hr>


		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Cursos extras, não há nenhum registro!</div>';
 }
?>
</div>

<!-- FIM SOBRE MIM DA PÁGINA HOME --->

<!-- GALERIA PROFISSIONAL DA PÁGINA HOME --->
<a name="galerias">
<div>
	<div>
		<div class="mr-auto guia">
			<h2>Galeria Profissional</h2>
			<div class="p-2 bt-edit">
				<a href="<?php echo URLADM ?>galerias" class="btn btn-warning btn-sm">Editar</a>
			</div>
	</div>
		
	</div>
		<div class="conteudo">
			<?php
 if (!empty($this->dados['home']['galeria_profissional'])) {	
 	extract($this->dados['home']['galeria_profissional'])
 ?>

		<div>
			 <dl class="row" >
				  <dt class="col-sm-3">Titulo Galeria Profissional</dt>
				  <dd class="col-sm-9"><?php echo $titulo_gal_prof; ?></dd>
			</dl>

			<dl class="row">
			  <dt class="col-sm-3">Imagem 1</dt>
			  <dd class="col-sm-3 gal-prof"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_1; ?>"></dd>
			  <dt class="col-sm-2 gal-text-2 text-center">Imagem 2</dt>
			  <dd class="col-sm-3 gal-prof-2"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_2; ?>"></dd>
			</dl>

			<dl class="row" >
				  <dt class="col-sm-3">Descrição Imagem</dt>
				  <dd class="col-sm-5"><?php echo $desc_gal_prof_1; ?></dd>
				  <dd class="col-sm-3"><?php echo $desc_gal_prof_2; ?></dd>
			</dl>
			<hr>

			<dl class="row">
			  <dt class="col-sm-3">Imagem 3</dt>
			  <dd class="col-sm-3 gal-prof"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_3; ?>"></dd>
			  <dt class="col-sm-2 gal-text-2 text-center">Imagem 4</dt>
			  <dd class="col-sm-3 gal-prof-2"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_4; ?>"></dd>
			</dl>

			<dl class="row" >
				  <dt class="col-sm-3">Descrição Imagem</dt>
				  <dd class="col-sm-5"><?php echo $desc_gal_prof_3; ?></dd>
				  <dd class="col-sm-3"><?php echo $desc_gal_prof_4; ?></dd>
			</dl>
			
			<hr>

			<dl class="row">
			  <dt class="col-sm-3">Imagem 5</dt>
			  <dd class="col-sm-3 gal-prof"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_5; ?>"></dd>
			  <dt class="col-sm-2 gal-text-2 text-center">Imagem 6</dt>
			  <dd class="col-sm-3 gal-prof-2"><img src="<?php URLADM; ?>app/adms/assets/images/galeria/<?php echo $img_gal_prof_6; ?>"></dd>
			</dl>

			<dl class="row" >
				  <dt class="col-sm-3">Descrição Imagem</dt>
				  <dd class="col-sm-5"><?php echo $desc_gal_prof_5; ?></dd>
				  <dd class="col-sm-3"><?php echo $desc_gal_prof_6; ?></dd>
			</dl>
			
			<hr>


		</div>

	</div>

<?php
 }else{
 	echo '<div class="alert alert-danger" role="alert">Cursos extras, não há nenhum registro!</div>';
 }
?>
</div>
</div>