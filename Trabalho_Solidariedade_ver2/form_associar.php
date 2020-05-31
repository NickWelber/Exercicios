<?php
    session_start();
    include "funcoes.inc";
    include "cabecalho.inc";
?>
    <head>
        <title>Cadastro de Associados</title>
	</head>
	<body class="body1">
		<div class="container">			
			<?php
				if(empty($_POST)){
					include "form_associar.inc";
				}else{
					ler_dados_associar();
				}
			?>	
		</div>
    <script src="js/scripts.js"></script>
</body>
</html>