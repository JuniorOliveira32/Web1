<?php 
    include("conexao.php");
	
	$recnome=$_GET["nome"];
	$reccpf=$_GET["cpf"];
    $recemail=$_GET["email"];
	$recnascimento=$_GET["nascimento"];
	
	
	mysqli_query($conexao, "insert into dados (nome, cpf, email, nascimento) values ('$recnome', '$reccpf', '$recemail', '$recnascimento')");
	
	header("location:alterardados.php");
?>	


