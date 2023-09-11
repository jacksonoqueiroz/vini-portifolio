<?php
if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}
?>

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

				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <div class="container">
				    <a class="navbar-brand" href="<?php URLADM  ?>home">Vini-Portifólio</a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>

				    <div class="collapse navbar-collapse" id="navbarsExample07">
				      <ul class="navbar-nav mr-auto">
				        <li class="nav-item">
				          <a class="nav-link" href="<?php echo URLADM; ?>view">Detalhes Página Home</a>
				        </li>
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar Site</a>
				          <div class="dropdown-menu" aria-labelledby="dropdown07">
				            <a class="dropdown-item" href="<?php echo URLADM; ?>view">Home</a>
				            <a class="dropdown-item" href="#">Another action</a>
				            <a class="dropdown-item" href="#">Something else here</a>
				          </div>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Link</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Disabled</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="<?php echo URLADM; ?>sair">Sair</a>
				        </li>
				        
				      </ul>
				      
				    </div>
				  </div>
				</nav>

				<!-- FIM NAVEGADOR --------------------------->
