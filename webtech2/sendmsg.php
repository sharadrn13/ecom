<html>
<style>
h1{
font-family:'font',Georgia,Cambria;

color:#ffffff;
}
h3{
font-family:'font',Georgia,Cambria;
src:url('fonts/font.otf');
color:#ffffff;
}
a {
	color: #f0f0f0;
	text-decoration: none;
}

</style>
<?php
session_start();
//if(!isset($_SESSION["send"]))
  //  {
   // echo "no value passed";
	//}
$a=$_GET["msg"];
$c=$_GET["email"];
$b=$_SESSION["mail"];
//$c=$_SESSION["send"];
$con=mysqli_connect("localhost","root","","persons");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"insert into messages values('$b','$c','$a','no')");
echo "<h1>Your message has been sent</h1>";
mysqli_close($con);
?>