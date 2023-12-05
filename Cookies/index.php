<?php
$cookie_name = "nome";
$cookie_value = "Raphaela";
$cookie_name = "senha";
$cookie_value = "abc123";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<body>
	<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="nome completo" maxlength="30">
		<br>
		<input type="password" name="senha" placeholder="senha">
		<br>	
		<input type="submit" value="cadastrar">
	</form>
</div>

<html>
