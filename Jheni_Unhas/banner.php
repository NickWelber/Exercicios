<?php
echo '
<!--TOP MENU -->
<header>
        <div class="container" id="nav-container">
            <nav class=" navbar navbar-expand-lg fixed-top navbar-dark">
                <a href="index.php" class="navbar-brand">
                    <img id="logo" src="img/JheniUnhas_logo.png" alt="Jheni Unhas & Cia"> Jheni Unhas & Cia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="index.php">Home</a>
                        <a class="nav-item nav-link" id="about-menu" href="#">Sobre Nós</a>						
                        <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>
                        <a class="nav-item nav-link" id="contact-menu" href="#">Contatos</a>
                        <a class="nav-item nav-link" id="team-menu" href="login.php">Login</a>
                        <a class="nav-item nav-link" id="portfolio-menu" href="carrinho.php">Carrinho</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<!-- BANNER -->
<main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                    <li data-target="#mainSlider" data-slide-to="3"></li>
                    <li data-target="#mainSlider" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Jheni Unhas & Cia">
                        <div class="carousel-caption d-md-block">
                            <h2>Quer Ter Unhas Maravilhosas!? <br>Realize Este Sonho!</h2>
                            <br /><br /><br /><br /><br /><br />
                            <a href="servicos_design_unhas.php" class="main-btn">Veja Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Jheni Unhas & Cia">
                        <div class="carousel-caption d-md-block">
                            <h2>Conheça Nossos Serviços! <br>Veja Como Pode Ser Incrível!</h2>
                            <br /><br /><br /><br /><br /><br />
                            <a href="servicos_design_unhas.php" class="main-btn">Veja Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Jheni Unhas & Cia">
                        <div class="carousel-caption d-md-block">
                            <h2>Agende seu Horário! <br>Venha Ser Nossa Cliente!</h2>
                            <br /><br /><br /><br /><br /><br />
                            <a href="servicos_design_unhas.php" class="main-btn">Veja Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner4.png" class="d-block w-100" alt="Jheni Unhas & Cia">
                        <div class="carousel-caption d-md-block">
                            <h2>Os Melhores Designer de Unhas! <br>Somente Aqui, na Jheni Unhas!</h2>
                            <br /><br /><br /><br /><br /><br />
                            <a href="servicos_design_unhas.php" class="main-btn">Veja Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner5.png" class="d-block w-100" alt="Jheni Unhas & Cia">
                        <div class="carousel-caption d-md-block">
                            <h2>Venha Você Também<br>Fazer Parte Desta Família!</h2>
                            <br /><br /><br /><br /><br /><br />
                            <a href="servicos_design_unhas.php" class="main-btn">Veja Nossos Serviços</a>
                        </div>
                    </div>
                </div>

<!-- SETINHAS DO BANNER -->
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
';
?>