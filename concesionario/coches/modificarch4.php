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

$antiguo = $_REQUEST["modelo"];
$antiguo2 = $_REQUEST["marca"];
$antiguo3 = $_REQUEST["color"];
$antiguo4 = $_REQUEST["precio"];
$antiguo5 = $_REQUEST["alquiler"];
$antiguo6 = $_REQUEST["foto"];

$sql = "select * from coches where id_coche='$antiguo'";
$sql2 = "select * from coches where id_coche='$antiguo2'";
$sql3 = "select * from coches where id_coche='$antiguo3'";
$sql4 = "select * from coches where id_coche='$antiguo4'";
$sql5 = "select * from coches where id_coche='$antiguo5'";
$sql6 = "select * from coches where id_coche='$antiguo6'";

$resultado = mysqli_query($conn, $sql);
$resultado2 = mysqli_query($conn, $sql2);
$resultado3 = mysqli_query($conn, $sql3);
$resultado4 = mysqli_query($conn, $sql4);
$resultado5 = mysqli_query($conn, $sql5);
$resultado6 = mysqli_query($conn, $sql6);

if(mysqli_num_rows($resultado)==1){
    $row = mysqli_fetch_array($resultado);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado2)==1){
    $row = mysqli_fetch_array($resultado2);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado3)==1){
    $row = mysqli_fetch_array($resultado3);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado4)==1){
    $row = mysqli_fetch_array($resultado4);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado5)==1){
    $row = mysqli_fetch_array($resultado5);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar'class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado6)==1){
    $row = mysqli_fetch_array($resultado6);
    echo "<p><form action=modificarch5.php method=post></p>";
    echo "<p>El id del coche es: <input type=text name=id_coche value=".$row['id_coche']." readonly></p>";
    echo "<p>El modelo es: <input type=text name=modelo value=".$row['modelo']."></p>";
    echo "<p>La marca es: <input type=text name=marca value=".$row['marca']."></p>";
    echo "<p>El color son: <input type=text name=color value=".$row['color']."></p>";
    echo "<p>El precio es: <input type=text name=precio value=".$row['precio']."></p>";
    echo "<p>Esta alquilado: <input type=text name=alquilado value=".$row['alquilado']."></p>";
    echo "<p>La foto es: <input type=text name=foto value=".$row['foto']."></p>";
    echo "<input type='submit' id='boton' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}
?>
</body>
</html>