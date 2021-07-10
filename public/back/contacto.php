<?php
    require_once("../APIRest/index.php");
    
    $datos = array();
    $datos["nombre"] = $_POST["Name"];
    $datos["correo"] = $_POST["Email"];
    $datos["telefono"] = $_POST["Phone"];
    $datos["mensaje"] = $_POST["Msg"];
    
    $datos["funcion"] = "nuevoM";
    
    print_r($datos);

    $ejecucion = escojer($datos);

    print_r($datos);

    echo '<meta http-equiv="refresh" content="0; url=../">';
?>