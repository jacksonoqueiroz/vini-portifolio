<?php
ob_start();

include_once 'conexao.php';

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Registro não encontrado!</div>';
    header('Location:' .  URLADM . 'mensagem');
    exit();
}

?>

<div class="container">
    <br>


    
<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
        //FORMATAR A COLUNA DE DATA USE ESSA ABAIXO
        $query_msg = "SELECT id, name, email, subject, message, DATE_FORMAT(created, '%d/%m/%Y %H:%i:%s') AS data_envio FROM msgs_contatos WHERE id = $id LIMIT 1";
        $result_msg = $conn->prepare($query_msg);
        $result_msg->execute();


        if (($result_msg) AND ($result_msg->rowCount() != 0)) {
            $row_msg = $result_msg->fetch(PDO::FETCH_ASSOC);
            extract($row_msg);
            // echo "<pre>";
            // var_dump($row_msg);
            // echo "</pre>";

            //Contar a quantidade de registro no Bd
            $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM msgs_contatos";
            $result_qnt_registros = $conn->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);

            $qnt_msm = $row_qnt_registros['num_result'];

            if ($qnt_msm) {
                
                $query_msm_lida = "UPDATE msgs_contatos SET lida=1 WHERE id=$id";
                $result_msm_lida = $conn->prepare($query_msm_lida);
                $result_msm_lida->execute();
            }
            ?>

            
                <div class="row">
                    
                    <div class="col-2">
                        <span class="e-titulo"><?php echo $name ?></span>
                    </div>
                    <div class="col-5 e-assunto">
                         <?php echo $subject ?>
                    </div>
                    <div class="col-3 e-data">
                        <?php echo $data_envio ?>
                        
                    </div>
                </div>
            
            <hr>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank"><div class="email"><?php echo $email ?></div>
            </a>
            
            <div class="e-conteudo">
                <div><?php $subject ?></div>
                <p>

                   <?php echo $message ?> 
                </p>
            </div>

            <?php 
            
        }else{
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Registro não encontrado!</div>';
            header('Location:' .  URLADM . 'mensagem');
        }
    
    ?>


</div>

