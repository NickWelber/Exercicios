<?php
    include "cabecalho.inc";
    include "funcoes.inc";			
?>	

<!-- BANNER -->
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Solidariedade">
                        <div class="carousel-caption d-md-block">
                            <h2>Quer ajudar de alguma forma? <br>Realize uma Doação!</h2>
                            <p>Nos ajude nesta empreitada mistica e maravilhosa em ajudar outras pessoas!</p>
                            <a href="#" class="main-btn">Ver Detalhes das Doações</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Projeto de Doações">
                        <div class="carousel-caption d-md-block">
                            <h2>Conheça os Projetos de Doações!<br> Veja como pode ser incrível!</h2>
                            <p>Veja os projetos e onde atuamos com as doações.</p>
                            <a href="#" class="main-btn">Ver Detalhes dos Projetos</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Seja Associado">
                        <div class="carousel-caption d-md-block">
                            <h2>Quer se juntar nesta Causa?<br>Seja Associado!</h2>
                            <p>Faça parte desta ação. Todos podem colaborar!</p>
                            <a href="#" class="main-btn">Entre em Contato</a>
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

<!-- GRID (ABOUT-SOBRE) -->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a ArcSystem</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/agencia.jpg" alt="Agencia ArcSystem">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma organição pensando nas pessoas</h3>
                            <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mim que vai caçá sua turmis!</p> 
                            <p>Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>
                            <p>Sapien in monti palavris qui num significa nadis i pareci latim.  Si num tem leite então bota uma pinga aí cumpadi!</p>
                            <p>Veja Outros Diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Doações em varias formas de pagamento.</li>
                                <li><i class="fas fa-check"></i>Arrecadação reconhecida ou anonimo.</li>
                                <li><i class="fas fa-check"></i>Possibilidade de visitar os locais que foram ajudados.</li>
                                <li><i class="fas fa-check"></i>Contribuição com a sociedade.</li>
                                <li><i class="fas fa-check"></i>Doações de diferentes formas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 

<!-- GRID, CONTAINER, ROW e ICONS (SERVIÇOS DA EMPRESA) -->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossas Especialidades</h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-mobile-alt"></i>
                                <h4>Aplicativos de Doação</h4>
                                <p>Aplicativos desenvolvidos para arrecadação de valores, entre outras coisas.</p>                            
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                                <h4>E-comerce</h4>
                                <p>SIte especializados para realizar arrecadações de diversas areas.</p>                            
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                                <h4>Time e Equipe</h4>
                                <p>Equipe pensando na melhor forma e facilide em ajudar a construir um futuro melhor</p>                            
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                                <h4>Consultas e Divulgações</h4>
                                <p>Aberto para pessoas se associarem e ajudar nesta causa.</p>                            
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                                <h4>Suporte e Ajuda</h4>
                                <p>Utilize o canal SAC para Suporte e ajuda, 24 horas por dia, 7 dias da semana*.</p>                            
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                                <h4>Contate-nos</h4>
                                <p>Acesse noso canais de atendimento para maiores informações de como ajudar nas doações.</p>                            
                        </div>
                    </div>
                </div>
            </div>

<!-- PARALLAX (DADOS DA EMPRESA) -->
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos Entregues</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>Total Doações</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>Valor Arrecadado</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>Pessoas Associadas</p>
                        </div>
                    </div>
                </div>
            </div>

<!-- CARD (TIME/EQUIPE) -->
            <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso Time</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile1.jpg" class="card-img-top" alt="Imagem Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Nick Welber Garcia</h5>
                                    <p>Desenvolvedor e Criador</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile2.jpg" class="card-img-top" alt="Imagem Perfil 2">
                                <div class="card-body">
                                    <h5 class="card-title">John 'Pacha' Goodman</h5>
                                    <p>Organizador das Arrecadações</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile3.jpg" class="card-img-top" alt="Imagem Perfil 3">
                                <div class="card-body">
                                    <h5 class="card-title">Baby Yoda</h5>
                                    <p>Entrevistador dos Associados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile4.jpg" class="card-img-top" alt="Imagem Perfil 4">
                                <div class="card-body">
                                    <h5 class="card-title">Tom</h5>
                                    <p>Suporte e Ajuda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
<!-- GRID COM PARALLAX (TRABALHE CONOSCO ASSOCIAR-SE) -->
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box" id="company-img"></div>
                        <div class="col-md-6 apply-box" id="pattern-img">
                            <h4>Quer Ser Associado?</h4>
                            <p>Mussum Ipsum, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.</p>
                            <p>Sed non consequat odio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!</p>
                            <p>Clique no botão abaixo para Ajudar.</p>
                            <a href="form_associar.php" class="main-btn" id="apply-btn">Associar-se</a>
                        </div>
                    </div>
                </div>
            </div>

<!-- FILTRO COM BOOTSTRAP E JAVASCRIPT (PORTFOLIO - PROJETOS DE DOAÇÃO) -->
            <div id="portfolio-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Conheça Nossas Demandas</h3>
                        </div>
                        <div class="col-md-12" id="filter-btn-box">
                            <button class="main-btn filter-btn active" id="all-btn">Todos</button>
                            <button class="main-btn filter-btn" id="dev-btn">Projetos</button>
                            <button class="main-btn filter-btn" id="dsg-btn">Pessoas</button>
                            <button class="main-btn filter-btn" id="seo-btn">Futuros</button>
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
                        </div>
                    </div>
                </div>
            </div>

<!-- NEWSLETTER (FORMULARIO COM BOOTSTRAP ORÇAMENTO/DOAÇÃO) -->
            <div id="news-area">
                <div class="container">
                <div class="col-md-12">
                    <h3 class="main-title">Fique por Dentro das Novidades</h3>
                </div>
                <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre parcerias, associados, novas doações, ONGs e locais de ajuda</p>
                <form action="">
                    <input type="text" class="form-control" id="email-input" name="email" placeholder="Informe seu e-mail...">
                    <input type="submit" id="news-btn" value="INCREVER">
                </form>
                </div>
            </div>

<!-- CALL TO ACTION (BOTÃO DOAR) -->
            <div id="call-area">
                <div class="container">
                    <div class="row">
                        <p>Deseja Fazer uma Doação?</p>
                        <a href="form_doar.php" class="main-btn" id="call-btn">DOAR</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- RODAPÉ (ENTRE EM CONTATO CONOSCO) -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em Contato Conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Ligue para:</span> (16) 3331-1234</p>
                        <p><span class="contact-tile">Horários:</span> 8:00 - 20:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> contato@arcsystem.com.br</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-tile">Venha tomar um café:</span> Rua Aula do Fernando em Casa, nº 1920</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Seu e-mail..." name="email">
                            <input type="text" class="form-control" placeholder="Seu assunto..." name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                            <input type="submit" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr><hr>
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido e Criado por <a href="https://github.com/NickWelber/Exercicios" target="_blank">Agencia ArcSystem</a> &copy; 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- JAVASCRIPTS DO PROJETO -->
    <script src="js/scripts.js"></script>
</body>
</html>