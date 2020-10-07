<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/estilo.css">
	</head>
	<body class=" fundo-login">
			
		<div class="container">
			<div class="row">
				<article class="col-xs-12 ">
					<header>
						<h1 class="titulo-login">Login</h1>
					</header>
					
					<div class="col-md-12 col-sm-8 ">
						<div class="caixa-login">
							<div>
								<h3 class="text-center">Entre com a sua conta</h3>
								<p class="text-center">Lorem ipsum dolor sit amet, <a href="cadastro.php">Cadastro</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
								<hr>
								
								<form action='valida_login.php' method="post">
									<div class="margin-login">
										<label>E-mail <span class="text-danger">*</span></label>
										<input name="email" type="text" class="form-control" placeholder="E-mail">
									</div>
									<div class="margin-login">
										<label>Senha <span class="text-danger">*</span></label>
										<input name="senha" type="password" class="form-control" placeholder="Senha">
									</div>

									<?php
										if ( isset($_GET['login']) && $_GET['login']=='erro'){

									?>
									<small class="text-danger">"Dados Inválidos"</small>
									<?php
										}
									?>									
									<hr>

									<div class="row">
										<div class="col-lg-8">
											<strong><a href="">Esqueceu a senha?</a></strong>
										</div>
										<div class="col-lg-4 text-right">
											<button class="btn btn-action" type="submit">Login</button>
                      <br>
                      <br>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>


			<!-- Optional JavaScript -->
	    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	   		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>