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
if ($_REQUEST["buscar"]==0) {
    echo "<form action=modificarusr3.php method=post>";
    echo "<h4>Pon tu nombre actual</h4>";
    echo "<input type='text' name='modif_nombre'>"."<br>"."<br>";;
    echo "<input type='submit' value='Buscar' name='boton_modif_nombre' class='boton'>";
    echo "</form>";

}elseif($_REQUEST["buscar"]==1){
    echo "<form action=modificarusr3.php method=post>";
    echo "<h4>Pon tu Apellido actual</h4> ";
    echo "<input type='text' name='modif_apellidos'>"."<br>"."<br>";
    echo "<input type='submit' value='Buscar' name='boton_modif_apellidos' class='boton'>";
    echo "</form>";

}elseif($_REQUEST["buscar"]==2){
    echo "<form action=modificarusr3.php method=post>";
    echo "<h4>Pon tu DNI actual</h4>";
    echo "<input type='text' name='modif_dni'>"."<br>"."<br>";
    echo "<input type='submit' value='Buscar' name='boton_modif_dni' class='boton'>";
    echo "</form>";

}elseif($_REQUEST["buscar"]==3){
    echo "<form action=modificarusr3.php method=post>";
    echo "<h4>Pon tu contraseña actual</h4>";
    echo "<input type='text' name='modif_pass'>"."<br>"."<br>";
    echo "<input type='submit' value='Buscar' name='boton_modif_pass' class='boton'>";
    echo "</form>";

}

?>
</body>
</html>