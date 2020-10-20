<?php
	include "valida_cookies.inc";	
	include "cabecalho_login.php";
	include "botao_login.php";	
?>

<!-- Campo Pesquisa e Titulo Tabela-->
	<div class="container">
		<div id="services-area">
			<div class="row">
				<div class="col-12">
					<h3 class="main-title">Cadastre Um Serviço</h3>
				</div>
			</div>
		</div>
		<div class="row cabecalho">
			<div class="col-xs-12 col-md-4 col-md-offset-2 busca">
				<div class="input-group">
					<input type="text" name="busca" id="busca" class="form-control typeahead" 
							placeholder="Pesquisar Serviço...">
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" id="btnBuscar">
							<i class="material-icons">search</i>
						</button>
					</span>
				</div>
			</div>
		</div>
	</div>


<!-- BOTÂO MODAL NOVO SERVIÇO - CATEGORIA SERVIÇO -->	
		<footer class="row">
			<div class="form-group col-sm-2 col-2">
				<button class="btn btn-primary" data-toggle="modal" data-target="#NovoServico">
					Novo Serviço</button>
			</div>
			<div class="form-group col-sm-2 col-2">
				<button class="btn btn-primary" data-toggle="modal" data-target="#NovoCategoriaServico">
					Novo Categoria Serviço</button>
			</div>
		</footer>

<!-- Tabela com valores -->	
		<div class="table-responsive">
			<table class="table dados-list table-striped table-bordered table-hover" id="servicos">
				<thead>
					<tr>
						<th>Código</th>
						<th>Categoria Serviço</th>
						<th>Nome Serviço</th>
						<th>Preço Serviço</th>
						<th>Data Registro</th>
						<th>Editar</th>			
						<th>Excluir</th>			
					</tr>
				</thead>
				
				<!-- INCLUDE MODAL COM A NOVO SERVICO -->
				<?php
					include "conexao.php";

					// cria a instrução SQL que vai selecionar os dados
					$sql = "SELECT * FROM servico ORDER BY nome_servico";
					// executa a query
					$result = $conn->query($sql);

					while($linha = $result->fetch_assoc() ){
						echo '
						<tr class="servico-item">
							<td class="servico-id_servico">' .$linha['id_servico']. '</td>
							<td class="servico-id_categoria_servico">' .$linha['id_categoria_servico']. '</td>
							<td class="servico-nome_servico">' .$linha['nome_servico']. '</td>
							<td class="servico-preco_servico">' .$linha['preco_servico']. '</td>
							<td class="servico-data_servico">' .$linha['data_servico']. '</td>
							<td class="text-center">								
								<div class="servico-edit">
									<i class="material-icons text-warning" data-toggle="tooltip" 
										title="" data-original-title="Editar">create
									</i>
								</div>
							</td>
							<td class="text-center">	
								<div class="servico-delete">
									<i class="material-icons text-danger" data-toggle="tooltip" 
										title="" data-original-title="Excluir">delete
									</i>
								</div>
							</td>
						</tr>
						';
					}
				?>
				<table class="dados-list table table-striped table-bordered table-hover" id="servico-list">
					<tbody >
					</tbody>
				</table>
				<tbody >
				</tbody>
			</table>
		</div>

<!-- MODAL COM A NOVO SERVICO -->	
		<div class="modal fade" id="NovoServico">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Novo Serviço</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  action="salvar_servico.php" method="post"> 
						<input type="hidden" name="id_servico" id="id_servico" value="0" />
						<div class="modal-body">
							<div class="row">
								<div class="form-group col-sm-6 col-12">
									<label for="nome_servico">Categoria Serviço</label>

							<?php
								echo '
									<select name="id_categoria_servico"  class="form-control">
										<option value=" ">::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT * FROM categoria_servico ORDER BY nome_categoria";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['id_categoria_servico'].'">' 
												.$linha['nome_categoria'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>

						</div>
						<div class="form-group col-sm-6 col-12">
							<label for="nome_servico">Nome Serviço</label>
							<input type="text" name="nome_servico" id="nome_servico" class="form-control" required />
						</div>
					</div>					
					<div class="row">
						<div class="form-group col-sm-6 col-12">
							<label for="preco_servico">Preço Serviço</label>
							<input type="text" name="preco_servico" id="preco_servico" class="form-control" required />
						</div>
						<div class="form-group col-sm-6 col-12">
							<label class="control-label" for="data_servico">Data Registro</label>
							<div class="input-group date" data-provide="datepicker" 
								data-date-language="pt-BR">
								<input type="text" name="data_servico" id="data_servico" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-danger">Limpar</button>
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</form>
			</div>
		  </div>
	  </div>
  
<!-- MODAL COM A NOVA CATEGORIA SERVIÇO -->	
	  <div class="modal fade" id="NovoCategoriaServico">
		  <div class="modal-dialog">
			  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title">Nova Categoria Serviço</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						  <span aria-hidden="true">&times;</span>
					  </button>
				  </div>
				  <form  action="salvar_categoria_servico.php" method="post"> 
					  <input type="hidden" name="id_categoria_servico" id="id_categoria_servico" value="0" />
					  <div class="modal-body">
						  <div class="row">							
							  <div class="form-group col-sm-6 col-12">
								  <label for="nome_servico">Nome Categoria do Serviço</label>
								  <input type="text" name="nome_categoria" id="nome_categoria" class="form-control" required />
							  </div>
						  </div>					
					  </div>
					  <div class="modal-footer">
						  <button type="reset" class="btn btn-danger">Limpar</button>
						  <button type="submit" class="btn btn-primary">Salvar</button>
					  </div>
				  </form>
				</div>
		  </div>
	  </div>
				
<?php
	include "rodape_diverso.php";
?>
