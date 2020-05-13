<?php
    include "cabecalho.php";
    
        echo '
            <form action="recebe_form_receita.php" method="POST">
                <center><fieldset>
                    <center><h1>Cadastro de Receita</h1></center>
                    <p>
                        <select name="tipo">
                            <option value="::tipo_receita::">::tipo receita::</option>
                            <option value="bolos">Bolos</option>
                            <option value="salgados">Salgados</option>
                            <option value="outros">Outros</option>
                        </select>
                    </p>
                    <p>
                        <textarea name="ingredientes" placeholder="Lista de Ingredientes..." rows="4" cols="30"></textarea>
                    </p>
                    <p>
                        <textarea name="preparo" placeholder="Modo de Preparo..." rows="4" cols="30"></textarea>
                    </p>
                    <p>
                        <textarea name="nome" placeholder="Nome da Receita..." rows="4" cols="30"></textarea>
                    </p>
                    <p>
                        <input type="submit" value="CADASTRAR">
                    </p>
                </fieldset></center>
            </form>
        ';
?>
<br />
<hr><hr>
<br />
<center><h2>
    <a href="listar_receita.php">| Listar Receita |</a>
    <a href="index.php">| Voltar |</a>
    <a href="encerrar.php">| Encerrar Sessão |</a>
</h2></center>

</body>
</html>