<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>LOGIN</title>

            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
            <link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="icons/style.css" />
            <link rel="stylesheet" href="css/index.css" />
			<link rel="stylesheet" href="css/login.css" />
            <link rel="icon" href="img/Logo01.png" type="img/Logo01.png" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        </head>
    <body>

    <header>
        <div class="container" id="nav-container">
            <nav class=" navbar navbar-expand-lg fixed-top navbar-dark">
                <a href="index.php" class="navbar-brand">
                    <img id="logo" src="img/JheniUnhas_logo.png" alt="Jheni Unhas & Cia"> Jheni Unhas & Cia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="index.php">Home</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<!-- TEMPLATE DO LOGIN -->
	<div class="login-form 
		col-xs-10 offset-xs-1 
        col-sm-6 offset-sm-3
        col-md-4 offset-md-4">
        <header>
            <h1><img class="img-fluid" src="img/Logo01.png" /></h1>
            <h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2>
        </header>
        <form action="confirma_login.php" method="POST">
            <div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="material-icons">account_circle</i>
					</div>
					<input type="text" name="usuario" class="form-control" 
						placeholder="Nome de usuário" required="required" />
				</div>
            </div>
            <div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="material-icons">lock</i>
					</div>
					<input type="password" name="senha" class="form-control password" id="senha" 
						data-cript="sha1, md5" placeholder="Senha" required="required"  />
				</div>
			</div>

<!-- TEMPLATE DO LOGIN - BOTAO CADASTRAR E ENTRAR -->
            <footer>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </footer>
        </form>
        <div class="float-left"></div>
			<button class="btn btn-default btn-cadastrar" data-toggle="modal" 
				data-target="#NovoUsuario">Cadastrar</button>
		</div>
	</div>
	
<!-- MODAL - CADASTRAR NOVO USUARIO -->
    <div class="modal" tabindex="-1" role="dialog" id="NovoUsuario">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Novo Usuário</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="salvar_usuario.php" method="post">
				<div class="modal-body">						
					<div class="row">
						<div class="form-group col-sm-6 col-xs-12">
							<label for="nome">Nome completo</label>
							<input type="text" name="nome" id="nome" class="form-control so-texto" required="required" />
						</div>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="nome_usuario">Nome de usuário</label>
							<input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required="required"/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6 col-xs-12">
							<label for="senha">Senha</label>
							<input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senhaNova" placeholder="Senha" required="required"  />
						</div> 
						<div class="form-group col-sm-6 col-xs-12">
							<label for="senha">Confirmação de Senha</label>
							<input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senhaConfirmacao" placeholder="Senha" required="required" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6 col-xs-12">
							<label class="control-label" for="e-mail">E-mail</label>
							<input type="email" name="email" id="email" class="form-control" required="required"/>
						</div>
					</div>
				</div>

<!-- MODAL - BOTÂO LIMPAR E SALVAR -->
				<div class="modal-footer">
					<button type="reset" class="btn btn-danger">Limpar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		  </div>
		</div>
	</div>

    <nav class="navbar navbar-expand-lg fixed-down">
            <div id="copy-area">
                <div class="container">
                    <div class="row">					
                        <div class="col-md-12">						
                            <p>Desenvolvido e Criado por <a href="https://github.com/NickWelber/Exercicios" target="_blank">
                                Nick Welber Garcia</a> &copy; 2020</p>								
                        </div>
                    </div>
                </div>
            </div>
        </nav>

<!-- * jQuery, Json, Ajax, JavaScript -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validaform.min.js" type="text/javascript"></script>
	</body>
</html>