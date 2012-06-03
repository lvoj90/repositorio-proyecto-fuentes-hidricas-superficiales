<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Evaluar la Tasa de Consumo</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header"><img src="images/logo.gif" width="200" height="80"/>
        <div style="float: right; padding: 30px; text-wrap: normal;">
            <li> <a href="http://localhost/rhs/login.php">login</a></li> 
        </div>
    <ul>
      <div style="background-color: #800040; height: 45px; width: 40px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="index.html">Inicio</a></li></div>
      <div style="background-color: #800040; height: 45px; width: 60px; float: left; margin-left:5px; text-align: center;">
        <li><a href="tasa.php">Evaluar Tasa de Consumo</a></li></div>
      <div style="background-color: #800040; height: 45px; width: 58px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="demanda.php">Evaluar Demanda</a></li></div>
      <div style="background-color: #800040; height: 45px; width: 69px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="consumo.php">Proyecion del Consumo</a></li></div>
      <div style="background-color: #800040; height: 45px; width: 75px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="capacidad.php">Proyeccion de la Capacidad</a></li></div>
      <div style="background-color: #800040; height: 45px; width: 75px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="bocatoma.php">Inf. Bocatomas</a></li></div>
    </ul>
  </div>
  <div id="content">
    <div style="height: 300px;"><p><!--cuerpo-->
        <form action="http://localhost/rhs/evaluaciones/eva_tasa.php" method="post">
            <p>En esta pagina podras observar la TASA DEL CONSUMO DE AGUA POTABLE 
            por los municipios del departamento del Quindio.</p>
            <p>Seleccione el municipio al que se desea conocer 
            la tasa de consumo</p>
            <!--lista de seleccion-->
            <p>Municipio: 
            <select name="municipio"> 
                <option>armenia</option> 
                <option>calarca</option> 
                <option>buena vista</option>
                <option>circasia</option>
                <option>filandia</option>
                <option>genova</option>
                <option>la tebaida</option>
                <option>montenegro</option>
                <option>pueblo tapao</option>
                <option>pijao</option>
                <option>quimbaya</option>
                <option>salento</option>  
            </select> 
            
            <p>Opcionalmente el Estrato, si se deja en CERO (0) se 
            entendera que no desea calcularlo por Estrato</p>
            Estrato: <select name="estrato"> 
                <option>0-ninguno</option> 
                <option>1</option> 
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
            </p>
            <input type="submit" value="Consultar"/>
            
        </form>
        
       <?php
               $resTasa = tasa();
               echo("la tasa de consumo del municipio ".$_POST['municipio']." es: ".$resTasa);
       ?>     
            
    </p></div><!--cierre cuerpo-->
    
  </div>
  <div id="left">
    <ul>
      
    </ul>
    <p>
    Universidad del Quindio, suenos y compromisos con la Sociedad
    </p>
  </div>
  <div id="footer"> &copy; 2012 Facultad de Ingenieria, CEIFI
  </div>
</div>
</body>
</html>