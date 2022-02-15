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

$sql = "select * from coches ";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "<h2> Borrar coches </h2>";
    echo "<form action=borrarch2.php method=post>";
    while($row = mysqli_fetch_assoc($resultado)){ //Coge la primera fila y los muestra
        echo "<strong>id de coche:</strong> " 
        . $row["id_coche"]. " <strong>Modelo:</strong> "
        . $row["modelo"]. " <strong>marca:</strong> " 
        . $row["marca"]." <strong>Color:</strong> " 
        . $row["color"]. " <strong>Precio:</strong> " 
        . $row["precio"]. " <strong>Alquilado:</strong> " 
        . $row["alquilado"]." <strong>Foto: </strong> " 
        . $row["foto"]
        . " | Borrar?"
        . "<input type='checkbox' name='clave[".$row['id_coche']."]'>". "<br>";
    }
    echo "<input type='submit' id='boton' name='boton' class='boton'>";
    echo "</form>";
} else{
    echo "Ha ocurrido un problema. Pronto será solucionado. Disculpe las molestias";
}

mysqli_close($conn);

?>
</body>
</html>