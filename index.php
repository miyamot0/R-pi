<?php
  require_once 'Config.php';
  require 'Connection.php';

	$cnx = new Rserve_Connection(RSERVE_HOST,
	    RSERVE_PORT,
	    array('username'=>RSERVE_USER,'password'=>RSERVE_PASS)
	);

  $resp = $cnx->evalString('x = "Server up"', Rserve_Connection::PARSER_NATIVE);
  
  echo $resp;
?>
