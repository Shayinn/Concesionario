<?php
include '../conn.php';
session_start();
// echo $_SESSION['id_usuario'];

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css3.css'>
    <title>Dar de alta un coche para alquiler</title>
    <script>
        function validacion_datos2(){
             //Modelo
             if(document.dar_alta.modelo.value.length==0){
                alert('El campo modelo esta sin caracteres')
                return false
            }
            //Marca
            if(document.dar_alta.marca.value.length==0){
                alert('El campo marca esta sin caracteres')
                return false
            }

            //Color
            if(document.dar_alta.color.value.length==0){
                alert('El campo color esta sin caracteres')
                return false
            }
            //Precio
            if(document.dar_alta.precio.value.length==0){
                alert('El campo precio esta sin caracteres')
                return false
            }
            

        }
    </script>
</head>
<body>
    <form name='dar_alta' action="dar_altaa.php" method="get">
        <h2> Dar de alta </h2>
        <p> Modelo: <input type="text" name="modelo" size="40"></p>
        <p> Marca: <input type="text" name="marca" size="40"></p>
        <p> Color: <input type="text" name="color" size="40"></p>
        <p> Precio: <input type="number" name="precio" size="40"></p>
        <p> Foto: <input type="file" id="foto" name="foto" size="40" accept=".jpg,png"></p>
        <input type="submit" value="Enviar" id="boton" name="Enviar" class='boton' onclick="return validacion_datos2()"></p>
        <input type="reset" value="Borrar" id="boton" class='boton'></p>
    </form>
</body>
</html>