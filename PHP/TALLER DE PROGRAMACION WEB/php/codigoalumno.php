<form></form><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<p>mostrar codigo alumno
</p>
<form name="form1" method="post" action="codigoalumno.php">
  <p>
    <label for="textfield">ingresar codigo:</label>
    <input type="text" name="codigo1" id="textfield">
    <label for="textfield2"><br>
      n veces:</label>
    <input type="text" name="N" id="textfield2">
  </p>
  <p>
    <input type="submit" name="calcular" id="submit" value="calcular">
    <input type="reset" name="reset" id="reset" value="restaurar">
  </p>
  
  
   <?php
   
$codigo = $_POST["codigo1"];
$cantidad = $_POST["N"];

for($p=1;$p<=$cantidad;$p++){

echo "<br>".$codigo; 
}
echo "<br>";
echo "<br>";
?>

  
  
  
  
  
</form>
<p>&nbsp;</p>
</body>
</html>