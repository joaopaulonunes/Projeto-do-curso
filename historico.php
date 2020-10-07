<?php
  require("verificar_autenticacao.php");

  $mensagem = array();

  $arquivo = fopen('mensagem.txt', 'r');

  while( !feof ($arquivo) ){
    $mensagem[] = fgets($arquivo);
  }

  fclose($arquivo);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Historico</title>
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
						<a accesskey="5" href="perfil.php" class="nav-link">Perfil[5]</a>
					</li>

					<li class="nav-item">
						<a id="historico" id="sobre.php" id="contato.php" id="servicos.php" id="cronogramas.php" id="perfil.php" id="login.php" id="cadastro.php" href="index.php" class="nav-link">Historico[6]</a>
					</li>

					<li class="nav-link">
		                <div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false ">Entrar</button>
	   						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
	     						<a accesskey="7" class="dropdown-item" href="sair.php">logout[7]</a>
	   						 </div>
 						</div>

		            </li>
				</ul>
			</div>
		</nav>

		<div id="blue">
			<div class="container">
		      	<div class="row">
			      	<div class="col-lg-8 col-lg-offset-2">
				   		<h4>Historico de Navegação:</h4>
				    </div>
				    <div class="col-lg-4 col-lg-offset-2 botao-crie-crono">
				        <button class="btn btn-secondary">Visualizar historico completo</button>
				    </div>
				</div>
			</div>
		</div>
		
		<div class="container" id="historicoPag">
			<div class="card-deck">
				<div class="card">
					<img src="img/cronograma.png" class="card-img-top" alt="Cronograma que foi editado pelo usuario recentimente.">
		    		<div class="card-body">
		      			<h5 class="card-title">Modelo 1</h5>
		      			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, maiores, molestias. In facere necessitatibus, excepturi praesentium accusantium modi blanditiis repellat quae. Amet perspiciatis placeat, culpa maiores recusandae magni nulla, minima.</p>
		    		</div>

				    <div class="card-footer" id="blue1">
				      <small class="text-muted">Visualizado 01/01/20 ás 00:00</small>
				    </div>
	  			</div>

				<div class="card">
					<img src="img/cronograma.png" class="card-img-top" alt="Cronograma que foi editado pelo usuario recentimente.">				    
					<div class="card-body">
				      	<h5 class="card-title">Modelo 2</h5>
				      	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quae porro blanditiis pariatur quos. Officiis?</p>
				    </div>

				    <div class="card-footer" id="blue1">
					    <small class="text-muted">Visualizado 01/01/20 ás 00:00</small>
				    </div>
				</div>

				<div class="card">
					<img src="img/cronograma.png" class="card-img-top" alt="Cronograma que foi editado pelo usuario recentimente.">
				<div class="card-body">
				      <h5 class="card-title">Modelo 3</h5>
				      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores facilis corporis velit, hic recusandae cumque voluptatibus quasi et doloremque!</p>
				</div>

				<div class="card-footer" id="blue1">
				    <small class="text-muted">Visualizado 01/01/20 ás 00:00</small>
				</div>
	  		</div>
	  	</div>
	</div>

	<div id="blue2">
		<div class="container">	      
			<div>
		   		<h4>Historico de Compra:</h4>
		    </div>
		</div>
	</div>

	<div class="container">
		<div class="card" id="pedido-historico">
			<h5 class="card-header" style="color: #fff!important;" id="blue1">Pedido 00</h5>
		  	<div class="card-body">
		    	<h5 class="card-title">Pacote Simples</h5>
		    	<hr>
		    	<p class="card-text">Valor 29R$, pagamento realizado pelo cartão com o final 0000. 20GB de armazenamento, até 20 usuários, 10 modelos diferentes, instalção gratuita, valido por 2 anos.</p>
		    	<a href="#" class="btn btn-primary">Ver pedido</a>
		  	</div>

	  		<div class="card-footer" id="blue1">
				<small class="text-muted">Pedido feito 01/01/20 ás 00:00</small>
			</div>
		</div>

		<div class="card" id="pedido-historico">
			<h5 class="card-header" style="color: #fff!important;" id="blue1">Pedido 01</h5>
		  	<div class="card-body">
		    	<h5 class="card-title">Pacote Simples</h5>
		    	<hr>
		    	<p class="card-text">Valor 29R$, pagamento realizado pelo cartão com o final 0000. 20GB de armazenamento, até 20 usuários, 10 modelos diferentes, instalção gratuita, valido por 2 anos.</p>
		    	<a href="#" class="btn btn-primary">Ver pedido</a>
		  	</div>

	  		<div class="card-footer" id="blue1">
				<small class="text-muted">Pedido feito 01/01/20 ás 00:00</small>
			</div>
		</div>
	</div>

  <div id="blue2">
		<div class="container">	      
			<div>
		   		<h4>Historico de mensagens:</h4>
		    </div>
		</div>
	</div>

		<div class="card" id="pedido-historico">
			<h5 class="card-header" style="color: #fff!important;" id="blue1">Mensagem 01</h5>
		  	<div class="card-body">
        
          <?php
            foreach($mensagem as $valor) { 
              echo $valor;
              $mensagem_valor = explode('*',$valor);
              
              if(count($mensagem_valor)<3){
                  continue;
              }
          ?>

		    	<h5 class="card-title"><?=$mensagem_valor[0]?></h5>
		    	<hr>
          <h5 class="card-subtitle md-2 text-muted"><?=$mensagem_valor[1]?></h5>
		    	<p class="card-text"><?=$mensagem_valor[2]?></p>
		    	<a href="#" class="btn btn-primary">Ver pedido</a>
		  	</div>
        
        <?php
          }
        ?>
		</div>
	</div>

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