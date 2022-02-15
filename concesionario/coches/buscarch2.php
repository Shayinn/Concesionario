<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css3.css'>
    <title>Buscar Usuarios</title>
</head>
<body>
<?php
$servername = "localhost" ;
$username = "root";
$passwd = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $passwd, $dbname);

if(!$conn){
    die("Connection failed ". mysqli_connect_error());
}
$modelo = $_REQUEST['modelo'];
$marca = $_REQUEST['marca'];

$sql = "select * from coches where modelo='$modelo'";
$sql2 = "select * from coches where marca='$marca'";
$resultado = mysqli_query($conn, $sql);
$resultado2 = mysqli_query($conn, $sql2);

//BUSQUEDA POR MODELO
if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<strong>id de coche:</strong> " . $row["id_coche"]. " <strong>Modelo:</strong> ". $row["modelo"]. " <strong>Marca:</strong> " . $row["marca"]. " <strong>Color:</strong> " . $row["color"]. " <strong>Precio:</strong> " . $row["precio"]. " <strong>Alquilado:</strong> " . $row["alquilado"]." <strong>Foto:</strong> " . $row["foto"]. "<br>";
    }
}

//BUSQUEDA POR MARCA
if(mysqli_num_rows($resultado2) > 0){
    while($row2 = mysqli_fetch_assoc($resultado2)){
        echo "<strong>id de coche:</strong> " . $row["id_coche"]. " <strong>Modelo:</strong> ". $row["modelo"]. " <strong>Marca:</strong> " . $row["marca"]. " <strong>Color:</strong> " . $row["color"]. " <strong>Precio:</strong> " . $row["precio"]. " <strong>Alquilado:</strong> " . $row["alquilado"]." <strong>Foto:</strong> " . $row["foto"]. "<br>";
    }
}
echo "<form>";
echo "<a href='../inicio_admin.html'>";
echo "<br>"."<input type='button' id='boton' value='Volver al inicio' class='boton'>";
echo "</a>";
echo "</form>";
mysqli_close($conn);
?>
</body>
</html>