<?
session_start();
include("conn-web/cw.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="About Us" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
<?php include("top.php");?>
<div class="full">

	<div class="col-md-12 main">
	
		<div class="grid-section">
	   		<h3 class="tittle">About Us <i class="glyphicon glyphicon-user"></i></h3>
         	<div class="about-content">
				<p>Having hands on experience in creating innovative designs, I do offer design 
					solutions which harness the new possibilities of web based communication. 
					<label>I do specialize in all aspects of website designing,Nam libero tempore,aspects of website designing cum soluta nobis est eligendi  theme development,  
				possimus omnis dolor repellendus.Nam libero tempore, cum soluta nobis est eligendi  voluptatum...</label></p>
				<div class="clearfix"></div>
				<p class="nam">Nam libero tempore, cum soluta nobis est eligendi 
					optio cumque nihil impedit quo minus id quod maxime placeat facere 
					possimus, omnis voluptas assumenda est, omnis dolor repellendus.
					Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna  et molestiae non recusandae.</p>
				
			</div>
			<div class="clearfix"> </div>   	
		   
		</div>
    	<div class="clearfix"> </div>
	    <?php include("footer.php");?>
	</div>
</div>
</body>
</html>