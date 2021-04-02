<?php 

    define('HOST','localhost');
	define('DB','exercicio_web');
	define('USER','root');
	define('PASS','');

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $erro){
		echo 'Erro ao conectar no banco de dados';
	}

	if(isset($_GET['url'])){
		$url = $_GET['url'];
	}else{
		$url = '';
	}

?>