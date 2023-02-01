<?php
	
   if(!$_POST) exit;

   //Capturamos los datos enviados por POST desde el formulario de la pagina

   $to               = 'hola@pablogaray.com.ar';
   $nombre             = $_POST["nombre"];
   $correo            = $_POST["correo"];
   $subject          = 'Consulta de la web Portfolio';
   $mensaje          = $_POST["mensaje"];

   //Comprobamos el correo

   if(!preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $correo)){
    
      header("location:../index.php?respuestas=C&side=es&space-back=space-back-c&nombre=$nombre&correo=$correo&mensaje=$mensaje#contact");
      exit;

   }else{

      //Preparamos los headers

      $headers        = "MIME-Version: 1.0\r\n"; 
      $headers       .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
      $headers       .= "Reply-To: " . $correo . "\r\n";
      $headers       .= "From: " . $nombre . " - nos quiere hacer una consulta.\r\n";
      
      //Armamos el mensaje

      $mensaje        = utf8_decode($mensaje); //Codificamos a utf8 el mensaje

      $fullMessage    = "Nombre: " . $nombre . "\r\n";
      $fullMessage   .= "Email: " . $correo . "\r\n";
      $fullMessage   .= "Mensaje: " . $mensaje . "\r\n";

      //Enviamos el mail

      $sentMail = @mail($to, $subject, $fullMessage, $headers);
       
      //Respondemos

      if($sentMail){
       
         header("location:../index.php?respuestas=A&side=es&space-back=space-back-a#contact");
         exit;      
       
      }else{
       
         header("location:../index.php?respuestas=B&side=es&space-back=space-back-b&nombre=$nombre&correo=$correo&mensaje=$mensaje#contact");
         exit;
      }
   }

?>