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
error_reporting(E_ALL ^ E_WARNING);

$servername = "localhost" ;
$username = "root";
$passwd = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $passwd, $dbname);

if(!$conn){
    die("Connection failed ". mysqli_connect_error());
}

$antiguo = $_REQUEST["nombres"];
$antiguo2 = $_REQUEST["apellidos"];
$antiguo3 = $_REQUEST["dnis"];
$antiguo4 = $_REQUEST["passwords"];

$sql = "select * from usuarios where id_usuario='$antiguo'";
$sql2 = "select * from usuarios where id_usuario='$antiguo2'";
$sql3 = "select * from usuarios where id_usuario='$antiguo3'";
$sql4 = "select * from usuarios where id_usuario='$antiguo4'";

$resultado = mysqli_query($conn, $sql);
$resultado2 = mysqli_query($conn, $sql2);
$resultado3 = mysqli_query($conn, $sql3);
$resultado4 = mysqli_query($conn, $sql4);

if(mysqli_num_rows($resultado)==1){
    $row = mysqli_fetch_array($resultado);
    echo "<p><form action=modificarusr5.php method=post></p>";
    echo "<p>El id es: <input type=text name=id_usuario value=".$row['id_usuario']." readonly></p>";
    echo "<p>El nombre es: <input type=text name=nombre value=".$row['nombre']."></p>";
    echo "<p>Los apellidos son: <input type=text name=apellidos value=".$row['apellidos']."></p>";
    echo "<p>El DNI es: <input type=text name=dni value=".$row['dni']."></p>";
    echo "<input type='submit' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado2)==1){
    $row = mysqli_fetch_array($resultado2);
    echo "<p><form action=modificarusr5.php method=post></p>";
    echo "<p>El id es: <input type=text name=id_usuario value=".$row['id_usuario']." readonly></p>";
    echo "<p>El nombre es: <input type=text name=nombre value=".$row['nombre']."></p>";
    echo "<p>Los apellidos son: <input type=text name=apellidos value=".$row['apellidos']."></p>";
    echo "<p>El DNI es: <input type=text name=dni value=".$row['dni']."></p>";
    echo "<input type='submit' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado3)==1){   
    $row = mysqli_fetch_array($resultado3);
    echo "<p><form action=modificarusr5.php method=post></p>";
    echo "<p>El id es: <input type=text name=id_usuario value=".$row['id_usuario']." readonly></p>";
    echo "<p>El nombre es: <input type=text name=nombre value=".$row['nombre']."></p>";
    echo "<p>Los apellidos son: <input type=text name=apellidos value=".$row['apellidos']."></p>";
    echo "<p>El DNI es: <input type=text name=dni value=".$row['dni']."></p>";
    echo "<input type='submit' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}elseif(mysqli_num_rows($resultado4)==1){
    $row = mysqli_fetch_array($resultado4);
    echo "<p><form action=modificarusr5.php method=post></p>";
    echo "<p>El id es: <input type=text name=id_usuario value=".$row['id_usuario']." readonly></p>";
    echo "<p>El nombre es: <input type=text name=nombre value=".$row['nombre']."></p>";
    echo "<p>Los apellidos son: <input type=text name=apellidos value=".$row['apellidos']."></p>";
    echo "<p>El DNI es: <input type=text name=dni value=".$row['dni']."></p>";
    echo "<input type='submit' name='modif_nombresito' value='Modificar' class='boton'>";
    echo "</form>";
}          
?>
</body>
</html>