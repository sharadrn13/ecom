<html>
<style>
h1{
font-family:'font',Georgia,Cambria;

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
<?php
$mail=$_GET["email"];
?>
<body>
<h1>Please enter your message here.</h1>
<form method="get" action="sendmsg.php">
<TEXTAREA NAME="msg" 
   ROWS="3" COLS="25">
</TEXTAREA>
<?php
echo '<input type="text" name="email" value="'.$mail.'">';
?>
<input type="submit" value="send">
</form>
</body>
</html>