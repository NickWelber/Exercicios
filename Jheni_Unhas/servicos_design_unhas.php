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
							<h3 class="main-title">"DESIGN DE UNHAS"</h3>
						</div>

						<table class="tabela3">
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Acriflix1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Acriflix2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE ACRIFLIX"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. ACRIFLIX"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Acriflix.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA ACRIFLIX' value='COMPRAR R$ 60.99' onclick="comprar(name, value)">					
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Acriflix.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. ACRIFLIX' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
							</tr>
				
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Acrigel1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Acrigel2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE ACRIGEL"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. ACRIGEL"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Acrigel.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA ACRIGEL' value='COMPRAR R$ 85.99' onclick="comprar(name, value)">				
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Acrigel.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. ACRIGEL' value='COMPRAR R$ 40.99' onclick="comprar(name, value)">
								</td>
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Gel1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Gel2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE GEL"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. GEL"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Gel.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA GEL' value='COMPRAR R$ 80.99' onclick="comprar(name, value)">					
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Gel.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. GEL' value='COMPRAR R$ 40.99' onclick="comprar(name, value)">
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Poligel1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Poligel2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE POLIGEL"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. POLIGEL"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Poligel.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA POLIGEL' value='COMPRAR R$ 100.99' onclick="comprar(name, value)">				
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Poligel.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. POLIGEL' value='COMPRAR R$ 50.99' onclick="comprar(name, value)">
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Porcelana1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Porcelana2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE PORCELANA"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. PORCELANA"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Porcelana.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA PORCELANA' value='COMPRAR R$ 140.99' onclick="comprar(name, value)">				
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Porcelana.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. PORCELANA' value='COMPRAR R$ 70.99' onclick="comprar(name, value)">
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Vidro1.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_Vidro2.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE FIBRA DE VIDRO"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. FIBRA VIDRO"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Fibra de Vidro.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA FIBRA VIDRO' value='COMPRAR R$ 140.99' onclick="comprar(name, value)">				
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Fibra de Vidro.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. FIBRA VIDRO' value='COMPRAR R$ 70.99' onclick="comprar(name, value)">
								</td>
								</td>
							</tr>

							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_SemFoto	.jpg" width="80%" height="20%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Design_Unhas/Unha_SemFoto.jpg" width="80%" height="20%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"UNHA DE POSTIÇA"</b></th>
								<th><b class="Servico">"MANUTENÇÃO U. POSTIÇA"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Design de Unha em: <br>
									Unha de Postiça.<br>
									Serviço completo para ambas as mãos.<br>
									<input type='button' class="main-btn" name='UNHA POSTIÇA' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">					
								</td>
								<td class="texto1">
									Manutenção de Unha em: <br>
									Unha de Postiça.<br>
									<b>Valor Manutenção.</b><br>
									<input type='button' class="main-btn" name='MANUTENÇÃO U. POSTIÇA' value='COMPRAR R$ 15.99' onclick="comprar(name, value)">
								</td>
							</tr>	
						</table>
					</center>
					<div class="titulo2">	
						<hr></hr>
						<b>"DESIGN DE UNHAS"</b>			
						<hr></hr>
					</div>
				</form>
			</div>
        </div>
    </div> 

	<?php
		include "rodape_principal.php";
	?>
	