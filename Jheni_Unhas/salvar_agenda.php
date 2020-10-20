<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $id_agenda = $_POST["id_agenda"];
    $data_servico = $_POST["data_servico"];
    $horario_servico = $_POST["horario_servico"];
    $situacao = $_POST["situacao"];
    $id_cliente = $_POST["id_cliente"];
    $id_manicure = $_POST["id_manicure"];
    $id_servico = $_POST["id_servico"];

    $dataFormat = $date = date("Y-m-d",strtotime(str_replace('/','-',$data_servico)));
 
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
    if($id_agenda == 0){
        $sql = "INSERT INTO agenda (data_servico, horario_servico, situacao, id_servico, id_cliente, id_manicure) VALUES 
            ('$dataFormat', '$horario_servico', '$situacao', '$id_servico', '$id_cliente', '$id_manicure')";
    }else{
        $sql = "UPDATE agenda SET data_servico='$dataFormat', horario_servico='$horario_servico', 
                situacao='$situacao', id_servico='$id_servico', id_cliente='$id_cliente', 
                    id_manicure='$id_manicure' WHERE id_agenda='$id_agenda'";
    }

//  die($sql);
    // executa a query
    $conn->query($sql);
    
    $conn->close();
    
    header("Location: agenda_cadastrar.php");
?>