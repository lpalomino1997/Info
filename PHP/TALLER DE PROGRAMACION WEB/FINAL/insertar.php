<?php



?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo3 {color: #00FF00}
-->
</style><center>
<FORM ACTION="reg_insercion.php" METHOD="post">
  <p><a href="index.PHP">Regresar </a></p>
  <p>INGRESE NUEVO CLIENTE</p>
  <table width="200" border="1">
    <tr>
      <td bgcolor="#000000"><span class="Estilo3">NUEVO CLIENTE</span></td>
    </tr>
    <tr>
      <td>
        <p>ID CLIENTE
          <input name="id_cliente" type="text" size="20" maxlength="20" />
          <br />
          RUC:
<input name="ruc" type="text" size="28" maxlength="100" />
<br />
NUMERO DE FACTURA:
<input name="numerofac" type="text" size="28" maxlength="100" />
<br />
DIRECCION:
<input name="direccion" type="text" size="28" maxlength="100" />
<br />
FECHA DE EMISION:
<input name="fechaemision" type="text" size="28" maxlength="100" />
<br />
NOMBRE:
<input name="nombres_cli" type="text" size="28" maxlength="100" />
<br />
VENDEDOR:
<input name="vendedor" type="text" size="28" maxlength="255" />
<br />
ARTICULO:
<input name="articulo" type="text" size="28" maxlength="255" />
<br />
CANTIDAD:
<input name="cantidad" type="text" size="28" maxlength="255" />
<br />
PU:
<input name="pu" type="text" size="28" maxlength="255" />
<br />

<input type="submit" class="boton" value="Nuevo" />
      </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</FORM></center>