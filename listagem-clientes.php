<html>
<table border="0" style="border:ridge" align="center">
	<tr bgcolor="#E4E4E4">
        <td align="center" width="220">NOME</td>
        <td align="center" width="220">EMAIL</td>
        <td align="center">CPF</td>
        <td align="center">DATA NASC.</td>
        <td align="center">TELEFONE</td>
        <td align="center" width="220">OBSERVACOES</td>
	</tr>
    
<?php

include 'conecta.php';
include 'menu.php';

?>

<h4><p align="center"><font face=arial size=4 color=#4F4F4F style=text-decoration:none;>Listagem de Clientes</font></p></h4>

<?php

$sql = "SELECT * FROM cliente";
$resultado = mysql_query($sql);

while ($linha = mysql_fetch_assoc($resultado)){ ?>
	<tr bgcolor="#E4E4E4">
        <td align="center"><?php echo $linha['nome']; ?></td>
        <td align="center"><?php echo $linha['email'] ?></td>
        <td align="center"><?php echo $linha['cpf'] ?></td>
        <td align="center"><?php echo $linha['nascimento']; ?></td>
        <td align="center"><?php echo $linha['telefone']; ?></td>
        <td align="center"><?php echo $linha['observacoes']; ?></td>
        <td align="center"><a href="alterar-cliente.php?id=<?php echo $linha['id']; ?>">Alterar</a></td>
        <td align="center"><a href="excluir-cliente.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
	</tr><?php } ?>
</table>