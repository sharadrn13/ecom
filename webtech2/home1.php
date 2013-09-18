<html>
<head>
<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

<title>E-Mart</title>
<style>

a {
	color: #f0f0f0;
	text-decoration: none;
}

table {

width:100%;
height:100%;}
td.a
{
width:10%;
height:10%;}
td.b
{
width:10%;
height:10%;

}

td.c
{
width:10%;
height:90%;}

td.d
{
width:90%;
height:90%;}
ul {list-style-type:block;}
@font-face {
	font-family: 'font';
	src:url('fonts/font.otf');
	font-weight: normal;
	font-style: normal;
}

.cbp-vimenu {
	position: fixed;
	overflow: hidden;
	top: 0;
	left: 0;
	height: 100%;
	list-style-type: none;
	margin: 0;
	padding: 0;
	background: #1d1d1d;
	padding-top:12.9%;
	opacity:0.8;
}

.cbp-vimenu li a{
	
	display: block;
	text-indent:0em;
	height: 5em;
	width: 8em;
	line-height: 5em;
	text-align: center;
	color: #f1f1f1;
	position: relative;
	
	border-bottom: 1px solid rgba(255,255,255,0.05);
	-webkit-transition: background 0.1s ease-in-out;
	-moz-transition: background 0.1s ease-in-out;
	transition: background 0.1s ease-in-out;
}

.cbp-vimenu li a:hover, 
.cbp-vimenu li:first-child a{

	background: #F58E01;
	color: #fff;
}

/* class for current item */

.cbp-vimenu li.active 
{
	background: #f1f1f1;
	color: #222;

	
}
.cbp-vimenu li a:before {
	font-family: 'font';
	speak: none;
	font-style: normal;
	font-weight: normal;
	text-indent: 0em;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	font-size: 1.4em;
	-webkit-font-smoothing: antialiased;
}

.cbp-vimenu li a.icon-logo:before {
	content: "C";
	font-weight: 700;
	font-size: 300%;
	font-family: 'Lato', Calibri, Arial, sans-serif;
}

.icon-search:before {
	content: "\e004";
}

.icon-archive:before {
	content: "\e005";
}

.icon-download:before {
	content: "\e006";
}

.icon-location:before {
	content: "\e007";
}

.icon-images:before {
	content: "\e009";
}

.icon-pencil:before {
	content: "\e008";
}

/* Example for media query (depends on total height of menu) */
@media screen and (max-height: 34.9375em) { 

	.cbp-vimenu {
		font-size: 70%;
	}

}
/* **********************************************************************************************************************************  */
.cbp-hrmenu {
	width: 100%;
	margin-top: 2em;
	border-bottom: 4px solid #F58E01;
	padding-top:0;
	margin-top:0;
}

/* general ul style */
.cbp-hrmenu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

#gtc{
	color:#F58E01;
}
/* first level ul style */
.cbp-hrmenu > ul,
.cbp-hrmenu .cbp-hrsub-inner {
	width: 90%;
	max-width: 70em;
	margin: 0 auto;
	padding: 0 1.875em;
}

.cbp-hrmenu > ul > li {
	display: inline-block;
}

.cbp-hrmenu > ul > li > a {
	font-weight: 700;
	padding: 1em 2em;
	color: #999;
	display: inline-block;
}

.cbp-hrmenu > ul > li > a:hover {
	color: #F58E01;
}

.cbp-hrmenu > ul > li.cbp-hropen a,
.cbp-hrmenu > ul > li.cbp-hropen > a:hover {
	color: #fff;
	background: #F58E01;
}

/* sub-menu */
.cbp-hrmenu .cbp-hrsub {
	display: none;
	position: absolute;
	background: #F58E01;
	width: 90%;
	left: 9.5%;
}

.cbp-hropen .cbp-hrsub {
	display: block;
	padding-bottom: 3em;
}

.cbp-hrmenu .cbp-hrsub-inner > div {
	width: 33%;
	float: left;
	padding: 0 2em 0;
}

.cbp-hrmenu .cbp-hrsub-inner:before,
.cbp-hrmenu .cbp-hrsub-inner:after {
	content: " ";
	display: table;
}

.cbp-hrmenu .cbp-hrsub-inner:after {
	clear: both;
}

.cbp-hrmenu .cbp-hrsub-inner > div a {
	line-height: 2em;
}

.cbp-hrsub h4 {
	color: #ffee00;
	padding: 2em 0 0.6em;
	margin: 0;
	opacity:0.8;
	font-size: 160%;
	font-weight: 300;
}
/* ----------------------------------------  */
body{
 font-family:'font',Georgia,Cambria;
 }
 #imgheader{
 background-color:black;
 margin-left:10%;
 padding-bottom:0;
// position:fixed;
//z-index:19001;

 
 }
</style>
<link rel="stylesheet" type="text/css" href="css/vertical1.css" />
</head>
<body background="main.jpg">
<div id="imgheader" >
<img src="test3.jpg" width="1000px" height="100px"></div>
<table>
<tr>
<td class="a"></td>
<td class="b"> 
<div class="main">			
			<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="slide2.php" target="iframe_a">HOME</a>
							
						</li>
                                                <li>
							<a href="login.php">LOGIN</a>
							
						</li>
                                                <li>
							<a href="signup.php">SIGNUP</a>
							
						</li>
						
					</ul>
				</nav>
			</div>
			

<!--<a href="home1.php" target="iframe_a">HOME</a>
&nbsp&nbsp
<a href="login.php">LOGIN</a>
&nbsp&nbsp
<a href="signup.php">SIGNUP</a> -->

</td> 
</tr>
<tr>
<td class="c">
<ul class="cbp-vimenu">
				
				<li   class="active"><a href="mobiles.php" target="iframe_a">MOBILES</a></li>
				<li><a href="computers.php" target="iframe_a">COMPUTERS</a></li>
				<li><a href="cameras.php" target="iframe_a">CAMERAS</a></li>
				<li><a href="gaming.php" target="iframe_a">GAMING</a></li>
				
						<!-- Example for active item:
				<li class="cbp-vicurrent"><a href="#" class="icon-

pencil">Pencil</a></li>
				-->
			<!--</ul><ul ><li><a href="computers.php" target="iframe_a">Computers</a></li>
<li><a href="mobiles.php" target="iframe_a">Mobiles</a></li>
<li><a href="cameras.php" target="iframe_a">Cameras</a></li>
<li><a href="gaming.php" target="iframe_a">Gaming</a></li></ul>--></td>
<td class="d"><iframe src="slide2.php" name="iframe_a" frameborder='0' width="100%" height="100%">NO support</iframe></td>
</tr>
</table>
</body>
</html>

