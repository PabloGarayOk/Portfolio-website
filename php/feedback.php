<?php

/* 
  * Portfolio Website
  * Description: Portfolio Website Developer.
  * Version: 1.0
  * Author: Pablo Garay - 2022
  * https://github.com/PabloGarayOk/Portfolio-website.git
*/
	
	$feedback = $_GET['feedback'];

	switch ($feedback) {
    case "A":
      echo "<h3>Your message has been sent successfully!</h3>";
      break;
    case "B":
      echo "<h3>Whoops! An error has occurred, please try again.</h3>";
      break;
    case "C":
      echo "<h3>Invalid email, please check it and try again.</h3>";
      break;
    default:
      echo "<h3>Let's talk!</h3>";
  }

?>