<html>
    <head>
        <style type="text/css">
            body {
	            font-size: 15px;
                color: white;
                text-align: center;
	            font-family: sans-serif;
	            background-color: #501845;
                padding-top:10%;
            }
            div{
                padding-top:50px;
                box-shadow: 2px 4px 10px #FF5733;
                background-color: #900c3f;
                border-radius: 50%;
            }
            .boton{
                background-color: #FFC300;
                border-radius: 4px;
                margin-bottom: 10px;
                box-shadow: 2px 4px;
                text-decoration: none;
	            text-align: center;
	            text-align: center;
	            font-size: 20px;
	            color: #ecf0f1;
	            text-shadow: 2px 2px 4px #000000;
	            font-family: 'Cherry Swash', cursive;
            }
            h2{
                text-decoration: none;
	            text-align: center;
	            text-align: center;
	            font-size: 30px;
	            color: #ecf0f1;
	            text-shadow: 2px 2px 4px #000000;
	            font-family: 'Cherry Swash', cursive;
            }
            
        </style>
    </head>
<body>
<?php
$servername = "localhost";
$username = "root";
$passwd = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $passwd, $dbname);

if(!$conn){
    die("Connection failed ". mysqli_connect_error());
}

$sql = "select * from usuarios ";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "<div>";
    echo "<form action=borrarusr2.php method=post>";
    echo "<h2> Borrar usuarios: </h2>";
    while($row = mysqli_fetch_assoc($resultado)){ //Coge la primera fila y los muestra
        echo "<strong>id de usuario:</strong> " 
        .$row["id_usuario"]."<strong> Nombre: </strong>"
        . $row["nombre"]. " <strong> Apellidos: </strong> "
        . $row["apellidos"]. " <strong> DNI: </strong> " 
        . $row["dni"]
        . "| Borrar?"
        . "<input type='checkbox' name='clave[".$row['id_usuario']."]'>". "<br>";
    }
    echo "<input type='submit' name='boton' value='Elegir' class='boton'>";
    echo "</form>";
    echo "</div>";
} else{
    echo "Ha ocurrido un problema. Pronto será solucionado. Disculpe las molestias";
}

mysqli_close($conn);

?>
</body>
</html>