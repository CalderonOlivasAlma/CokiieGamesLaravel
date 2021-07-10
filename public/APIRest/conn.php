<?php 
    $host = "sql307.epizy.com";
    $user = "epiz_28874643";
    $pwd = "pA9cByNIQvZLH";
    $db = "epiz_28874643_cookie";
    try {
        $conn = new PDO("mysql:host={$host};dbname={$db};charset=utf8", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $exception) {
        exit($exception->getMessage());
    }
    //insert, update, delete
    function NonQuery($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if($sentencia->execute()){
            $resp = True;
        } else{
            $resp = False;
        }
        return $resp;
    }
    //select 1
    function ObtenerReg($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if ($sentencia->execute()) {
            $resp = array();
            while ($fila = $sentencia->fetch()) {
                $resp = $fila;
            }
        }
        return $resp;
    }
    //select N
    function ObtenerRegN($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if ($sentencia->execute()) {
            $resp = array();
            while ($fila = $sentencia->fetch()) {
                $resp[] = $fila;
            }
        }
        return $resp;
    }
?>