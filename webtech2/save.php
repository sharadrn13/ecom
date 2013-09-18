
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

</style>
<body background="main.jpg"><?php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["password"];
$con=mysqli_connect("localhost","root","","persons");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"INSERT INTO record(name,email,password)
VALUES ('$a','$b','$c')");
echo "<h1>Account Created.</h1>"."<br>";
echo "<h3>Now login with your email id and password </h3>"."<br>";
echo "<a href='login.php'>LOGIN";
mysqli_close($con);
?>
</body>
</html>


 