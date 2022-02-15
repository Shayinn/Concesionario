<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuarios</title>
    <style>
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
    <h4>Modificar usuarios</h4>
    <form action="modificarusr2.php" method="post">
        <p> Nombre: <input type="radio" name="buscar" value="0"></p>
        <p> Apellidos: <input type="radio" name="buscar" value="1"></p>
        <p> DNI: <input type="radio" name="buscar" value="2"></p>
        <p> Password: <input type="radio" name="buscar" value="3"></p>
        <input type="submit" value="Elegir" name="Enviar" class='boton'>
    </form>

</body>
</html>