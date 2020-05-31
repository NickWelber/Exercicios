<?php
	session_start();
	include "funcoes.inc";
	include "cabecalho.inc";
?>
    <head>
		<title>Listagem de Doadores</title>
	</head>
	<body class="body1">
		<div class="container">			
			<?php
				if(isset($_SESSION["nomesDoador"])){
					include "tabela_doadores.inc";
				}else{
					echo "<section>
							<h2>Nenhum Doador Cadastrado.</h2>
						</section>
						<hr><hr>";						
					include "rodape_listas.inc";						
				}
			?>	
		</div>
	</body>
</html>		
		
		
		