<html>
<body>
<?php
$var1="valor de la venta<br>";
$nombre="nombre del cliente carlos<br>";
$articulo="articulo es :tv<br>";
echo $var1,$nombre,$articulo;


$cantidad=1;
$pu=20;
$igv=0.18;

$descuento=0.07;
$mensaje1="<br> cantidad es :";
echo $mensaje1,$cantidad;
$mensaje6="<br> pu  :";
echo $mensaje6,$pu;
$mensaje7="<br> el igv  :";
echo $mensaje7,$igv;


$promedio=($cantidad*$pu);
$subtotal=($promedio*$igv);
$descuento1=($subtotal-$descuento);
$total=($descuento1);



$mensaje11="<br>promedio:";
echo $mensaje11,$promedio;
$mensaje20="<br>subtotal:";
echo $mensaje20,$subtotal;
$mensaje10="<br>descuento:";
echo $mensaje10,$descuento1;
$mensaje5="<br>total:";
echo $mensaje5,$total;




?>
</body>
</html>
