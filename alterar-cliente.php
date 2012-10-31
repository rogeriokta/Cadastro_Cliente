<?php

$id = (int)$_GET['id'];
$sql = "SELECT * FROM cliente WHERE id = $id";

include 'conecta.php';
include 'menu.php';

$result = mysql_query($sql);

if ($result === false) { ?>
	<script type="text/javascript">
		alert('ERRO NO SQL!');
		window.location = 'listagem-clientes.php';
	</script>
<?php }

if (mysql_num_rows($result) == 0){ ?>
	<script type="text/javascript">
		alert('CLIENTE INEXISTENTE!');
		window.location = 'listagem-clientes.php';
	</script>
<?php }

$linha = mysql_fetch_assoc($result); ?>

<style type="text/css">
<!--
.style1 {
color: #FF0000;
font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }
</style>

<h4><p align="center"><font face=arial size=4 color=#4F4F4F style=text-decoration:none;>Alterar cliente - <?php echo $linha['nome']; ?></h4></font></p>

<div align="center">
<form id="cadastro" name="cadastro" method="post" action="alterar-cliente-salvar.php" onSubmit="return validaCampo(); return false;">
 <table width="625" border="0">
 <tr>
 <td width="50">Nome Completo:</td>
 <td width="10"><input name="nome" type="text" id="nome" size="50" maxlength="40" value="<?php echo $linha['nome']; ?>"/>
 <span class="style1">*</span></td></tr>
 
 <tr>
 <td>Email:</td>
 <td><input name="email" type="text" id="email" size="50" maxlength="40" value="<?php echo $linha['email']; ?>"/>
 <span class="style1">*</span></td></tr>
 
 <tr>
 <td>CPF:</td>
 <td><input name="cpf" type="text" id="cpf" size="20" maxlength="14" value="<?php echo $linha['cpf']; ?>" OnKeyPress="formatar('###.###.###-##', this)" />
 <span class="style1">*</span></td></tr>
 
 <tr>
 <td>Data Nasc:</td>
 <td><input name="nascimento" type="text" id="nascimento" size="20" maxlength="10" value="<?php echo $linha['nascimento']; ?>" OnKeyPress="formatar('##/##/####', this)" />
 <span class="style1">*</span> <span class="style3">Apenas numeros</span> </td></tr>
 
 <tr>
 <td>Telefone:</td>
 <td><input name="telefone" type="text" id="telefone" size="20" maxlength="12" value="<?php echo $linha['telefone']; ?>" OnKeyPress="formatar('##-####-####', this)"  />
 <span class="style3">Apenas numeros</span> </td></tr>
 
 <tr>
 <td>Observacoes:</td>
 <td><textarea name="observacoes" value="<?php echo $linha['observacoes']; ?>" cols="38" rows="4" >Observacoes</textarea></td></tr>
 <td colspan="2"><p align="center"><br>
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 
 <input name="salvar" type="submit" id="cadastrar" value="Salvar" /><br><br>
 
 <font color="#000000"> Campos com </font><font color="#EE0000">*</font><font color="#000000"> sao obrigatorios!</font>
 <p align="center"><a href="listagem-clientes.php" style="text-decoration:none; color:#AAAAAA; font:verdana; size:15px;">Voltar</a></p></font>
 </p></td>
 </table>
</form></div>