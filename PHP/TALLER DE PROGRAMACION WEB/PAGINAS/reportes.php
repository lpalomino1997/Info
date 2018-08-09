<html>
<head>
<title> Imprimir Registros en PHP </title>
<body>
<p><a href="index.PHP">Regresar </a></p>
<form action="reportes.php" method="get">
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

if (!mysql_select_db("usuarios")){
echo "No ha sido posible seleccionar la BD: " . mysql_error();
exit;
}
// a qui seleccionar el campo que vas a buscar
$sql = "SELECT id,IDUSUARIO,CLAVE,NOMBRES,email,NIVEL FROM usuario WHERE id = id ";

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
<tr bgcolor="C0C0C0"><th colspan=6><b><font size="+3" color="#0000FF">DATOS EN CONTRADOS </font></b></th></tr>
<tr align=center bgcolor="#00FF99">
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">IDENTIFICADOR</font>
</b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">IDUSUARIO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">CLAVE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">NOMBRES</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">EMAIL</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">NIVEL</font></b>
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
echo $fila["IDUSUARIO"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" aling="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["CLAVE"];
?>
</font></b>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["NOMBRES"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["email"];
?>
</font></b></td>
</td>
<td width=4% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["NIVEL"];
?>
</font></b></td></tr>
</td>
</tr>
<?php
}
mysql_free_result($resultado);
?>





