<?php
 //let's start the session
session_start();
 //now, let's register our session variables
//session_register('email');
//session_register('password');
 
//finally, let's store our posted values in the session variables
$_SESSION['email'] = $_POST['email'];
?>