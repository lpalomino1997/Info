<html>
<body>
<?php
$var1="calcular el promedio <br>";
$var2="curso1:windows <br>";
$var3="curso2:word <br>";
$var4="curso3:excel <br>";
$var5="curso4:moodle <br>";

echo $var1,"<br>",$var2,"<br>",$var3,"<br>",$var4,"<br>",$var5,"<br>",$var6;

$curso1nota=20;
$curso2nota=15;
$curso3nota=12;
$curso4nota=10;

$mensaje1="<br> las notas de cada curso son :<br>";
echo $mensaje1;"<br>";

echo $curso1nota,"<br>",$curso2nota,"<br>",$curso3nota,"<br>",$curso4nota;
$promedio=($curso1nota+$curso2nota+$curso3nota+$curso4nota)/4;
$mensaje2="<br> el promedio de leo es :";
echo $mensaje2,$promedio;
?>

</body>
</html>
