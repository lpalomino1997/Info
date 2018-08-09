<?php
$realname = $_POST['realname'];
$nick = $_POST['nick'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$reqlen = strlen($nick) * strlen($pass) * strlen($rpass);
if ($reqlen > 0) {
 if ($pass === $rpass){
  require("conexion.php");
  $pass = md5($pass);
mysql_query("INSERT INTO registro VALUES('','$realname','$nick','$pass')");
mysql_close($link);
echo 'se ha registrado exitosamente';
}else{
	echo 'por favor introduzca 2 contraseñas identicas';
}


}else{
	echo 'por favor llene los campos requeridos';
}

?>