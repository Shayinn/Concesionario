<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Coches</title>
        <link rel='stylesheet' type='text/css' href='../css3.css'>
</head>
<body>
<?php
if ($_REQUEST["buscar1"]==0) {
    echo "<form action=modificarch3.php method=post>";
    echo "Pon tu Modelo actual ";
    echo "<input type='text' name='modif_modelo'>"."<br>"."<br>";;
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_modelo' class='boton'>";
    echo "</form>";

}elseif($_REQUEST["buscar1"]==1){
    echo "<form action=modificarch3.php method=post>";
    echo "Pon tu Marca actual ";
    echo "<input type='text' name='modif_marca'>"."<br>"."<br>";
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_marca' class='boton'>";
    echo "</form>";

}elseif($_REQUEST["buscar1"]==2){
    echo "<form action=modificarch3.php method=post>";
    echo "Pon tu Color actual ";
    echo "<input type='text' name='modif_color'>"."<br>"."<br>";
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_color' class='boton'>";
    echo "</form>";
}elseif($_REQUEST["buscar1"]==3){
    echo "<form action=modificarch3.php method=post>";
    echo "Precio actual: ";
    echo "<input type='text' name='modif_precio'>"."<br>"."<br>";
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_color' class='boton'>";
    echo "</form>";
}
elseif($_REQUEST["buscar1"]==4){
    echo "<form action=modificarch3.php method=post>";
    echo "Esta alquilado? 1/0 ";
    echo "<input type='text' name='modif_alquiler'>"."<br>"."<br>";
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_color' class='boton'>";
    echo "</form>";
}elseif($_REQUEST["buscar1"]==5){
    echo "<form action=modificarch3.php method=post>";
    echo "Tiene foto? ";
    echo "<input type='text' name='modif_foto'>"."<br>"."<br>";
    echo "<input type='submit' value='Modificar' id='boton' name='boton_modif_color' class='boton'>";
    echo "</form>";
}
?>

</body>
</html>