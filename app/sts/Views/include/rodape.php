<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

?>

<!-- RODAPÉ -->
					 <div class="jumbotron rodape">
					 	<div class="container">
					 		<div class="row">
					 			<div class="col-12 col-sm-12 col-md-4">
					 				<h5><?php echo $this->dados['topo']['titulo_topo']; ?></h5>
					 				<ul class="list-unstyled">
					 					<li>
					 						<a href="#home" class="link-rodape">Home</a>
					 					</li>
					 					<li>
					 						<a href="#galeria" class="link-rodape">Galeria</a>
					 					</li>
					 					<li>
					 						<a href="#sobremim" class="link-rodape">Sobre Mim</a>
					 					</li>
					 					<li>
					 						<a href="#contato" class="link-rodape">Contato</a>
					 					</li>
					 				</ul>					 				
					 			</div>
					 			<div class="col-12 col-sm-12 col-md-4">
					 				<h5>Contato</h5>
					 				<ul class="list-unstyled">
					 					<li>
					 						<a href="<?php echo $this->dados['contato']['telefone_contato']; ?>" class="link-rodape"><?php echo $this->dados['contato']['telefone_contato']; ?></a>
					 					</li>
					 					<li>
					 						<a href="<?php echo $this->dados['contato']['email_contato']; ?>" class="link-rodape"><?php echo $this->dados['contato']['email_contato']; ?></a>
					 					</li>
					 					<li>
					 						<a href="<?php echo $this->dados['sociais']['link_sociais_1']; ?>" class="link-rodape"><?php echo $this->dados['sociais']['link_sociais_1']; ?></a>
					 					</li>
					 				</ul>
					 			</div>
					 			<div class="col-12 col-sm-12 col-md-4">
					 				<h5><?php echo $this->dados['sociais']['titulo_sociais']; ?></h5>
					 				<ul class="list-unstyled">
					 					<li>
					 						<a href="<?php echo $this->dados['sociais']['link_sociais_2']; ?>" target="_blank" class="link-rodape"><i class="<?php echo $this->dados['sociais']['icone_sociais_2']; ?>"></i><p><?php echo $this->dados['sociais']['link_sociais_2']; ?></p></a>
					 					</li>
					 					<li>
					 						<a href="<?php echo $this->dados['sociais']['link_sociais_4']; ?>" target="_blank" class="link-rodape"><i class="<?php echo $this->dados['sociais']['icone_sociais_4']; ?>"></i><p><?php echo $this->dados['sociais']['link_sociais_4']; ?></p></a>
					 					</li>
					 					
					 					<li>
					 						<a href="<?php echo $this->dados['sociais']['link_sociais_1']; ?>" class="link-rodape"><i class="<?php echo $this->dados['sociais']['icone_sociais_1']; ?>"></i><p><?php echo $this->dados['sociais']['link_sociais_1']; ?></p></a>
					 					</li>
					 				</ul>			
					 			</div>
					 		</div>
					 	</div>
					 </div>
					<!-- FIM DO RODAPÉ -->