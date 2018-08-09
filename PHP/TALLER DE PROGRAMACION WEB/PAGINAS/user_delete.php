<?php
include ("conexion.php");
mysql_query("DELETE FROM usuario WHERE id=". $_REQUEST["cod"].";",$conexion);
$sql3= "ALTER TABLE usuario ADD INDEX (id)";
$modix="ALTER TABLE usuario DROP id";
$sql6="ALTER TABLE usuario DROP PRIMARY KEY";
$pr1=mysql_query($sql6);
$pr12=mysql_query($modix);
$clave1="ALTER TABLE usuario ADD  id BIGINT(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST "; 
$rs2=mysql_query($clave1);
$contar="SELECT * FROM usuario ";
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

header("location:index.PHP");

?>
