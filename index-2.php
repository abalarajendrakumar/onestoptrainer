


<?php 

   session_start();

?>


<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 12:56:26 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>one stop trainer</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">

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
<body>

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
					<a href="index-2.html"><img src="image/blogo1.png" alt="logo"></a>
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
								
								
							

						
					

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#">
								<p>My Account</p></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></div>
									<div class="user-name">
										 <?= $_SESSION['username'] ?> 
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="#"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="index.php"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
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
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">
             <br>
             <div class="container" style="background-color: #dff0d8; padding:7px;">
              <div class="alert alert-success" style="text-align: center; font-family: serif;">
             <h4> Welcome  <strong><?= $_SESSION['username'] ?> !</strong></h4>
                     </div>
                
                </div>
             <br>
                
             <div class="container" >
             	 <h3 class="cd" style="text-align: center; font-family: nunito,helveticaneue,helvetica neue,Helvetica,Arial,sans-serif; ">Thank You <?= $_SESSION['username'] ?> ! for creating a profile with us we will contact you shortly</h3>
             <br>
            <h4 class="cd1" style="text-align: center; font-family: nunito,helveticaneue,helvetica neue,Helvetica,Arial,sans-serif;"> We will send conformation message to your email   address shortly</h4>
           <!-- Icon Box -->
           <!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							
							<div class="icon-box-check" style=" background-color: #2a41e8; "><i class="icon-material-outline-check"></i></div>
						</div>
					</div></div>
				
				
			</div>
				
             <div class="container">
			<h3 class="page-title">Search Results</h3>

			<div class="notify-box ">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div><br>
             <h3><b>Recent Jobs</b></h3>
			<div class="listings-container grid-layout margin-top-35">
				   
				<!-- Job Listing -->
				<a href="single.php" class="job-listing" style="text-decoration: none;">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
								<img src="image/tb1.png" alt="">
							</div>
                       
						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">TIB Academy<span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Trainer Wanted For Linux</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i>Bangalore India</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>	

				<!-- Job Listing -->
				<a href="single2.php" class="job-listing" style="text-decoration: none;">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
								<img src="image/tb1.png" alt="">
							</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">TIB Academy <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Want Trainer For Advance Java</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i>Bangalore India</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single4.php" class="job-listing" style="text-decoration: none;">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
								<img src="image/tb1.png" alt="">
							</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">TIB Academy <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Looking For SEO And Digital marketing Trainer</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i>Bangalore India</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				

				<!-- Job Listing -->
				<a href="single5.php" class="job-listing" style="text-decoration: none;">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
								<img src="image/tb1.png" alt="">
							</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">TIB Academy <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Trainer Wanted for Hadoop </h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> Bangalore India</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>


				

			</div>
               <div class="center" style="margin:auto; text-align: center;">
               	<a class="btn " href="#" style="width:120px; height:30px;  padding-top:5px;"><i class="icon-material-outline-power-settings-new"></i> Logout</a>
               </div>
			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20" style="margin:auto; text-align: center;">
				<div class="center" style="margin:auto; text-align: center;">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a  class="ripple-effect current-page">1</a></li>
						<li><a  class="ripple-effect ">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			</div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer -->
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Jn Global Solutions</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->
</div>
		</div>
	</div>
	<!-- Full Page Content / End -->
	<!-- Footer Middle Section / End -->
	

	

</div>
<!-- Wrapper / End -->

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

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>




</body>



</html>

