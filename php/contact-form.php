<?php
	
   if(!$_POST) exit;

   //Capturamos los datos enviados por POST desde el formulario de la pagina

   $to               = 'hello@johndoe.com.ar';
   $name             = $_POST["name"];
   $email            = $_POST["email"];
   $subject          = 'Consulta de la web Portfolio';
   $message          = $_POST["message"];

   //Comprobamos el email

   if(!preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $email)){
    
      header("location:../index.php?feedback=C&space=space-c&name=$name&email=$email&message=$message#contact");
      exit;

   }else{

      //Preparamos los headers

      $headers        = "MIME-Version: 1.0\r\n"; 
      $headers       .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
      $headers       .= "Reply-To: " . $email . "\r\n";
      $headers       .= "From: " . $name . " - nos quiere hacer una consulta.\r\n";
      
      //Armamos el mensaje

      $message        = utf8_decode($message); //Codificamos a utf8 el mensaje

      $fullMessage    = "Nombre: " . $name . "\r\n";
      $fullMessage   .= "Email: " . $email . "\r\n";
      $fullMessage   .= "Mensaje: " . $message . "\r\n";

      //Enviamos el mail

      $sentMail = @mail($to, $subject, $fullMessage, $headers);
       
      //Respondemos

      if($sentMail){
       
         header("location:../index.php?feedback=A&space=space-a#contact");
         exit;      
       
      }else{

         header("location:../index.php?feedback=B&space=space-b&name=$name&email=$email&message=$message#contact");
         exit;
      }
   }

?>