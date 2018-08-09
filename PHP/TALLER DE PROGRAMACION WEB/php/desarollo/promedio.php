<html>
<head>
<title>PROMEDIO DE NOTAS</title>
</head>
<body>
<BODY bgcolor="white">
<FORM action="promedio.PHP" method="POST">
PROGRAMA PHP QUE CALCULA EL PROMEDIO DE 3 NOTAS<BR>
=====================================================
<BR><BR>
INGRESE NOTA DE PRACTICAS:.............................
<INPUT type="text" name="practicas" size="4">
<BR>
INGRESE NOTA DE CUADERNO:.............................
<INPUT type="text" name="cuaderno" size="4">
<BR>
INGRESE NOTA DE EXAMEN:..................................
<INPUT type="text" name="examen" size="4">
<BR>
<input type="submit" name="calcular" id="submit" value="calcular">
<br>
<?php
$practicas= $_POST["practicas"];
$cuaderno = $_POST["cuaderno"];
$examen= $_POST["examen"];
$promedio =($practicas+$cuaderno+$examen)/3;
        
		if ($promedio >=11){
           echo "<br> Usted Aprobo el Curso con ".$promedio;
        }
        else{
             echo "<br>Usted Desaprobo el Curso: ";
	     echo "<br>Su promedio obtenido  es.. : ".$promedio;
}

echo "<br>";
?>
</FORM>
</body>
</html>
