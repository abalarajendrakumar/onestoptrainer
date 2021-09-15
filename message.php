<?php
if (isset($_FILES) && (bool) $_FILES) {

    $allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png");

    $files = array();
    foreach ($_FILES as $name => $file) {
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if (!in_array($ext, $allowedExtensions)) {
            die("File $file_name has the extensions $ext which is not allowed");
        }
        array_push($files, $file);
    }

    // email fields: to, from, subject, and so on
    $from = $_POST['email'];
    $to = "abalakumar.km@gmail.com";
    $subject=' Quick Trainer  details ';
     $name=$_POST['name'];
   $programming_languages=$_POST['programming_languages'];
     $email=$_POST['email'];
   
    $experience=$_POST['experience'];
    $mobile=$_POST['mobile'];
    $additional_information=$_POST['additional_information'];
    $message="Name :".$name."\n"."email:".$email."\n"."subject:"."\n\n"."Name Of the candidate:".$name."\n"."Mobile number:".$mobile."\n"."email Address:".$email."\n"."Programming skills/ Area of Interest:".$programming_languages."\n"."year of experience:".$experience."\n"."Additional Information:".$additional_information."\n";
    $headers="From: ".$email;

   

    // boundary 
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    // multipart boundary 
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    // send

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        echo "<p>mail sent to $to!</p>";
    } else {
        echo "<p>mail could not be sent!</p>";
    }
}
?>

















<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 12:56:26 GMT -->
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
	.d3{
		box-shadow: 0 2px 12px rgba(0,0,0,.12);
		padding:20px;
	}
	.pt1{
		font-size:14px;
	}

	.single-page-header {
    margin-bottom: 65px;
    padding: 60px 0;
    position: relative;
}
  .single-page-header:after, .single-page-header:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right,rgba(247,247,247,1) 50%,rgba(247,247,247,0.8) 70%,rgba(247,247,247,0.8) 90%);
}

.single-page-header .container {
    z-index: 100;
    position: relative;
}
@media (min-width: 1240px)
.container {
    max-width: 1090px;
}
@media (min-width: 992px)
.container {
    max-width: 960px;
}
@media (min-width: 768px)
.container {
    max-width: 720px;
}

@media (min-width: 576px)
.container {
    max-width: 540px;
}


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

                        <li><a href="index.php" class="current" >Home</a>
                            
                        </li>

                        <li><a href="career.php" >Career</a></li>
                            
                                
                                
                                

                        <li><a href="how.php">How it works</a>
                            
                        </li>

                        <li><a href="contact.php">Contact</a>
                            
                                </li>
                                
                                
                            

                        <li><a href="register.php">Register/Login</a>
                            
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

<body>
  <br><br>
<div class="container" style="margin-top: 30px;">
  <div class="cv" style="margin:auto; text-align: center;">
    <div class="icon-box" style="height:60px;">
          <!-- Icon -->
          <div class="icon-box-circle" >
            <div class="icon-box-circle-inner" >
              
              <div class="icon-box-check" style=" background-color: green;  ">
                <i class="icon-material-outline-check" style=" font-weight: bold;  "></i></div>
            </div>
          </div></div>
         
  <div class="alert alert-success">
  <strong>Sent!</strong> Your message sent successfully
</div>
<div class="social-login-separator"><span>or</span></div>
        <div class="social-login-buttons" style="text-align: center; margin:auto;">
          
          <a class="btn btn-default" type="button" href="index.php" style="text-align: center; margin:auto; padding:5px; width:210px; background-color:red; color:white;"> Back to home</a>
        </div>
</div>
</div>
</body>
</html>
