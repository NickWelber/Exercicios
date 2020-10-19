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
					<h3 class="main-title">Agendamentos</h3>
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


<!-- Tabela com valores -->	
<footer class="row">
			<div class="col-sm-6">
				<button class="btn btn-primary" data-toggle="modal" data-target="#NovaAgenda">
					Novo Agendamento</button>
			</div>
		</footer>
		<div class="table-responsive">
			<table class="table dados-list table-striped table-bordered table-hover" id="Agenda">
				<thead>
					<tr>
						<th>Código</th>
						<th>Data Serviço</th>
						<th>Horário Serviço</th>
						<th>Situação</th>
						<th>Cliente</th>
						<th>Manicure</th>
						<th>Serviço</th>
						<th>Venda</th>
						<th>Status</th>
						<th>Editar</th>			
						<th>Excluir</th>			
					</tr>
				</thead>
				
				<?php
					include "conexao.php";

					// cria a instrução SQL que vai selecionar os dados
					$sql = "SELECT * FROM agenda ORDER BY data_servico";
					// executa a query
					$result = $conn->query($sql);
					
					while($linha = $result->fetch_assoc() ){
						echo '
						<tr>
							<td>' .$linha['id_agenda']. '</td>
							<td>' .$linha['data_servico']. '</td>
							<td>' .$linha['horario_servico']. '</td>
							<td>' .$linha['situacao']. '</td>
							<td>' .$linha['id_cliente']. '</td>
							<td>' .$linha['id_manicure']. '</td>
							<td>' .$linha['id_venda']. '</td>
							<td>' .$linha['id_servico']. '</td>
							<td class="text-center">
								<div class="agenda-change-status">
									<i class="material-icons text-success" data-toggle="tooltip" 
										title="" data-original-title="Mudar status">check</i>
								</div>
							</td>
							<td class="text-center">
								<div class="agenda-edit">
									<i class="material-icons text-warning" data-toggle="tooltip" 
										title="" data-original-title="Editar">create</i>
								</div>
							</td>
							<td class="text-center">	
								<div class="agenda-delete">
									<i class="material-icons text-danger" data-toggle="tooltip" 
										title="" data-original-title="Excluir">delete</i>
								</div>
							</td>
						</tr>';
					}
				?>

				<tbody >
				</tbody>
			</table>
		</div>
		

<!-- MODAL COM o AGENDAMENTO -->	
		<div class="modal fade" id="NovaAgenda">
		<div class="modal-dialog">
		  <div class="modal-content">
		  <div class="modal-header">
			  <h5 class="modal-title">Novo Agendamento</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<form  action="salvar_agenda.php" method="post"> 
              <input type="hidden" name="id_agenda" id="id_agenda" value="0" />
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-sm-12 col-12">
							<label for="id_venda">Venda</label>
							<?php
								echo '
									<select name="id_venda" class="form-control">
										<option>::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT id_venda FROM venda ORDER BY id_venda";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['id_venda'].'">' 
												.$linha['id_venda'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6 col-12">
							<label for="nome_cliente">Cliente</label>
							<?php
								echo '
									<select name="id_cliente" class="form-control">
										<option>::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT id_cliente, CONCAT(nome, ' ', sobrenome) AS 'Nome CLiente' FROM cliente 
										ORDER BY nome and sobrenome";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['id_cliente'].'">' 
												.$linha['Nome CLiente'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>
						</div>
						<div class="form-group col-sm-6 col-12">
							<label for="nome_manicure">Manicure</label>
							<?php
								echo '
									<select name="id_manicure" class="form-control">
										<option>::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT id_manicure, CONCAT(nome, ' ', sobrenome) AS 'Nome Manicure' FROM manicure 
										ORDER BY nome and sobrenome";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['id_manicure'].'">' 
												.$linha['Nome Manicure'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>
						</div>
					</div>					
					<div class="row">
						<div class="form-group col-sm-6 col-12">
							<label for="nome_servico">Nome Serviço</label>
							<?php
								echo '
									<select name="id_servico" class="form-control">
										<option>::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT id_servico, nome_servico FROM servico ORDER BY nome_servico";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['id_servico'].'">' 
												.$linha['nome_servico'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>
						</div>
						<div class="form-group col-sm-6 col-12">
							<label for="situacao">Situação</label>
							<?php
								echo '
									<select name="situacao" class="form-control">
										<option>::Selecione::</option>';
									require_once "conexao.php";

									$sql = "SELECT situacao FROM agenda ORDER BY situacao";
									$result = $conn->query($sql);

									foreach($result as $linha){
										echo '
											<option value="'.$linha['situacao'].'">' 
												.$linha['situacao'].'</option>
										'; 
									}
								echo '
									</select>
								';
							?>
						</div>
					</div>
					<div class="row">						
						<div class="form-group col-sm-6 col-12">
							<label class="control-label" for="data_servico">Data Agenda</label>
							<div class="input-group date" data-provide="datepicker" 
								data-date-language="pt-BR">
								<input type="text" name="data_servico" id="data_servico" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-6">	
							<label for="horario_servico">Horário</label>						
							<input type="time" name="horario_servico" id="horario_servico" class="form-control" required />
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
