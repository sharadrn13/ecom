<?php
session_start();
 //now, let's register our session variables
//session_register('email');
//session_register('password');
 
//finally, let's store our posted values in the session variables
//$_SESSION['email'] = $_POST['email'];
 if(!isset($_SESSION["mail"]))
   {
    echo "no value passed";
	}
   else
   {
    echo $_SESSION["mail"];
    }
    ?>

<html>
<head><title>specifications</title>
<script>
function func1()
{
<?php
$a=$_SESSION["mail"];
$con=mysqli_connect("localhost","root","","persons");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"INSERT INTO transactions(email,pname) VALUES('$a','samsung s3')");
mysqli_close($con);
?>
document.getElementById("demo").innerHTML="You have successfully purchased.";
}
function func2()
{
<?php
$a=$_SESSION["mail"];
$con=mysqli_connect("localhost","root","","persons");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"INSERT INTO cart(email,pname) VALUES('$a','samsung s3')");
mysqli_close($con);
?>
document.getElementById("demo").innerHTML="You have successfully added the item to cart.";
}

</script>
<style>
@font-face {
    font-family:DeliciousRoman;
    src: url(C:\wamp\www\webtech\Quicksand_Bold.otf);
}
body,html
{
padding:0;
margin:0;
}
table
{
border-collapse:collapse;
}
.header{
display:fixed;
background-color:black;
width:auto;
height:30px;
padding-top:0;
margin:0;
z-index:990;
}
table, td, th
{
border:1px solid black;
}
td
{
padding:10px;
}
.a
{
padding-top:20px;
padding-left:38%;
}
.side-nav
{
z-index:990;
color:#666666;
text-decoration:none;
font-size:18px;
font-weight:bold;
}

div
{
padding-top:0;
}
a
{
text-decoration:none;
}
a:visited{
color:#A8A8A8;
}
a:hover
{
color:#fafafa;
}
ul
{
list-style-type:none;
}
ul li
{
display:inline;
}
</style>
</head>
<!--<div class="header">
<div class="side-nav">
<ul>
<li><a href="http://localhost/webtech/first.html">GOCart</a></li>&nbsp &nbsp<li><a href="http://localhost/webtech/first.html">Home</a></li>
</ul>
</div>
</div> -->
<p class="a">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="download (10).jpg" align="middle"></p>
<p>
<table border="1" align="center">
<tr>
<th>GENERAL   </th>
<td>2G Network<br>3G Network<br>4G Network<br>Sim</td>
<td>GSM 850 / 900 / 1800 / 1900<br>HSDPA 850 / 900 / 1900 / 2100<br>LTE (market dependent)<br>Micro-SIM</td>
</tr>
<tr>
<th>BODY  </th>
<td>Dimensions<br>Weight</td>
<td>210.8 x 135.9 x 8 mm (8.30 x 5.35 x 0.31 in)<br>338 g (11.92 oz)</td>
</tr>
<tr>
<th> DISPLAY </th>
<td>Type<br>Size<br>Multitouch</td>
<td>TFT capacitive touchscreen, 16M colors<br>800 x 1280 pixels, 8.0 inches (~189 ppi pixel density)<br>Yes</td>
</tr>
<tr>
<th> SOUND </th>
<td>Alert types<br>Loudspeaker<br>3.5mm jack</td>
<td>Vibration, MP3 ringtones<br>Yes, with stereo speakers<br>Yes</td>
</tr>
<tr>
<th>  FEATURES</th>
<td>OS<br>CPU<br>Sensors<br>GPS</td>
<td>Android OS, v4.1.2 (Jelly Bean)<br>Quad-core 1.6 GHz Cortex-A9<br>Accelerometer, gyro, proximity, compass<br>Yes, with A-GPS support and GLONASS</td>
</tr>
</table></p>
<button onclick="func1()">Buy</button>
<button onclick="func2()">Add to Cart</button>
<p id="demo"></p>
</body>
</html>