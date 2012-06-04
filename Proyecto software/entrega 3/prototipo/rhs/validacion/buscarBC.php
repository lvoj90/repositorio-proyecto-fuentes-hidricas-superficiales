<?php

/**
 * @author 
 * @copyright 2012
 */

    include ("../bases_datos/databases.php");
    
    $datosBC = $_POST;
    $query = "select * from bocatoma where 
        nombre = '".$_POST['nombreBC']."'";
    
    $resultado = seleccionar($query);
    //$totFil = mysql_num_rows($resultado);
    
    if ($resultado == "no datos") { //para outocompletar crtl + j
        echo "BOCATOMA".$datosBC['nombreBC']." NO EXISTE";
    }
    else{
        echo "".$resultado['nombre'];
        session_start();
        $_SESSION['nombre'] = $_POST['nombreBC'];
        header ("location: http://localhost/rhs/modif_bocatomas2.php");
        
    }
?>