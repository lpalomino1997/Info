<?php
include ("conexion.php");
$update = mysql_query("UPDATE usuario SET IDUSUARIO = '$IDUSUARIO', CLAVE='$CLAVE', NOMBRES='$NOMBRES', email='$email', NIVEL='$NIVEL' WHERE id=".$_REQUEST["cod"].";",$conexion) or die ("Fallo en la consulta");
if (mysql_errno()!=0)
{
echo "no se puede modificar el usuario ".mysql_errno() . " - ". mysql_error();
mysql_close($conexion);
}else {
mysql_close($conexion);
header("location:index.PHP");
}

?>