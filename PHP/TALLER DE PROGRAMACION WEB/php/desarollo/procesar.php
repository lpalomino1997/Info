<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pw = $_POST['pw'];

echo $nombre."<br>";
echo $apellido."<br>";
echo $pw;
?>
</body>
</html>