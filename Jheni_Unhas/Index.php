<?php
	include "cabecalho_principal.php";
	include "banner.php";
	include "conexao.php";
?>

<!-- GRID (ABOUT-SOBRE) -->
			<div id="about-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="main-title">Sobre a JheniUnhas & Cia</h3>
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="img/agencia.png" alt="Jheni Unhas & Cia">
						</div>
						<div class="col-md-6">
							<h3 class="about-title">Fazer o que Ama!😍</h3>
							<p>Sua beleza das mãos aos pés.
								Todas as opções de alongamentos em um só lugar.</p>
							<p>Não há sensação melhor que ver a satisfação e
								gratidão do olhar de uma cliente depois de um
								procedimento de sucesso com resultado na
								primeira sessão!😉</p>
							<p><b>Trabalhamos com os seguintes serviços:</b></p>
							<ul id="about-list">
								<li><i class="fas fa-check"></i>Depilação.</li>
								<li><i class="fas fa-check"></i>Design de Unhas.</li>
								<li><i class="fas fa-check"></i>Manicure e Pedicure.</li>
								<li><i class="fas fa-check"></i>Clareamento.</li>
								<li><i class="fas fa-check"></i>Blindagem.</li>
								<li><i class="fas fa-check"></i>SPA das Mãos e Pés.</li>
								<li><i class="fas fa-check"></i>Manutenções.</li>
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
							<i class="fas fa-cut"></i>
							<a class="nav-item nav-link" href="servicos_depilacao.php"></a>	
								<h4>Depilação</h4>
								<p>Aplicativos desenvolvidos para arrecadação de valores, entre outras coisas.</p>                          
						</div>
						<div class="col-md-4 service-box">
							<i class="fas fa-highlighter"></i>
							<a class="nav-item nav-link" href="servicos_manicure_pedicure.php"></a>	
								<h4>Manicure e Pedicure</h4>
								<p>SIte especializados para realizar arrecadações de diversas areas.</p>                            
						</div>
						<div class="col-md-4 service-box">
							<i class="fas fa-paint-brush"></i>
							<a class="nav-item nav-link" href="servicos_design_unhas.php"></a>	
								<h4>Design de Unhas</h4>
								<p>Equipe pensando na melhor forma e facilide em ajudar a construir um futuro melhor</p>                            
						</div>
						<div class="col-md-4 service-box">
							<i class="fab fa-ello"></i>
							<a class="nav-item nav-link" href="servicos_manicure_pedicure.php"></a>	
								<h4>SPA das Mãos e Pés</h4>
								<p>Aberto para pessoas se associarem e ajudar nesta causa.</p>                            
						</div>
						<div class="col-md-4 service-box">
							<i class="fa fa-medkit"></i>
							<a class="nav-item nav-link" href="servicos_design_unhas.php"></a>	
								<h4>Manutenções</h4>
								<p>Utilize o canal SAC para Suporte e ajuda, 24 horas por dia, 7 dias da semana*.</p>                            
						</div>
						<div class="col-md-4 service-box">
							<i class="fas fa-phone"></i>
							<a class="nav-item nav-link" href="fale_conosco.php"></a>	
								<h4>Contate-nos</h4>
								<p>Acesse noso canais de atendimento para maiores informações de como ajudar nas doações.</p>                            
						</div>
					</div>
				</div>
			</div>

<!-- CALL TO ACTION (BOTÃO SERVIÇOS) -->
			<div id="call-area">
				<div class="container">
					<div class="row">
						<p>Vamos Fazer um Agendamento?</p>
						<a href="agenda_cadastrar.php" class="main-btn" id="call-btn">AGENDAMENTO</a>
					</div>
				</div>
			</div>
		</div> <!-- AQUI FECHA a div class="container-fluid" do BANNER -->
	</main> <!-- AQUI FECHA o main do BANNER -->

<!-- * RODAPÉ (ENTRE EM CONTATO CONOSCO) -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em Contato Conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Ligue para:</span> (16) 3014-6598</p>
                        <p><span class="contact-tile">Horários:</span> 10:00 - 20:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> contato@jheniunhas.com.br</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-tile">Venha tomar um café:</span> Rua Projeto Final, nº 3, Compl TI Noturno</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou Nos Deixe Uma Mensagem:</p>
                    </div>

<!-- * RODAPÉ (FALE CONOSCO) -->
                    <div class="col-md-6" id="contact-form">                        
                        <form action="fale_conosco.php" method="post" enctype="text/plain">
                            <input type="submit" class="main-btn" value="Registrar">
                        </form>
                    </div>
                    <div class="col-md-12 contact-box"></div>
                </div>
            </div>
        </div>

	<?php
		include "rodape_principal.php";
	?>