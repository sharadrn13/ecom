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
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Responsive Full Width Grid</title>
		<meta name="description" content="Blueprint: Responsive Full Width Grid Layout" />
		<meta name="keywords" content="100% grid, layout, columns, images, thumbnails, responsive, full width grid, image grid, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-7243260-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Responsive Full Width Grid</h1>
				<nav>
					<a href="http://tympanus.net/Blueprints/SlidePushMenus/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<a href="http://tympanus.net/Blueprints/BackgroundSlideshow/" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a>
					<a href="http://tympanus.net/codrops/?p=14727" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
				</nav>
			</header>	
			<ul class="cbp-rfgrid">
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
				<li><a href="#"><img src="images/cat.jpg" /><div><h3>Felis catus</h3></div></a></li>
			</ul>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://tympanus.net/codrops/adpacks/csscustom.js"></script> 
		<script src="http://tympanus.net/codrops/wp-content/plugins/oiopub-direct/js.php?type=banner&align=center&zone=1"></script>
	</body>
</html>
