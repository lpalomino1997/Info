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
<FORM ACTION="http://tareas.epizy.com/tarea/user_modify.php?cod=<?php echo $_GET["cod"];?>" METHOD="post">
  <p><a href="http://tareas.epizy.com/tarea/">Regresar </a></p>
  <p>Desea Modificar Cliente</p>
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
          <input name="id_cliente" type="text" value="<?php echo $fila_producto["id_cliente"]?>" size="20" maxlength="20" />
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
<input type="submit" class="boton" value="Modificar" /></center>
      </p></td>
    </tr>
  </table></center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</FORM>