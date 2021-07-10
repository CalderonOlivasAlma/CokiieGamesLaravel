<?php
    require_once("conn.php");
    
    function nuevoPedido($id,$nombre,$ape1,$ape2,$email,$telefono,$sala,$fecha,$hora_i,$hora_s){
        $query = "INSERT INTO pedidos (id_user, nombre, ape1, ape2, email, telefono, sala, fecha, hora_i, hora_s) VALUES ('$id', '$nombre', '$ape1', '$ape2', '$email', '$telefono', '$sala', '$fecha', '$hora_i', '$hora_s')";
        $resp = NonQuery($query);
        return $resp;
    }
    function nuevoMensaje($nombre,$email,$telefono,$mensaje){
        $query = "INSERT INTO mensajes (nombre, email, telefono, Mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";
        $resp = NonQuery($query);
        return $resp;
    }
    
    function listarP(){
        $query = "SELECT * FROM pedidos";
        $resp = ObtenerRegN($query);
        return $resp;
    }
    function listarM(){
        $query = "SELECT * FROM mensajes";
        $resp = ObtenerRegN($query);
        return $resp;
    }
?>