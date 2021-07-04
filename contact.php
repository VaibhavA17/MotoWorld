<?php include 'sendemail.php'; ?>

<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Contact Us - Motoworld Tour N Travel</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>


	.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: white;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

option{
	color: black;
}
</style>
	</head>
<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->


<!-- main-menu Start -->
<header class="top-area">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="logo">
							<a href="index.html">
								Manali Ladakh<span> Moto World</span>
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">
						
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse">		  
								<ul class="nav navbar-nav navbar-right">
									<li class=""><a href="index.html">home</a></li>
									<li class="dropdown">
										<a href="transport.html" class="dropdown-toggle" data-toggle="dropdown">Transportation<b class="caret"></b></a>
										<ul class="dropdown-menu">
										<li><a href="destinations.html">Destinations</a></li>
										<li><a href="transports.html">Transports</a></li>
										</ul>
									</li>
									<li class=""><a href="packages.html"> Packages </a></li>
									<li class=""><a href="specials.html">Gypsy World</a></li>
										<li class=""><a href="about-us.html">About Us</a></li>
									<li class=""><a href="contact.php">Contact Us </a></li>
									<a href="tel:+919418019234"><li>
										<button class="book-btn">Call Now
										</button>
									</li><!--/.project-btn--> </a>
									</li><!--/.project-btn--> 
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->

	</header><!-- /.top-area-->
	<!-- main-menu End -->

		
	<br><br>
<!--travel-box start-->
<br>
<br>
<br>
<br>
<br>

	<div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right ">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 98166 99234</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <form method="post" action="">
            <div class="app-form-group">
			<input type="text" class="app-form-control" placeholder="Enter Name" name="name">
		</div>
            <div class="app-form-group">
			<input type="email" class="app-form-control"  placeholder="Enter Email" name="email">
    </div>
             <div class="app-form-group">
			 <input type="text" class="app-form-control" placeholder="Enter Contact No" name="contact">
    </div>
            <div class="app-form-group message">
			<textarea class="app-form-control" rows="3" placeholder="Message" name="message"></textarea>
	</div>
            <div class="app-form-group buttons">
            
              <button class="app-form-button" type="submit" name="submit">SEND</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Join Manali Ladakh Motoworld Tour N Travel

					</h2>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										<img src="assets/images/home/logo.png">
									</a>
									
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Menu</h2>
								<div class="single-footer-txt">
									<p><a href="index.html">home</a></p>
									<p><a href="destinations.html">destinations</a></p>
									<p><a href="transports.html">Transports</a></p>
									<p><a href="packages.html">Packages</a></p>
									<p><a href="specials.html">Gypsy World</a></p>
								
									<p><a href="contact.php">contact us</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p><a href="destinations.html#shimla">Shimla</a></p>
									<p><a href="destinations.html#Leh">Ladakh</a></p>
									<p><a href="destinations.html#manali">Manali</a></p>
									<p><a href="destinations.html#dharamshala">Dharamshala</a></p>
									<p><a href="destinations.html#spiti">Spiti Valley</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+91 98166 99234</p>
									<p>+91 94180 19234</p>
									<p>+91 70180 48681</p>
									<p class="foot-email"><a href="#">info@motoworld.com</a></p>
									<p>Gompa Road Manali, Near ISBT Manali Teh, Distt, </p>
									<p>Manali, Himachal Pradesh - 175131</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="https://www.facebook.com/pages/category/Local-Business/Manali-ladakh-moto-world-928712053870168/" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="https://www.linkedin.com/in/manali-ladakh-3358931a1" target="_blank" class="foot-icon-bg-2"><i class="fa fa-linkedin"></i></a></li>
		                <li><a href="  https://jsdl.in/DT-99HLQXG8BS9" target="_blank" class="foot-icon-bg-3"><i class="fa fa-phone"></i></a></li>
		        	</ul>
		        	<p>&copy; 2021 <a href="#">ManaliladakhTNT</a>. All Right Reserved
		        		<br>
		        		Designed and Developed By <a href="https://webpaage.in">Webpaage Tech.</a>
		        	</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->


		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>
		
		<script type="text/javascript">
    		$('ul.nav li.dropdown').hover(function() {
    		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    		}, function() {
    		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    		});
		</script>


	</body>

</html>


<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
if($name=='' || $email=='' || $contact=='' || $message==''){
	echo "</script>alert('All fields are required !')</script>";
} else {

$from       = "Manali Ladakh Moto World.";
$webmaster  = "info@manaliladakhmotoworld.com"; //It's web master mail info@example.com
$to         = "manaliladakhmotoworld@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From Manali Ladakh Moto World.";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Phone : ". $_POST['contact'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('index.html?sent=Your Form Has been Submited','_self')</script>";
}
}

?>