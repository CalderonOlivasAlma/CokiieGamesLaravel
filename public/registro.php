<?php
    require_once("APIRest/index.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cookie Games</title>
	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/styl.css">
    
</head>
<body id="suspender">
<section id="main-content">
    <article>
        
        <div id="container">
            <h1>Muestra de Pedidos</h1>
                <br><br><br>

            <table border="5">
                   
                        <tr class="">
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Tipo de Sala</th>
                            <th>Fecha</th>
                            <th>Hora de ingreso</th>
                            <th>Hora de salida </th>
                            <th>Tarifa</th>
                        </tr>
                        <!--
                        <tr>
                            <td>Martha</td>
                            <td>Torres Torres</td>
                            <td>martitha@gmail.com</td>
                            <td>6184578963</td>
                            <td>Premium</td>
                            <td>06/julio/2021</td>
                            <td>10:00</td>
                            <td>12:00</td>
                            <td>$300</td>
                        </tr>
                        -->
                    <?php
                        
                        $datos = array();
                        $datos["funcion"]="listaP";
                        $ejecucion = escojer($datos);
                        
                        //print_r($ejecucion);
                        
                        foreach($ejecucion as $row) {
                            
                            echo '<tr class="d2">';
                            echo '<td>'.$row["nombre"].'</td>';
                            echo '<td>'.$row["ape1"].' '.$row["ape2"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                            echo '<td>'.$row["telefono"].'</td>';
                            echo '<td>'.$row["sala"].'</td>';
                            echo '<td>'.$row["fecha"].'</td>';
                            echo '<td>'.$row["hora_i"].'</td>';
                            echo '<td>'.$row["hora_s"].'</td>';
                            echo '<td>$***</td>';
                            
                            /*
                            switch($row["sala"]){
                                case "p": 
                                    $tarifa=150(int($row["hora_s"]-$row["hora_i"]));
                                    echo '<td>'.$tarifa.'</td>';
                                    break; 

                                case "k": 
                                     $tarifa=80(int($row["hora_s"]-$row["hora_i"]));
                                     echo '<td>'.$tarifa.'</td>';
                                     break; 

                                case "c": 
                                    $tarifa=30(int($row["hora_s"]-$row["hora_i"]));
                                    echo '<td>'.$tarifa.'</td>';
                                    break; 

                                case "cn": 
                                    $tarifa=50(int($row["hora_s"]-$row["hora_i"]));
                                    echo '<td>'.$tarifa.'</td>';
                                    break; 
            
                            }*/
                            echo '</tr>';
                        }
                        
                    ?>
                
                </table>

        </div>
    
        
    </article> <!-- /article -->
    
    
    
</section>

</body>
</html>