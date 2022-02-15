<?php
include '../conn.php';
error_reporting(E_ALL ^ E_WARNING);

session_start();
echo "<link rel='stylesheet' type='text/css' href='../css3.css'>";
   
$sql = 'select * from coches';  
        if(mysqli_query($conn, $sql)){
            $resultado = mysqli_query($conn, $sql);
            
            echo "<table>".
                    "<tr>".
                        "<td> <a href='../perfil.php' style=color:FFC300> Ver perfil </a> </td>".
                        "<td> <a href='../close.php' style=color:FFC300> Cerrar sesión </a> </td> ".
                    "</tr>".
                "</table>";
            echo "<h2>Alquiler de coches</h2>";
            if(mysqli_num_rows($resultado) > 0){
                echo "<div>";
                while($row = mysqli_fetch_assoc($resultado)){//Coge la primera fila y los muestra
                    if($row['alquilado'] == 0){ //No queremos ver los coches que SI estan alquilados, por eso solo muestro los que no
                        echo "<form action=compra1.php method=post>";
                        $_SESSION['id_coche'] = $row['id_coche']; // si envio el formulario se envia tb la sesion
                        echo"<img src=../img/".$row["foto"]. " width=500 height=360><br>"."<br>".
                        "<strong>Modelo</strong> " . $row["modelo"]. "<br>".
                        "<strong>Marca</strong> ". $row["marca"]. "<br>".
                        "<strong>Color:</strong> " . $row["color"]. "<br>".
                        "<strong>Precio:</strong> " . $row["precio"]. "<br>"."<br>".
                        "<input type='submit' id='boton' name='clave[".$row['id_coche']."] class='boton' value='Alquilar'>"."<br>"."<br>".
                        "</form>";
                        
                        
                    }
                
                }
            }
            else{
                echo "No hay ningun coche disponible."."<br>"." Vuelva pronto!";
            }
        }
mysqli_close($conn);

?>