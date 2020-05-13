<?php
    include "cabecalho.php";

    $r = new Receita($_POST);


    $_SESSION["receita"][] = $r;
?>
<h3>Receita Inserida com SUCESSO!!!</h3>
<hr><hr>
<br />
<a href="listar_receita.php">| Listar Receita |</a>
<a href="index.php">| Voltar |</a>
<a href="encerrar.php">| Encerrar Sessão |</a>

</body>
</html>