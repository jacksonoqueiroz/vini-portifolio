<?php

include_once 'conexao.php';

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

?>

<div class="container">
    <br>

<h2>Mensagens recebidas</h2>
<br>
<?php
    
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }   


   
        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);

        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        // echo "<pre>";
        // var_dump($pagina);
        //  echo "</pre>";

         //Setar quantidade de registro por página
         $limite_resultado = 3;

         // Calcular o início da visualização
         $inicio = ($limite_resultado * $pagina) - $limite_resultado;

        $query_message = "SELECT id, name, email, subject, message, created FROM  msgs_contatos LIMIT $inicio, $limite_resultado";
        $result_message = $conn->prepare($query_message);
        $result_message->execute();

        if (($result_message) AND ($result_message->rowCount() !=0 )) {

            ?>


            <div class="table-responsive">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <!--<th scope="col">Id</th>-->    
                            <th scope="col">Nome</th>
                           <!-- <th scope="col">E-mail</th>-->
                            <th scope="col">Assunto</th>
                            <!--<th scope="col">Messagem</th>-->
                    </tr>
                    </thead>
                      <tbody>
            <?php
            while($row_message = $result_message->fetch(PDO::FETCH_ASSOC)){
                
                extract($row_message);
                /*echo "Nome:  $name<br>";
                echo "Email: $email <br>";
                echo "Assunto: $subject <br>";
                echo "Mesagem: $message <br>";
                echo "<hr>";*/?>

              
                      
                        <tr>
                            
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <!--<td scope="col"><?php echo $id ?></td>-->
                                <td scope="row"><?php echo $name ?></td>
                               <!-- <td><?php echo $email ?></td>-->
                                <td><?php echo $subject ?></td>
                                <!--<td><?php  echo $message ?></td>-->
                                <td><a href="<?php echo URLADM; ?>apagar?id=<?php echo $id ?>">
                                    <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                        </button></a></td>
                                <td><a href="<?php echo URLADM; ?>visualizar?id=<?php echo $id ?>"><button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                            </button></a></td>

                        </tr>
                       
                    
                <?php
            }




        }else{
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Nenhum registro foi encontrado!</div>';
        }

    ?>
    </tbody>
                </table>
                </div>

    <?php

    //Contar a quantidade de registro no Bd
            $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM msgs_contatos";
            $result_qnt_registros = $conn->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);


            //Quantidade de página
            $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_resultado);

            //Máximo de link 
            $maximo_link = 2;

           if ($row_qnt_registros['num_result'] > $limite_resultado) {
               ?>
               <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="<?php echo "mensagem?page=1" ?>">Primeira</a></li>

                <?php
                    
                    for($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina -1; $pagina_anterior++){
                            if($pagina_anterior >= 1){
                            ?>
                            <li class="page-item"><a class="page-link" href="<?php echo "mensagem?page=$pagina_anterior"; ?>"><?php echo $pagina_anterior;?></a></li>
                            <?php
                            }
                    }
                ?>                
                <li class="page-item"><a class="page-link" href="#"><?php echo $pagina ?></a></li>

                <?php

                    for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++){
                        if($proxima_pagina <= $qnt_pagina){
                            ?>
                            <li class="page-item"><a class="page-link" href="<?php echo "mensagem?page=$proxima_pagina"; ?>"><?php echo $proxima_pagina ?></a></li>
                            <?php
                        }
                    }
                ?>

                


                <li class="page-item"><a class="page-link" href="<?php echo "mensagem?page=$qnt_pagina" ?>">Última</a></li>
              </ul>
            </nav>
            
            <?php
           }


            ?>
           


            
            

</div>

