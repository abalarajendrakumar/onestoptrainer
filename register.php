
<!doctype html>
<html lang="en">

<head>

<!-- Basic Page Needs
================================================== -->
<title>One stop trainer</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

<body style="background-image: url('image/954.jpg'); background-size: cover; background-repeat: no-repeat; background-position:right;" >

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
					<a href="index-2.html"><img src="image/blogo1.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php" >Home</a>
							
						</li>

						<li><a href="career.php">Career</a></li>
							
								
								
								

						<li><a href="how.php">How it works</a>
							
						</li>

						<li><a href="contact.php"  >Contact</a>
							
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
	<div class="col-md-8 " style="margin:auto; background-color: white;">
	
			<!-- Register -->
			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Let's create your account!</h3>
				</div>

				<!-- Account Type -->
				
				<!-- Form -->
				<form method="post" action="r2.php" id="register-account-form" name="form1-register" >
					<div class="row">
						<div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>User name </b></h5>
						<input type="text" class="input-text with-border" name="uname" id="emailaddress-register1" placeholder="User name" required/>
					</div>
                     </div>
                     <div class="col-md-6">
					<div class="input-with-icon-left">
					<h5><b>Email </b></h5>
						<input type="text" class="input-text with-border1" name="email" id="emailaddress-register" placeholder="Email Address" required/>
					</div></div>
</div>

				
<div class="row">
	                  <div class="col-md-6">
					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<h5><b>Password</b></h5>
						<input type="password" class="input-text with-border2" name="pass" id="password-register" placeholder="Password" required/>
					</div>
</div>
                           <div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Repeat-password</b></h5>
						<input type="password" class="input-text with-border3" name="repass" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
				</div></div>
				<div class="row">
					<div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Age</b></h5>
						<input type="number" class="input-text with-border4" name="age" id="password-repeat-register1" placeholder="Age" required/>
					</div>
				</div>
	                  <div class="col-md-6">
					<div class="input-with-icon-left"  data-tippy-placement="bottom">
						
						<h5><b>Gender</b></h5>
						<select name="gender" class="form-control"  required style="height:50px; width:330px;">
							 <option value="">Select Gender</option>
						<option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Transgender">Transgender</option>
      </select>
					</div>
</div>
                           
			</div>
			<br><hr>
			<br>
				<div class="row ">
					 
	                  <div class="col-md-6">
					<div class="input-with-icon-left"  data-tippy-placement="bottom">
						<h5><b>Current Location </b></h5>
						<div class="input-with-icon">
											
												<input type="text" id="autocomplete-input6" name="clocation" class="with-border"  placeholder="Current location">
											
											
										</div>
						
					</div>
</div>

<div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Working Location </b></h5>
						
						<div class="input-with-icon">
										
												<input type="text" id="autocomplete-input7" class="with-border"  name="wlocation"   placeholder="Working Location" >
										
											
										</div>
	
					</div>
				</div>
                          </div>
				<div class="row">
	                  <div class="col-md-6">
					<div class="input-with-icon-left"  data-tippy-placement="bottom">
						<h5><b>Mobile Number</b></h5>
						<input type="number" class="input-text with-border" name="mobile" id="password-register4" placeholder="Mobile Number" required/>
					</div>
</div>
                           <div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Country</b></h5>
						<input type="text" class="input-text with-border" name="country" id="password-repeat-register5" placeholder="Country" required/>
					</div>
				</div></div>
				<div class="row">
	                  <div class="col-md-6">
					<div class="input-with-icon-left"  data-tippy-placement="bottom">
						
						<h5><b>Work Experience</b></h5>
						<select name="work" class="form-control" required style="height:50px; width:300px;">
						 <option value="">Select Work Experience</option>
          <option value="0-1 years">0-1 years</option>
          <option value="2-3 years">2-3 years</option>
          <option value="4-5 years">4-5 years</option>
          <option value="6-7 years">6-7 years</option>
          <option value="8-9 years">8-9 years</option>
          <option value="10 or more years">10 or more years</option>
				</select>	
					</div>
</div>
                           <div class="col-md-6">
					<div class="input-with-icon-left">
					<h5><b>Avability Time</b></h5>
						<input type="time" class="input-text with-border7" name="tm" id="time"  required/>
					</div>
				</div></div>
				<br><hr>
			<br>
				<div class="row">
						<div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Educational Qualification </b></h5>
						<input type="text" class="input-text with-border8" name="education" id="emailaddress-register7" placeholder="Educational Qualification" required/>
					</div>
                     </div>
                     <div class="col-md-6">
					<div class="input-with-icon-left">
						
						<h5><b>Job Category </b></h5>
											<select name="program" class="form-control"  required style="height:50px; width:330px;">
												<option value="">Select Technologies</option>
						<option value="Front-End Technologies">Front-End Technologies</option>
          <option value="Back-end Technologies">Back-end Technologies</option>
          <option value="Mobile App Technologies">Mobile App Technologies</option>
          <option value="BI Technologies">BI Technologies</option>
          <option value="Testing Technologie">Testing Technologie</option>
          <option value="Data Analytics Technologies">Data Analytics Technologies</option>
          
          <option value="Cloud based Technologies">Cloud based Technologies</option>
    
          <option value="Scripting Technologies">Scripting Technologies</option>
      </select>
					</div></div>
					</div>
					<div class="row ">
					 
	                  <div class="col-md-6">
					<div class="input-with-icon-left"  data-tippy-placement="bottom">
						<h5><b>Key Skills</b></h5>
						<div class="input-with-icon">
											
												<input  name="key1" class="with-border" required placeholder="Key Skills">
											
											
										</div>
										
						
					</div>
</div>

<div class="col-md-6">
					<div class="input-with-icon-left">
						<h5><b>Language preferance</b></h5>
						
						<div class="input-with-icon">
											
											<select  name="known" class="form-control"  required  style="height:50px; width:330px;">
  <option value="" >Select language(use crtl for multiple language)</option>
  <option value="english">English</option>
  <option value="hindi">Hindi</option>
  <option value="tamil">Tamil</option>
  <option value="kanadam">kanadam</option>
   <option value="telugu">Telugu</option>
</select>
											
											
										</div>
	
					</div>
				</div>
                          </div>
				
				<!-- Button -->
				<div class="cent" style="margin:auto; text-align: center;">
				<button class="margin-top-10 button  button-sliding-icon ripple-effect" name="register" type="submit" form="register-account-form" style="text-align: center; margin:auto; width:180px;">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				</div>
                    
                  
                  <div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons" style="text-align: center; margin:auto;">
					
					<a class="btn btn-default"  href="login.php" style="text-align: center; margin:auto; padding:5px; width:210px; background-color:red; color:white;"> LOGIN</a>
				</div>
			
	


				</form>
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
	





