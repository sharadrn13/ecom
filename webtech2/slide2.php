<html>
<head>
<title>Fade In-Out - Auto Play Slide Show</title>
<script type="text/javascript" src="jquery-1.9.1.js"></script>
<style>
#show-case
{
  
//padding-top:40px;
//padding-bottom:40px;

margin-right:70px;
    box-shadow:1px 1px 5px 2px #F58E01;
    border-radius:1px;
    height:350px;
    margin:1px auto;
    width:900px;
     
}
img
{
     
position:absolute;
       width:900px;
       height:350px;
}

</style>
</head>
<body background="header_bg.jpg">


 <div id="show-case">
    <img class="img" src="for_ipad2_case_634589691363178332_2.jpg">
    <img class="img" src="20130318-191056-20130315-215515-laptop-emis.jpg" >
   
    <img class="img" src="HTCone1-All-view.jpg">

    <img class="img" src="922938_620005251361946_1248353466_n.jpg">
    </div>

<script>
$(document).ready(function()
{
    $('.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(2000).next(".img").fadeIn(2000).end().appendTo("#show-case")
}, 2000);
       
});
</script>
</body>
</html>