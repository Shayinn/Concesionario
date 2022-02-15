<?php
include '../conn.php';

session_start();
if(isset($_REQUEST['boton'])){
    
    $nombre = $_REQUEST['nombre_usu'];
    $password = $_REQUEST['pass_usu'];
    $tipo = $_REQUEST['tipo_usu'];
    

    $sql = "select * from usuarios where nombre='$nombre' and password=SHA('$password') and tipo=$tipo";
    $sql2 = "select * from usuarios where nombre='$nombre' and password=SHA('$password')";
    $resultado = mysqli_query($conn, $sql);
    $resultado2 = mysqli_query($conn, $sql);
    $resultado3 = mysqli_query($conn, $sql2);

    //Vendedores
    if(mysqli_num_rows($resultado) == 1 and $tipo == 1){
        while($row = mysqli_fetch_assoc($resultado)){
            $_SESSION['nombre_usu'] = $row['nombre'];
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['tipo'] = $row['tipo'];
            header("location:../vendedores/inicio_vendedor.php");
            
        }
    }elseif(mysqli_num_rows($resultado2) == 1 and $tipo == 0){
        //Compradores
        while($row = mysqli_fetch_assoc($resultado2)){
            $_SESSION['nombre_usu'] = $row['nombre'];
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['tipo'] = $row['tipo'];
            header("location:../compradores/inicio_comprador.php");
        }

    }elseif(mysqli_num_rows($resultado3) == 1){   
        while($row = mysqli_fetch_assoc($resultado3)){
            $_SESSION['nombre_usu'] = $row['nombre'];
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['tipo'] = $row['tipo'];
            if($row['tipo'] == 2 ){
                header("location:../inicio_admin.html");
            }else{
                echo "<p id='contra'>Nombre o contraseña o tipo de usuario incorrectos</p>";
                }
        }
    }else{
        echo "<p id='contra'>Nombre o contraseña o tipo de usuario incorrectos</p>";
        }
        

}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css3.css'>
    <title>Inicio de sesión</title>
    <script>
        function validacion_datos(){
            //Nombre
            if(document.inicio_sesion.nombre_usu.value.length==0){
                alert('El campo nombre esta sin caracteres')
                return false
            }

            //Contraseña
            if(document.inicio_sesion.pass_usu.value.length==0){
                alert('El campo contraseña esta sin caracteres')
                return false
            }
        }
    </script>
</head>

<body>
    <center>
        <form name='inicio_sesion'action='./inicio_sesion.php' method="post">
            <h1> Inicio de sesión </h1>
            Nombre<br>
            <input type="text" name='nombre_usu'><br><br>
            Contraseña <br>
            <input type="password" name='pass_usu'><br><br>
            Tipo de cuenta:
            <select name='tipo_usu' id='tipo_usu'>
                <option value="0"> Comprador </option>
                <option value="1"> Vendedor </option>
            </select><br><br>
            <input type="submit" name='boton' id='boton' value='Iniciar sesión' onclick="return validacion_datos()">
            <p>¿No tienes cuenta? <a href='./crear_user.html' style="color:#FFC300">Crea una</a></p>
            <a href='../inicio_sin_log.php' style="color:#FFC300">Volver atrás</a>
        </form>
    </center>
</body>
</html>