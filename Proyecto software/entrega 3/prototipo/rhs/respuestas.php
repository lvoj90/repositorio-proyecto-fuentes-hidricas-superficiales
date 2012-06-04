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
        <p><h3 style="color: #004000;"> 
            
            <?php 
                session_start();
                echo "".$_SESSION['tasa'];
            ?>
        </h3></p>
            
    </p></div><!--cierre cuerpo-->
    
  </div>
  <div id="left">
    <ul>
      
    </ul>
    <p>
    Universidad del Quindio, Desafios, suenos y compromisos con la Sociedad
    </p>
  </div>
  <div id="footer"> &copy; 2012 Facultad de Ingenieria, CEIFI
  </div>
</div>
</body>
</html>