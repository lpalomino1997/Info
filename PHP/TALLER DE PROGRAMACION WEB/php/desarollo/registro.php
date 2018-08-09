<html>
<head>
<title>REGISTRO DE N ALUMNOS</title>
</head>
<body>
<BODY bgcolor="white">
<FORM action="registro.php" method="POST">
PROGRAMA PHP QUE PERMITE REGISTAR N ALUMNOS<BR>
=====================================================
<BR><BR>
INGRESE NUMERO DE ALUMNOS A REGISTRAR.................
<INPUT type="text" name="registro" size="4">
<br>=====================================================
<br>
<input type="submit" name="procesar" id="submit" value="calcular">
<br>
<br>
INGRESE CODIGO DE MATRICULA:.......
<INPUT type="text" name="codigom" size=<br>
<BR>
INGRESE NOMBRES Y APELLIDOS:.....
<INPUT type="text" name="nomape" size=<br>
<BR>
INGRESE CICLO:...
<INPUT type="text" name="ciclo" size=<br>
<BR>
INGRESE TURNO:.............................
<INPUT type="text" name="turno" size="4">
<BR>
INGRESE CARRERA:...............
<INPUT type="text" name="carrera" size="4">
<br>
INGRESE HORARIO:.......
<INPUT type="text" name="horario" size=<br>
<br>=====================================================

<?php
$registro= $_POST["registro"];
$codigom= $_POST["codigom"];
$nomape= $_POST["nomape"];
$ciclo= $_POST["ciclo"];
$turno= $_POST["turno"];
$carrera= $_POST["carrera"];
$horario= $_POST["horario"];

for ($i = 1;$i<=$registro; $i++){
	    echo "<br> Alumno Nro :".$i;
  echo "<br>=====================================================";
            echo "<br> Codigo de Matricula :".$codigom;
            echo "<br> Nombres y Apellidos:".$nomape;
	    echo "<br> Ciclo :".$ciclo;
	    echo "<br> Turno :".$turno;
            echo "<br> Carrera:".$carrera;
            echo "<br> Horario:".$horario;   
  echo "<br>=====================================================";
}

echo "<br>";
?>
</FORM>
</body>
</html>
