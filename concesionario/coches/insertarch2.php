<html>
    <head>
        <link rel='stylesheet' type='text/css' href='../css3.css'>
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

$modelo = $_REQUEST["modelo"];
$marca = $_REQUEST["marca"];
$color = $_REQUEST["color"];
$precio = $_REQUEST["precio"];
$alquilado = $_REQUEST["alquilado"];
$foto = $_REQUEST["foto"];
$propietario = $_REQUEST['propietario']; // cuidao

//Comando insertar
$sql = "insert into coches values ('','$modelo','$marca','$color','$precio','$alquilado','$foto','$propietario')";
//echo $sql

//Ejecuta el insert y controla el error
if(mysqli_query($conn, $sql)){
    echo "Tu coche $marca $modelo de color $color con un precio de $precio ha sido guardado en la base de datos";
}else{
   echo "Error: ".$sql ."<br>".mysqli_error($conn); 
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