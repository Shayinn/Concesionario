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
    $sql = "delete from coches where id_coche=$indice";
    $sql2 = "delete from alquileres where id_coche=$indice";
    $resultado = mysqli_query($conn, $sql);
    $resultado2 = mysqli_query($conn, $sql2);
    if ($resultado) {
        echo " Se ha eliminado tu coche con indice de coche $indice"."<br>"."<br>";
    }
    if($resultado2){
        echo " Se ha eliminado tu alquiler con indice de alquiler $indice"."<br>"."<br>";
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