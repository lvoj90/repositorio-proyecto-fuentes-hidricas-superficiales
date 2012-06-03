<?php

/**
 * @author 
 * @copyright 2012
 */


function tasa(){
    include ("../bases_datos/databases.php");
    
    if($_POST['estrato'] == "0"){
        $query = "select consumo from consumo where 
        municipio = '".$_POST['municipio']."' and fecha = '2011-11-01'";
    }else{
        $queryx = "select consumo from consumo where 
        municipio = '".$_POST['municipio']."' and estrato = '".$_POST['estrato']."' and fecha = '2011-11-01'"; 
        
        $queryy = "select consumo from consumo where 
        municipio = '".$_POST['municipio']."' and estrato = '".$_POST['estrato']."' and fecha = '2011-12-01'";   
    }
    
    
    $resulx = seleccionar($queryx);
    $resuly = seleccionar($queryy);
    
    if($resulx == "no datos" || $resuly == "no datos"){
        $resp = "no hay datos disponibles"; 
        echo $resp;
    }else{
        $resp = ($resuly-$resulx)/$resuly;
        echo "".$resp;
    }
}
?>