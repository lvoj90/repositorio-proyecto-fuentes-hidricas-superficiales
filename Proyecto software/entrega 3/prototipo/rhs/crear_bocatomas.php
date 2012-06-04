<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador CrearBoc</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header"><img src="images/logo.gif" width="200" height="80"/>
        <div style="float: right; padding: 30px; text-wrap: normal;">
            <form action="http://localhost/rhs/administrar/opciones_admon.php" method="post">
                <select name="opcion">
                    <option>--Opciones--</option>
                    <option>cambiar clave</option>
                    <option>crear usuario</option>
                </select>
                <input type="submit" value="Ir A"/>
            </form>
            <p><a href="administrador.php" style="background-color: #000040;">Inicio</a> </p> 
        </div>
        
    <ul>
      <div style="background-color: #800040; height: 38px; width: 100px; float: left; margin-left: 5px; text-align: center;">
        <li><a href="http://localhost/rhs/modif_bocatomas.php">Modificar Bocatomas</a></li></div>
      <div style="background-color: #800040; height: 38px; width: 100px; float: left; margin-left:5px; text-align: center;">
        <li><a href="http://localhost/rhs/crear_bocatomas.php">Crear Nueva Bocatoma</a></li></div>
      
    </ul>
      
  </div>
  
  <div id="content">
    <div style="height: 300px;"><p><!--cuerpo-->
        <div style="margin: 10px;">
             <form action="http://localhost/rhs/validacion/validar_ingresoBC.php" method="post">
                <p>Nombre de la Bocatoma<br/>
                <input type="text" name="nombreBC"/> 
                <p>Ubicacion<br/>
                <input type="text" name="ubicacionBC"/></p>
                <p>Oferta<br/>
                <input type="text" name="ofertaBC"/></p>
                <p>Caudal<br/>
                <input type="text" name="caudalBC"/></p>
                <p>Empresa<br/>
                <input type="text" name="empresaBC"/></p>
                <input type="submit" value="Ingresar"/>
                <input type="reset" value="Borrar"/></p>
                
            </form>
            
            <?php
                function resultado($cadena){
                    echo("".$cadena);
                }
            ?>
            
        </div>    
    </p></div><!--cierre cuerpo-->
    
  </div>
  <div id="container-left">    
    <p>
    Universidad del Quindio, suenos y compromisos con la Sociedad
    </p>
  </div>
  <div id="footer"> &copy; 2012 Facultad de Ingenieria, CEIFI
  </div>
</div>
</body>
</html>
