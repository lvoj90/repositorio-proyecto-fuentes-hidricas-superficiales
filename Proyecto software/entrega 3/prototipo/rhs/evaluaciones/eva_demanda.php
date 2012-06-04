<?php

/**
 * @author 
 * @copyright 2012
 */
    
    if($_POST['estrato'] == "0-ninguno"){
        $query1 = "select consumo, fecha  from consumo where 
            municipio = '".$_POST['municipio']."'";
            
        $conexion = mysql_connect("localhost", "root", "12345");
        mysql_select_db("cidera",$conexion);
        $resultado1 = mysql_query($query1, $conexion);
        
        $numrow1 = mysql_num_rows($resultado1); 
        if($numrow1 > 0){
            session_start();
            
            for ($i = 0; $i < $numrow1; $i++) {
                $matriz[$i][$j]= mysql_fetch_assoc($resultado1);
                $j++;
            }
            $j =0;
            for ($i = 0; $i < $numrow1; $i++) {
                echo $matriz[$i][$j]."<br/>";
                $j++;
            }
            
            /*                            
            
            $_SESSION['tasa'] = "no hay datos";
            header("location: http://localhost/rhs/respuestas.php");
                        
            echo "munero row  ".$numrow1;
            */
                        
        }else{
            session_start();
            $_SESSION['tasa'] = "no hay datos";
            header("location: http://localhost/rhs/respuestas.php");
        }
        
    }else{
        session_start();
        $_SESSION['tasa'] = "no daaattoooos";
        header("location: http://localhost/rhs/respuestas.php");    
    }
?>