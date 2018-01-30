<div class="h-top" id="home">
	<div class="top-header">
		<ul class="cl-effect-16 top-nag">
			<li><a>Training & Education</a></li> 
			<li><a href="index.php" data-hover="Home">Home</a></li> 
			<li><a href="about.php" data-hover="About Us">About Us</a></li>
			<li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
			<?php if ($_SESSION['userName']!="") {?>
			<li><a href="logout.php" data-hover="Logout">Logout</a></li>
			<?php }else {?>
			<li><a href="login.php" data-hover="Login">Login</a></li>
			<?php }?>
			<li><a href="contact.php" data-hover="Contact">Contact</a></li>
		</ul>
		<div class="search-box">
	    	<div class="b-search">
	    		<?php if ($_SESSION['userName']!="") {?>
	    		<p>Logged in as : <?php echo ucfirst($_SESSION['name']);?></p>
				<?php }?>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>