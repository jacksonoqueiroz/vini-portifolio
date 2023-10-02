<?php
session_start();
ob_start();
include_once 'conexao.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/login/logo.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	 <link href="css/signin.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
	<title>Atualizar Senha | vini-portifólio</title>
</head>
<body>
	<form method="POST" action="" class="form-signin">
		<?php
		$usuario = "";
			if (isset($dados['senha'])) {
				$usuario = $dados['senha'];
			}
		?>
	<img class="mb-4 img-rec" src="images/login/logo.png" alt="logo" style="margin-left: 120px;" width="72" height="72">
	<h1 class="h3 mb-3 font-weight-normal text-center">Atualizar Senha</h1>
	<?php
		//-----Variavel que vem junto com a url pode ser o id --------
		$chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);
		if (!empty($chave)) {
		// 	echo "<pre>";
		// var_dump($chave);
		// echo "</pre>";

		$query_usuario = "SELECT id
						 FROM usuarios
						 WHERE recuperar_senha =:recuperar_senha
						 LIMIT 1";
		$result_usuario = $conn->prepare($query_usuario);
		$result_usuario->bindParam(':recuperar_senha', $chave, PDO::PARAM_STR);
		$result_usuario->execute();

			if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
				$row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
				$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
				// echo "<pre>";
				// var_dump($dados);
				// echo "</pre>";
				if (!empty($dados['SendNovaSenha'])) {
					$senha_usuario = password_hash($dados['senha'], PASSWORD_DEFAULT);
					$recupar_senha = 'NULL';
					$query_up_usuario = "UPDATE usuarios 
									SET senha =:senha,
									recuperar_senha =:recuperar_senha,
									modified=NOW()
									WHERE id=:id 
									LIMIT 1";
				$result_up_usuario = $conn->prepare($query_up_usuario);
				$result_up_usuario->bindParam(':senha', $senha_usuario, PDO::PARAM_STR);
				$result_up_usuario->bindParam(':recuperar_senha', $recupar_senha);
				$result_up_usuario->bindParam(':id', $row_usuario['id'], PDO::PARAM_INT);

				if ($result_up_usuario->execute()) {
					$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Senha Atualizada!</div>';
					//MUDAR O ENDEREÇO NA PUBLICAÇÃO DO SITE
					header("Location: http://localhost/vini-portifolio/adm");
				}else{
					echo '<div class="alert alert-danger" role="alert">Tente novamente!</div>';
				}
				}
			}else{
				$_SESSION['msg_rec'] = '<div class="alert alert-danger" role="alert">Link inválido, solicite um novo link para atualizar a senha!</div>';
				header("Location: recuperarsenha.php");
			}
		}else{
			$_SESSION['msg_rec'] = '<div class="alert alert-danger" role="alert">Link inválido, solicite novo link para atualizar a senha!</div>';
			header("Location: recuperarsenha.php");
		}
		
	?><label for="senha" class="sr-only">Senha</label>
		<div class="senha">
  		<input name="senha" type="password" id="senha" class="form-control mb-4" placeholder="Digite uma nova senha" value="<?php echo $usuario; ?>"><i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
  		</div>
	
	<input name="SendNovaSenha" type="submit" value="Atualizar" class="btn btn-lg btn-primary btn-block">
	
	<p class="text-center"><a href="http://localhost/vini-portifolio/adm">Lembrei a senha</a></p>

</form>

<script src="js/main.js"></script>
</body>
</html>