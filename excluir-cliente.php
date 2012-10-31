<?php

$id = (int)$_GET['id'];

include 'conecta.php';

$sql = "SELECT * FROM cliente WHERE id = $id";
$result = mysql_query($sql);

if ($result === false){ ?>
	<script type="text/javascript">
		alert('ERRO NO SQL!');
		window.location = 'listagem-clientes.php';
	</script><?php
}

if (mysql_num_rows($result) == 0){ ?>
	<script type="text/javascript">
		alert('CLIENTE INEXISTENTE!');
		window.location = 'listagem-clientes.php';
	</script><?php
}

$sql = "DELETE FROM cliente WHERE id = $id";
$result = mysql_query($sql);

if ($result === false){ ?>
	<script type="text/javascript">
		alert('FALHA AO EXCLUIR O CLIENTE');
		window.location = 'listagem-clientes.php';
	</script><?php
} else { ?>
	<script type="text/javascript">
		alert('CLIENTE EXCLUIDO!');
		window.location = 'listagem-clientes.php';
	</script><?php
} ?>