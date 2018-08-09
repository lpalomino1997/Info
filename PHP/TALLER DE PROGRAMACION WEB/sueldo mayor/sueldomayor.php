<HTML> 
<HEAD> 
<TITLE>EJEMPLO</TITLE> 
</HEAD> 
<BODY> 
<H1>Acceso a la Base de Datos</H1>
 
<UL> 
 
<?php
$conexion=mysql_connect('localhost','root','telesup'); 
$consulta=mysql_db_query('practica1', 'SELECT * FROM resgitro'); 
//tabla where sueldo>=1000

while ($valores = mysql_fetch_array($consulta)) { 
print " <LI>Nombre: " . $valores["nombre"] . "<BR>\n"; 
print " apellido: " . $valores["apellido"] . "<BR>\n"; 
print " direccion: " . $valores["direccion"] . "<BR>\n"; 
print " puesto: " . $valores["puesto"] . "<BR>\n"; 
print " edad: " . $valores["edad"] . "<BR>\n"; 
print " sueldo: " . $valores["sueldo"] . "<BR>\n"; 

if ($valores["sueldo"]==4552215){
	$SUELDO=$valores["sueldo"];
}
}

echo "<br> el mayor sueldo es....= ".$SUELDO;

mysql_free_result($consulta); 
mysql_close(); 




?> 
</UL> 
</BODY> 
</HTML>
