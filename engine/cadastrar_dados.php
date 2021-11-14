<?php
    include 'db_connect.php';

    if(isset($_POST['submit'])){
        /*strip_tags = não permite a inserção de tags html protegendo, assim, de ataques sql injection */
        $nome = strip_tags(addslashes($_POST['nome']));
        $email = strip_tags(addslashes($_POST['email']));
        // $senha = strip_tags(addslashes(md5($_POST['senha'])));
        
        // if(empty($nome) || empty($email) || empty($senha)){
        if(empty($nome) || empty($email)){
            echo '<p>Preencha todos os campos!</p>';
            sleep(2);
            include '../insert.php';
        }
        else{
            $insert = $pdo->prepare("INSERT INTO cliente(nome, email) VALUES ('$nome', '$email')");
            
            $insert = $pdo->execute();

            if($insert){
                echo '<p>Cadastro realizado</p>';
            }else{
                echo '<p>Erro ao cadstrar</p>';
            }
        }

    }
    else{
        echo 'error';
    }

?>