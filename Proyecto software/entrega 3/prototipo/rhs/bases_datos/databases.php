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
    $numrow = mysql_num_rows($resultado);
    
    
    if($numrow > 0){
        while($row = mysql_fetch_assoc($resultado))
        {
                
        }
        mysql_close($conexion);
        return $row;
    }else{
        mysql_close($conexion);
        return "no datos";
    }
        
}

/**
 * ESTE METODO SE ENCARGA DE INSERTAR UN NUEVO DATO EN LA BASE DE DATOS
 * RECIBE UNA CONSULTA CORRESPONDIENTE AL INSERT INTO
 * @param $consulta
 */
function insertar($consulta){
    $conexion = mysql_connect("localhost", "root", "12345");
    mysql_select_db("cidera",$conexion);
    
    $resultado = mysql_query($consulta, $conexion);
    //echo("<p>resultado ".$resultado);
    return true;    
}

/**
 * ESTE METODO SE ENCARGA DE ACTUALIZAR O MODIFICAR LOS DATOS DE LA BASE DE DATOS
 * RECIBE UNA CONSULTA CORRESPONDIENTE AL UPDATE
 * @param $consulta
 */

function actualizar($consulta){
    $conexion = mysql_connect("localhost", "root", "12345");
    if(!$conexion){
        echo("no conexion");
    }else{
    mysql_select_db("cidera",$conexion);
    
    $resultado = mysql_query($consulta, $conexion);
    return $resultado;
    }
}

?>