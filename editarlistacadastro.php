<?php 
    include("conexao.php");
	
	$recid=$_POST["fid"];
	$recnome=$_POST["nome"];
	$reccpf=$_POST["cpf"];
    $recemail=$_POST["email"];
	$recnascimento=$_POST["nascimento"];
	
	
	mysqli_query($conexao, "update dados set nome='$recnome', cpf='$reccpf', email='$recemail', nascimento='$recnascimento' where id=$recid");
	
	header("location:alterardados.php");
?>	