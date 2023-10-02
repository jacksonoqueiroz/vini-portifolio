<?php
session_start();
ob_start();
include_once 'conexao.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'lib/vendor/autoload.php';
$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/login/logo.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <link href="css/signin.css" rel="stylesheet">

	<title>Recuperar Senha | Vini-porifólio</title>
</head>
<body>
<form method="POST" action="" class="form-signin">
	<img class="mb-4 img-rec" src="images/login/logo.png" alt="logo" style="margin-left: 120px;" width="72" height="72">
	<h1 class="h3 mb-3 font-weight-normal text-center">Recuperar Senha</h1>

	<?php
		$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		
		if (!empty($dados['SendRecuperar'])) {
			// echo "<pre>";
			// var_dump($dados);
			// echo "</pre>";
			$query_usuario = "SELECT id, nome, email 
							FROM usuarios 
							WHERE email =:email LIMIT 1";
			$result_usuario = $conn->prepare($query_usuario);
			$result_usuario->bindParam(':email', $dados['usuario'], PDO::PARAM_STR);
			$result_usuario->execute();
			if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
				$_SESSION['msg'] = '<div class="alert alert-success" role="alert">E-mail enviado!</div>';
				$row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
				$chave_recuperar_senha = password_hash($row_usuario['id'], PASSWORD_DEFAULT);
				//echo "Chave $chave_recuperar_senha";
				$query_up_usuario = "UPDATE usuarios 
									SET recuperar_senha =:recuperar_senha 
									WHERE id=:id 
									LIMIT 1";
				$result_up_usuario = $conn->prepare($query_up_usuario);
				$result_up_usuario->bindParam(':recuperar_senha', $chave_recuperar_senha, PDO::PARAM_STR);
				$result_up_usuario->bindParam(':id', $row_usuario['id'], PDO::PARAM_INT);

				if ($result_up_usuario->execute()) {
			//chave com o endereço para atualizar a senha mudar na publicação tirar o localhost
				$link = "http://localhost/vini-portifolio/adm/app/adms/Views/login/recuperar/atualizarsenha.php?chave=$chave_recuperar_senha";
		try{
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                  //Retire na hora de hospedar
		$mail->CharSet = 'UTF-8';
	    $mail->isSMTP();                                        //Envia via SMTP
	    $mail->Host       = 'sandbox.smtp.mailtrap.io';         //Email para enviar ex: gmail
	    $mail->SMTPAuth   = true;                               //Enable SMTP authentication
	    $mail->Username   = '01a8b85cc20045';                   //SMTP username
	    $mail->Password   = 'bc4e5cecdf63c4';                     //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       
	    $mail->Port       = 2525;

	    //Recebimento
    	$mail->setFrom('desenvolvimento@infowebarts.com.br', 'desenvolvimento');
    	$mail->addAddress($row_usuario['email'], $row_usuario['nome']);

    	//Conteúdo
    	$mail->isHTML(true);                                  
    	$mail->Subject = 'Recuperar a Senha';
    	$mail->Body    = 'Prezado(a) ' . $row_usuario['nome'] .".<br><br>Você solicitou alteração de senha.<br><br>Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: <br><br><a href='" . $link . "'>" . $link . "</a><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
        $mail->AltBody = 'Prezado(a) ' . $row_usuario['nome'] ."\n\nVocê solicitou alteração de senha.\n\nPara continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: \n\n" . $link . "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";

                    $mail->send();
    	$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Enviado um e-mail com instruções, para recuparar sua senha. Acessa sua caixa de email para recuparar a senha.</div>';
					//MUDAR O ENDEREÇO NA PUBLICAÇÃO DO SITE
					header("Location: http://localhost/vini-portifolio/adm");												

					}catch (Exception $e) {
    					echo "<div class='alert alert-danger' role='alert'>Houve algum erro e o email não foi enviado!</div>{$mail->ErrorInfo}";
					}


				}else{
					echo "<div class='alert alert-danger' role='alert'>Tente novamente!</div>"; 
				}
			}else{
				echo "<div class='alert alert-danger' role='alert'>E-mail NÃO cadastrado!</div>";
			}
		}

		
  		if (isset($_SESSION['msg_rec'])) {
		echo $_SESSION['msg_rec'];
		unset($_SESSION['msg_rec']);
		}


	?>



	<input name="usuario" type="text" id="usuario" class="form-control mb-4" placeholder="Digite o Email">
	<input name="SendRecuperar" type="submit" value="Recuperar" class="btn btn-lg btn-primary btn-block">
	<p class="text-center"><a href="http://localhost/vini-portifolio/adm">Lembrei a senha</a></p>	

</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="app/adms/assets/js/personalizado.js"></script>
</body>
</html>


<!--curl \
--ssl-reqd \
--url 'smtp://sandbox.smtp.mailtrap.io:2525' \
--user '01a8b85cc20045:bc4e5cecdf63c4' \
--mail-from from@example.com \
--mail-rcpt to@example.com \
--upload-file - <<EOF
From: Magic Elves <from@example.com>
To: Mailtrap Inbox <to@example.com>
Subject: You are awesome!
Content-Type: multipart/alternative; boundary="boundary-string"

--boundary-string
Content-Type: text/plain; charset="utf-8"
Content-Transfer-Encoding: quoted-printable
Content-Disposition: inline

Congrats for sending test email with Mailtrap!

If you are viewing this email in your inbox – the integration works.
Now send your email using our SMTP server and integration of your choice!

Good luck! Hope it works.

--boundary-string
Content-Type: text/html; charset="utf-8"
Content-Transfer-Encoding: quoted-printable
Content-Disposition: inline
