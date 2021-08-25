<?php
session_start();
	include("conexao.php");
    $recid=$_GET["editaid"];
	$seleciona=mysqli_query($conexao,  "select * from dados where id=$recid");
	$campo=mysqli_fetch_array($seleciona);
?>

		    <input type="hidden" name ="fid"  value="<?=$campo["id"]?>">
<!DOCTYPE html>
<html>
	<head>
		<title>Editar Cadastro</title>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
	    <h3>Editar Cadastro</h3>
			
<input type="text" name="nome" placeholder="Nome" size="40" maxlength="40" required class="input" value="<?=$campo["nome"]?>"><br>

<input type="text" name="cpf" placeholder="CPF" size="11" maxlength="11" required class="input" value="<?=$campo["cpf"]?>"><br>

<input type="text" name="email" placeholder="E-Mail" size="35" maxlength="35" required class="input" value="<?=$campo["email"]?>"><br>

 <tr>
 <td><input type="date" name="nascimento">
 </tr><br><br>

<form method="post" action="editarlistacadastro.php"><button type="submit">Editar Cadastro</button></form>
</form>
</body>
</html>
		 
