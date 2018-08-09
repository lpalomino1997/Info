<html>
<head>
<title> Imprimir Registros en PHP </title>
<body>
<p><a href="index.php">Regresar </a></p>
<form action="tablas.php" method="get">
<input type="button" name="imprimir" value="Imprimir" onClick="window.print();"/>
</form>
</body>
</html>
<?php

$conexion = mysql_connect("localhost","root","telesup");
if(!$conexion){
echo "No puedo conectarse a la BD: " . mysql_error();
exit;
}

if (!mysql_select_db("losinmortales")){
echo "No ha sido posible seleccionar la BD: " . mysql_error();
exit;
}
// a qui seleccionar el campo que vas a buscar

 $sql = "SELECT venta.id,articulo,cantidad,pu,detalle_ventas.importes,subtotal,total,articulos.id_art,marca,modelo 
 FROM venta INNER JOIN detalle_ventas  ON venta.id= detalle_ventas.id
INNER JOIN articulos ON venta.id_art= articulos.id_art
ORDER BY venta.id";



$resultado = mysql_query($sql);

if (!$resultado) {
echo "No puedo ejecutarse satisfactoriamente la consulta ($sql) ".
"en la BD: " . mysql_error();
exit;
}

if (mysql_num_rows($resultado)==0){
echo "No se han encontrado filas, nada a imprimir, asi que voy " . " a detenerme.";
exit;
}
?>
</font></p>
<table width=100% align=center border=3>
<tr bgcolor="C0C0C0"><th colspan=10><b><font size="+3" color="#0000FF">DATOS EN CONTRADOS </font></b></th></tr>
<tr align=center bgcolor="#00FF99">
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">ID</font>
</b>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">ID ARTICULO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">ARTICULO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">MARCA</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">MODELO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">CANTIDAD</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">PU</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">IMPORTE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">SUBTOTAL</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">TOTAL</font></b>
</td>

</tr>
<?php
while ($fila = mysql_fetch_assoc($resultado)){
?>
<tr>
<td width=10% bgcolor="#C0C0C0" align="center">
<b>
<font size="+1" color"#0000FF">
<?php
echo $fila["id"];
?>
</font>
</b>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["id_art"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["articulo"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["marca"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["modelo"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["cantidad"];
?>
</font></b></td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["pu"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["importes"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["subtotal"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["total"];
?>
</font></b></td></tr>
</td>


</tr>
<?php



}
mysql_free_result($resultado);
?>









