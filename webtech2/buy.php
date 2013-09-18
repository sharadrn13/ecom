<html>
<style>
h1{
font-family:'font',Georgia,Cambria;
src:url('fonts/font.otf');
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

</style><?php
session_start();
$a=$_SESSION["mail"];
$b=$_SESSION["item"];
$con=mysqli_connect("localhost","root","","persons");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"INSERT INTO transactions(email,pname) VALUES('$a','$b')");
mysqli_close($con);
echo "<h1>Item ".$b." bought by </h1>".$a;
?>