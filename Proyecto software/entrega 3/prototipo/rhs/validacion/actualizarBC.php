<?php

/**
 * @author 
 * @copyright 2012
 */

    include ("../bases_datos/databases.php");
    
    
    
    $query = "UPDATE bocatoma SET nombre = '".$_POST['nombreBC']."', 
        ubicacion = '".$_POST['ubicacionBC']."', 
        oferta = '".$_POST['ofertaBC']."', 
        caudal = '".$_POST['caudalBC']."',
        empresa = '".$_POST['empresaBC']."' 
        where nombre = '".$_POST['nombreOBC']."'";
    
    $resultado = actualizar($query);
    
    if ($resultado) { //para outocompletar crtl + j
        header("location: http://localhost/rhs/modif_bocatomas_ext.php");
    }
    else{
        header("location: http://localhost/rhs/modif_bocatomas2.php?modif=false");
    }

?>