<?php

function conexion($baseDatos,$usuario,$pass){
    
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$baseDatos",$usuario,$pass);
        return $conexion;
    } catch(PDOException $e){
        return false;
    }
    
}


?>