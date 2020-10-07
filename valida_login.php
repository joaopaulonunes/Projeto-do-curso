<?php
	
	session_start();
  //$_SESSION['Cronomax'] = 'teste sessão';
  //print_r($_SESSION);

	$usuario_sistema = array( //armazenando as contas do login
		array('email' => 'joaopaulo@gmail.com', 'senha' => '123456'),
		array('email' => 'anne@gmail.com', 'senha' => '321'),
		array('email' => 'antony@gmail.com', 'senha' => '12345'),
		array('email' => 'ranielly@gmail.com', 'senha' => '123456789'),
		array('email' => 'beatriz@gmail.com', 'senha' => '1234567')

	);

	$usuario_autenticado = false;


	foreach ($usuario_sistema as $valor) {


		if( $valor['email']== $_POST['email'] && $valor['senha']== $_POST['senha']){

			$usuario_autenticado = true;
		}
		
	}
		if( $usuario_autenticado){
			$_SESSION['autenticado'] ='sim';
			header('location: home.php');
		
		}else{
			$_SESSION['autenticado'] ='nao';
			header('location: index.php?index=erro');

		}


?>