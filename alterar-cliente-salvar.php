<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];

include 'conecta.php';

$sql = "SELECT id FROM cliente WHERE id = $id";
$result = mysql_query($sql);

if (mysql_num_rows($result) == 0){ ?>
	<script type="text/javascript">
		alert('REGISTRO INEXISTENTE!');
		window.location = 'listagem-clientes.php';
    </script><?php
}

$sql = "UPDATE cliente SET nome = '$nome', email = '$email', cpf = '$cpf', nascimento = '$nascimento', telefone = '$telefone', observacoes = '$observacoes' WHERE id = $id";

$resultado = mysql_query($sql);

if ($resultado === false){ ?>
	<script type="text/javascript">
		alert('FALHA AO ALTERAR O CLIENTE');
		window.location = 'listagem-clientes.php';
	</script><?php
} else { ?>
	<script type="text/javascript">
		alert('CLIENTE ALTERADO!');
		window.location = 'listagem-clientes.php';
	</script><?php
}