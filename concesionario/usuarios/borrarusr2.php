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
$clave = $_REQUEST['clave'];

foreach ($clave as $indice => $value) {
    $sql = "delete from usuarios where id_usuario=$indice";
    $sql2 = "delete from alquileres where id_usuario=$indice";
    $resultado = mysqli_query($conn, $sql);
    $resultado2 = mysqli_query($conn, $sql2);
    if ($resultado) {
        echo " Se ha eliminado tu usuario con la id de usuario $indice"."<br>"."<br>";
    }
    if($resultado2){
        echo " Se ha eliminado tu alquiler id de alquiler $indice"."<br>"."<br>";
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