<?php

/**
 * @author 
 * @copyright 2012
 */

$conexion = mysql_connect("localhost", "root", "12345");

mysql_select_db("cidera",$conexion);

function seleccionar($consulta){
    global $conexion;
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