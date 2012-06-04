<?php

/**
 * @author 
 * @copyright 2012
 */


    include ("../bases_datos/databases.php");
    
    $datosBC = $_POST;
    
    if(isset($datosBC["nombreBC"]) || isset($datosBC["empresaBC"])){
    
    $query = "insert into bocatoma (nombre, ubicacion, oferta, caudal, empresa) 
        values ('".$datosBC["nombreBC"]."','".$datosBC["ubicacionBC"]."','".$datosBC["ofertaBC"].
        "','".$datosBC["caudalBC"]."','".$datosBC["empresaBC"]."')";
    
    $resul = insertar($query);
        if($resul == true){
            header("location: http://localhost/rhs/ingresoBC_exitoso.php");
        }
        }else{
            header("location: http://localhost/rhs/crear_bocatomas.php");
        }
        
?>