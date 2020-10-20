<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $id_servico = $_POST["id_servico"];
    $id_categoria_servico = $_POST["id_categoria_servico"];
    $nome_servico = $_POST["nome_servico"];
    $preco_servico = $_POST["preco_servico"];
    $data_servico = $_POST["data_servico"];

    $dataFormat = $date = date("Y-m-d",strtotime(str_replace('/','-',$data_servico)));
        
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
    if($id_servico == 0){
        $sql = "INSERT INTO servico (id_categoria_servico, nome_servico, preco_servico, data_servico) VALUES 
            ('$id_categoria_servico', '$nome_servico', '$preco_servico', '$dataFormat')";
    }else{
        $sql = "UPDATE servico SET nome_servico='$nome_servico', preco_servico='$preco_servico', 
            data_servico='$dataFormat' WHERE id_servico='$id_servico'";
    }
//    die($sql);

    // executa a query
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: servico_cadastrar.php");
?>