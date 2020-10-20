<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $nome_categoria = $_POST["nome_categoria"];
        
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
        $sql = "INSERT INTO categoria_servico (nome_categoria) VALUES 
            ('$nome_categoria')";
    // die($sql);

    // executa a query        
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: servico_cadastrar.php");
?>