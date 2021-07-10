<?php
    require_once("../APIRest/index.php");
    
    $datos = array();
    $datos["id"] = 1;
    $datos["nombre"] = $_POST["name"];
    $datos["ape1"] = $_POST["Ape1"];
    $datos["ape2"] = $_POST["Ape2"];
    $datos["correo"] = $_POST["Email"];
    $datos["telefono"] = $_POST["telefono"];
    $datos["hora_i"] = $_POST["hora"];
    $datos["fecha"] = $_POST["fecha"];
    $datos["sala"] = $_POST["opcion"];

    $datos["hora_s"] = strtotime ( '+'.$_POST["horario"].' hour' , $_POST["hora"] ) ;;
    
    $datos["funcion"] = "nuevoP";
        
    print_r($datos);

    $ejecucion = escojer($datos);

    print_r($datos);

    echo '<meta http-equiv="refresh" content="0; url=../">';
?>