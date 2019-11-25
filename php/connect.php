<?php
	// $servidor = "localhost";
	// $usuario = "id10402680_root";
	// $senha = "infopolitizado";
	// $dbname = "id10402680_tccdbase";
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "mydbase";

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
    }
?>
