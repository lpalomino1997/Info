<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #211A1A;
}
body {
	background-color: #B6D0F9;
}
</style>
</head>

<body>
<p style="color: #F80808">PROGRAMA PHP QUE PERMITE CONTROLAR UNA VENTA TIPO FACTURA</p>
<form action="PRACTICAPHP1" method="post" id="form1" name="form1">
  <p><strong>INGRESE NOMBRE DEL CLIENTE.....:
      <input type="text" name="nombre" id="textfield">
  </strong></p>
  <p>
    <strong>
    <label for="textfield2">INGRESE CODIGO DEL ARTICULO...:</label>
    <input name="codigo" type="text" id="textfield2" maxlength="4">
  </strong></p>
  <p>
    <strong>
    <label for="textfield3">INGRESE NOMBRE DEL ARTICULO.:</label>
    <input type="text" name="articulo" id="textfield3">
  </strong></p>
  <p>
    <strong>
    <label for="textfield4">INGRESE CANTIDAD.............................:</label>
    <input type="text" name="cantidad" id="textfield4">
  </strong></p>
  <p>
    <strong>
    <label for="textfield5">INGRESE PU.............................................:</label>
    </strong><strong>
     <input type="text" name="pu" id="textfield5">
    </strong></p>
  <p>
    <strong>
    <input type="submit" name="calcular" id="submit" value="CALCULAR">
    <input type="reset" name="restaurar" id="reset" value="RESTAURAR">
  </strong></span></p>   
  
  <?php
  $nombre = $_POST["nombre"];
  $nombre = $_POST["codigo"];
  $nombre = $_POST["articulo"];
  $nombre = $_POST["cantidad"];
  $nombre = $_POST["pu"];
	  
 $importe = $cantidad*$pu;
 $valorventa = $importe;
 $dscto = $valorventa*0.08;
 $totaldscto = $valorventa-$dscto;
 $igv = $totaldscto*0.18;
 $totalfact = $totaldscto+$igv;
 
 echo "<br> El Cliente es ................ : " .$nombre;
 echo "<br> El Codigo del Articulo es .... : " .$codigo;
 echo "<br> El Articulo es ............... : " .$articulo;
 echo "<br> La Cantidad es ............... : " .$cantidad;
 echo "<br> El Precio Unitario es ........ : " .$pu;
 echo "<br>==================================================";
 echo "<br> El importe es ................ : " .$importe;
 echo "<br> El valor de venta es ......... : " .$valorventa;
 echo "<br> El descuento es .............. : " .$dscto;
 echo "<br> El total del descuento es .... : " .$totaldscto;
 echo "<br> El total del Igv es .......... : " .$igv;
 echo "<br> El total de la Factura es .... : " .$totalfact;
 echo "<br>==================================================";
 echo "<br>";
 
 
 echo"<br>";
 ?>   
</form>
<p><a href="www.google.com.pe">Google</a></p>
</body>
</html>