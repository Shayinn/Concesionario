<?php
include '../conn.php';

session_start();

echo "<link rel='stylesheet' type='text/css' href='../css3.css'>";

$modelo = $_REQUEST["modelo"];
$marca = $_REQUEST["marca"];
$color = $_REQUEST["color"];
$precio = $_REQUEST["precio"];
$foto = $_REQUEST["foto"];
$propietario = $_SESSION["id_usuario"];

// echo $propietario;
//Comando insertar
$sql = "insert into coches values ('','$modelo','$marca','$color','$precio',0,'$foto',$propietario)";


if(mysqli_query($conn, $sql)){
    echo "Tu coche $marca $modelo de color $color con un precio de $precio ha sido guardado y dado de alta en la base de datos";
}else{
   echo "Error: ".$sql ."<br>".mysqli_error($conn); 
}
echo "<form>";
echo "<a href='./inicio_vendedor.php'>";
echo "<br>"."<input type='button' id='boton' value='Volver al inicio' class='boton'>";
echo "</a>";
echo "</form>";


mysqli_close($conn);
?>
