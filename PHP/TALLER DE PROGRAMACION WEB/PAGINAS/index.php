<?PHP
include ("conexion.php");
$rst_productos=mysql_query("SELECT id,IDUSUARIO,NOMBRES,CLAVE,NIVEL,email FROM usuario ORDER BY NOMBRES ASC",$conexion);

$num_registros=mysql_num_rows($rst_productos);
if ($num_registros==0)
{
echo '<font size="5"color="red">!!!Atenci&oacute;n, No se encontro Ning&uacute;n Usuario en la Base de datos</font>';
mysql_close($conexion);
}


?>
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo3 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
body {
	background-color: #FFCCCC;
}
-->
</style>
<br><br>
EJEMPLO MODELO DE MANTENIMIENTO DE BASE DE DATOS . ALUMNOS L-M-V 8-10AM 2016 
<h1 align="left" class="Estilo3"> LISTA DE USUARIOS</h1>
<p align="left">&nbsp;</p>
<table width="359" border="1">
  <tr>
    <td width="60" height="47"><p align="center"><a href="nuevo.php">Nuevo</a></p>    </td>
    <td width="55"><a href="reportes.php">Reportes</a></td>
    <td width="56"><a href="consultas.php">Consulta</a></td>
    </tr>
</table>
<table width="755" height="122" border="1">
  <tr>
    <td width="49" height="53" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">COD</span></td>
    <td width="309" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">IDUSUARIO</span></td>
    <td width="91" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">CLAVE</span></td>
    <td width="67" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">NOMBRES</span></td>
    <td width="30" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">EMAIL</span></td>
	<td width="88" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">NIVEL</span></td>
    <td width="88" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">MODIFICAR</span></td>
    <td width="88" bordercolor="#00FF00" bgcolor="#000000"><span class="Estilo1">ELIMINAR</span></td>
	
  </tr>
  <?php
  while ($fila=mysql_fetch_array($rst_productos))
  {
  ?>
  <tr>
    <td height="23" bgcolor="#99FF99"><?php  echo $fila [0];?></td>
    <td bgcolor="#99FF99"><?php  echo $fila [1];?></td>
    <td bgcolor="#99FF99"><?php  echo $fila [3];?></td>
    <td bgcolor="#99FF99"><?php  echo $fila [2];?></td>
    <td bgcolor="#99FF99"><?php  echo $fila [5];?></td>
	<td bgcolor="#99FF99"><?php  echo $fila [4];?></td>
	
	
    <td bgcolor="#99FF99"><a href="modif.php?cod=<?php  echo $fila [0];?>">Modificar</a><a href="menu.php"></a></td>
	<td bgcolor="#99FF99"><a href="delete1.php?cod=<?php  echo $fila [0];?>">Eliminar</a><a href="articulos.php"></a></td>
  </tr>
   <?php
  }
  ?>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>