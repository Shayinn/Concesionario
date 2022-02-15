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
$clave = $_REQUEST['clave'];

foreach ($clave as $indice => $value) {
    $sql2 = "delete from alquileres where id_coche=$indice";
    
    $resultado2 = mysqli_query($conn, $sql2);
    if($resultado2){
        echo " Se ha eliminado tu alquiler";
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