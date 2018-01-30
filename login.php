<?
include("conn-web/cw.php");

$errusererror="";
if(isset($_REQUEST['submit_form']))
{
	$loginusername=$_REQUEST['username'];
	$loginpassword=$_REQUEST['password'];

	$loginqry=mysql_query("select * from users where username='$loginusername' and password='$loginpassword'");
	$loginrow=mysql_fetch_array($loginqry);
	

	if($loginrow!=null)
	{
		if ($loginusername==$loginrow['username'] &&  $loginpassword==$loginrow['password'])
		{
			$_SESSION['userName']=$loginrow['username'];
			$_SESSION['name']=$loginrow['name'];
			header("location:login.php");
		}
		else
		{
			$errusererror="Invalid Login ID or Password";
		}
	}
	else
	{
		$errusererror="Invalid Login ID or Password";
	}
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
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
			<?php if ($_SESSION['userName']!="") {?>
			<div class="col-md-6 log">
				<h3 class="tittle">Welcome <?php echo ucfirst($_SESSION['name']);?><i class="glyphicon glyphicon-lock"></i></h3>
				<p>Welcome to our site.</p>
				<p>Having hands on experience in creating innovative designs, I do offer design 
					solutions which harness the new possibilities of web based communication. 
					<label>I do specialize in all aspects of website designing,Nam libero tempore,aspects of website designing cum soluta nobis est eligendi  theme development,  
				possimus omnis dolor repellendus.Nam libero tempore, cum soluta nobis est eligendi  voluptatum...</label></p>
				<a href="logout.php">Logout</a>
			</div>
			<?php } else {?>
			<div class="col-md-6 log">
				<h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
				<p>Welcome, please enter the following to continue.</p>
				<p class="text-danger"><?php echo $errusererror;?></p>
				<form name="login_form" action="login.php" method="post">
				 <h5>User Name:</h5>	
				 <input type="text" name="username" value="">
				 <h5>Password:</h5>
				 <input type="password" name="password" value="">					
				 <input type="submit" name="submit_form" value="Login">
				</form>
			</div>
			<?php }?>
			<div class="clearfix"> </div>   	
		   
		</div>
    	<div class="clearfix"> </div>
	    <?php include("footer.php");?>
	</div>
</div>
</body>
</html>