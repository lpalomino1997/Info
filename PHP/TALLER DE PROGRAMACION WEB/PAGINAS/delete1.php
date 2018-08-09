<?php

include ("conexion.php");
$rst_productos=mysql_query("SELECT * FROM usuario WHERE id=".$_REQUEST["cod"].";",$conexion);
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
      <td bgcolor="#000000"><span class="Estilo3">NUEVO USUARIO</span></td>
    </tr>
    <tr>
      <td><p>ID:
          <input name="nick2" type="text" value="<?php echo $fila_producto["id"]?>" size="20" maxlength="20" />
      </p>
        <p>IDUSUARIO:
          <input name="nick" type="text" value="<?php echo $fila_producto["IDUSUARIO"]?>" size="20" maxlength="20" />
          <br />
Email:
<input name="email" type="text" value="<?php echo $fila_producto["email"]?>" size="28" maxlength="100" />
<br />
Clave:
<input name="password" type="password" value="<?php echo $fila_producto["CLAVE"]?>" size="28" maxlength="20" />
<br />
Nombres:
<input name="nombre" type="text" value="<?php echo $fila_producto["NOMBRES"]?>" size="28" maxlength="255" />
<br /><center>
<input type="submit" class="boton" value="Eliminar" /></center>
      </p></td>
    </tr>
  </table></center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</FORM>