<?php
include ("conexion.php");
$update = mysql_query("UPDATE venta SET id_cliente = '$id_cliente', nombres_cli='$nombres_cli', vendedor='$vendedor', articulo='$articulo', cantidad='$cantidad', pu='$pu' WHERE id=".$_REQUEST["cod"].";",$conexion) or die ("Fallo en la consulta");
if (mysql_errno()!=0)
{
echo "no se puede modificar el usuario ".mysql_errno() . " - ". mysql_error();
mysql_close($conexion);
}else {
mysql_close($conexion);
header("location: http://tareas.epizy.com/tarea/");
}

?>