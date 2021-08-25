
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de Usuário</title>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='/style/style.css'>
	</head>

<form action="cadastroalterado.php" class="formulario" method="post"> 
        <h3>Alterar Dados Cadastrais</h3>

 <tr>
 <td width="69">Nome: </td>
 <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" ""/>
 </tr><br>

 <tr>
 <td>Email: </td>
 <td><input name="email" type="text" id="email" size="70" maxlength="60" />
 </tr><br>

 <tr>
 <td>Data De Nascimento: </td>
 <td><input type="date" name="nascimento">
 </tr><br>
  
  <td>
    <label>CPF: </label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>
 </table>
</fieldset><br><br>

<input type="submit" value="Alterar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>
