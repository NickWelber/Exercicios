<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $id_agenda = $_POST["id_agenda"];
    
	include "conexao.php";

    // cria a instrução SQL que vai remover os dados
    $sql = "DELETE FROM agenda WHERE id_agenda=$id_agenda";
    
    // executa a query
    $conn->query($sql);
    
    $conn->close();
?>