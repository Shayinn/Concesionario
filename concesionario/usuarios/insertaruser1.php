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
            h2{
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
<form action="insertaruser2.php" method="get">
    <h2> Insertar usuario </h2>
    <p> Nombre: <input type="text" name="nombre" size="40"></p>
    <p> apellidos: <input type="text" name="apellidos" size="40"></p>
    <p> password: <input type="password" name="password" size="40"></p>
    <p> dni: <input type="text" name="dni" size="40"></p>
    <p> saldo: <input type="text" name="saldo" size="40"></p>
    Tipo de cuenta:
            <select name='tipo_usu' id='tipo_usu'>
                <option value="0"> Comprador </option>
                <option value="1"> Vendedor </option>
                <option value="2"> Administrador </option>
            </select><br><br>
    <input type="submit" value="Enviar" name="Enviar" class='boton'>
    
</form>
</body>
</html>