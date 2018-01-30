<?
session_start();
include("conn-web/cw.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Training & Education</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Training, Education" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	
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
	   		<h3 class="tittle">Homepage <i class="glyphicon glyphicon-stop"></i></h3>
         	<div class="banner">
                <div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						  <img src="images/1.jpg" class="img-responsive" alt="" />
						</li>
						<li>
							<img src="images/2.jpg" class="img-responsive" alt="" />
						</li>
						<li>
						 <img src="images/1.jpg" class="img-responsive" alt="" />						
						</li>
					</ul>
				</div>
					
	  			<script src="js/responsiveslides.min.js"></script>
				<script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider4").responsiveSlides({
				        auto: true,
				        pager:true,
				        nav:true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				</script>
		 		<div class="clearfix"> </div>
			    
			</div>
			<div class="clearfix"><br/></div>
			<div class="about-content">
				<h3 class="tittle">Welcome to site</h3>
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