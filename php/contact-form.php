<?php

/* 
  * Portfolio Website
  * Description: Portfolio Website Developer.
  * Version: 1.0
  * Author: Pablo Garay - 2022
  * https://github.com/PabloGarayOk/Portfolio-website.git
*/
	
   if(!$_POST) exit;

   //Capture of data sent by POST

   $to               = 'john@johndoe.com'; // <<<<------ Replace with your email!!!
   $name             = $_POST["name"];
   $email            = $_POST["email"];
   $subject          = 'Message from your portfolio';
   $message          = $_POST["message"];

   //Checking email

   if(!preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $email)){
    
      header("location:../index.php?feedback=C&name=$name&email=$email&message=$message#contact");
      exit;

   }else{

      //Preparing the headers

      $headers        = "MIME-Version: 1.0\r\n"; 
      $headers       .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
      $headers       .= "Reply-To: " . $email . "\r\n";
      $headers       .= "From: " . $name . " is contacting you.\r\n";
      
      //Makeing the message

      $fullMessage    = "Name: " . $name . "\r\n";
      $fullMessage   .= "Email: " . $email . "\r\n";
      $fullMessage   .= "Message: " . $message . "\r\n";

      //Sending the email

      $sentMail = @mail($to, $subject, $fullMessage, $headers);
       
      //Checking...

      if($sentMail){
       
         header("location:../index.php?feedback=A#contact");
         exit;      
       
      }else{
       
         header("location:../index.php?feedback=B&name=$name&email=$email&message=$message#contact");
         exit;
      }
   }

?>