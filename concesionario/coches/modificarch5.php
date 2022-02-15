<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Coches</title>
    <link rel='stylesheet' type='text/css' href='../css3.css'>
</head>
<body>
<?php
error_reporting(E_ALL ^ E_WARNING);
$servername = "localhost" ;
$username = "root";
$passwd = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $passwd, $dbname);

if(!$conn){
    die("Connection failed ". mysqli_connect_error());
}

$id = $_REQUEST['id_coche'];
$modelo = $_REQUEST["modelo"];
$marca = $_REQUEST["marca"];
$color = $_REQUEST["color"];
$precio = $_REQUEST["precio"];
$alquiler = $_REQUEST["alquiler"];
$foto = $_REQUEST["foto"];

$sql = "update coches set modelo='$modelo', marca='$marca', color='$color',precio='$precio', alquilado='$alquiler', foto='$foto' where id_coche=$id";
if(mysqli_query($conn,$sql)){
    echo "Se ha actualizado correctamente";
} else {
    echo "Error: ". mysqli_error($conn);
}
echo "<form>";
echo "<a href='../inicio_admin.html'>";
echo "<br>"."<input type='button' id='boton' value='Volver al inicio' class='boton'>";
echo "</a>";
echo "</form>";
?>
</body>
</html>