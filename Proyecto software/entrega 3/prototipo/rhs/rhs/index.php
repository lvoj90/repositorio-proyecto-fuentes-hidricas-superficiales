<?php  
 // no direct access 
 defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" /> 
 <link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/system.css" type="text/css" /> 
 <link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/general.css" type="text/css" /> 
 <link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/default.css" type="text/css" /> 
</head>
<body>
<div id="container">
  <div id="header"><img src="templates/portafolio/images/logo.gif" width="307" height="135" />
  <jdoc:include type="modules" name="top" style="xhtml" />
  </div>
  <div id="content">
<jdoc:include type="component" />
  </div>
  <div id="left">
<jdoc:include type="modules" name="left" style="xhtml" />    
  </div>
  <div id="footer"><jdoc:include type="modules" name="footer" style="xhtml" />
  </div></div>
</body>
</html>
