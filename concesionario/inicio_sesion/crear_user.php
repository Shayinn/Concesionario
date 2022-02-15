<?php
include '../conn.php';

// CSS
echo "<link rel='stylesheet' type='text/css' href='../css3.css'>";

$nombre = $_REQUEST['nombre_usu'];
$apellidos = $_REQUEST['apellidos_usu'];
$password = $_REQUEST['pass_usu'];
$tipo = $_REQUEST['tipo_usu'];
$dni = $_REQUEST['dni_usu'];
$saldo = $_REQUEST['saldo_usu'];

// alter table usuarios add tipo int;
$sql = "insert into usuarios values ('',SHA('$password'),'$nombre','$apellidos','$dni','$saldo','$tipo')";

if(mysqli_query($conn, $sql)){
    echo "Tu usuario se ha creado correctamente. Muchas gracias!";
}else{
   echo "Error: ".$sql ."<br>".mysqli_error($conn); 
}
echo "<form>";
echo "<a href='./inicio_sesion.php'>";
echo "<br>"."<input type='button' id='boton' value='Volver al inicio de sesión' class='boton'>";
echo "</a>";
echo "</form>";

mysqli_close($conn);
?>