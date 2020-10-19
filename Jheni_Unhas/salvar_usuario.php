<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    $nome = $_POST["nome"];
    $nome_usuario = $_POST["nome_usuario"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
        
	include "conexao.php";

    // cria a instrução SQL que vai inserir os dados
    // Permissão para Manicures Cadastrar e Agendar serviços.-- 1 = Admin / 2 = Manicure / 3 = Cliente //
    $sql = "INSERT INTO usuario (usuario, senha, nome, email, permissao) VALUES 
            ('$nome_usuario', '$senha', '$nome', '$email', '2')";
//   die($sql);
    // executa a query
    $conn->query($sql);
    
    $conn->close();
    
  header("Location: login.php");
?>