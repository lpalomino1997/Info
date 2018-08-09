<p><a href="index.PHP">Regresar </a></p>
<?php 
// AQUI CONEXION O include () DE ARCHIVO DE CONEXION CON BASE DATOS.
/* Abrir conexion ala Base de Datos */
$conexion = mysql_connect("localhost","root","telesup");
mysql_select_db("usuarios",$conexion);
//$id=$_POST["id"]; 
$IDUSUARIO=$_POST["IDUSUARIO"];
$CLAVE=$_POST["CLAVE"];
$NOMBRES=$_POST["NOMBRES"];
$email=$_POST["email"];
$NIVEL=$_POST["NIVEL"];
$sq20 = "INSERT  usuario (id,IDUSUARIO,CLAVE,NOMBRES,email,NIVEL)  VALUES (0,'$IDUSUARIO','$CLAVE','$NOMBRES','$email','$NIVEL')";
$re=mysql_query($sq20);

echo "Registro exitoso!";
//mysql_free_result($re);
mysql_close();
?>