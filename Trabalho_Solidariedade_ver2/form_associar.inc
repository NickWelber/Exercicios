<section>
	<form class="formulario1" action="form_associar.php" method="post">
		<fieldset>
			<legend>Cadastro de Associados</legend>
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" size="30"/>
				<label>E-mail</label>
				<input type="email" name="email" size="30"/>
			</p>
			<p>
				<label>Endereço:</label>
				<input type="text" name="endereco" size="30"/>	
				<label>Telefone:</label>
				<input type="phone" name="telefone" size="30"/>
			</p>			
			<input type="submit" class="main-btn" value="ASSOCIAR-SE"/>
		</fieldset>
	</form>
</section>
	<hr><hr>
<?php
	include "rodape_listas.inc";
?>