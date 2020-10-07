<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Perfil</title>
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
				<img src="img/CRONOMAX.png" style="width: 50px; height: 50px;">
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
						<a accesskey="1" href="sobre.php" class="nav-link">Sobre[1]</a>
					</li>

					<li class="nav-item">
						<a accesskey="2" href="contato.php" class="nav-link">Contato[2]</a>
					</li>

					<li class="nav-item">
						<a accesskey="3" href="servicos.php" class="nav-link">Serviços[3]</a>
					</li>

					<li class="nav-item">
						<a accesskey="4" href="cronogramas.php" class="nav-link">Cronogramas[4]</a>
					</li>

					<li class="nav-item">
						<a id="perfil" id="sobre.php" id="contato.php" id="servicos.php" id="cronogramas.php" id="index.php" id="login.php" id="cadastro.php" href="index.php" href="perfil.php" class="nav-link">Perfil[5]</a>
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

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<img class="img-perfil" src="img/usuario.png" alt="Desenho de um home de cabelos pretos arrepiado, com uma blusa azul escuro, com uma gola branca, com um sinal de adição na lateral direita, vermelho com um fundo branco, toda imagem se encontra dentro de um circulo com preenchimento em azul claro.">
				</div>

				<div class="col-lg-8 col-sm-6">
					<form action="conta.php">
						<button class="btn btn-outline-secundary btn-block opçoes-perfil">Conta</button>
					</form>
						<button class="btn btn-outline-secundary btn-block ">Notificações</button>
						<button class="btn btn-outline-secundary btn-block">Configurações</button>
						<button class="btn btn-outline-secundary btn-block">Ajuda</button>
					
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-lg-12">
					<h1 class="titulo-perfil">Meus Cronogramas</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
				    <img src="img/cronograma01.png" class="img-cronograma" alt="tablet onde mostra uma mão, marcando uma data em um calendario presente num fundo azul, com uma caneta preta ele faz um circulo nessa data.">
				</div>
				
				<div class="col-lg-6">
					<p class="texto-perfil">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque omnis repellendus sit accusantium at similique impedit? Quasi non officia distinctio adipisci, repudiandae error voluptate aliquam fugit vel explicabo, dolorem, quos reprehenderit corrupti? Odit distinctio magnam quisquam labore, eius voluptates asperiores?</p>
				</div>				
			</div>
		</div>

		<footer>
			<div id="rodape">
			    <div class="container">
				   <p>&copy; Todos os direitos reservados.</p>
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