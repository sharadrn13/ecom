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
</style>

<?php
session_start();
if(!isset($_SESSION["mail"]))
   {
    echo "no value passed";
	}
   else
   {
    //echo   $_SESSION["mail"] ;
   }
   	$a= $_SESSION["mail"] ;
$con=mysqli_connect("localhost","root","","persons");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM messages where msgto='$a' and messages.read='no'");

echo " <table border='1'>
<tr>
<th>Sender</th>
<th>Message</th>
<th>Reply</th>
</tr>";
while($row = mysqli_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['msgfrom'] . "</td>";
  echo "<td>" . $row['msg'] . "</td>";
  echo "<td><a href='msg.php?email=".$row['msgfrom']."' onclick='return my()'>Reply</a></td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_query($con,"update messages set messages.read='yes' where msgto='$a' and messages.read='no'");
mysqli_close($con);
?> 
<body>
</body>
</html>