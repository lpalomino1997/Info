<?php
include ("conexion.php");
mysql_query("DELETE FROM venta WHERE id=". $_REQUEST["cod"].";",$conexion);
$sql3= "ALTER TABLE venta ADD INDEX (id)";
$modix="ALTER TABLE venta DROP id";
$sql6="ALTER TABLE venta DROP PRIMARY KEY";
$pr1=mysql_query($sql6);
$pr12=mysql_query($modix);
$clave1="ALTER TABLE venta ADD  id BIGINT(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST "; 
$rs2=mysql_query($clave1);
$contar="SELECT * FROM venta ";
$r = mysql_query($contar);
$r1 = mysql_num_rows($r);
if ($r1==0)
{
header("location:nuevo.php");
exit();
}
if (mysql_errno()!=0)
{
echo "no se puede eliminar el usuario".mysql_errno() . " - ". mysql_error();
mysql_close($conexion);
}

header("location:index.php");

?>
