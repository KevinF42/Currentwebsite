<?php
   $host = "localhost";
   $database = "stream";
   $user = "Serenity";
   $pass = "Maverick";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
