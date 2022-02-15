<?php
include '../conn.php';
error_reporting(E_ALL ^ E_WARNING);
echo "<link rel='stylesheet' type='text/css' href='../css3.css'>";
session_start();
$usuario = $_SESSION['id_usuario'];

$inicio = $_REQUEST['inicio'];
$fin = $_REQUEST['fin'];

//Comprobacion de fechas
if($inicio != NULL && $fin != NULL){
    
    //Recogemos el dia de hoy
    $fecha_hoy = New DateTime();

    // Formateamos fecha inicio
    $array = explode('-',$inicio);
    $year = $array[0];
    $array2 = explode('-',$array[1]);
    $mes = $array2[0];
    $array3 = explode('T',$array[2]);
    $dia = $array3[0];
    
    // Convertimos fecha de inicio en objeto datetime
    $fecha_inicio = $year."-".$mes."-".$dia;
    $fecha_inicio2 = New DateTime($fecha_inicio);
    
    //Formateamos fecha fin
    $array = explode('-',$fin);
    $year = $array[0];
    $array2 = explode('-',$array[1]);
    $mes = $array2[0];
    $array3 = explode('T',$array[2]);
    $dia = $array3[0];

    //Convertimos fecha fin en un objeto datetime
    $fecha_fin = $year."-".$mes."-".$dia;
    $fecha_fin2 = New DateTime($fecha_fin);

    //Comparamos fechas inicio y fin con la de hoy
    if($fecha_inicio2 < $fecha_hoy || $fecha_fin2 < $fecha_inicio2){
        echo "<form action=compra1.php method=post>";
        echo "No se ha podido completar el alquiler"."<br>"."<br>";
        echo "Las fechas estan mal puestas"."<br>"."<br>".
        "<input type='submit' id='boton' name='boton_volver2' class='boton' value='Volver atrás'>"."<br>"."<br>";
        echo "</form>";exit;
    // }else{
        // echo "<pre>";
        // var_dump($fecha_inicio2);
        // var_dump($fecha_fin2);
        // var_dump($fecha_hoy);
    }
}


if(isset($_REQUEST['boton_volver'])){
    header('location:./inicio_comprador.php');
}

if(isset($_REQUEST['boton_volver2'])){
    header('location:./inicio_comprador.php');
}

if(isset($_REQUEST['boton_alquiler_final'])){
    $clave1 = $_REQUEST['boton_alquiler_final'];
    $propietario = $_SESSION['propietario'];

    foreach($clave1 as $indice1 => $value1){}

        $sql4 = "update coches set alquilado=1 where id_coche=$indice1"; /* cambiar a alquilado */
        $sql5 = "update usuarios,coches set usuarios.saldo=saldo-precio where id_usuario=$usuario and coches.id_coche=$indice1";  /* restar saldo */
        $sql6 = "insert into alquileres values('','$usuario','$indice1','$inicio','$fin')"; /* agregar alquiler */
        $sql7 = "update usuarios,coches set usuarios.saldo=saldo+precio where id_usuario=$propietario and coches.id_coche=$indice1"; /* sumar saldo */
        // $sql8 = "select distinct saldo from coches,usuarios where coches.$propietario=usuarios.$usuario and saldo > precio and coches.id_coche=$indice1"; /* comprobar saldo */

        if(mysqli_query($conn,$sql4)){
            if(mysqli_query($conn,$sql5)){
                if(mysqli_query($conn,$sql6)){
                    if(mysqli_query($conn,$sql7)){
                        echo "<form action=compra1.php method=post>";
                        echo "Se ha alquilado correctamente tu alquiler"."<br>"."<br>".
                        "<input type='submit' id='boton' name='boton_volver2' class='boton' value='Volver atras'>"."<br>"."<br>";
                        echo "</form>";exit;

                    }else{
                        echo "<form action=compra1.php method=post>";
                        echo "No se ha podido completar tu alquiler"."<br>"."<br>".
                        "<input type='submit' id='boton' name='boton_volver2' class='boton' value='Volver atras'>"."<br>"."<br>";
                        echo "</form>";
                    }
                    
                }
            }
        }
    
   
}

if(isset($_REQUEST['clave'])){
    $clave = $_REQUEST['clave'];  
    
    foreach($clave as $indice => $value){}
        $sql3 = "select * from coches where id_coche=$indice";
        $dia=date('m-d-Y');
        if(mysqli_query($conn, $sql3)){
            $resultado3 = (mysqli_query($conn,$sql3));
            if(mysqli_num_rows($resultado3) > 0){
                while($row = mysqli_fetch_assoc($resultado3)){
                    $_SESSION['propietario'] = $row['propietario'];
                    if($row['alquilado'] == 0){ 
                        echo "<form action=compra1.php method=post>";
                        echo "<h2>Coche a alquilar:</h2>";
                        echo"<img src=../img/".$row["foto"]. " width=500 height=360><br>"."<br>".
                        "<strong>Modelo</strong> " . $row["modelo"]. "<br>".
                        "<strong>Marca</strong> ". $row["marca"]. "<br>".
                        "<strong>Color:</strong> " . $row["color"]. "<br>".
                        "<strong>Precio:</strong> " . $row["precio"]. "<br>"."<br>".
                        "<strong> Cuando quieres alquilarlo :</strong>"."<br>"."<br>".
                        "<center>".
                        "<table>".
                            "<tr>".
                                "<td> Inicio de alquiler </td>".
                                "<td> Fin de alquiler </td>".
                            "</tr>".
                            "<tr>".
                                "<td> <input type='datetime-local' id='inicio' name='inicio' value=0000-00-00 min=".$dia." max=2023-01-01 required> </td>".
                                "<span class='validity'></span>".
                                "<td> <input type='datetime-local' id='fin' name='fin' value=0000-00-00 min= max=2023-01-01 required> </td>".
                                "<span class='validity'></span>".
                            "</tr>".
                        "</table>".
                        "</center>".
                        "<br>".
                        "<input type='submit' id='boton' name='boton_alquiler_final[".$row['id_coche']."] class='boton' value='Alquilar' onclick=return validacion_fecha()>".
                        "<input type='submit' id='boton' name='boton_volver' class='boton' value='Volver atras'>"."<br>"."<br>".
                        "</form>";

                    }
                }
            }
        }
}   

if(isset($_REQUEST['boton'])){
    $id_coche = $_SESSION['id_coche'];
    $sql2 = "select * from coches where id_coche=$id_coche";

    if(mysqli_query($conn, $sql2)){
        $resultado2 = mysqli_query($conn, $sql2);
        echo "<h2>Alquiler de coches</h2>";
        if(mysqli_num_rows($resultado2) > 0){
            while($row = mysqli_fetch_assoc($resultado2)){//Coge la primera fila y los muestra
                if($row['alquilado'] == 0){ //No queremos ver los coches que SI estan alquilados, por eso solo muestro los que no
                    echo "<form action=compra1.php method=post>";
                    echo"<img src=../img/".$row["foto"]. " width=500 height=360><br>"."<br>".
                    "<strong>Modelo</strong> " . $row["modelo"]. "<br>".
                    "<strong>Marca</strong> ". $row["marca"]. "<br>".
                    "<strong>Precio:</strong> " . $row["precio"]. "<br>".
                    "<input type='submit' id='boton' name='boton_alquiler' class='boton' value='Alquilar'>".
                    "<input type='submit' id='boton' name='boton_volver' class='boton' value='Volver atras'>"."<br>"."<br>".
                    "</form>";
                }
            }
        }
    }
}

mysqli_close($conn);

?>