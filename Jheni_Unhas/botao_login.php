<?php
    echo '
<!-- LOGO E INTRO -->
<div class="container">
        <nav class=" navbar navbar-expand-lg fixed-top navbar-dark"> 

<!-- logotipo / brand -->
            <a href="index.php" class="navbar-brand logotipo">
                <img src="img/Logo01.png" alt="Logotipo da Jheni Unhas" />
            </a>

<!-- botão que aparece quando a tela for pequena -->
            <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
			</button>
			
<!-- botão Minha Conta e Logout -->
            <div class="collapse navbar-collapse" id="menu">
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle"
                        aria-haspopup="true" aria-expanded="false">
                        Minha conta
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">
                            <b>';
?>
                                <?php 
                                    echo $_COOKIE["nome_usuario"];
                                ?>
<?php
                                echo '
                            </b>                             
                        </button>
                        <button class="dropdown-item" type="button" id="btnAlterarPerfil">
                            Alterar Perfil
                        </button>
                        <button class="dropdown-item" type="button" id="btnLogout">
                            Sair
                        </button>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" id="home-menu" href="index.php">Home</a>
                    <a class="nav-item nav-link" id="services-menu" href="servico_cadastrar.php">Cad.Serviços</a>
                    <a class="nav-item nav-link" id="services-agenda" href="agenda_cadastrar.php">Agendamento</a>
                    <a class="nav-item nav-link" id="portfolio-menu" href="carrinho.php">Carrinho</a>
                </div>
            </div>
        </nav>
    ';
?>
