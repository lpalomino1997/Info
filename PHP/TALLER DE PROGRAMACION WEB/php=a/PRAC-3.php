<html>
<body>
<?php
$var1="CALCULAR VALOR DE VENTA <br>";


$articulo="Articulo :LCD ";


echo $articulo,"<br>";

$cantidad=10;
$pu=10;

$mensaje10="<br>Cantidad es:";
echo $mensaje10,$cantidad;
$mensaje11="<br>PU es:";
echo $mensaje11,$pu;


$total=($cantidad*$pu);
$descuento=($total*0.7);
$totalpagar=($total-$descuento);
$mensaje1="<br> El total es: ";
echo $mensaje1,$total;
$mensaje2="<br> El descuento es: ";
echo $mensaje2,$descuento;
$mensaje3="<br> El totalpagar es: ";
echo $mensaje3,$totalpagar;
?>
</body>
</html>