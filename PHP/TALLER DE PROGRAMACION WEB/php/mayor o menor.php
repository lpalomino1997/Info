<html>
<head>
<title>NUMERO MAYOR MENOR</title>
</head>
<body>
<BODY bgcolor="yellow">
<FORM action="mayormenor.PHP" method="POST">
PROGRAMA DE PHP QUE PERMITE COMPARAR DOS NUMEROS <BR>
=====================================================
<BR><BR>
INGRESE EL PRIMER   NUMERO:
<INPUT type="text" name="Numero1" size="4">
<BR>
INGRESE EL SEGUNDO NUMERO:
<INPUT type="text" name="Numero2" size="4">
<BR><BR>
<input type="submit"  value="COMPARAR"><br>
<?php
$Numero1 = $_POST["Numero1"];
$Numero2 = $_POST["Numero2"];
if ($Numero1>$Numero2){
echo "<br> Es Mayor";
}
else{
echo "<br> Es Menor";
}
echo "<br>";
echo "<br>";
?>
</FORM>
</body>
</html>
