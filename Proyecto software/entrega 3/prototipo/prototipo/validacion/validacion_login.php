<?php

/**
 * @author 
 * @copyright 2012
 */

    include ("../bases_datos/databases.php");
    $query = "select * from usuario where nombre = '".$_POST['nombre']."' and clave = '".$_POST['clave']."'";
    $resul = seleccionar($query);
    if($resul == "no datos"){
        header ("location: http://localhost/Proyecto/index.php?login=false");
    }else{
        session_start();
        $_SESSION['x'][] = $_POST['nombre'];
        header("location: http://localhost/prototipo/login/usuario.php");
    }

?>