<html>
<head>

<?php include 'menu.php'; ?>

<script src="validacoes.js"></script>

<h4><p align="center"><font face=arial size=4 color=#4F4F4F style=text-decoration:none;>Cadastro de Clientes</h4></font></p>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de cliente</title>

<!-- Estilo para texto azul e vermelho -->
<style type="text/css">
<!--
.style1 {
color: #FF0000;
font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }
</style>

</head>
<body>
<div align="center">
<form id="cadastro" name="cadastro" method="post" action="cadastro-cliente-salvar.php" onSubmit="return validaCampo(); return false;">
 <table width="625" border="0">
 <tr>
 <td width="50">Nome Completo:</td>
 <td width="10"><input name="nome" type="text" id="nome" size="50" maxlength="40" />
 <span class="style1">*</span></td>
 </tr>
 
 <tr>
 <td>Email:</td>
 <td><input name="email" type="text" id="email" size="50" maxlength="40" />
 <span class="style1">*</span></td>
 </tr>
 
  <tr>
 <td>CPF:</td>
 <td><input name="cpf" type="text" id="cpf" size="20" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" />
 <span class="style1">*</span></td>
 </tr>
 
 <tr>
 <td>Data Nasc:</td>
 <td><input name="nascimento" type="text" id="nascimento" size="20" maxlength="10" OnKeyPress="formatar('##/##/####', this)" />
 <span class="style1">*</span> <span class="style3">Apenas numeros</span> </td>
 </tr>
 
 <tr>
 <td>Telefone:</td>
 <td><input name="telefone" type="text" id="telefone" size="20" maxlength="12" OnKeyPress="formatar('##-####-####', this)"  />
 <span class="style3">Apenas numeros</span> </td>
 </tr>
 
 <tr>
 <td>Observacoes:</td>
 <td><textarea name="observacoes" cols="38" rows="4" >Observacoes</textarea></td>
 </tr>

 <td colspan="2"><p align="center"><br>
 <input name="salvar" type="submit" id="cadastrar" value="Salvar" /> 


 <input name="limpar" type="reset" id="limpar" value="Limpar" /><br><br>
 

 <font color="#000000"> Campos com </font><font color="#EE0000">*</font><font color="#000000"> sao obrigatorios!</font>
 
 <p align="center"><a href="listagem-clientes.php" style="text-decoration:none; color:#AAAAAA; font:verdana; size:15px;">Voltar</a></p></font>
 
 </p></td>

 </table>
</form>
</div>
</body>
</html>
