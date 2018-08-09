<p><a href="index.PHP">Regresar </a></p>
<?php 
// AQUI CONEXION O include () DE ARCHIVO DE CONEXION CON BASE DATOS.
/* Abrir conexion ala Base de Datos */
$conexion = mysql_connect("localhost","root","telesup");
mysql_select_db("losinmortales",$conexion);
//$id=$_POST["id"]; 
$id_cliente=$_POST["id_cliente"];
$nombres_cli=$_POST["nombres_cli"];
$vendedor=$_POST["vendedor"];
$articulo=$_POST["articulo"];
$cantidad=$_POST["cantidad"];
$pu=$_POST["pu"];
$sq20 = "INSERT  venta (id,id_cliente,nombres_cli,vendedor,articulo,cantidad,pu)  VALUES (0,'$id_cliente','$nombres_cli','$vendedor','$articulo','$cantidad','$pu')";
$re=mysql_query($sq20);

echo "Registro exitoso!";
//mysql_free_result($re);
mysql_close();
?>