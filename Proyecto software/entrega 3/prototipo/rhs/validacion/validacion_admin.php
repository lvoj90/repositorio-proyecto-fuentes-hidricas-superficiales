<?php

/**
 * @author 
 * @copyright 2012
 */
    include ("../bases_datos/databases.php");
    
    $valres = $_POST;
    if(isset($valores["nombre"]) || isset($valores["clave"])|| 
        isset($valores["usuario"]) || isset($valores ["pregunta"])
        ||isset($valores["respuesta"])){
        //va al archivo validacio_admin-php
        $query = "insert into administrador (nombre, apellidos, usuario, clave,
        pregunta, respuesta, cargo, telefono, programa) values ('"
        .$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["usuario"]."','"
        .$_POST["clave"]."','".$_POST["pregunta"]."','".$_POST["respuesta"]."','"
        .$_POST["cargo"]."','".$_POST["telefono"]."','".$_POST["programa"]."')";
    
        $resul = insertar($query);
            if($resul == true){
                header("location: http://localhost/prototipo/registro_exitoso.php");
            }
    }else{
        return "no datos";
    }
    
?>