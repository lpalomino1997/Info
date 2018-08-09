<html>
<head>
<title> consultar </title>
<body><center>
<p><a href="index.PHP">Regresar </a></p></center><fieldset>
<form name="forml" method="post" action="consultas.php">
<p align="center"><label><font color="#FF0000"size="+3"><b>Codigo de Usuario:</b></font></label>
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

if (!mysql_select_db("usuarios")){
echo "No ha sido posible seleccionar la BD: " . mysql_error();
exit;
}
// aqui seleccionas el campo que vas a buscar
$sql = "SELECT id,IDUSUARIO,CLAVE,NOMBRES,email FROM usuario WHERE id = $id";

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
<tr bgcolor="#C0C0C0"><th colspan=5><b><font size="+3" color="#0000FF">DATOS EN CONTRADOS </font></b></th></tr>
<tr align=center bgcolor="#00FF99">
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="#0000FF">IDENTIFICADOR</font>
</b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">IDUSUARIO</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">CLAVE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">NOMBRE</font></b>
</td>
<td bgcolor="#C0C0C0"><b>
<font size="+2" color="0000FF">EMAIL</font></b>
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
echo $fila["IDUSUARIO"];
?>
</font></b></td>
</td>

<td width=10% bgcolor="#C0C0C0" align="center"><b><font size="+1" color="#0000FF">
<?php
echo $fila["CLAVE"];
?>
</font></b></td>

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











































