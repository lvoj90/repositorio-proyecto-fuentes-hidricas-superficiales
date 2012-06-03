<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login SIRHS</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header"><img src="images/logo.gif" width="200" height="80" />
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
        <div style=" background: #80FFFF; padding: 20px; width: 150px;">
        <!--se crea la accion para logearse-->
        <form action="http://localhost/rhs/validacion/validacion_login.php" method="post" >
            <p>USUARIO:</p>
            <p><input type="text" name="usuario" /></p>
            <p>PASSWORD:</p>
            <p><input type="password" name="clave" /></p>
            <p><input type="submit" value="Aceptar"/></p>
        </form>

</div>
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
