<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FORMULARIO DE REGISTRO</title>
</head>
<body
>
<h1> formulario de registro </h1>
<h3>los campos son * son requeridos</h3>
<form method="POST" action="" />
<table>
<tr>
<td>
nombre y apellidos:
</td>
</tr>
<td>
<input type="name" name="realname" />
</td>
<tr>
<td>
*nick de usuario:
</td>
</tr>
<td>
<input type="name" name="nick" />
</td>
<tr>
<td>
*contraseña:
</td>
</tr>
<td>
<input type="password" name="pass" />
</td>
<tr>
<td>
*repetir contraseña:
</td>
</tr>
<td>
<input type="password" name="rpass" />
</td>
</table>
<input type="submit" name="submit" value="Registrarme" /><input type="reset" />

</form>
<?php
if (isset($_POST['submit'])){
	require("registro.php");
}




?>
</body>
</html>