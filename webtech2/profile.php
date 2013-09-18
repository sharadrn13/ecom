<?php
$a=$_POST["email"];
$b=$_POST["password"];
$con=mysqli_connect("localhost","root","","persons");
if(mysqli_connect_errno())
echo "Problem in connecting with mysql";
$result = mysqli_query($con,"SELECT * FROM record");
$f=1;
while($row = mysqli_fetch_array($result))
  { 
  if($a==$row['email'])
  {
    if($b==$row['password'])
    {
     $f=0;
     break;
	}
  }
  }
if($f==0)
{
echo "Hurray! Now go to home page. "."<br>";
echo "<a href='home.php'>HOME";
}
else
{
echo "Sorry your account doesnot exist.";
echo "Please Signup.";
echo "<a href='signup.php'>SIGNUP";
}
?>






