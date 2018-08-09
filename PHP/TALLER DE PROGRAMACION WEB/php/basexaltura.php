<html>
<head>
<title>AREA DE UN TRIANGULO</title>
</head>
<body>
<BODY bgcolor="white">
<FORM action="area.PHP" method="POST">
PROGRAMA PHP QUE CALCULA EL AREA DE UN TRIANGULO<BR>
=====================================================
<BR><BR>
INGRESE  LA BASE:.............................
<INPUT type="text" name="base" size="4">
<BR>
INGRESE LA ALTURA:......................
<INPUT type="text" name="altura" size="4">
<BR><BR>
<input type="submit"  value="<< CALCULAR AREA >>"<br>
<?php
$base= $_POST["base"];
$altura = $_POST["altura"];

if (($base > 0)  &&  ($altura > 0)){
            $area=($base*$altura)/2;
            echo "<br> El Area del triangulo  es.. : ".$area;
        }
        else{
          echo "<br> Error de DATOS. : ";
}
echo "<br>";
?>
</FORM>
</body>
</html>
