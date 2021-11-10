<?php
    include 'engine/db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Dados Cadastrados</h1>


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

    <?php
        /*Concatenação de variáveis*/
        // $nome = 'Julia';
        // $idade = 20;
        // echo 'Meu nome é ' .$nome .' e tenho ' .$idade .' anos '; 

        // $array_frutas = array('Laranja', 'Uva', 'Morango');
       
   ?>

</body>
</html>