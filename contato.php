<?php
  require("verificar_autenticacao.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Contato</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/estilo.css">

	</head>
	<body id="fundo-contato">
		<!-- barra de acessibilidade -->
		<nav class="navbar navbar-expand-sm navbar-light bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#principal" accesskey="c" class="nav-link"><h5>Ir para o conteúdo[c]</h5></a>
				</li>

				<li class="nav-item">
					<a href="#menu" accesskey="m" class="nav-link"><h5>Vá para o menu[m]</h5></a>
				</li>

				<li class="nav-item">
					<a href="#final" accesskey="r" class="nav-link"><h5>Ir para o rodapé[r]</h5></a>
				</li>
			</ul>
		</nav>

		 <nav class="navbar navbar-expand-lg navbar-dark " id="navegacao">		
			<div>
				<a href="#" class="navbar-brand" ></a>
				<img src="img/CRONOMAX.png" style="width: 50px; height: 50px;" alt="Calendario, com preechimento branco, com contorno azul, assim como os espaço das datas,os primeiros espaço foram substítuidos pelas letras do site, cada letra num espaço diferente.">
			</div>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="nav-target" >
					
				<ul class="navbar-nav ml-auto" id="menu">
					<li class="nav-item">
						<a accesskey="0" href="home.php" class="nav-link">Home[0]</a>
					</li>

					<li class="nav-item">
						<a accesskey="1"  href="sobre.php" class="nav-link">Sobre[1]</a>
					</li>

					<li class="nav-item">
						<a id="contato" id="sobre.php" id="index.php" id="servicos.php" id="cronogramas.php" id="perfil.php" id="login.php" id="cadastro.php" href="contato.php" class="nav-link">Contato[2]</a>
					</li>

					<li class="nav-item">
						<a accesskey="3"  href="servicos.php" class="nav-link">Serviços[3]</a>
					</li>

					<li class="nav-item">
						<a accesskey="4"  href="cronogramas.php" class="nav-link">Cronogramas[4]</a>
					</li>

					<li class="nav-item">
						<a accesskey="5"  href="perfil.php" class="nav-link">Perfil[5]</a>
					</li>

					<li class="nav-item">
						<a accesskey="6" href="historico.php" class="nav-link">Historico[6]</a>
					</li>

					<li class="nav-link">
		                <div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false ">Entrar</button>
	   						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
	     						<a accesskey="7" class="dropdown-item" href="sair.php">Logout[7]</a>
	    						
	   						 </div>
 						</div>

		            </li>
				</ul>
			</div>
		</nav>

		<div class="container" id="fundo-contato">
			<div class="row">
				<article class="col-sm-9">
					<div>
						<h1 class="titulo-contato">Entre em contato com a gente:</h1>
					</div>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit corporis possimus itaque dicta. Atque molestias magni soluta culpa aut sequi modi minima aliquam facere, accusantium reiciendis fugiat repellat officiis nobis!</p>

					<form action = "enviar_msg.php" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input name="nome" class="form-control" type="text" placeholder="Nome">
							</div>
							<div class="col-sm-6">
								<input name="email" class="form-control" type="text" placeholder="Enviar para...">
							</div>
						</div>
						
						<br>
						
						<div class="row">
							<div class="col-sm-12">
								<textarea name="msg" placeholder="Escreva sua mensagem..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						
						<br>
						
						<div class="row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-action" type="submit" value="Enviar mensagem">
							</div>
						</div>
						<br>
						<br>
					</form>
				</article>

				<div class="col-sm-3 endereco endereco-right">

					<div class="telefone">
						<h4>Endereço</h4>
						<div>
							Av. Antônio Lisboa de Amorim, 1751 - Benedito Bentes, Maceió - AL, 57084-700
						</div>

						<br>
						
						<h4>Telefone:</h4>
						<div>
							 (82) 3316-0943
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<footer>
			<div id="rodape">
			    <div class="container">
				    <p>
				        &copy; Todos os direitos reservados.
				    </p>
			    </div>
			</div>
		</footer>
		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>