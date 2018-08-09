<?php
session_start();
include("conexion.php");

if(isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
{
 $con=mysql_connect($host,$user,$pw)or die("problemas al conectar al server");
   mysql_select_db($db,$con)or die("problemas con BD");

 $sel=mysql_query("SELECT USER,PW FROM registro WHERE USER='$_POST[user]'",$con);

$sesion=mysql_fetch_array($sel);

if($_POST['pw'] == $sesion['PW']) {
 $_SESSION['username'] = $_POST['user'];
echo "sesion exitosa";
}else{
	echo "combinacion erronea";
}

}else{
	echo "debes llenar ambos campos";
}







?>