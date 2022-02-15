<?php
include './conn.php';

session_start();
echo "<link rel='stylesheet' type='text/css' href='./css3.css'>";

$id_usuario = $_SESSION['id_usuario'];
$nombre = $_SESSION['nombre_usu'];

$sql = "select * from usuarios where id_usuario=$id_usuario";
$sql2 = "select distinct * from coches,alquileres where coches.id_coche=alquileres.id_coche and id_usuario=$id_usuario";
$sql3 = "select * from coches,usuarios where usuarios.id_usuario=coches.propietario and id_usuario=$id_usuario";

$resultado = mysqli_query($conn,$sql);
$resultado2 = mysqli_query($conn,$sql);
$resultado3 = mysqli_query($conn,$sql2);
$resultado4 = mysqli_query($conn,$sql3);

echo "<h2> Perfil de $nombre </h2>";

if(isset($_REQUEST['ver_coches'])){
    echo "<h4> Tus coches en venta </h4>";
    if(mysqli_num_rows($resultado4) > 0 ){
        while($row = mysqli_fetch_assoc($resultado4)){
            if($row['id_usuario'] == $id_usuario){
                
                echo "<center>";
                echo "<table>".
                            "<tr>".
                                "<td width=60 heigth=60></td>".
                                "<td width=60 heigth=60> Marca </td>".
                                "<td width=60 heigth=60> Modelo </td>".
                                "<td width=60 heigth=60> Color </td>".
                                "<td width=60 heigth=60> Precio </td>".
                            "</tr>".
                            "<br>".
                            "<tr>".
                                "<td> <img src=./img/".$row["foto"]. " width=500 height=360> </td> ".
                                "<td> $row[marca] </td> ".
                                "<td> $row[modelo] </td> ".
                                "<td> $row[color] </td> ".
                                "<td> $row[precio] </td> ".
                            "</tr>".
                        "</table>".
                        "<br>";
                echo "</center>";
            }
        }
    }

}

if(isset($_REQUEST['ver_alq'])){
    echo "<h4> Tus alquileres </h4>";
    if(mysqli_num_rows($resultado3) > 0 ){
        while($row = mysqli_fetch_assoc($resultado3)){
            if($row['id_usuario'] == $id_usuario){
                
                echo "<center>";
                echo "<table>".
                            "<tr>".
                                "<td width=60 heigth=60></td>".
                                "<td width=60 heigth=60> Marca </td>".
                                "<td width=60 heigth=60> Modelo </td>".
                                "<td width=60 heigth=60> Color </td>".
                                "<td width=60 heigth=60> Precio </td>".
                                "<td width=200 heigth=60> Inicio de alquiler </td>".
                                "<td width=200 heigth=60> Fin de alquiler </td>".
                            "</tr>".
                            "<br>".
                            "<tr>".
                                "<td> <img src=./img/".$row["foto"]. " width=500 height=360> </td> ".
                                "<td> $row[marca] </td> ".
                                "<td> $row[modelo] </td> ".
                                "<td> $row[color] </td> ".
                                "<td> $row[precio] </td> ".
                                "<td> $row[prestado] </td> ".
                                "<td> $row[devuelto] </td>".
                            "</tr>".
                        "</table>".
                        "<br>";
                echo "</center>";
            }
        }
    }
    else{
        echo "Actualmente no tienes ningun alquiler"."<br>"."<br>"."<br>";;
    }
}

if(isset($_REQUEST['boton_volver'])){
    if(mysqli_num_rows($resultado2) == 1 ){
        while($row = mysqli_fetch_assoc($resultado2)){
            if($row['tipo'] == 0 ){
                //Compradores
                header("location:./compradores/inicio_comprador.php");
            }elseif($row['tipo'] == 2){
                //Admin
                header('location:./vendedores/inicio_admin.html');
            }else{
                //Vendedores
                header('location:./vendedores/inicio_vendedor.php');

            }
        }
    }
}


if(isset($_REQUEST['cerrar_sesion'])){
    header("location:./close.php");
}

if(mysqli_num_rows($resultado) == 1 ){
    while($row = mysqli_fetch_assoc($resultado)){
        if($row['tipo'] == 0 ){
            echo "Hola $nombre!"."<br>";
            echo "Tu saldo actual es de $row[saldo]"."<br>"."<br>";
            echo " Gracias por su visita! "."<br>"."<br>"."<br>";

            echo "<form>".
            "<input type='submit' id='boton' name='ver_alq' class='boton' value='Ver alquileres'>"."<br>".
            "<input type='submit' id='boton' name='boton_volver' class='boton' value='Volver atrás'>".
            "<input type='submit' id='boton' name='cerrar_sesion' class='boton' value='Cerrar Sesión'>"."<br>".
            "</form>";
        }elseif($row['tipo'] == 1 ){
            echo "Hola $nombre!"."<br>";
            echo "Tu saldo actual es de $row[saldo]"."<br>"."<br>";
            echo " Gracias por su visita! "."<br>"."<br>"."<br>";

            echo "<form>".
            "<input type='submit' id='boton' name='ver_coches' class='boton' value='Ver tus coches'>"."<br>".
            "<input type='submit' id='boton' name='boton_volver' class='boton' value='Volver atrás'>".
            "<input type='submit' id='boton' name='cerrar_sesion' class='boton' value='Cerrar Sesión'>"."<br>".
            "</form>";
        }
    }
}




?>