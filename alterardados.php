<!DOCTYPE html>
<html>
	<head>
		<title>Dados Cadastrados</title>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	
	
	<body>
	    <h1 class="titulo">Dados Cadastrados</h1>
		    <tr>
			    <td><strong>NOME</strong></td>
				<td><strong>CPF</strong></td>
				<td><strong>EMAIL</strong></td>
				<td><strong>DATA DE NASCIMENTO</strong></td>
			</tr>
            <?php
			    include("conexao.php");
			    $seleciona=mysqli_query($conexao, "select * from dados order by id desc");
				while($campo=mysqli_fetch_array($seleciona)){?>
				    <tr><br><br>
					    <td><?=$campo["nome"]?></td>
						<td><?=$campo["cpf"]?></td>
						<td><?=$campo["email"]?></td>
						<td><?=$campo["nascimento"]?></td>
					    <form method="post" action="editarcadastro.php?editaid=<?=$campo["id"]?>"><button type="submit">Editar Cadastro</button></form>
                       </tr>
			<?php }	?>	
     
    <br><br><form method="get" action=" cadastro.php"><button type="submit">Novo Cadastro</button></form>
    	</table>
	</body>
    </html>	

