<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $id_servico = $_POST["id_servico"];
    
	include "conexao.php";

    // cria a instrução SQL que vai remover os dados
    $sql = "DELETE FROM servico WHERE id_servico=$id_servico";
    
    // executa a query
    $conn->query($sql);
    
    $conn->close();
?>