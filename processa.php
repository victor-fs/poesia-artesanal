<?php
	$nome  =$_POST['nome'];
	$sobrenome  =$_POST['sobrenome'];
	$email  =$_POST['email'];
	$senha1  =$_POST['senha'];
	
	include 'conexao.php';
	
	$sql ="INSERT INTO tbl_cliente (nome_cliente, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha1')";

	if(mysqli_query($conn,$sql)){
		$url = 'criarConta.html';
	}else{
		$url = 'index.html';
	}

	header('location:'.$url);
?>