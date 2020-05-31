<?php
	session_start();
	include "funcoes.inc";
	include "cabecalho.inc";
?>
    <head>
		<title>Listagem de Associados</title>
	</head>
	<body class="body1">
		<div class="container">			
			<?php
				if(isset($_SESSION["nomesAssociado"])){
					include "tabela_associados.inc";
				}else{
					echo "<section>
							<h2>Nenhum Associado Cadastrado.</h2>
						</section>
						<hr><hr>";
					include "rodape_listas.inc";
				}
			?>	
		</div>
	</body>
</html>		
		
		
		