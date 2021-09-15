<!doctype html>
<html lang="en">


<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<style>
	#logo {
    display: inline-block;
    border-right: 1px solid #e0e0e0;
  
  }
   
   #logo img {
     height: 65px;
    width: auto;
    }



  @media(max-width:1240px) {
   #logo img {
     height: 50px;
    width:auto;
    }
 }

   @media(max-width:768px) {
   	#logo{
   		width:auto;

   	}
   #logo img{
   	width: 450px;
      height: 42px;
    
    }
 
  }
   @media(max-width:480px) {
   #logo img {
height: 60px;
    width: auto;
     }
 }
</style>
</head>

<body style="background-image: url('image/954.jpg'); background-size: cover; background-repeat: no-repeat; background-position:top;">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="image/blogo1.png" alt="logo"></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php" >Home</a>
							
						</li>

						<li><a href="career.php">Career</a></li>
							
								
								
								

						<li><a href="how.php">How it works</a>
							
						</li>

						<li><a href="contact.php">Contact</a>
							
								</li>
								
								
							

						<li><a href="register.php" class="current">Register/Login</a>
							
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>

</div>
<!--Tabs -->
<div class="container" style="margin-top:80px;">
	<div class="col-md-6 " style="margin:auto; background-color: white;">
	<div class="popup-tabs-container" >

			<!-- Login -->
			<div class="popup-tab-content" id="login" >
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="register.php" >Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" action="r1.php" id="login-form" style="padding-top: 30px;">
					<div class="col-md-11 input-with-icon-left" style="margin:auto;">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="username" id="emailaddress" placeholder="Username" required/>
					</div>

					<div class="col-md-11 input-with-icon-left" style="margin:auto;">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div><br>
					 <button class="button full-width button-sliding-icon ripple-effect" type="submit" name="login" form="login-form" style="width:200px; margin:auto;">Log In <i class="icon-material-outline-arrow-right-alt" ></i></button>
				</form>
				
				<!-- Button -->
				
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons" style="text-align: center; margin:auto;">
					
					<a class="btn btn-default"  href="register.php" style="text-align: center; margin:auto; padding:5px; width:210px; background-color:red; color:white;"> Register</a>
				</div>
			
	</div>



</div>
</div>
</div>
	</body>
	<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>
	</html>
	





