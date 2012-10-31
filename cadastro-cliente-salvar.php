<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];

$consultarEmail = "SELECT * FROM cliente WHERE email = '$email'";
$consultarCPF = "SELECT * FROM cliente WHERE cpf = '$cpf'";

$inserir = "INSERT INTO cliente (nome, email, cpf, nascimento, telefone, observacoes) VALUES ('$nome', '$email', '$cpf', '$nascimento', '$telefone', '$observacoes')";

include 'conecta.php';

$resultConsultarEmail = mysql_query($consultarEmail);
$resultConsultarCPF = mysql_query($consultarCPF);

if (mysql_num_rows($resultConsultarEmail) > 0){ ?>
	<script type="text/javascript">
		alert('EMAIL JA CADASTRADO PARA OUTRO CLIENTE!');
		history.back();
    </script><?php
	exit;
}

if (mysql_num_rows($resultConsultarCPF) > 0){?>
	<script type="text/javascript">
		alert('CPF JA CADASTRADO PARA OUTRO CLIENTE!');
		history.back();
	</script><?php
	exit;
}

$resultInserir = mysql_query($inserir);

if ($resultInserir === false) {
	echo mysql_error();
} else { ?>
	<script type="text/javascript">
		alert('CLIENTE INCLUIDO!');
		window.location = 'listagem-clientes.php';
    </script><?php
}

?>