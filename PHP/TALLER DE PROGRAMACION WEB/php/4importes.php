<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<p>mostrar el subtotal de n importes</p>
<p>&nbsp;</p>
<form action="4importes.php" method="post" name="form1" id="form1">
  <p>
    <label for="t1">N veces:</label>
    <input type="text" name="nveces" id="t1">
  </p>
  <p>
    <label for="t2">importe2:</label>
    <input type="text" name="t2" id="t2">
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="calcular" id="submit" value="calcular">
    <input type="reset" name="restaurar" id="reset" value="restaurar">
  </p>
   <?php
  $icantidad = $_POST["nveces"];
  $importe = $_POST["t2"];

$acum=0;	  
 while($cont<=$icantidad){
$acum=$acum+$importe;
$cont++;
 
}
echo "<br>";
echo "<br>";
 

 ?>

</form>
<p>&nbsp;</p>
</body>
</html>