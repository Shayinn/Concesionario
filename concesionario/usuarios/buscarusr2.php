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

$servername = "localhost" ;
$username = "root";
$passwd = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $passwd, $dbname);

if(!$conn){
    die("Connection failed ". mysqli_connect_error());
}
$nombre = $_REQUEST['nombre'];
$dni = $_REQUEST['dni'];

$sql = "select id_usuario,password,nombre,apellidos,dni,saldo from usuarios where nombre='$nombre'";
$sql2 = "select id_usuario,password,nombre,apellidos,dni,saldo from usuarios where dni='$dni'";
$resultado = mysqli_query($conn, $sql);
$resultado2 = mysqli_query($conn, $sql2);

//BUSQUEDA POR NOMBRE
if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<strong>id de usuario:</strong> " . $row["id_usuario"]. " <strong>password:</strong> ". $row["password"]. " <strong>nombre:</strong> " . $row["nombre"]. " <strong>Apellidos:</strong> " . $row["apellidos"]. " <strong>DNI:</strong> " . $row["dni"]. " <strong>Saldo:</strong> " . $row["saldo"]. "<br>";
    }
}

//BUSQUEDA POR DNI
if(mysqli_num_rows($resultado2) > 0){
    while($row2 = mysqli_fetch_assoc($resultado2)){
        echo "<strong>id de usuario:</strong> " . $row2["id_usuario"]. " <strong>password:</strong> ". $row2["password"]. " <strong>nombre:</strong> " . $row2["nombre"]. " <strong>Apellidos:</strong> " . $row2["apellidos"]. " <strong>DNI:</strong> " . $row2["dni"]. " <strong>Saldo:</strong> " . $row2["saldo"]. "<br>";
    }
}
echo "<form>";
echo "<a href='../inicio_admin.html'>";
echo "<br>"."<input type='button' value='Volver al inicio' class='boton'>";
echo "</a>";
echo "</form>";
mysqli_close($conn);
?>
</body>
</html>