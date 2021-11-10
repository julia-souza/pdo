<?php
    /*Estabelecendo conecxão com o banco de dados mysql usando PDO*/
    ob_start();
    try{
        $pdo = new PDO('mysql: host=localhost; dbname=curso_teste', 'root', '');
    }catch(PDOException $e){
        echo 'Erro ao conectar ao DataBase: '.$e->getMessage();
    }   

?>

<?php
/*
    ANOTAÇÕES: 

    ob_start();
    $pdo = new PDO('mysql: host=localhost; dbname=curso_teste', 'root', '');
    //  paramentros: 
    //     1: tipo de banco com seu host(servidor) e nome da base 
    //     2: o usuário do banco
    //     3: senha do banco 
    

    if($pdo){
        echo 'Conectado ao banco';
    }else{
        echo 'Erro de conexão com DB';
    }
    exit;
*/

?>