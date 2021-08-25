<?php 

$a = $_POST["nome"]; 
$b = $_POST["email"];
$c = $_POST["nascimento"];
$f = $_POST["cpf"];
$g = $_POST["cpf2"];

echo "Nome: " . $a;
echo "<br>E-Mail: " . $b;
echo "<br>Data De Nascimento: " . $c;
echo "<br>CPF: " . $f. $g;
echo "<br><br>Usuário Cadastrado Com Sucesso"
?>
<br><br>
<form action="alterardados.php" class="formulario" method="post">
<input type="submit" value="Alterar Dados Cadastrais" id="cadastrar" name="cadastrar">
</form>
