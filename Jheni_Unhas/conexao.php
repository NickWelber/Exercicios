<?php

// definicões de host, database, usuário e senha
    $host = "localhost";
    $db = "manicure";
    $user = "root";
    $pass = "";

//conecta ao banco de dados
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8");

    if($conn->connect_error){
        die("Falha na Conexão: " .$conn->connect_error);
    }

?>