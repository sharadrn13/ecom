<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
       
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
         <link rel="stylesheet" type="text/css" href="css/headerimg.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.js"></script>
    </head>
    	<script src="modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.5);
			}
		</style>
        <script>
	function validatel()
	{
	var x = document.forms["login"]["username"].value;
	var y = document.forms["login"]["password"].value;
	
	if(x.length==0)
	{
	alert("Enter Username");
	return false;
	}
	if(y.length==0)
	{
	alert("Enter Password");
	return false;
	}}
	</script>
    </head>
    <body background="main.jpg">
        <div class="container">
        <header class="clearfix">
				<nav>
					<a href="home1.php" class="icon-arrow-left" data-info="home">Home</a>
				</nav>
		</header>	
        <h1>Login Please!!</h1>
        <div id="horizontalline">
        </div>
        

			
			<section class="main">
				<form id="login" class="form-5 clearfix" method="post" action="home.php" onsubmit="return validatel()">
 				    <p>
				        <input type="text" name="email" id="username" placeholder="E-mail">
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
				    <button type="submit" name="submit" >
				    	<i class="icon-arrow-right"></i>
				    	<span>Log in</span>
				    </button>     
				</form>
			</section>
			
        </div>
		                                  
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.placeholder.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>
        </div>
    </body>
</html>
