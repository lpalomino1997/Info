<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="calc.php" method="post" >
 <label>introduzca los valores<br>
 </label>
 <input type="text" name="c1" /><br /><br />
<input type="text" name="c2" /><br /><br />
<input type="text" name="c3" /><br /><br />
<input type="submit" value="ver resultados"/>
<label>selecciona la operacion<br />
<select name="lista">
<option value="sumar">sumar</option>
<option value="restar">restar</option>
<option value"multiplicar">multiplicar</option>
<option value="dividir">dividir</option>

</select>
</label>
<?php
$operacion = $_POST['lista'];

if(isset($_POST['c1']) && !empty($_POST['c1']) && 
isset($_POST['c2']) && !empty($_POST['c2']) && 
isset($_POST['c3']) && !empty($_POST['c3']))
{


echo "el resultado es :";
switch($operacion)
{
  case sumar:
 echo  $_POST['c1'] + $_POST['c2'] + $_POST['c3'];	
	break;
	
case restar:
 echo  $_POST['c1'] - $_POST['c2'] - $_POST['c3'];	
	break;
	
case multiplicar:
 echo  $_POST['c1'] * $_POST['c2'] * $_POST['c3'];	
	break;
	
case dividir:
 echo  $_POST['c1'] / $_POST['c2'] / $_POST['c3'];	
	break;
	
	default :"no se ha podido realizar la operacion";
	
}
}
else{
echo 	"debes insertar todos los campos";}
echo "<br>";
echo "<br>";

?>





</form>
</body>
</html>