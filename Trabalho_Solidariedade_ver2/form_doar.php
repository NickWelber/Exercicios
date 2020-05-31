<?php
	session_start();
	include "funcoes.inc";
	include "cabecalho.inc";
?>
    <head>
		<title>Cadastro de Doações</title>
	</head>
	<body class="body1">
		<div class="container">			
			<?php
				if(empty($_POST)){
					include "form_doar.inc";
				}else{
					ler_dados_doar();
				}
			?>	
		</div>
	</body>
</html>





