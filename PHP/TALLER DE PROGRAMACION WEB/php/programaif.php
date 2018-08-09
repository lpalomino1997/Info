<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<p>programa php que utiliza la estructura de control if-simple :
</p>
<form action="programaif.php" method="post" name="form1" id="form1">
  <p>
    <label for="textfield">alumno:</label>
    <input type="text" name="nombre" id="textfield">
  </p>
  <p>
    <label for="textfield2">curso1:</label>
    <input type="text" name="curso1" id="textfield2">
  </p>
  <p>
    <label for="prom1">promedio1:</label>
    <input name="prom1" type="text" id="prom1" maxlength="2">
  </p>
  <p>
    <label for="textfield4">curso2:</label>
    <input type="text" name="curso2" id="textfield4">
  </p>
  <p>
    <label for="prom2">promedio2:</label>
    <input name="prom2" type="text" id="prom2" maxlength="2">
  </p>
  <p>
    <input type="text" name="cur1" id="textfield3">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="calcular">
    <input type="reset" name="reset" id="reset" value="restaurar">
    
    <?php
$alumno = $_POST["nombre"];
$curso1 = $_POST["curso1"];
$curso2 = $_POST["curso2"];
$promedio1 = $_POST["prom1"];
$promedio2 = $_POST["prom2"];
$curso1 = $_POST["cur1"];
echo "<br> alumno :".$nombre;
echo "<br> curso1 :".$curso1;
echo "<br> curso2 :".$curso2;


echo "<br> php :".$cur1;



if ($promedio1>=15){
echo "<br>el alumno esta : aprobado";
}
else{
echo "<br>el alumno esta : desaprobado";
}
echo "<br>";
echo "<br>";
if ($promedio2>=15){
echo "<br>el alumno esta: aprobado";
}
else{
echo "<br>el alumno esta : desaprobado";
}
echo "<br>";
echo "<br>";
?>

    
    
    
    
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>