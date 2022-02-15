<html>
    <head>
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

$alquiler = $_POST["borrar_alquiler"];
$boton_alquiler = $_POST["boton_borrar_alquiler"];

//Comando insertar
$sql = "delete from alquileres where prestado='$alquiler'";

//Ejecuta el insert y controla el error
if (isset ($boton_alquiler)){
    if(mysqli_query($conn, $sql)){
        echo "Tu alquiler <strong> $alquiler </strong> ha sido eliminado de la base de datos";
    }else{
        echo "Error: ".$sql ."<br>".mysqli_error($conn); 
    }

}
echo "<form>";
echo "<a href='../inicio_admin.html'>";
echo "<br>"."<input type='button' id='boton' value='Volver al inicio' class='boton'>";
echo "</a>";
echo "</form>";
//cerrar conexion
mysqli_close($conn);

?>
</body>
</html>