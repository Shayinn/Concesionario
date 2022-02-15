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

$antiguo_nombre = $_POST["modif_nombre"];
$nuevo_nombre = $_POST["modif_nombre2"];

$antiguo_apellidos = $_POST["modif_apellidos"];
$nuevos_apellidos = $_POST["modif_apellidos2"];

$antiguo_dni = $_POST["modif_dni"];
$nuevo_dni = $_POST["modif_dni2"];

$antigua_pass = $_POST["modif_pass"];
$nueva_pass = $_POST["modif_pass2"];

$boton_nombre = $_POST["boton_modif_nombre"];
$boton_apellidos = $_POST["boton_modif_apellidos"];
$boton_dni = $_POST["boton_modif_dni"];
$boton_password = $_POST["boton_modif_pass"];

//Comando insertar
$sql = "update usuarios set nombre='$nuevo_nombre' where nombre='$antiguo_nombre'";
$sql2 = "update usuarios set apellidos='$nuevo_apellidos' where apellidos='$antiguo_apellidos'";
$sql3 = "update usuarios set dni='$nuevo_dni' where dni='$antiguo_dni'";
$sql4 = "update usuarios set password='$nueva_pass' where password='$antigua_pass'";

//Ejecuta el insert y controla el error
if (isset ($boton_nombre)){
    if(mysqli_query($conn, $sql)){
        echo "Tu nombre <strong> $antiguo_nombre </strong> ha sido cambiado por $nuevo_nombre en la base de datos";
    }else{
        echo "Error: ".$sql ."<br>".mysqli_error($conn); 
    }

}

if (isset ($boton_apellidos)){
    if(mysqli_query($conn, $sql2){ #&& is_null($antiguo_apellidos)==FALSE){
        echo "Tu Apellido <strong> $antiguo_apellidos </strong> ha sido cambiado por $nuevo_apellidos en la base de datos";
    }else{
        echo "Error: ".$sql .mysqli_error($conn); 
    }
}

if (isset ($boton_dni)){
    if(mysqli_query($conn, $sql3)){
        echo "Tu DNI <strong> $antiguo_dni </strong> ha sido cambiado por $nuevo_dni en la base de datos";
    }else{
        echo "Error: ".$sql3 ."<br>".mysqli_error($conn); 
    }
}

if (isset ($boton_password)){
    if(mysqli_query($conn, $sql4)){
        echo "Tu password <strong> $antigua_pass </strong> ha sido cambiado por $nueva_pass en la base de datos";
    }else{
        echo "Error: ".$sql4 ."<br>".mysqli_error($conn); 
    }
}
//cerrar conexion
mysqli_close($conn);

?>