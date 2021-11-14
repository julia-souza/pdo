<?php
    include 'engine/db_connect.php'
?>

<article>
        <?php
            // $usuario = 'Julia';
            
            $consulta = $pdo->prepare("SELECT * FROM  cliente");

             // $consulta = $pdo->prepare("SELECT * FROM  cliente WHERE nome = '$usuario'");

            $consulta->execute();
            
            $qtdRegistros = $consulta->rowCount();

            foreach($consulta as $exibe){
        ?>
            <p>Nome: <?= $exibe['nome']; ?> </p>
            <p>ID: <?= $exibe['id']; ?> </p>
            <br>
        <?php
            }
        ?>
    </article>