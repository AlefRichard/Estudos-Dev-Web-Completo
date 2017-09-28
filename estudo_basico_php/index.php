<?php
	$servername = "localhost";
	$username = "teste";
	$password = "estudodev";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) 
	{
		die("Conexao falhou: " . $conn->connect_error);
	}
	echo "Conexao criada com sucesso";
	