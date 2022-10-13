<!DOCTYPE html>
<html>

<!-- Mirrored from codexlayer.com/html/comida_punto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 09:51:40 GMT -->
<head>
<meta charset="utf-8">
<title>Comida Restaurant HTML-5 Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;family=Lato:wght@100;300;400;700;900&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
    <?php
    	include('layout/header.php');
    ?>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/10.jpg)">
    	<div class="auto-container">
			<h1>Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Page Info Section -->
	<section class="contact-page-info-section">
		<div class="auto-container">
			<!-- Contact Info Boxed -->
			<div class="contact-info-boxed">
				<div class="row clearfix">
					
					<!-- Info Box -->
					<div class="info-box col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<span class="icon flaticon-phone-call"></span>
								<h4>Book a table</h4>
								<ul>
									<li>Phone : <a href="tel:+101-987-567-234">+101 987 567 234</a></li>
									<li>Fax : <a href="tel:+101-678-123-987">+101 678 123 987</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- Info Box -->
					<div class="info-box col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<span class="icon flaticon-email"></span>
								<h4>E-mail Us</h4>
								<ul>
									<li>Support : <a href="mailto:goldenspoon@gmail.com">goldenspoon@gmail.com</a></li>
									<li>Sales : <a href="mailto:goldenspoon@gmail.com">goldenspoon@gmail.com</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- Info Box -->
					<div class="info-box col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<span class="icon flaticon-placeholder"></span>
								<h4>Our Location</h4>
								<ul>
									<li>22 Alnahas Building,  AlBahr St, Tanta Al-Gharbia Governorate</li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Contact Page Info Section -->
	
	<!-- Contact Page Form Section -->
	<section class="contact-page-form-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Reservation</div>
							<h2>Book Your Table</h2>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="https://codexlayer.com/html/comida_punto/sendemail.php" id="contact-form">
								<div class="row clearfix">
								
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" placeholder="Name" required="">
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Email" required="">
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input type="text" name="subject" placeholder="Subject" required="">
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Additional Information *"></textarea>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Book Now</span></button>
									</div>
									
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column" style="background-image: url(images/background/reserve-info.jpg)">
						<!-- Sec Title -->
						<div class="sec-title light centered">
							<div class="title">Reservation</div>
							<h2>Book Your Table</h2>
						</div>
						<ul class="table-list">
							<li>Mon - Tue<span>07:00AM - 2:00AM</span></li>
							<li>Wed - Thur<span>06:00AM - 1:00AM</span></li>
							<li>Friday<span>Closed</span></li>
							<li>Sat - Sun<span>07:30AM - 4:00AM</span></li>
						</ul>
						<div class="btn-box text-center">
							<a class="phone" href="tel:+101-987-567-234">+101 987 567 234</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Form Section -->
	
	<!-- Gallery Section -->
	<section class="gallery-section">
		<div class="outer-container">
			<div class="gallery-carousel owl-carousel owl-theme">
			
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/1.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/2.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/3.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/4.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/5.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/6.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/7.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/7.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/8.jpg" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<ul class="options">
											<li><a href="images/gallery/8.jpg" class="lightbox-image" data-fancybox="gallery-1" data-caption=""><span class="fa fa-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Gallery Section -->
	
	<!-- Main Footer -->
   	<?php
    	include('layout/footer.php');
    ?>
	<!-- End Main Footer -->
	
</div>
<!-- End pagewrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="https://codexlayer.com/html/comida_punto/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from codexlayer.com/html/comida_punto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 09:51:40 GMT -->
</html>