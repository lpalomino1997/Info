<HTML> 
<HEAD> 
<TITLE>EJEMPLO</TITLE> 
</HEAD> 
<BODY> 
<H1>Acceso a la Base de Datos</H1> 
<UL> 
<? 
/* Abrir conexión a la Base de Datos */ 
//conexion a la base de datos
$conexion=mysql_connect('localhost','root','telesup'); 
//realizacion de la consulta sql
$consulta=mysql_db_query('prueba', 'SELECT * FROM agenda'); 
/* Mostrar la Consulta */ 
//mostrar los registros de la tabla agenda 
//abre while
while ($valores = mysql_fetch_array($consulta)) { 
print " <LI>Nombre: " . $valores["nombre"] . "<BR>\n"; 
print " Direccion: " . $valores["direccion"] . "<BR>\n"; 
print " Telefono: " . $valores["telefono"] . "<BR>\n"; 
print " email: " . $valores["email"] . "<BR>\n"; 
} // while 
/* Cerrar conexion a la BD */ 
mysql_free_result($consulta); 
mysql_close(); 
?> 
</UL> 
</BODY> 
</HTML>
