<?php
 require_once "Mail.php";
 
 $from = "Sharad Sender <sharadrn3@yahoo.in>";
 $to = "Ramona Recipient <sharadsingh.rana2010@vit.ac.in>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "mail.yahoo.com";
 $username = "sharadrn13";
 $password = "9412181825";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>