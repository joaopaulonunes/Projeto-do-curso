<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/estilo.css">
			<title>Cadastro</title>
		</head>

		<style type="text/css">

			.form{
				margin: 0 auto 0 auto;
			}

			.col{
				margin-top: 2%;
			}

			label{
				margin-top: 1%;
			}

			.estado{
				width: 93%;
				position: absolute;
				top:45%;
			}

		</style>

		<body class="formulario">
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
						<a accesskey="0" href="index.php" class="nav-link">Home[0]</a>
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
			<div class="cadastro">
				<h1>Cadastro</h1>
			</div>	
				<div class = "row">
					<div class = "col">
							<form class="form-group" action="cadastrar.php" method="post">
								<label for="nome">Nome:</label>
								<input type="text" name="nome" placeholder="Digite seu nome" class="form-control" id="nome">
							
					</div>
					<div class = "col">
						
								<label for="email">Email:</label>
								<input type="text" name="email" placeholder="Digite seu Email" class="form-control" id="email">
							
					</div>
					<div class = "col">
							
								<label for="emailcon">Confirme seu Email:</label>
								<input type="text" name="emailcon" placeholder="Confirme seu Email" class="form-control" id="emailcon">
						
					</div>
					<br>
					
				</div>

				<div class="row">
					<div class = "col">
							<label for="senha">Senha:</label>
							<input type="password" name="senha" placeholder="Digite sua Senha" class="form-control" id="senha">
						
					</div>
					<div class = "col">
							<label for="senhaCon">Confirme sua Senha:</label>
							<input type="password" name="senhaCon" placeholder="Confirme sua Senha" class="form-control" id="senhaCon">
					</div>
					</div>	

					<div class="row">
						<div class="col">
							<label for="rua">Rua:</label>
							<input type="text" name="rua" placeholder="Digite Sua Rua" class="form-control" id="rua">
						</div>

						<div class="col">
							<label for="bairro">Bairro: </label>
							<input type="text" name="bairro" placeholder="Digite Seu Bairro" class="form-control" id="bairro">
						</div>

						<div class="col">
							<label for="numCasa">Nº Da Casa: </label>
							<input type="text" name="numCasa" placeholder="Digite Numero da casa"class="form-control" id="numCasa">
						</div>
						<div class="col">
							<label for="estado">Estado: </label>
							<select name="estado" id="estado" class="form-control estado"> 
							    <option value="estado">Selecione o Estado</option> 
							    <option>Acre</option> 
							    <option>Alagoas</option> 
							    <option>Amazonas</option> 
							    <option>Amapá</option> 
							    <option>Bahia</option> 
							    <option>Ceará</option> 
							    <option>Distrito Federal</option> 
							    <option>Espírito Santo</option> 
							    <option>Goiás</option> 
							    <option>Maranhão</option> 
							    <option>Mato Grosso</option> 
							    <option>Mato Grosso do Sul</option> 
							    <option>Minas Gerais</option> 
							    <option>Pará</option> 
							    <option>Paraíba</option> 
							    <option>Paraná</option> 
							    <option>Pernambuco</option> 
							    <option>Piauí</option> 
							    <option>Rio de Janeiro</option> 
							    <option>Rio Grande do Norte</option> 
							    <option>Rondônia</option> 
							    <option>Rio Grande do Sul</option> 
							    <option>Roraima</option> 
							    <option>Santa Catarina</option> 
							    <option>Sergipe</option> 
							    <option>São Paulo</option> 
							    <option>Tocantins</option> 
							</select>
						</div>
						
					</div>

					<div class="row">
							<div class="col">
								<label for="complemento">Complemento:</label>
								<select class="form-control" name="complemento">
									<option>professor(a)</option>
									<option>aluno(a) do ensino médio </option>
									<option>aluno(a) do curso </option>
									<option>superior</option>
									<option>outros...</option>
								</select>
						</div>
						<div class="col">
							<label for="instituto"> Instituto: </label>
							<input type="text" name="instituto" placeholder="Seu instituto"class="form-control" id="instituto">
						</div>
					</div>
					
					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-info">Cadastrar</button>
						</form>
						</div>
					</div>	


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="js/funcoes.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>

