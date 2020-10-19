<?php
	include "cabecalho_principal.php";
	include "banner.php";
	include "conexao.php";
	include "menus_links.php";
?>

<!-- * CONTEÚDO DA PÁGINA -->		
	<div id="about-area">
		<div class="container">
			<div class="row">
				<form class="CorpoPagina">
					<center>
						<img src="img/logo01.png" style="border:0px" width="200px" height="200px"/>
						<div class="col-12">
							<h3 class="main-title">"MANICURE E PEDICURE"</h3>
						</div>

						<table class="tabela3">
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/Mao1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/Pe1.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"MANICURE"</b></th>
								<th><b class="Servico">"PEDICURE"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Manicure, <br>
									Caprichando nas suas unhas.<br>
									Serviço completo para as mãos.<br>
									<input type='button' class="main-btn" name='MAO MANICURE' value='COMPRAR R$ 15.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">
									Pedicure: <br>
									Caprichando nas suas unhas.<br>
									Serviço completo para os pés.<br>
									<input type='button' class="main-btn" name='PE PEDICURE' value='COMPRAR R$ 15.99' onclick="comprar(name, value)">
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/PeMao1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/SemFotoPadrao.png" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"PÉ E MÃO"</b></th>
								<th><b class="Servico">"HIDRATAÇÔES"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Manicure e Pedicure, <br>
									Caprichando nas suas unhas.<br>
									Serviço completo para as pés e mãos.<br>
									<input type='button' class="main-btn" name='PÉ E MÃO' value='COMPRAR R$ 25.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">
									Hidratações: <br>
									Caprichando nos serviços.<br>
									Com o melhor resultado.<br>
									<input type='button' class="main-btn" name='HIDRATAÇÔES' value='COMPRAR R$ 40.99' onclick="comprar(name, value)">
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/SemFotoPadrao.png" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/SemFotoPadrao.png" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"SPA DOS PÉS"</b></th>
								<th><b class="Servico">"SPA DAS MÃOS"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									SPA dos Pés: <br>
									Caprichando nos serviços.<br>
									Com o melhor resultado.<br>
									<input type='button' class="main-btn" name='SPA DOS PÉS' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">
									SPA das Mãos: <br>
									Caprichando nos serviços.<br>
									Com o melhor resultado.<br>
									<input type='button' class="main-btn" name='SPA DAS MÃOS' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
							</tr>
							
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/SemFotoPadrao.png" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_ManicurePedicure/SemFotoPadrao.png" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"BLINDAGEM DE DIAMANTE"</b></th>
								<th><b class="Servico">"BANHO DE BRILHO"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Blindagem de Diamante: <br>
									Caprichando nos serviços.<br>
									Com o melhor resultado.<br>
									<input type='button' class="main-btn" name='BLINDAGEM DE DIAMANTE' value='COMPRAR R$ 50.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">
									Banhode de Brilho: <br>
									Caprichando nos serviços.<br>
									Com o melhor resultado.<br>
									<input type='button' class="main-btn" name='BANHO DE BRILHO' value='COMPRAR R$ 40.99' onclick="comprar(name, value)">
								</td>
							</tr>
						</table>
					</center>
					
					<div class="titulo2">	
						<hr></hr>	
						<b>"MANICURE E PEDICURE"</b>			
						<hr></hr>
					</div>
				</form>
			</div>
        </div>
    </div> 

	<?php
		include "rodape_principal.php";
	?>
	