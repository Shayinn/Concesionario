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
        h4{
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

$antiguo_nombre = $_POST["modif_nombre"];
$antiguo_apellidos = $_POST["modif_apellidos"];
$antiguo_dni = $_POST["modif_dni"];
$antigua_pass = $_POST["modif_pass"];

//Comando insertar
$sql_nombre = "select * from usuarios where nombre='$antiguo_nombre'";
$sql_apellido = "select * from usuarios where apellidos='$antiguo_apellidos'";
$sql_dni = "select * from usuarios where dni='$antiguo_dni'";
$sql_password = "select * from usuarios where password='$antigua_pass'";

$resultado = mysqli_query($conn, $sql_nombre);
$resultado2 = mysqli_query($conn, $sql_apellido);
$resultado3 = mysqli_query($conn, $sql_dni);
$resultado4 = mysqli_query($conn, $sql_password);

if(mysqli_num_rows($resultado) > 0){
    echo "<form action=modificarusr4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_usuario"]."<strong> Nombre: </strong>"
        . $row["nombre"]. " <strong> Apellidos: </strong> "
        . $row["apellidos"]. " <strong> DNI: </strong> " 
        . $row["dni"]. "<strong> Password: </strong> "
        . $row["password"]
        . "| Editar?"
        . "<input type='radio' name='nombres' value='".$row['id_usuario']."'>". "<br>";
    }
    echo "<input type='submit' name='boton_nombree' value='Elegir' class='boton'>";
    echo "</form>";

}elseif(mysqli_num_rows($resultado2) > 0){
    echo "<form action=modificarusr4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado2)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_usuario"]."<strong> Nombre: </strong>"
        . $row["nombre"]. " <strong> Apellidos: </strong> "
        . $row["apellidos"]. " <strong> DNI: </strong> " 
        . $row["dni"]. "<strong> Password: </strong> "
        . $row["password"]
        . "| Editar?"
        . "<input type='radio' name='apellidos' value='".$row['id_usuario']."'>". "<br>";
    }
    echo "<input type='submit' name='boton_apellidoo' value='Elegir' class='boton'>";
    echo "</form>";

}elseif(mysqli_num_rows($resultado3) > 0){
    echo "<form action=modificarusr4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado3)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_usuario"]."<strong> Nombre: </strong>"
        . $row["nombre"]. " <strong> Apellidos: </strong> "
        . $row["apellidos"]. " <strong> DNI: </strong> " 
        . $row["dni"]. "<strong> Password: </strong> "
        . $row["password"]
        . "| Editar?"
        . "<input type='radio' name='dnis' value='".$row['id_usuario']."'>". "<br>";
    }
    echo "<input type='submit' name='boton_dnii' value='Elegir' class='boton'>";
    echo "</form>";

}elseif(mysqli_num_rows($resultado4) > 0){
    echo "<form action=modificarusr4.php method=post>";
    while($row = mysqli_fetch_assoc($resultado4)){
        echo "<strong>id de usuario:</strong> " 
        . $row["id_usuario"]."<strong> Nombre: </strong>"
        . $row["nombre"]. " <strong> Apellidos: </strong> "
        . $row["apellidos"]. " <strong> DNI: </strong> " 
        . $row["dni"]. "<strong> Password: </strong> "
        . $row["password"]
        . "| Editar?"
        . "<input type='radio' name='passwords' value='".$row['id_usuario']."'>". "<br>";
    }
    echo "<input type='submit' name='boton_password' value='Elegir' class='boton'>";
    echo "</form>";
}else{
    echo "Ha ocurrido un problema. Pronto será solucionado. Disculpe las molestias";
}

mysqli_close($conn);
?>
</body>
</html>