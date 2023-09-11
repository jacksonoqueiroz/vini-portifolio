<?php

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

?>

<div class="container">

<?php
echo "Bem Vindo " . $_SESSION['usuario_nome'] . "<br>";
echo "<a href='" .URLADM. "sair'>Sair</a>";
?>

</div>