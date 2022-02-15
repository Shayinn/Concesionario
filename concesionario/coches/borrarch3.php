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

$antiguo_modelo = $_POST["borrar_modelo"];

$antiguo_marca = $_POST["borrar_marca"];

$antiguo_color = $_POST["borrar_color"];

$boton_modelo = $_POST["boton_borrar_modelo"];
$boton_marca = $_POST["boton_borrar_marca"];
$boton_color = $_POST["boton_borrar_color"];

//Comando insertar
$sql = "update coches set modelo='NULL' where modelo='$antiguo_modelo'";
$sql2 = "update coches set marca='NULL' where marca='$antiguo_marca'";
$sql3 = "update coches set color='NULL' where color='$antiguo_color'";

//Ejecuta el insert y controla el error
if (isset ($boton_modelo)){
    if(mysqli_query($conn, $sql)){
        echo "Tu modelo <strong> $antiguo_modelo </strong> ha sido eliminado de la base de datos";
    }else{
        echo "Error: ".$sql ."<br>".mysqli_error($conn); 
    }

}

if (isset ($boton_marca)){
    if(mysqli_query($conn, $sql2)){ 
        echo "Tu marca <strong> $antiguo_marca </strong> ha sido eliminado de la base de datos";
    }else{
        echo "Error: ".$sql .mysqli_error($conn); 
    }
}

if (isset ($boton_color)){
    if(mysqli_query($conn, $sql3)){
        echo "Tu color <strong> $antiguo_color </strong> ha sido eliminado de la base de datos";
    }else{
        echo "Error: ".$sql3 ."<br>".mysqli_error($conn); 
    }
}

//cerrar conexion
mysqli_close($conn);

?>