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
 

   @media(max-width:768px) {
   	#logo{
   		width:auto;

   	}
   #logo img{
   	width: 450px;
      height: 42px;
    
    }
 
  
   @media(max-width:480px) {
   #logo img {
height: 60px;
    width: auto;
     }
</style>
<style>
 table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family:nunito,helveticaneue,helvetica neue,Helvetica,Arial,sans-serif;
   font-size: 17px;
   text-align: left;
     } 
  th {
   background-color: #3a61d0;
   padding-left:10px;
   padding-right:10px;
   padding-top:5px;
   padding-bottom:5px;
   text-align: center;
    font-family:nunito,helveticaneue,helvetica neue,Helvetica,Arial,sans-serif;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}

  td{
  	padding:10px;
  	 font-family:nunito,helveticaneue,helvetica neue,Helvetica,Arial,sans-serif;

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

						<li><a href="contact.php">Contact</a>
							
								</li>
								
								
							

						<li><a href="register" class="current">Register/Login</a>
							
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
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title"><b>Dashboard Navigation</b></span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="admin.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							
							<li><a href="user.php"><i class="icon-material-outline-star-border"></i>User Details</a></li>
							
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									
									<li><a href="#">Manage Candidates</a></li>
									
								</ul>	
							</li>
							
						</ul>

						<ul data-submenu-title="Account">
							
							<li><a href="index.php"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Trainers Information</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="admin.php">Dashboard</a></li>
						<li>User-details</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
                         
				            <div class="table-responsive">
              <table class="table table-bordered table-hover  " id="dataTable" width="100%" cellspacing="0">
                
 <tr>

  <th>Full name</th> 
  
  <th>Email Address</th>
     <th>Age</th>
   <th>Mobile No</th>
  <th>Gender</th>
    
      <th>Current Location</th>
       <th>Working Location</th>

        <th>Country</th>
         <th>Work Experience</th>
         <th>Avaibility Time</th>
          <th>Education Qualification</th>
           <th>Expect In</th>
            <th>Key skills</th>
            <th>Language known</th>
           

 </tr>

 <?php
$conn = mysqli_connect("localhost", "root", "", "onestoptrainer1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT  uname,email, age,mobile, gender,  clocation, wlocation, country, work, tm, education, program, key1, known FROM register_login3";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["uname"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["age"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["clocation"] . "</td><td>" . $row["wlocation"] . "</td><td>" . $row["country"] . "</td><td>" . $row["work"] . "</td><td>" . $row["tm"] . "</td><td>" . $row["education"] . "</td><td>" . $row["program"] . "</td><td>" . $row["key1"] . "</td>
<td>" . $row["known"] . " </td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

              </table>
            </div>
			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Jn Globel Solutions</strong>. All Rights Reserved.
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
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


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

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-bookmarks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 12:57:44 GMT -->



<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Send Message</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Direct Message To Sindy</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="send-pm">
					<textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->

</html>