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
        
    //$conexion = mysql_connect("localhost", "root", "12345");
    //mysql_select_db("cidera",$conexion);
    
    include ("../bases_datos/databases.php");
    
    $query = "select * from administrador where 
        usuario = '".$_POST['usuario']."' and clave = '".$_POST['clave']."'";
    
    $resultado = seleccionar($query);
    //$totFil = mysql_num_rows($resultado);
    
    if ($resultado == "no datos") { //para outocompletar crtl + j
        header ("location: http://localhost/rhs/login.php?login=false");
    }
    else{
        header("location: http://localhost/rhs/administrador.php");
    }
?>