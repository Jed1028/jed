<?php
$conectar=mysqli_connect("localhost","root","","trendyshop");

$a = $_POST['Nombre'];
$b = $_POST['Correo'];
$c = $_POST['Direccion'];
$d = $_POST['Tarjeta'];
$e = $_POST['Telefono'];


mysqli_query($conectar,"INSERT INTO cliente VALUES ('','$a','$b','$c','$d','$e')");

echo("su registro fue enviado")
?>