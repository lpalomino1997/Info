<?php

include("conexion.php");

$con = mysql_connect($host,$user,$pw)or die("problema al conectar server");
mysql_select_db($db,$con)or die("problemas al conectar la bd");
$nombre = $_POST['nombre'];
$registro = mysql_query("SELECT * FROM cursotable WHERE NOMBRE = '$nombre'");

while($reg=mysql_fetch_array($registro))
{
	echo $reg['NOMBRE']."<BR>";
	echo $reg['APELLIDO']."<BR>";
	echo $reg['PW']."<BR><BR>";
	
	}


?>