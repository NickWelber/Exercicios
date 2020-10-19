<?php
	include "cabecalho_principal.php";
	include "banner.php";
	include "menus_links.php";
?>

<!-- * CONTEÚDO DA PÁGINA -->
	<div id="about-area">
		<div class="container">
			<div class="row">
				<form class="CorpoPagina2" action="mailto:jheni.unhas@gmail.com" method="post" 
					enctype="text/plain" onsubmit="return validaFaleConosco()">
					<div class="col-12">
						<h3 class="main-title">Fale Conosco</h3>
					</div>
					<p>
						<input type="text" class="form-control" placeholder="Seu nome..." 
							required="required" name="nome" id="nome">
					</p>
					<p>
						<input type="text" class="form-control" placeholder="Tel. Fixo... (Ex:(xx) xxxx-xxxx)" 
							pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" name="telefone" id="telefone">
						<span id="erroTelefone" class="erro"></span>		
					</p>
					<p>
						<input type="text" class="form-control" placeholder="Celular... (Ex:(xx) 9xxxx-xxxx)" 
							pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" name="ceular" id="ceular">
							<span id="erroCelular" class="erro"></span>
					</p>						
					<p>
						<input type="email" class="form-control" placeholder="Seu Email..." 
							required="required" name="email" id="email">
						<span id="erroEmail" class="erro"></span>
					</p>
					<p>
						<input type="text" class="form-control" placeholder="Seu Endereço..." 
							required="required" name="endereco" id="endereco">
					</p>
					<p>
						<input type="text" class="form-control" placeholder="Seu Bairro..." 
							required="required" name="bairro" id="bairro">
					</p>
					<p>
						<input type="text" class="form-control" placeholder="Sua Cidade..." 
							required name="cidade" id="cidade">
					</p>
					<p>
						<select type="text" class="form-control" required="required" name="estado" id="estado">
							<option value=" ">Seu Estado...</option>
							<option value="AC">Acre - AC</option>
							<option value="AL">Alagoas - AL</option>
							<option value="AP">Amapá - AP</option>
							<option value="AM">Amazonas - AM</option> 
							<option value="DF">Distrito Federal - DF</option> 
							<option value="ES">Espírito Santo - ES</option> 
							<option value="GO">Goiás - GO</option> 
							<option value="MA">Maranhão - MA</option> 
							<option value="MT">Mato Grosso - MT</option> 
							<option value="MS">Mato Grosso do Sul - MS</option> 
							<option value="MG">Minas Gerais - MG</option> 
							<option value="PA">Pará - PA</option> 
							<option value="PB">Paraíba - PB</option> 
							<option value="PR">Paraná - PR</option> 
							<option value="PE">Pernambuco - PE</option> 
							<option value="PI">Piauí - PI</option> 
							<option value="RJ">Rio de Janeiro - RJ</option> 
							<option value="RN">Rio Grande do Norte - RN</option> 
							<option value="RS">Rio Grande do Sul - RS</option> 
							<option value="RO">Rondônia - RO</option>
							<option value="RR">Roraima - RR</option>
							<option value="SC">Santa Catarina - SC</option>
							<option value="SP">São Paulo - SP</option>
							<option value="SE">Sergipe - SE</option>
							<option value="TO">Tocantins - TO</option>
						</select>
					</p>
					<p>
					<label><b>Sexo: </b></label>
					<input type="radio" name="sex" value="masculino"> Masculino <b>/ ou /</b> 
						<input type="radio" name="sex" value="feminino"> Feminino <b>/ ou /</b>
							<input type="radio" name="sex" value="outros"> Outros
					</p>					
					<div>
						<center><h3 style="color:#7c0a60">Escolha o assunto sobre o caso: </h3></center>	
						<input type="checkbox" name="Manutenção"/> Manutenção Urgente;		
						<br> 
						<input type="checkbox" name="Duvidas"/> Dúvidas sobre o Processo;
						<br>
						<input type="checkbox" name="Orc_Servicos"/> Orçamentos de Serviços;
						<br>	
						<input type="checkbox" name="Orc_Produtos"/> Orçamentos de Produtos;
						<br> 
						<input type="checkbox" name="Depilacao"/> Depilação;
						<br>				
						<input type="checkbox" name="Massagem"/> Massagens;
						<br>
						<input type="checkbox" name="Alongamentos"/> Alongamentos de Unhas;			
						<br>		
						<input type="checkbox" name="Spa"/> Spá Pé e Mão;	
						<br> 
						<input type="checkbox" name="Promoção"/> Promoções;
						<br>
						<input type="checkbox" name="Calo_Rachadura"/> Tratamento de Calos e Rachaduras;				
						<br><br>
					</div>
					<p>
						<center>
							<h3 style="color:#7c0a60">Sua mensagem: </h3>
						</center>
						<textarea class="form-control" rows="3" placeholder="Sua mensagem..." 
							name="message" id="message">
						</textarea>
						<input type="checkbox" name="receber_info" id="receber_info">
							<b>Deseja receber notificações das novidades desta empresa?</b>
					</p>
					<center><input type="submit" class="main-btn" value="Registrar"></center>
				</form>
			</div>
        </div>
    </div> 
	
<!-- * RODAPÉ NO FINAL DA PÁGINA -->
	<?php
		include "rodape_principal.php";
	?>