<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

//Criptrografar a senha
//echo password_hash(1234, PASSWORD_DEFAULT);


/*echo "<pre>";
var_dump($this->dados);
echo "</pre>";*/
if (isset($this->dados['form'])) {
	$valorForm = $this->dados['form'];
}
?>


  <form method="POST" action="" class="form-signin">
  <img class="mb-4" src="<?php URLADM; ?>app/adms/assets/images/login/logo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Área restrita</h1>

  <?php
  if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	}
	?>
  
  <label for="usuario" class="sr-only">Usuário</label>
  <input name="usuario" type="text" id="usuario" class="form-control mb-4" placeholder="Digite o Usuário" value="<?php 
	  if(isset($valorForm['usuario'])) { 
	  	echo $valorForm['usuario']; 
	  } 
	?>" required autofocus>

  <label for="senha" class="sr-only">Senha</label>
  <div class="senha">
  <input name="senha" type="password" id="senha" class="form-control mb-4" placeholder="Digite a Senha" required><i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
  </div>
  <input name="SendLogin" type="submit" value="Acessar" class="btn btn-lg btn-primary btn-block">
  <p><a href="app/adms/Views/login/recuperar/recuperarsenha.php">Esqueci a senha</a></p>
  <!--<p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>-->

</form>