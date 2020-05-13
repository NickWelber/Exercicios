<?php
    include "cabecalho.php";
?>

<h3>Objeto RECEITA instânciada no sistema:</h3>
<hr><hr>

<?php
    foreach($_SESSION["receita"] as $r){
        echo "
            Tipo Receita: <b>$r->tipo</b><br>
            Lista de Ingredientes: $r->ingredientes<br>
            Modo de Preparo: $r->preparo<br>
            Nome da Receita:  $r->nome<br>        
            
            <hr><hr>            
        ";
    }
?>
<br />
<hr><hr>
<br />
<a href="listar_receita.php">| Listar Receita |</a>
<a href="index.php">| Voltar |</a>
<a href="encerrar.php">| Encerrar Sessão |</a>

</body>
</html>