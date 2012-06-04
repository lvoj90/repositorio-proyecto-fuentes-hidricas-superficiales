<?php

/**
 * @author 
 * @copyright 2012
 */
    include ("../bases_datos/databases.php");
    
    if($_POST['claveUS1'] == $_POST['claveUS2']){
        $claveUS = $_POST['claveUS1'];
        
        $query = "insert into administrador (nombre, usuario, clave, programa) 
        values ('".$_POST['nombreUS']."','".$_POST['usuarioUS']."','".$claveUS."','".$_POST['programaUS']."')";
            
        $resultado = insertar($query);
    
        if ($resultado) { //para outocompletar crtl + j
            session_start();
            $_SESSION['msn'] = "Ingreso exitoso del usuario </br>".$_POST['nombreUS'];
            header("location: http://localhost/rhs/nuevoUS.php");
        }
        else{
            session_start();
            $_SESSION['msn'] = "Operacion Sin Exito";
            header("location: http://localhost/rhs/nuevoUS.php");
        }
        
    }else{
        session_start();
        $_SESSION['msn'] = "Clave no Coincide";
        header("location: http://localhost/rhs/nuevoUS.php");
    }
    
?>