<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    if(isset($_POST['query'])){
        $keyword = strval($_POST['query']);
    }

    if(isset($_GET['query'])){
        $keyword = strval($_GET['query']);
    }

    $nome_servico = $keyword;

	include "conexao.php";
    
    $sql = "SELECT * FROM servico WHERE nome_servico=$nome_servico ";		
    $result = $conn->query($sql);
    
    if($result){
        $outp = array();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        if (sizeof($outp) > 0) {
            foreach($outp as $row) {
                $km[] = $row["nome_servico"];
            }
            echo json_encode($nome_servico);
        }
    }

    
    if(isset($_GET['nome_servico'])){
        
        $sql = "SELECT * FROM servico WHERE nome_servico=$nome_servico";	
        $result = $conn->query($sql);
        
        $outp = array();
        $outp = $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($outp);
    }
	$conn->close();
    
?>