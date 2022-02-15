<?php
include './conn.php';
echo "<link rel='stylesheet' type='text/css' href='./css3.css'>";
echo "Hola! Puedes "."<a href='./inicio_sesion/inicio_sesion.php' style='color:FFC300'>Iniciar sesión</a>";


$sql = 'select * from coches';

if(mysqli_query($conn, $sql)){
    $resultado = mysqli_query($conn, $sql);
    echo "<h2>Alquiler de coches</h2>";
    if(mysqli_num_rows($resultado) > 0){
        echo "<div>";
        while($row = mysqli_fetch_assoc($resultado)){//Coge la primera fila y los muestra
            $_SESSION = $row['id_coche'];
            echo "<form method=get action='inicio_sin_log1.php'>";
            echo "<img src=./img/".$row["foto"]. " width=500 height=360><br>". "<br>".
            "<strong>Modelo</strong> " . $row["modelo"]. "<br>".
            "<strong>Marca</strong> ". $row["marca"]. "<br>".
            "<strong>Precio:</strong> " . $row["precio"]. "<br>";
            

            if($row['alquilado'] == 1){
                echo "<p> Alquilado </p>";
            }else{
                echo "<p> Sin alquilar </p>";
            }
            echo "<input type='submit' id='boton' value='Ver Coche' name='clave[".$row['id_coche']."]' class='boton'>"."<br>"."<br>".
            "</form>";    
        }
    }else{
        echo "No hay ningun coche disponible actualmente"."<br>";
        echo "Vuelva pronto!";
    }
}

mysqli_close($conn);
?>