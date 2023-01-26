<?php
	
   if(!$_POST) exit;

   //Capturamos los datos enviados por POST desde la pagina cotizaciones

   $to               = 'hello@pablogaray.com.ar';
   $name             = $_POST["name"];
   $email            = $_POST["email"];
   $subject          = 'Consulta de la web Portfolio';
   $message          = $_POST["message"];

   //Comprobamos el email

   if(!preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $email)){
    
      header("location:../index.php?feedback=C&name=$name&email=$email&message=$message#contact");
      exit;

   }else{

      //Preparamos los headers

      $headers        = "MIME-Version: 1.0\r\n"; 
      $headers       .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
      $headers       .= "Reply-To: " . $email . "\r\n";
      $headers       .= "From: " . $name . " - nos quiere hacer una consulta.\r\n";
      
      //Armamos el mensaje

      $fullMessage    = "Nombre: " . $name . "\r\n";
      $fullMessage   .= "Email: " . $email . "\r\n";
      $fullMessage   .= "Mensaje: " . $message . "\r\n";

      //Enviamos el mail

      $sentMail = @mail($to, $subject, $fullMessage, $headers);
       
      //Comprobamos

      if($sentMail){
       
         header("location:../index.php?feedback=A#contact");
         exit;      
       
      }else{
       
         header("location:../index.php?feedback=B&name=$name&email=$email&message=$message#contact");
         exit;
      }
   }

?>