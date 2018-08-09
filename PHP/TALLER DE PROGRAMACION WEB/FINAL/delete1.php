<?php

include ("conexion.php");
$rst_productos=mysql_query("SELECT * FROM venta WHERE id=".$_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);



?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo3 {color: #00FF00}
-->
</style><center>
<FORM ACTION="user_delete.php?cod=<?php echo $_GET["cod"];?>" METHOD="post">
  <p><a href="index.PHP">Regresar </a></p>
  <p>Desea Eliminar el Usuario</p>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td bgcolor="#000000"><span class="Estilo3">NUEVO CLIENTE</span></td>
    </tr>
    <tr>
      <td><p>ID:
          <input name="nick2" type="text" value="<?php echo $fila_producto["id"]?>" size="20" maxlength="20" />
      </p>
        <p>IDCLIENTE:
          <input name="nick" type="text" value="<?php echo $fila_producto["id_cliente"]?>" size="20" maxlength="20" />
          <br />
                  Ruc:
<input name="ruc" type="text" value="<?php echo $fila_producto["ruc"]?>" size="28" maxlength="100" />
<br />
        Numero de Factura:
<input name="numerofac" type="text" value="<?php echo $fila_producto["numerofac"]?>" size="28" maxlength="100" />
<br />
        Direccion:
<input name="direccion" type="text" value="<?php echo $fila_producto["direccion"]?>" size="28" maxlength="100" />
<br />
        Fecha de Emision:
<input name="fechaemision" type="text" value="<?php echo $fila_producto["fechaemision"]?>" size="28" maxlength="100" />
<br />
          Nombre:
<input name="nombres_cli" type="text" value="<?php echo $fila_producto["nombres_cli"]?>" size="28" maxlength="100" />
<br />
Vendedor:
<input name="vendedor" type="text" value="<?php echo $fila_producto["vendedor"]?>" size="28" maxlength="100" />
<br />
Articulo:
<input name="articulo" type="text" value="<?php echo $fila_producto["articulo"]?>" size="28" maxlength="100" />
<br />
Cantidad:
<input name="cantidad" type="text" value="<?php echo $fila_producto["cantidad"]?>" size="28" maxlength="20" />
<br />
Pu:
<input name="pu" type="text" value="<?php echo $fila_producto["pu"]?>" size="28" maxlength="255" />
<br /><center>
<input type="submit" class="boton" value="Eliminar" /></center>
      </p></td>
    </tr>
  </table></center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</FORM>