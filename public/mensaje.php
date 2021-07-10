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
            <h1>Bandeja de Entrada</h1>
                <br><br><br>

            <table border="5">
                   
                        <tr class="">
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Mensaje</th>
                            
                        </tr>
                        <!--
                        <tr>
                            <td>no se</td>
                            <td>no se</td>
                            <td>no se</td>
                            <td>no se</td>
                        </tr>
                        -->
                    <?php
                         
                        $datos = array();
                        $datos["funcion"]="listaM";
                        $ejecucion = escojer($datos);
                        
                        //print_r($ejecucion);
                        foreach($ejecucion as $row) {
                            
                            echo '<tr class="d2">';
                            echo '<td>'.$row["nombre"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                            echo '<td>'.$row["telefono"].'</td>';
                            echo '<td>'.$row["Mensaje"].'</td>';
                            echo '</tr>';
                        }
                        
                    ?>
                
                </table>

        </div>
    
        
    </article> <!-- /article -->
    
    
    
</section>

</body>
</html>