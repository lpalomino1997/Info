<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
ejemplos con if 1
<form action="if1.php" method="post" name="form1" id="form1">
  <p>
    <label for="textfield">numero1:</label>
    <input type="text" name="a" id="textfield">
  </p>
  <p>
    <label for="textfield2">numero2:</label>
    <input type="text" name="b" id="textfield2">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="calcular">
    <input type="reset" name="reset" id="reset" value="restaurar">
  </p>
  <p>
    <?php


$valor1 = $_POST["a"];
$valor2 = $_POST["b"];

echo "<br> valor1=...................... :  ".$valor1;
echo "<br> valor2=...................... :  ".$valor2;

echo "<br>";
echo "<br>";

if ($valor1 > $valor2) {
    echo "el numero mayor es..=".$valor1;

} elseif ($valor1 == $valor2) {
    echo "los dos son iguales";
} else {
    echo "el numero menor es..= ".$valor1;
}
echo "<br>";
echo "<br>";
?>
</form>
</body>
</html>