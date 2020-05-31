<section>
	<table class="tabela1" width="100%" border="3">
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>Doado</th>
				<th>Quantidade/Valor</th>
			</tr>
		</thead>
		<tbody>
			<?php
				lista_doadores()
			?>
		</tbody>
	</table>
</section>
<hr><hr>
<?php
	include "rodape_listas.inc";
?>