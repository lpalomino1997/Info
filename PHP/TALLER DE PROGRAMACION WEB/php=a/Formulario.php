<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
<style type="text/css">
body,td,th {
	color: #F00F4E;
}
body {
	background-color: #DF060C;
	background-image: url(file:///C|/AppServ/www/Halo-4.jpg);
	color: #1309EF;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 24px;
	text-align: center;
}
</style>
</head>

<body>
<p style="color: #E70A33; font-size: 36px; text-align: center;">PROGRAMA PHP QUE PERMITE CONTROLAR UNA VENTA </p>
<form id="form1" name="form1" action="ventas.php" method="post">
  <p>
    <label for="nombre"> INGRESE NOMBRE DEL CLIENTE:...</label>
    <input type="text" name="nombre" id="name">
  </p>
  <p>
    <label for="codigo">INGRESE CODIGO DEL ARTICULO:..  </label>
    <input name="codigo" type="text" id="codigo" maxlength="4">
  </p>
  <p>
    <label for="articulo">INGRESE NOMBRE DEL ARTICULO:		</label>
    <input type="text" name="articulo" id="articulo">
  </p>
  <p>
    <label for="cantidad">INGRESE CANTIDAD:</label>
    ...........................
     <input name="cantidad" type="text" id="cantidad" autocomplete="off">
  </p>
  <p>
    <label for="pu">INGRESO PRECIO UNITARIO:............. </label>
    <input name="pu" type="text" id="pu">
  </p>
  <p>
    <input name="calcular" type="submit" id="submit" formaction="Practica001.php" value="calcular"> 
    <input type="reset" name="restablecer" id="reset" value="restablecer">
  </p>
  
  <?php
  // bloque 1 captura del formulario(name)
  //-------------------------------------
  $nombre = $_POST["nombre"];
  $codigo = $_POST["codigo"];
  $articulo = $_POST["articulo"];
  $cantidad = $_POST["cantidad"];
  $pu = $_POST["pu"];
  
  //bloque 2 aplicacion de operaciones
  //---------------------------------
  $importe =$cantidad*$pu;
  $valorventa =$importe;
  $dscto =$valorventa*0.08;
  $totdscto =$valorventa-$dscto;
  $igv =$totdscto*0.18;
  $totalfact =$totdscto+$igv;
  
  //bloque 3 salida de datos
  //------------------------
  echo "<br> El Cliente es...................... :  ".$nombre;
  echo "<br> El Codigo del Articulo  es.. : ".$codigo;
  echo "<br> El Articulo es.................... :  ".$articulo;
  echo "<br> La Cantidad es.................. : S/ ".$cantidad;
  echo "<br> El `Precio Unitario............ : S/ ".$pu;
  echo "<br>=========================================================";
  echo "<br> El Importe es.............. : S/ ".$importe;
  echo "<br> El Valor de venta es.... : S/ ".$valorventa;
  echo "<br> El Dscto del 8% es...... : S/ ".$dscto;
  echo "<br> El total con Dscto es....: S/ ".$totdscto;
  echo "<br> El Igv es........................ : S/ ".$igv;
  echo "<br> El Total Facturación es: S/ ".$totalfact;
  echo "<br>=========================================================";
  echo "<br>";
  echo "<br>";
  ?>
  </FORM>
  <p>&nbsp;</p>
</body>
  </html>
  
 

