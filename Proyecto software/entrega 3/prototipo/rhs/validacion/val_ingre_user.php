<?php

/**
 * @author 
 * @copyright 2012
 */

    include ("../bases_datos/databases.php");
    
    $valres = $_POST;
    
    
    if(isset($valres["usuario"]) && isset($valres["clave1"])&& isset($valres["clave2"])){
        if($valres["clave1"] == $valres["clave2"]){
            
            $query_1 = "select * from administrador where usuario = '".$valres['usuario']."' 
                and clave = '".$valres['clave']."'";
            $query_2 = "update administrador set clave='".$valres["clave1"]."' WHERE usuario='".$valres["usuario"]."'";
            
            $resul = seleccionar($query_1);
            
            if (isset($resul)){
                actualizar($query_2);
                header ("location: http://localhost/rhs/administrador.php?ingreso=exitoso");    
            }else{
                header ("location: http://localhost/rhs/crearUS.php?ingreso=noExitoso");
            }
            
                
        }else{
            echo("calves nuevas no coinciden");
        }
    }else{
        echo("TODOS LOS CAMPOS SON OBLIGATORIOS complete la informacion");
    }        

?>