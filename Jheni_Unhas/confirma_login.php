<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json;charset=UTF-8');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

	include "conexao.php";

    $sql = "SELECT * FROM usuario WHERE 
        usuario=\"$usuario\" AND senha=\"$senha\"";
    
    $result = $conn->query($sql);

    $nome = "";
//    die($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_object();
        setcookie("id_usuario", $row->id);
        setcookie("nome_usuario", $row->usuario);
        setcookie("senha_usuario", $row->senha);
        setcookie("nome", $row->nome);
        header("Location: carrinho.php");
    }else{
        //echo $senha = 1234;
		header("Location: login.php");
    }

    $conn->close();

?>