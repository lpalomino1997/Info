<?php



?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo3 {color: #00FF00}
-->
</style><center>
<FORM ACTION="regclientes.php" METHOD="post">
  <p><a href="index.PHP">Regresar </a></p>
  <p>INGRESE NUEVO USUARIO</p>
  <table width="200" border="1">
    <tr>
      <td bgcolor="#000000"><span class="Estilo3">NUEVO USUARIO</span></td>
    </tr>
    <tr>
      <td>
        <p>Id Usuario
          <input name="IDUSUARIO" type="text" size="20" maxlength="20" />
          <br />
Email:
<input name="email" type="text" size="28" maxlength="100" />
<br />
Clave:
<input name="CLAVE" type="password" size="28" maxlength="20" />
<br />
Nombre:
<input name="NOMBRES" type="text" size="28" maxlength="255" />
<br />
Nivel: 1->Adm. 0->Usuario.
<input name="NIVEL" type="text" size="28" maxlength="255" />
<br />

<input type="submit" class="boton" value="Nuevo" />
      </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</FORM></center>