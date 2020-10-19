<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $data_servico = $_POST["data_servico"];
    $horario_servico = $_POST["horario_servico"];
    $situacao = $_POST["situacao"];
    $id_cliente = $_POST["id_cliente"];
    $id_manicure = $_POST["id_manicure"];
    $id_venda = $_POST["id_venda"];
    $id_servico = $_POST["id_servico"];

    $dataFormat = $date = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$data_servico)));
 
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
        $sql = "INSERT INTO agenda (data_servico, horario_servico, situacao, id_venda, id_servico, id_cliente, id_manicure) VALUES 
            ('$dataFormat', '$horario_servico', '$situacao', '$id_venda', '$id_servico', '$id_cliente', '$id_manicure')";
    // die($sql); 

    // executa a query
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: agenda_cadastrar.php");
?>