<!DOCTYPE html>
<html>

<!-- Mirrored from codexlayer.com/html/comida_punto/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 09:50:55 GMT -->
<head>
<?php
	include('layout/head.php');
?>

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
			<h1>Menu</h1>
			<ul class="page-breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li>Menu</li>
				<li>Our Menus</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Menu Section Six -->
	<?php 
		include('php/connection.php');
		$sql = "SELECT * FROM categories order by id asc";
		$result = $conn->query($sql);
        if ($result->num_rows > 0) {
      		while($row = $result->fetch_assoc()) {
	?>
	<section class="menu-section-six">
		<div class="auto-container">
			<!-- Sec Title -->
			
			<div class="sec-title centered">
				<h2><?php echo $row['category']; ?></h2>
			</div>
			<div class="row clearfix">
				
				<!-- Menu Block Eight -->
				<?php 
					$sql = "SELECT * FROM food_items where category_id=".$row['id'];
          			$data = $conn->query($sql);
						if($data->num_rows > 0) {
                      		while($row = $data->fetch_assoc()) {
				?>
				<div class="menu-block-eight col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="menu-image">
								<?php
									if(!is_null($row['image'])) {
								?>
								<a href="#"><img src="images/resource/menu-32.jpg" alt="" /></a>
								<?php 
									}
								?>
							</div>
							<div class="price"><?php echo $row['price']; ?>/-</div>
							<h4><a href="reservation.html"><?php echo $row['title']; ?></a></h4>
							<?php
								if(!is_null($row['description'])) {
							?>
							<div class="text">Lorem ipsum dolor sit amet consectetur.</div>
							<?php 
								}
							?>
						</div>
					</div>
				</div>
				<?php }}?>
			</div>
		</div>
	</section>

	<?php }}?>
	<!-- End Menu Section Six -->
	
	<!-- Menu Section Six -->
	
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
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from codexlayer.com/html/comida_punto/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 09:51:02 GMT -->
</html>