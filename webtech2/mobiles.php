<?php
session_start();

 if(!isset($_SESSION["mail"]))
   {    
    echo "No one logged in.Please login to buy.";
   }
   //else
   //{
    //echo "hey ".$_SESSION["mail"];
    //}
    ?>
<!--<html>
<head>
<title>Computers Home</title>
<style>
html,body
{
margin:0;
padding:0;
}
h1,h2{color:green;}
table,th 
{border:1px solid green;
}
table{width:100%;}
th {
height:200px;
padding:0px;
margin:0px;
}
div
{
display:relative;
width:60px;
margin-left:20px;
margin-right:-6px;
}
</style>
</head>
<body>-->
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>mobiles</title>
		
		<meta name="keywords" content="100% grid, layout, columns, images, thumbnails, responsive, full width grid, image grid, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/defaultgrid.css" />
		<link rel="stylesheet" type="text/css" href="css/componentgrid.css" />
		<script src="js/modernizrgrid.custom.js"></script>
	</head>
	<style>
	
.icon-drop:before, 
.icon-arrow-left:before {
	font-family: 'fontawesome';
	position: absolute;
	top: 0;
	width: 100%;
	height: 100%;
	speak: none;
	font-style: normal;
	font-weight: normal;
	line-height: 2;
	text-align: center;
	color: #F58E01;
	-webkit-font-smoothing: antialiased;
	text-indent: 8000px;
	padding-left: 8px;
}
.container > header nav a:hover:after {
	opacity: 1;
}

.container > header nav a:hover {
	background: #F58E01;
}

.container > header nav a:hover:before {
	color: #fff;
}

.icon-drop:before {
	content: "\e000";
}

.icon-arrow-left:before {
	content: "\f060";
}
.container > header nav {
	float: right;
}

.container > header nav a {
	display: block;
	float: left;
	position: relative;
	width: 2.5em;
	height: 2.5em;
	background: #fff;
	border-radius: 50%;
	color: transparent;
	margin: 0 0.1em;
	border: 4px solid #F58E01;
	text-indent: -8000px;
}

.container > header nav a:after {
	content: attr(data-info);
	color: #F58E01;
	position: absolute;
	width: 600%;
	top: 120%;
	text-align: right;
	right: 0;
	opacity: 0;
	pointer-events: none;
}


li
{
padding-bottom:20px;
}

h2
{
font-size:30px;
padding:20px;
margin-top:20px;
}
.abc
{
color:black;
}
	</style>
	<body style="color:#F58E01;">
		<div class="container">
			<header class="clearfix">
				
				<h1 >Our Home</h1>
				<nav>
					<a href="slide2.php" class="icon-arrow-left" data-info="home">Home</a>
					
				</nav>

			</header>	
			<ul class="cbp-rfgrid">
				<h1> Samsung Mobiles </h1>
				<li><a href="samsung1.php"><img src="download (10).jpg"height="250" width="250" /><div id="abc"><h3>SAMSUNG S3</h3></div></a></li>
				<li><a href="samsung2.php"><img src="download (11).jpg"height="250" width="300" /><div><h3>SAMSUNG DUOS</h3></div></a></li>
				<li><a href="samsung3.php"><img src="download (12).jpg" height="250" width="300"/><div><h3>GALAXY X2</h3></div></a></li>
				<li><a href="samsung4.php"><img src="images (9).jpg" height="250" width="300" /><div><h3>GALAXY nexus</h3></div></a></li>
				<li><a href="samsung5.php"><img src="download (12).jpg" height="250" width="300" /><div><h3></h3></div></a></li>
				<br><br><br><br>
				<h2> Nokia Mobiles </h2>
				<li><a href="#"><img src="images (5).jpg" height="250" width="250" /><div><h3>NOKIA LUMIA 800</h3></div></a></li>
				<li><a href="#"><img src="images (19).jpg" height="250" width="250" /><div><h3>NOKIA N 800</h3></div></a></li>
				<li><a href="#"><img src="images (7).jpg" height="250" width="250"/><div><h3>NOKIA LUMIA 600</h3></div></a></li>
				<li><a href="#"><img src="download (20).jpg" height="250" width="250" /><div><h3>NOKIA  800</h3></div></a></li>
				<li><a href="#"><img src="images (5).jpg" height="250" width="250" /><div><h3>NOKIA LUMIA 900</h3></div></a></li>
				<br><br><br><br>
				<h2> HTC Mobiles </h2>
				<li><a href="#"><img src="download (8).jpg" height="250" width="250" /><div><h3>HTC ONE ACE</h3></div></a></li>
				<li><a href="#"><img src="download1.jpg" height="250" width="250" /><div><h3>HTC NOTE</h3></div></a></li>
				<li><a href="#"><img src="images (8).jpg" height="250" width="250"/><div><h3>HTC ACE</h3></div></a></li>
				<li><a href="#"><img src="download (9).jpg" height="250" width="250" /><div><h3>HTC</h3></div></a></li>
				<li><a href="#"><img src="download (8).jpg" height="250" width="250" /><div><h3>HTC ONE</h3></div></a></li>
				<br><br><br><br>
				
			</ul>
		</div>
	</body>
</html>

<!--<h1>Computers Home</h1>
<h2>Laptops</h2>
<table>
<tr>
<th><div><a href=""><img src="images.jpg"></a></div></th>
<th><div><a href=""><img src="images (2).jpg"></a></div></th>
<th><div><a href=""><img src="images (1).jpg"></a></div></th>
<th><div><a href=""><img src="download.jpg"></a></div></th>
</tr>
</table>
<h2>Desktops</h2>
<table>
<tr>
<th><div><a href=""><img src="download (1).jpg"></a></div></th>
<th><div><a href=""><img src="download (2).jpg"></a></div></th>
<th><div><a href=""><img src="images (3).jpg"></a></div></th>
<th><div><a href=""><img src="images (4).jpg"></a></div></th>
</tr>
</table>
<h2>Printers</h2>
<table>
<tr>
<th><a href=""><img src="download (3).jpg"></a></div></th>
<th><a href=""><img src="download (4).jpg"></a></div></th>
<th><a href=""><img src="download (5).jpg"></a></div></th>
<th><a href=""><img src="download (6).jpg"></a></div></th>
</tr>
</table>
</body>
</html>-->