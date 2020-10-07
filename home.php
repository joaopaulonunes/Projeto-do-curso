<?php
  require("verificar_autenticacao.php")
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/estilo.css">

	</head>
	<body>
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
	

		<!-- inicio da barra de navegação -->
      <nav class="navbar navbar-expand-lg navbar-dark " id="navegacao">
			
			<div>
				<a href="#" class="navbar-brand" ></a>
				<img src="img/CRONOMAX.png" alt="Calendario, com preechimento branco, com contorno azul, assim como os espaço das datas,os primeiros espaço foram substítuidos pelas letras do site, cada letra num espaço diferente." style="width: 50px; height: 50px;">
			</div>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="nav-target" >
					
				<ul class="navbar-nav ml-auto" id="menu" id="menu">
					<li class="nav-item">
						<a id="home" id="sobre.php" id="contato.php" id="servicos.php" id="cronogramas.php" id="perfil.php" id="login.php" id="cadastro.php" href="index.php" class="nav-link">Home[0]</a>
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
						<a accesskey="5" href="perfil.php" class="nav-link">Perfil[5]</a>
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
			<!-- final da barra de navegação -->
			<!-- inicio do conteudo principal -->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
		    	<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  	</ol>
		  
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img src="img/principal.jpg" class="img-fluid" id="img-principal" alt="...">
		      		
		      		<div class="carousel-caption d-none d-md-block">
		        		<h1>CronoMax</h1>
		        		<p>Resolva seus problemas com organização!</p>
		      		</div>
		    	</div>
		    	
		    	<div class="carousel-item">
		      		<img src="img/cronograma01.png" class="img-fluid " id="img-principal" alt="...">
		      		
		      		<div class="carousel-caption d-none d-md-block">
		        		<h1>Não se limite!</h1>
		        		<p>Além de modelos prontos, crie o seu também!</p>
		      		</div>
		    	</div>
		    
		    	<div class="carousel-item">
		      		<img src="img/cronograma02.png" class="img-fluid" id="img-principal" alt="...">
		      		
		      		<div class="carousel-caption d-none d-md-block">
		        		<h1>Não perca tempo.</h1>
		        		<p>Faça seu cadastro e aproveite as ferramentas CronoMax.</p>
		      		</div>
		    	</div>
		  	</div>
		  
		  	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  
		  	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
				<!-- final do conteudo principal -->
				<!-- inicio do conteudo secundario -->
		<article>
		<div class="fundo-branco">
			<div id="motivos">
			    <div class="container">
			        <h4><strong><i>POR QUE NOS ESCOLHER?</i></strong></h4>
			    </div>
			</div>

			<div class="container espacamento-img-texto ">
			    <div class="row" id="justificado">
				    <br><br>
				    <div class="col-lg-4">
				    	<div class="conteudo-centro">
				    		<img class="rounded-circle" src="img/icone2.png" alt="circulo com preenchimento em azul, onde esta acoplado o sinal de positivo, que consiste em uma junção de 2 retas, de tamanhos diferentes, juntas em uma extremidade, colocadas na diagonal.">
				        </div>
				        <h4 class="conteudo-centro">Pontos positivos</h4>
				        <p>Esse software que será capaz de ornamentar um cronograma escolar, totalmente informatizado. Esse cronograma levará em conta pouquíssimas variáveis, diminuindo o tempo de confecção e a complexidade dessa ferramenta. </p>
				    </div>

				    <div class="col-lg-4">
				    	<div class="conteudo-centro">
				        	<img class="rounded-circle" src="img/icone3.png" alt=" Circulo com preenchimento  em azul, com um relogio com bordas em branco.">
				        </div>
				        <h4 class="conteudo-centro">Otimização do tempo</h4>
				        <p>Facilitar o desenvolvimento de cronogramas escolares, contribuindo com a organização do ano letivo, otimizando o tempo de serviço de funcionários.</p>
				    </div>

				    <div class="col-lg-4">
				    	<div class="conteudo-centro">
				        	<img class="rounded-circle" src="img/icone1.png" alt="circulo com preenchimento em azul, onde e formado um calendario dentro do circulo, com partes da data em branco, formando os espaços do calendario.">
				        </div>
				        <h4 class="conteudo-centro">Varios modelos</h4>
				        <p>Além de oferecer-mos uma platafoma para a confecção de cronogramas, também disponibilizamos de vários modelos prontos, onde o usuário editará de acordo com sua preferência.</p>
				    </div>
			    </div>
			</div>
		</section>
		
		<section id="cor-tablet">
			<div class="container">
				<div class="row">
					<div class="col-lg-10" id="texto-tablet">
						<h4>Crie seu próprio cronograma!</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat ipsum ullam earum debitis minima sit doloremque, consectetur expedita reprehenderit. Sed optio at nostrum cumque incidunt amet voluptates veniam velit?</p>
					</div>
					<div class="col-lg-12">
						<img class="tablet" src="img/cronograma01.png" alt="tablet onde mostra uma mão, marcando uma data em um calendario presente num fundo azul, com uma caneta preta ele faz um circulo nessa data.">
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div id="rodape" >
			    <div class="container" id="final">
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