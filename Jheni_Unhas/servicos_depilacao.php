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
							<h3 class="main-title">"DEPILAÇÃO"</h3>
						</div>

						<table class="tabela3">
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"BANHO DE LUA COMPLETO"</b></th>
								<th><b class="Servico">"BANHO DE LUA REGIÃO"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Descolorante Banho de Lua Completo,<br>
									realizado em todo o Corpo.<br>
									Descolorante com Resultados.<br>
									<input type='button' class="main-btn" name='BANHO DE LUA COMPLETO' value='COMPRAR R$ 50.99' onclick="comprar(name, value)"/>	
								</td>
								<td class="texto1">
									Descolorante Banho de Lua por região,<br>
									você escolhe o local do corpo<br>
									Descolorante com Resultados.<br>
									<input type='button' class="main-btn" name='BANHO DE LUA REGIÕES' value='COMPRAR R$ 15.99' onclick="comprar(name, value)"/>
								</td>
							</tr>
							
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"DEPILAÇÃO ABDOME"</b></th>
								<th><b class="Servico">"DEPILAÇÃO AXILAS"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Depilação no Abdome,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO ABDOME' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">				
									Depilação no Axilas,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO AXILAS' value='COMPRAR R$ 15.99' onclick="comprar(name, value)">
								</td>
							</tr>
							
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"DEPILAÇÃO BUÇO"</b></th>
								<th><b class="Servico">"DEPILAÇÃO COSTA"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Depilação no Buço,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO BUÇO' value='COMPRAR R$ 5.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">				
									Depilação na Costa,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO COSTA' value='COMPRAR R$ 40.99' onclick="comprar(name, value)">
								</td>
							</tr>
						
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"DEPILAÇÃO PERNA"</b></th>
								<th><b class="Servico">"DEPILAÇÃO MEIA PERNA"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Depilação na Perna Completa,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO PERNA' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">				
									Depilação Meia Perna,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO MEIA PERNA' value='COMPRAR R$ 20.99' onclick="comprar(name, value)">
								</td>
							</tr>
							
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"DEPILAÇÃO ROSTO"</b></th>
								<th><b class="Servico">"DEPILAÇÃO EGÍPICIA"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Depilação no Rosto,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO ROSTO' value='COMPRAR R$ 25.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">				
									Depilação Egípicia (com Linha),<br>
									feita no rosto com linha e depois <br>
									um creme para massagear.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO EGÍPICIA' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
							</tr>
							
							<tr>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
								<th><img src="img/Imagens_Servicos/Imagem_Depilacao/Dep_SemFoto.jpeg" width="80%" height="50%"/></th>
							</tr>
							<tr>
								<th><b class="Servico">"DEPILAÇÃO VIRILHA"</b></th>
								<th><b class="Servico">"DEP. VIRILHA E CANAL"</b></th>
							</tr>
							<tr>			
								<td class="texto1">
									Depilação na Virilha,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO VIRILHA' value='COMPRAR R$ 20.99' onclick="comprar(name, value)">
								</td>
								<td class="texto1">				
									Depilação na Virilha e no Canal,<br>
									feita com cera quente<br>
									ou cera "roll-on" e creme.<br>
									<input type='button' class="main-btn" name='DEPILAÇÃO VIRILHA E CANAL' value='COMPRAR R$ 30.99' onclick="comprar(name, value)">
								</td>
							</tr>
						</table>
					</center>
					<div class="titulo2">	
						<hr></hr>	
						<b>"DEPILAÇÃO"</b>			
						<hr></hr>
					</div>
				</form>
			</div>
        </div>
    </div> 

	<?php
		include "rodape_principal.php";
	?>
	