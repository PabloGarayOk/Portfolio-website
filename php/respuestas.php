<?php
	
	$respuestas = $_GET['respuestas'];

	switch ($respuestas) {
    case "A":
      echo "<h3>¡Su mensaje ha sido enviado correctamente!</h3>";
      break;
    case "B":
      echo "<h3>¡Ups! Ha ocurrido un error, por favor intente nuevamente.</h3>";
      break;
    case "C":
      echo "<h3>Correo electr&oacute;nico inv&aacute;lido, por favor reviselo e intente nuevamente.</h3>";
      break;
    default:
      echo "<h3>¡Conversemos!</h3>";
  }

?>