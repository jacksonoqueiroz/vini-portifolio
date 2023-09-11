<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo URLADM; ?>app/adms/assets/images/icone/<?php echo $this->dados['cabecalho']['img_favicon']; ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>app/sts/assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>app/sts/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/personalizado.css">
	<title><?php echo $this->dados['cabecalho']['titulo_pagina']; ?></title>
</head>
<body>