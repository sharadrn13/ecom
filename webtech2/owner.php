<html>
<style>
table {
width:90%;
border-top:1px solid #e5eff8;
border-right:1px solid #e5eff8;
margin:1em auto;
border-collapse:collapse;
}
td {
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #fff;
	padding: 6px 6px 6px 12px;
	color: #4f6b72;
	font: bold 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
}
th {
	font: bold 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
	color: #4f6b72;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
}
a {
	color: black;
	text-decoration: none;
}
</style>
<?php
session_start();

if(!isset($_SESSION["item"]))
    {
    echo "no value passed";
	}
   else
   {
    echo $_SESSION["item"];
   }
	$a=$_SESSION["item"];
	$con=mysqli_connect("localhost","root","","persons");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT email FROM transactions where pname='$a'");
echo "<table border='1'>
<tr>
<th>Previous Owners</th>
</tr>";
$i=0;
while($row = mysqli_fetch_array($result))
  {
  $i=$i+1;
  echo "<tr>";
  echo '<td><a href="msg.php?email='.$row['email'].'">'. $row['email'] .'</a></td>';
  $send[$i]=$row['email'];
  //echo "<html><head><script>function myfunc{".$_SESSION['send']=$row['email']."}</script></head></html>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>    