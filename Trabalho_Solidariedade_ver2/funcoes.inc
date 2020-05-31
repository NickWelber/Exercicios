<?php
	function ler_dados_doar(){
		$_SESSION["nomesDoador"][] = $_POST["nome"];
		$_SESSION["emailDoador"][] = $_POST["email"];
		$_SESSION["enderecoDoador"][] = $_POST["endereco"];
		$_SESSION["telefoneDoador"][] = $_POST["telefone"];
		$_SESSION["tipoDoacaoDoador"][] = $_POST["tipo_doacao"];
		$_SESSION["qtdValorDoador"][] = $_POST["qtd_valor"];
		
		echo "<section>
				<h2>Doador Cadastrado com Sucesso!!!</h2>
			</section>
		<hr><hr>";
		include "rodape_listas.inc";
	}

	function ler_dados_associar(){
		$_SESSION["nomesAssociado"][] = $_POST["nome"];
		$_SESSION["emailAssociado"][] = $_POST["email"];
		$_SESSION["enderecoAssociado"][] = $_POST["endereco"];
		$_SESSION["telefoneAssociado"][] = $_POST["telefone"];

		echo "<section>
				<h2>Associado Cadastrado com Sucesso!!!</h2>
			</section>
			<hr><hr>";
		include "rodape_listas.inc";
	}
	
	function lista_doadores(){
		for($i = 0; $i < sizeof($_SESSION["nomesDoador"]); $i++){
			$nome = $_SESSION["nomesDoador"][$i];
			$email = $_SESSION["emailDoador"][$i];
			$endereco = $_SESSION["enderecoDoador"][$i];
			$telefone = $_SESSION["telefoneDoador"][$i];
			$tipoDoacao = $_SESSION["tipoDoacaoDoador"][$i];
			$qtdValor = $_SESSION["qtdValorDoador"][$i];
			
			echo "<tr>";
			echo "<td>$nome</td>";
			echo "<td>$email</td>";
			echo "<td>$endereco</td>";
			echo "<td>$telefone</td>";
			echo "<td>$tipoDoacao</td>";
			echo "<td>$qtdValor</td>";
			echo "</tr>";
		}
	}

	function lista_associados(){
		for($i = 0; $i < sizeof($_SESSION["nomesAssociado"]); $i++){
			$nome = $_SESSION["nomesAssociado"][$i];
			$email = $_SESSION["emailAssociado"][$i];
			$endereco = $_SESSION["enderecoAssociado"][$i];
			$telefone = $_SESSION["telefoneAssociado"][$i];
			
			echo "<tr>";
			echo "<td>$nome</td>";
			echo "<td>$email</td>";
			echo "<td>$endereco</td>";
			echo "<td>$telefone</td>";
			echo "</tr>";
		}
	}

	
	function gerarOptionsCliente(){
		for($i = 0; $i < sizeof($_SESSION["nomesCliente"]); $i++){
			echo '<option value="' . $_SESSION["nomesCliente"][$i] 
					. '">' . $_SESSION["nomesCliente"][$i] . '</option>'; 
		}
	}

	function gerarOptionsCarro(){
		for($i = 0; $i < sizeof($_SESSION["placasCarro"]); $i++){
			if($_SESSION["estadosCarro"][$i] == 0){
				echo '<option value="' . $_SESSION["placasCarro"][$i] 
					. '">' . $_SESSION["placasCarro"][$i] . '</option>'; 
			}
		}
	}

	function gerarOptionsLocacao(){
		for($i = 0; $i < sizeof($_SESSION["carrosLocacao"]); $i++){
			if($_SESSION["estadosLocacao"][$i] == 0){
				echo '<option value="' . $_SESSION["carrosLocacao"][$i] 
					. '">' . $_SESSION["carrosLocacao"][$i] . '</option>'; 
			}
		}
	}
?>