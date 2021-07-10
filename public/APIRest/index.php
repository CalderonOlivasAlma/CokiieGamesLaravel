<?php 
    require_once("utilidades.php");
    
    function escojer($datos = array()){
        switch($datos["funcion"]){
            case "nuevoP":
                $resp = nuevoPedido($datos["id"],$datos["nombre"],$datos["ape1"],$datos["ape2"],$datos["correo"],$datos["telefono"],$datos["sala"],$datos["fecha"],$datos["hora_i"],$datos["hora_s"]);
                break;
            case "nuevoM":
                $resp = nuevoMensaje($datos["nombre"],$datos["correo"],$datos["telefono"],$datos["mensaje"]);
                break;
            case "listaP":
                $resp = listarP();
                break;
            case "listaM":
                $resp = listarM();
                break;    
        }
        return($resp);
    }
?>