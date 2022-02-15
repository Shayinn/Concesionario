<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css3.css'>
    <title>Modificar Coches</title>
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

$antiguo_modelo = $_POST["modif_modelo"];
$antiguo_marca = $_POST["modif_marca"];
$antiguo_color = $_POST["modif_color"];
$antiguo_precio = $_POST["modif_precio"];
$antiguo_alquiler = $_POST["modif_alquiler"];
$antigua_foto = $_POST["modif_foto"];

//Comando insertar
$sql_modelo = "select * from coches where modelo='$antiguo_modelo'";
$sql_marca = "select * from coches where marca='$antiguo_marca'";
$sql_color = "select * from coches where color='$antiguo_color'";
$sql_precio = "select * from coches where precio='$antiguo_precio'";
$sql_alquiler = "select * from coches where alquilado='$antiguo_alquiler'";
$sql_foto ="select * from coches where foto='$antiguo_foto'";

$resultado = mysqli_query($conn, $sql_modelo);
$resultado2 = mysqli_query($conn, $sql_marca);
$resultado3 = mysqli_query($conn, $sql_color);
$resultado4 = mysqli_query($conn, $sql_precio);
$resultado5 = mysqli_query($conn, $sql_alquiler);
$resultado6 = mysqli_query($conn, $sql_foto);

if(mysqli_num_rows($resultado) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='modelo' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado2) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado2)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='marca' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado3) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado3)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='color' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado4) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado4)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='precio' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado5) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado5)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='alquiler' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado6) > 0){
    echo "<form action=modificarch4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado6)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_coche"]."<strong> Modelo: </strong>"
        . $row["modelo"]. " <strong> marca: </strong> "
        . $row["marca"]. " <strong> color: </strong> " 
        . $row["color"]. "<strong> precio: </strong> "
        . $row["precio"]. "<strong> alquilado: </strong> "
        . $row["alquilado"]. "<strong> foto: </strong> "
        . $row["foto"]
        . "| Editar?"
        . "<input type='radio' name='foto' value='".$row['id_coche']."'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";
}
mysqli_close($conn);

?>
</body>
</html>