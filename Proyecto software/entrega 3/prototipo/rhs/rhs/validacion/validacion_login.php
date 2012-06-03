<?php

/**
 * @author 
 * @copyright 2012
 */
       
    /**
     * ESTA FUNCION VALIDA LOS DATOS DEL USURIO AL LOGERASE
     * PARA EL CUAL PRIMERO CONSULTA LA BASE DE DATOS Y COMPARA CON
     * LOS DATOS SUMISTRADOS POR EL USUARIO.  
     */
        
    //include ("../bases_datos/databases.php");
    
    $conexion = mysql_connect("localhost", "root", "12345");
    mysql_select_db("cidera",$conexion);
    
    $query = "select * from administrador where 
        usuario = '".$_POST['usuario']."' and clave = '".$_POST['clave']."'";
    
    $resultado = mysql_query($query, $conexion);
    $totFil = mysql_num_rows($resultado);
    
    if ($totFil > 0) { //para outocompletar crtl + j
        header("location: http://localhost/rhs/administrador.php");
    }
    else{
        header ("location: http://localhost/rhs/login.php?login=false");
    }
?>