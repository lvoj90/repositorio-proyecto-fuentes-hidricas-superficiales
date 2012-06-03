<?php

/**
 * @author 
 * @copyright 2012
 */


/**
 * EL METODO SELECCIONAR REALIZA CONSULTAS EN LA BASE DE DATOS
 * DEVOLVIENDO UN ARREGLO CON LOS DATOS ENCONTRADOS SEGUN LA 
 * CONSULTA REALIZADA
 */
function seleccionar($consulta){
    $conexion = mysql_connect("localhost", "root", "12345");
    mysql_select_db("cidera",$conexion);

         
    $resultado = mysql_query($consulta, $conexion);
    $cantidad_filas = mysql_num_rows($resultado);
    if ($cantidad_filas > 0) { //para outocompletar crtl + j
        while ($item = mysql_fetch_assoc($resultado)) {
            $devolver[] = $item;
        }
    }
    else{
        $devolver = "no datos";
    }
    return $devolver;
}

function insertar($consulta){
    global $conexion;
    $resultado = mysql_query($consulta, $conexion);
    //echo("<p>resultado ".$resultado);
    return true;    
}

?>