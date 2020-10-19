<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $id_categoria_servico = $_POST["id_categoria_servico"];
    $nome_servico = $_POST["nome_servico"];
    $preco_servico = $_POST["preco_servico"];
    $data_servico = $_POST["data_servico"];

    $dataFormat = $date = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$data_servico)));
        
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
        $sql = "INSERT INTO servico (id_categoria_servico, nome_servico, preco_servico, data_servico) VALUES 
            ('$id_categoria_servico', '$nome_servico', '$preco_servico', '$dataFormat')";
    // die($sql);
   
    // executa a query
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: servicos_outros.php");
?>