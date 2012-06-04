<?php

/**
 * @author 
 * @copyright 2012
 */
    $opcion = $_POST;
    if($opcion['opcion']=="cambiar clave"){
        header("location: http://localhost/rhs/admon_clave.php");
        
    }elseif($opcion['opcion']=="crear usuario"){
        header("location: http://localhost/rhs/admon_usuario.php"); 
    
    }elseif($opcion['opcion']=="--Opciones--"){
        header("location: http://localhost/rhs/administrador.php");
    }
    
?>