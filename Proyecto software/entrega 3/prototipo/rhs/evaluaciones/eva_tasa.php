<?php

/**
 * @author 
 * @copyright 2012
 */

    if($_POST['estrato'] == "ninguno"){
        $query1 = "select sum(consumo) as suma from consumo where 
            municipio = '".$_POST['municipio']."' and fecha = '".$_POST['mes']."'";
            
        $mes2 = $_POST['mes']-1;
        $query2 = "select sum(consumo) as suma from consumo where 
            municipio = '".$_POST['municipio']."' and fecha = '".$mes2."'";
            
        $conexion = mysql_connect("localhost", "root", "12345");
        mysql_select_db("cidera",$conexion);
        $resultado1 = mysql_query($query1, $conexion);
        $resultado2 = mysql_query($query2, $conexion);
        
        $numrow1 = mysql_num_rows($resultado1);
        $numrow2 = mysql_num_rows($resultado2); 
        if($numrow1 > 0 && $numrow2 > 0){
            $fila1 = mysql_fetch_assoc($resultado1);
            $fila2 = mysql_fetch_assoc($resultado2);
            $tasa = ($fila2['suma'] - $fila1['suma'])/$fila1['suma'];
            session_start();
            $_SESSION['tasa'] = "LA TASA PARA EL MES ES <br/>".$tasa;
            header("location: http://localhost/rhs/respuestas.php"); 
            
        }else{
            session_start();
            $_SESSION['tasa'] = "no hay datos";
            header("location: http://localhost/rhs/respuestas.php");
        }
        
    }else{
        $query1 = "select * from consumo where 
            municipio = '".$_POST['municipio']."' and fecha = '".$_POST['mes']."'
            and estrato = '".$_POST['estrato']."'";
            
        $mes2 = $_POST['mes']-1;
        $query2 = "select * from consumo where 
            municipio = '".$_POST['municipio']."' and fecha = '".$mes2."'
            and estrato = '".$_POST['estrato']."'";
            
        $conexion = mysql_connect("localhost", "root", "12345");
        mysql_select_db("cidera",$conexion);
        $resultado1 = mysql_query($query1, $conexion);
        $resultado2 = mysql_query($query2, $conexion);
        
        $numrow1 = mysql_num_rows($resultado1);
        $numrow2 = mysql_num_rows($resultado2);
        
        if($numrow1 > 0 && $numrow2 > 0){
            $fila1 = mysql_fetch_assoc($resultado1);
            $fila2 = mysql_fetch_assoc($resultado2);
            
            $tasa = ($fila2['consumo'] - $fila1['consumo'])/$fila1['consumo'];
            
            session_start();
            $_SESSION['tasa'] = $tasa;
            header("location: http://localhost/rhs/respuestas.php");
        }else{
            session_start();
            $_SESSION['tasa'] = "no hay datos";
            header("location: http://localhost/rhs/respuestas.php");
        } 
    }
?>