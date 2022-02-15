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

$sql = "select * from alquileres ";
$resultado = mysqli_query($conn, $sql);
echo "<h2> Listar alquileres: </h2>";
if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){ //Coge la primera fila y los muestra
        echo "<strong>id de alquiler:</strong> " . $row["id_alquiler"]. " <strong>id de usuario:</strong> ". $row["id_usuario"]. " <strong>id de coche:</strong> " . $row["id_coche"]. " <strong>Prestado:</strong> " . $row["prestado"]. " <strong>Devuelto:</strong> " . $row["devuelto"].  "<br>";
    }
} else{
    echo "Ha ocurrido un problema. Pronto será solucionado. Disculpe las molestias";
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