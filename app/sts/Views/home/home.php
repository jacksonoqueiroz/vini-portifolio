<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}


/*echo "<pre>";
var_dump($this->dados);
echo "</pre>";*/

?>
<!-- PERSONALIZAÇÃO DO CSS PARA DISPOSITIVOS RESPONSIVOS -->
<style type="text/css">
.descr-top {
	background-image: url('<?php echo URLADM?>app/adms/assets/images/home_topo/<?php echo $this->dados['topo']['imagem_topo']; ?>')
}
@media screen and (max-width: 480px){
.descr-top{
	background-image: url('<?php echo URLADM?>app/adms/assets/images/home_topo/<?php echo $this->dados['topo']['imagem_topo_sm']; ?>');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	width: auto;
	height: auto;
	padding-top: 150px;
	padding-bottom: 150px;
	color: black;
	border-radius: 0px;
	margin-bottom: 0rem !important;
}
}
.sobre-me{
	background-image: url('adm/app/adms/assets/images/home_sobre/sobre.png');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	padding-top: 150px;
	padding-bottom: 150px;
	color: black;
	border-radius: 0px;
	margin-bottom: 0rem !important;
}
@media screen and (min-width: 481px) and (max-width: 768px){
.descr-top{
	background-image: url('<?php echo URLADM?>app/adms/assets/images/home_topo/<?php echo $this->dados['topo']['imagem_topo_sm']; ?>');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	padding-top: 150px;
	padding-bottom: 550px;
	color: black;
	border-radius: 0px;
	margin-bottom: 0rem !important;
}

</style>

<!-- CÓDIGO AO CLICAR NO LINK E FECHA NOS DISPOSITIVOS MÓVEIS  -->
            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function(){
                   var links = document.querySelectorAll(".navbar-nav li a:not([href='#'])");
                   for(var x=0; x<links.length; x++){
                      links[x].onclick = function(){
                         document.querySelector("button.navbar-toggler").click();
                      }
                   }
                });
            </script>
            <!-- FIM  -->
				
				<!-- NAVEGADOR ------------------------------------>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #000000";>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
					    <ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link" href="#home">HOME</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#galeria">GALERIA</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#sobremim">SOBRE MIM</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#contato">CONTATO</a>
					      </li>					      				     
					    </ul>
					  </div>
					</nav>
					<!-- FIM NAVEGADOR --------------------------->


					

					<!-- TOPO DA PÁGINA------------------------>
				<div class="jumbotron descr-top">
						<h2><a name="home" class="link"></a></h2>
						<div class="container">
							<figure class="lead mb-4 frase">
							    <cite class="author">
							        <?php echo $this->dados['topo']['frase']; ?>
							    </cite>
							    <footer>
							        <cite class="author"><?php echo $this->dados['topo']['autor_frase']; ?></cite>
							    </footer>
							</figure>

						</div>
					</div>
					<!-- FIM DO TOPO DA PÁGINA----------------->

					

					<!-- SOBRE MIM -->
					<div class="jumbotron text-center sobre-me">
						<h2><a name="sobremim" class="link"></a></h2>
						<div class="container">							
							<div class="row">
							    <div class="col">
							      <h2 class="display-4 titulo-sobre"><?php echo $this->dados['sobre']['titulo_sobre']; ?></h2>
							    </div>
							  </div>

							  <!-- SOFTWARES -->
							  <div class="row">
							    <div class="col-lg-12 text-left">
							    	<h2><?php echo $this->dados['sobre']['nome']; ?></h2>
							    </div>
							  </div>
							  <div class="row">
							    <div class="col-lg-4 text-justify">
							      <p><?php echo $this->dados['sobre']['descric_sobre']; ?></p>
							    </div>
							    <div class="col-lg-4 text-left soft">
							      <h3><?php echo $this->dados['softwares']['titulo_softwares']; ?></h3>
							      <p></p>
							      <p><img src="<?php echo URLADM?>app/adms/assets/images/icons_tools/<?php echo $this->dados['softwares']['icone_soft_1']; ?>"> <?php echo $this->dados['softwares']['desc_soft_1']; ?></p>
							      <p><img src="<?php echo URLADM?>app/adms/assets/images/icons_tools/<?php echo $this->dados['softwares']['icone_soft_2']; ?>"> <?php echo $this->dados['softwares']['desc_soft_2']; ?></p>
							      <p><img src="<?php echo URLADM?>app/adms/assets/images/icons_tools/<?php echo $this->dados['softwares']['icone_soft_3']; ?>"> <?php echo $this->dados['softwares']['desc_soft_3']; ?></p>
							      <p><img src="<?php echo URLADM?>app/adms/assets/images/icons_tools/<?php echo $this->dados['softwares']['icone_soft_4']; ?>"> <?php echo $this->dados['softwares']['desc_soft_4']; ?></p>
							    </div>

							    <!-- ITEM COMPETÊNCIA -->
							    <div class="col-lg-4 text-left comp">
							     <h3><?php echo $this->dados['competencias']['titulo_competencia']; ?></h3>
							     <ul class="text-left">
							     	<li><?php echo $this->dados['competencias']['desc_comp_1']; ?></li>
							     	<li><?php echo $this->dados['competencias']['desc_comp_2']; ?></li>
							     	<li><?php echo $this->dados['competencias']['desc_comp_3']; ?></li>
									<!-- PARA ACRESCENTAR MAIS LINHA PARA COMPOTENCIAS--> 
									<li><?php echo $this->dados['competencias']['desc_comp_4']; ?></li>
							     	<li><?php echo $this->dados['competencias']['desc_comp_5']; ?></li> 
							     </ul>
							    </div>
							  </div>

							  <!-- ITEM FORMAÇÃO -->
							  <div class="row">
							  	<div class="col-lg-4 text-left formacao">
							  		<h3><?php echo $this->dados['formacao']['titulo_formacao']; ?></h3>
							  		<strong><?php echo $this->dados['formacao']['ano_1']; ?></strong><p><?php echo $this->dados['formacao']['curso_1']; ?></p>
							  		<strong><?php echo $this->dados['formacao']['ano_2']; ?></strong><p><?php echo $this->dados['formacao']['curso_2']; ?></p>
							  		<strong><?php echo $this->dados['formacao']['ano_3']; ?></strong><p><?php echo $this->dados['formacao']['curso_3']; ?></p>
							  		<strong><?php echo $this->dados['formacao']['ano_4']; ?></strong><p><?php echo $this->dados['formacao']['curso_4']; ?></p>
							  	</div>
							  	<div class="col-lg-4 text-left social">
							  		<h3><?php echo $this->dados['sociais']['titulo_sociais']; ?></h3>
							  		<div class="row">
							  			<div class="col-lg-4"><a href="<?php echo $this->dados['sociais']['link_sociais_1']; ?>" target="_blank" class="social-icon"><i class="<?php echo $this->dados['sociais']['icone_sociais_1']; ?>"></i></a></div>
							  			<div class="col">
							  				<p class="social"><?php echo $this->dados['sociais']['link_sociais_1']; ?></p>
							  			</div>							  			
							  		</div>

							  		<!-- ITEM SOCIAL -->
							  		<div class="row">
							  			<div class="col-lg-4"><a href="<?php echo $this->dados['sociais']['link_sociais_2']; ?>" target="_blank" class="social-icon"><i class="<?php echo $this->dados['sociais']['icone_sociais_2']; ?>"></i></a></div>
							  			<div class="col-lg-4">
							  				<p class="social"><?php echo $this->dados['sociais']['link_sociais_2']; ?></p>
							  			</div>								  			
							  		</div>

							  		<div class="row social-icon">
							  			<div class="col-lg-4"><a href="<?php echo $this->dados['sociais']['link_sociais_3']; ?>" target="_blank" class="social-icon"><i class="<?php echo $this->dados['sociais']['icone_sociais_3']; ?>"></i></a></div>
							  			<div class="col-lg-4">
							  				<p class="social"><?php echo $this->dados['sociais']['link_sociais_3']; ?></p>
							  			</div>							  			
							  		</div>
							  	</div>

							  	<!-- ITEM CURSOS -->
							  	<div class="col-lg-4 text-left curso">
							     <h3><?php echo $this->dados['cursos']['titulo_curso']; ?></h3>
							     <ul class="text-left">
							     	<li><?php echo $this->dados['cursos']['desc_curso_1']; ?></li>
							     	<li><?php echo $this->dados['cursos']['desc_curso_2']; ?></li>
							     	<li><?php echo $this->dados['cursos']['desc_curso_3']; ?></li>
							     	<!-- INSERIR MAIS ITENS DOS CURSOS
							     	<li><?php echo $this->dados['cursos']['desc_curso_4']; ?></li>
							     	<li><?php echo $this->dados['cursos']['desc_curso_5']; ?></li>-->
							     </ul>
							     <div class="col-lg-6 atualizado"><i>Criado: </i><strong><?php echo $this->dados['sobre']['criado_em']; ?></strong>
							     </div>     
							    </div>
							  </div>							  	
							</div>
						</div>

					<!-- FIM DO SOBRE MIM -->

					<!-- TEXTE IMAGEM AUMENTA DE DIMINUI 
					<div class="jumbotron">
						<div class="container">
							<img class="img-fluid" src="images/topo.png"  />
						</div>
					</div>-->
					<!-- FIM TEXTE IMAGEM AUMENTA DE DIMINUI -->

					<!-- GALERIA DE FOTOS -->
					<div class="jumbotron text-center galeria">
						<div class="container">
						<h2><a name="galeria" class="link"></a></h2>
					<section class="gallery min-vh-100">
						     <div class="container-lg">
								<h2 class="display-7"><?php echo $this->dados['galeria_profissional']['titulo_gal_prof']; ?></h2>
						        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_1']; ?>" class="gallery-item" alt="gallery">
						           </div>
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_2']; ?>" class="gallery-item" alt="gallery">
						           </div>
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_3']; ?>" class="gallery-item" alt="gallery">
						           </div>
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_4']; ?>" class="gallery-item" alt="gallery">
						           </div>
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_5']; ?>" class="gallery-item" alt="gallery">
						           </div>
						           <div class="col">
						              <img src="adm/app/adms/assets/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_6']; ?>" class="gallery-item" alt="gallery">
						           </div>
						        </div>
						        </div>

						  </section>
						     </div>
						 </div>

						<!-- Modal galeria de fotos-->
						<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
						        <button type="button"s class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						         <img src="adm/app/adms/assets/images/images/galeria/<?php echo $this->dados['galeria_profissional']['img_gal_prof_1']; ?>" class="modal-img" alt="modal img">
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<!-- FIM DA GALERIA DE FOTOS -->

					<!-- CONTATO -->
					<div class="jumbotron contato">
						<h2><a name="contato" class="link"></a></h2>
						<div class="container">
							<h2 class="display-4 mb-4 text-center"><?php echo $this->dados['contato']['titulo_contato']; ?></h2>
							<div class="row">
								<div class="col-lg-6">
									<h2 class="mt-4 mb-4"><?php echo $this->dados['contato']['subtitulo_contato']; ?></h2>
									<p><i class="<?php echo $this->dados['sociais']['icone_sociais_3']; ?>"></i>  <?php echo $this->dados['contato']['email_contato']; ?></p>
									<p><i class="fab fa-whatsapp"></i>  <?php echo $this->dados['contato']['telefone_contato']; ?></p>
									<p><i class="<?php echo $this->dados['sociais']['icone_sociais_1']; ?>"></i>  <?php echo $this->dados['contato']['observacao_contato']; ?></p>
								</div>
            <div class="col-lg-6">
                <span class="msg"></span>
                <form method="POST" id="insert_form">
                    <input type="hidden" name="url" id="url" value="<?php echo URL; ?>contato" >
                    
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" >
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Seu melhor e-mail" >
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto da mensagem" >
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" class="form-control" id="conteudo" placeholder="Conteúdo da mensagem" ></textarea>
                    </div>
                    <input type="submit" name="CadMsg" id="CadMsg" value="Enviar" class="btn btn-primary">
                </form>
            </div>   
							</div>
						</div>
					</div>
					<!-- FIM DO CONTATO -->
					