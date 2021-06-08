<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>  Restaurant  </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/mint.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="takeaway.php">Takeaway</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
						<?php 
							if(isset($_SESSION['user'])){

							}else{					
						?>
						<li class="nav-item"><a class="nav-link" href="Login_v20/login.php">Login</a></li>
						<?php 
							}
						?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/j1.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>  Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant  <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#  ">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/j2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>  Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/j3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>  Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/j4.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>  Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/j5.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>  Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>  Restaurant  </span></h1>
						<p>  Restauarant is a bench mark for Taste & Hygiene. We offer best quality food with premium   . Trending Takeaway service is also available here.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#  ">Book a Order Now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="padding-left : 130px">
					<img src="images/p2.jpg" alt="" class="img-fluid" height="82%" width="82%">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						Best Food.
					</p>
					<span class="lead">  Restaurant    </span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->

	<!-- Start Menu -->
	<div class="menu-box" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						<p>Have a look at our special and delicious food dishes.</p>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">

				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
                                <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 1") or die(mysqli_error($con));
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 3");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 5");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
					        	</div>
					        	<div class="row">
					        	    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 7");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 8");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 20");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
					        	</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Menu -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							97239 12479
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							restaurant@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							  New City Light Road, Surat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3>Contact information</h3>
					<p class="lead"> New City Light Road, Surat.</p>
					<p class="lead"><a href="tel:97239 12479">97239 12479</a></p>
					<p><a href="mailto:restaurant@gmail.com"> restaurant@gmail.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">   Timing :</span> 8AM to 11PM</p>
					<p><span class="text-color">Restaurant (Takeaway) : </span> 10:30AM - 3:30PM, 7PM - 11PM</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Rights Reserved. &copy; 2021 <a href="./index.php"></p>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
