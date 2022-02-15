<?php
include './conn.php';
echo "<link rel='stylesheet' type='text/css' href='./css3.css'>";
session_start();

if(isset($_REQUEST['boton_volver'])){
    header('location:./inicio_sin_log.php');
}

if(isset($_REQUEST['clave'])){
    $clave = $_REQUEST['clave'];

    foreach($clave as $indice => $value){}
    $sql2 = "select * from coches where id_coche=$indice";
    
    
    if(mysqli_query($conn, $sql2)){
        $resultado2 = mysqli_query($conn, $sql2);
        echo "<h2>Alquiler de coches</h2>";
        if(mysqli_num_rows($resultado2) > 0){
            while($row = mysqli_fetch_assoc($resultado2)){//Coge la primera fila y los muestra
                echo "<form action=inicio_sin_log.php method=post>";
                echo"<img src=./img/".$row["foto"]. " width=500 height=360><br>"."<br>".
                "<strong>Modelo</strong> " . $row["modelo"]. "<br>".
                "<strong>Marca</strong> ". $row["marca"]. "<br>".
                "<strong>Color:</strong> " . $row["color"]. "<br>".
                "<strong>Precio:</strong> " . $row["precio"]. "<br>".
                "<input type='submit' id='boton' name='boton_volver' class='boton' value='Volver atras'>"."<br>"."<br>".
                "</form>";
            }
        }
    }
}


mysqli_close($conn);
?>