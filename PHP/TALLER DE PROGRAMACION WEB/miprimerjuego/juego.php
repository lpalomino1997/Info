<?php
session_start();
$numero1 = mt_rand(1,3);
$numero2 = mt_rand(1,3);
$numero3 = mt_rand(1,3);
echo "Juego de Casino:<br>";
echo '<img src="imagenes/'.$numero1.'.jpg" />';
echo '- <img src="imagenes/'.$numero2.'.jpg" />';
echo '- <img src="imagenes/'.$numero3.'.jpg" />';
if(!isset($_SESSION['oro']) OR isset($_GET['reiniciar']))
{
	$_SESSION['oro'] = 1000;
}
if($_SESSION['oro']>=100)
{
	if($numero1==$numero2 AND $numero1==$numero3)
	{
		echo "<br>GANASTE";
		$_SESSION['oro']=$_SESSION['oro']*2;
	}
	else
	{
		$_SESSION['oro']=$_SESSION['oro']-100;
		echo "<br>PERDISTE";
	}
}
else
{
	echo "<br>YA NO INTENTES MAS";	
}
echo "<br><br>Mi oro es:".$_SESSION['oro'];

echo '<br><a href="juego.php">Jugar</a>';

echo '<br><br><br><a href="juego.php?reiniciar=1">Reiniciar</a>';
	
?>