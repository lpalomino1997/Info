<html>
<head>
<title> consultar </title>
<body><center>
<p><a href="index.PHP">Regresar </a></p></center><fieldset>
<form name="forml" method="post" action="consultas.php">
<p align="center"><label><font color="#FF0000"size="+3"><b>Codigo de Cliente:</b></font></label>
<input type="text" name="id">
</p>
<p align="center">
<input type="submit" name="enviar" value="Mostrar">
</p>
</form>
</fieldset>
<?php
$it=0;
$id=$_POST["id"];
if ($id==$it){
exit;
}
else{
$conexion = mysql_connect("localhost","root","telesup");
if (!$conexion){
echo "No puedo conectarse a la BD: " . mysql_error();
exit;
}

if (!mysql_select_db("losinmortales")){
echo "No ha sido posible seleccionar la BD: " . mysql_error();
exit;
}
// aqui seleccionas el campo que vas a buscar
$sql = "SELECT id,id_cliente,nombres_cli,vendedor,articulo,cantidad,pu FROM venta WHERE id = $id";

$resultado = mysql_query($sql);

if (!$resultado){
echo "No pudo ejecutarse satisfactoriamente la consulta ($sql " . "en la BD: " . mysql_error();
exit;
}

if (mysql_num_rows($resultado) == 0){
echo "No se han encontrado filas, nada a imprimir...";
exit;
}
?>
</font></p>
<table width=90% align=center border=3>
<tr bgcolor="#C0C0C0"><th colspan=7><b><font size="+3" color="#0000FF">DATOS EN CONTRADOS </font></b></th></tr>
<tr align=center bgcolor="#00FF99">
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">ID</font>
</b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">IDCLIENTE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">NOMBRE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">VENDEDOR</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">ARTICULO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">CANTIDAD</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">PU</font></b>
</td>
</tr>
<?php
// Mientras exista una fila de datos, colocar esa fila en fila
// como una matriz aosciativa
// Nota: Si solo espera una fila, no hay necesidad de usar un ciclo
// Nota: Si coloca extract($fila); dentro del siguiente ciclo,
// estara creando $id_usuarios, $nombre_completo, y $status_usuario
while ($fila = mysql_fetch_assoc($resultado)){
?>
<tr>
<td width=10% bgcolor="#C0C0C0" align="center">
<b>
<font size="+1" color="#0000FF">
<?php
echo $fila["id"];
?>
</font>
</b>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["id_cliente"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["nombres_cli"];
?>
</font></b></td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["vendedor"];
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
echo $fila["cantidad"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["pu"];
?>
</font></b></td></tr>
</td>


</tr>
<?php

}
}
mysql_free_result($resultado);
?>
</body>
</html>










































