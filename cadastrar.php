<?php 
 session_start();
 class cadastroForm{

 	private $nome_cliente = null;
	private	$email_cliente = null;
	private	$senha_cliente = null;
	private	$rua_moradia_cliente = null;
	private	$bairro_moradia_cliente = null;
	private	$numero_casa_cliente = null;
	private	$cidade_moradia_cliente = null;
	private	$complemento_cliente = null;
	private	$instituto_cliente = null;


	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function __get($atributo){
		return $this->$atributo;
	}

 }

 	$atb = new cadastroForm();
	$atb-> __set('nome_cliente',$_POST['nome']);
	$atb-> __set('email_cliente',$_POST['email']);
	$atb-> __set('senha_cliente',$_POST['senha']);
	$atb-> __set('rua_moradia_cliente',$_POST['rua']);
	$atb-> __set('bairro_moradia_cliente',$_POST['bairro']);
	$atb-> __set('numero_casa_cliente',$_POST['numCasa']);
	$atb-> __set('cidade_moradia_cliente',$_POST['estado']);
	$atb-> __set('complemento_cliente',$_POST['complemento']);
	$atb-> __set('instituto_cliente',$_POST['instituto']);

	$_SESSION['none'] = $atb-> __get('nome_cliente');
	$_SESSION['email'] = $atb-> __get('email_cliente');
	$_SESSION['senha'] =$atb-> __get('senha_cliente');
	$_SESSION['rua'] =$atb-> __get('rua_moradia_cliente');
	$_SESSION['bairro'] =$atb-> __get('bairro_moradia_cliente');
	$_SESSION['numero'] =$atb-> __get('numero_casa_cliente');
	$_SESSION['cidade'] =$atb-> __get('cidade_moradia_cliente');
	$_SESSION['complemento'] =$atb-> __get('complemento_cliente');
	$_SESSION['instituto'] =$atb-> __get('instituto_cliente');

 	try {
 		$host = "mysql:host=localhost;dbname=bd_cronomax";
		$user = "root";
		$pass = "";

		
		$pdo = new PDO($host, $user, $pass);

		$stmt = $pdo->prepare("INSERT INTO tbl_cliente (nome_cliente, email_cliente, senha_cliente, rua_moradia_cliente, bairro_moradia_cliente, numero_casa_cliente,cidade_moradia_cliente,complemento_cliente,instituto_cliente) VALUES(:nome, :email, :senha, :rua, :bairro, :numeroCasa, :cidade, :complemento, :instituto)");

		$stmt->bindValue(':nome', $atb-> __get('nome_cliente'));
		$stmt->bindValue(':email', $atb-> __get('email_cliente'));
		$stmt->bindValue(':senha', $atb-> __get('senha_cliente'));
		$stmt->bindValue(':rua', $atb-> __get('rua_moradia_cliente'));
		$stmt->bindValue(':bairro', $atb-> __get('bairro_moradia_cliente'));
		$stmt->bindValue(':numeroCasa', $atb-> __get('numero_casa_cliente'));
		$stmt->bindValue(':cidade', $atb-> __get('cidade_moradia_cliente'));
		$stmt->bindValue(':complemento', $atb-> __get('complemento_cliente'));
		$stmt->bindValue(':instituto', $atb-> __get('instituto_cliente'));

		$stmt->execute();
		header('location:perfil.php');
 	} catch (Exception $e) {
 		echo "erro: " .$e->getMessage();
 	}
		
		
 ?>