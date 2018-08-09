<?php
// incluyendo las variables de la clase conexion
include("conexion.php");
//creando el if
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['apellido']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
   {
// abriendo la conexion con mysql
	$conexion = mysql_connect($host,$user,$pw)or die("problema al conectar el host");
	//selecionando la base de datos
	mysql_select_db($bd,$conexion)or die("problemas al conectar la bd");
	// abriendo la consulta 
	mysql_query("INSERT INTO cursotable (NOMBRE,APELLIDO,PW)
	VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[pw]')",$conexion);
	echo "datos insertados correctamente";
	
	}else{
		echo "problema al insetar datos";
	}




?>