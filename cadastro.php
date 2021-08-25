<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Usuário</title>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

<form action="listacadastro.php" class="formulario" method="get"> 
        <h3>Cadastro De Usuário</h3>

<input type="text" name="nome" placeholder="Nome" size="40" maxlength="40" required class="input"><br>

<input type="text" name="cpf" placeholder="CPF" size="11" maxlength="11" required class="input"><br>

<input type="text" name="email" placeholder="E-Mail" size="35" maxlength="35" required class="input"><br>

 <tr>
 <td><input type="date" name="nascimento">
 </tr><br><br>

<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>
