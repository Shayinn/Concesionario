<?php
include '../conn.php';
session_start();
if($_SESSION['tipo'] == 1 ){
// echo $_SESSION['tipo'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css.css'>
    <title>Vendedor</title>
</head>
<body>
    <table>
        <tr>
            <td> <a href='../perfil.php' style=color:#FFC300> Ver perfil </a> </td>
            <td> <a href='../close.php' style=color:#FFC300> Cerrar sesión </a> </td> 
        </tr>
    </table>
<h2>Concesionario: ventas</h2>
<nav>
	<a href="./dar_alta.php">Dar de alta</a>

</nav>

</body>
</html>
<?php
}else{
    header("location:../inicio_sin_log.php");
}
mysqli_close($conn);
?>