<?php  

session_start();
require_once('php/CreateDB.php');
require_once('php/component.php');

$database1=new CreateDB("illustriousmarketing", "featuredproducts1");
$database2=new CreateDB("illustriousmarketing", "featuredproducts2");
$database3=new CreateDB("illustriousmarketing", "gaming");
$database4=new CreateDB("illustriousmarketing", "fashion");
$database5=new CreateDB("illustriousmarketing", "electronics");
$database6=new CreateDB("illustriousmarketing", "sports");
$database7=new CreateDB("illustriousmarketing", "furniture");

if (isset($_POST['add'])){
	if(isset($_SESSION['cart'])){
		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if(in_array($_POST['product_id'], $item_array_id)){
			echo "<script>alert('product is already in the cart')</script>";
			echo "<script>window.location = 'indexloginbuyer.php'</script>";
		}else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

			$_SESSION['cart'][$count] = $item_array;
			//print_r($_SESSION['cart']);
        }

	}else{
	
		$item_array = array(
			'product_id' => $_POST['product_id']
		);

		$_SESSION['cart'][0] = $item_array;
		//print_r($_SESSION['cart']);
	}
	
}


if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	unset($_SESSION['firstname']);
	
	header("location: index.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Illustrious Marketing</title>
	
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">

	<!--Font-->
	<script src="https://kit.fontawesome.com/4f2c3df144.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-lg-2 col-xl-3 p-3">
					<div class="btn-group">
						<button class="btn border dropdown-toggle my-md-4 my-2 text-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GYD</button>
					</div>
				</div>
				<div class="col-md-5 col-sm-10 col-lg-5 col-xl-5 text-center p-3">
					<h2 class="my-md-3 site-title text-color">Illustrious Marketing</h2>
				</div>
				<div class="col-md-6 col-sm-12 text-center col-lg-5 text-right col-xl-4 text-right p-3">
					<p class="my-md-4 header-links">
						<a href="#" class="px-3"> Hello</a>
						<a href="#" class="px-1">Become a Seller</a>
						<a href="index.php?logout='1'" class="px-2">Sign Out</a>
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid p-0">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav col-10">
						<li class="nav-item active">
					  		<a class="nav-link" href="#indexloginbuyer.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
					  		<a class="nav-link" href="CategoriesPage.php">Categories</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
					  </li>
					</ul>
					<div class="navbar-nav col-2">
						<button type="button" class="mr-2 btn btn-outline-primary">	
							<i class="fas fa-search p-2"></i>
						</button>

						<a href="cart.php">
							<button type="button" class="mr-2 btn btn-outline-primary">
								<i class="fas fa-shopping-cart p-2"></i> Cart
								<?php
									if (isset($_SESSION['cart'])){
                           	 			$count = count($_SESSION['cart']);
                            			echo "<span id=\"cart_count\" class=\"text-danger bg-white\">$count</span>";
									}
									else{
                            			echo "<span id=\"cart_count\" class=\"text-danger bg-white\">0</span>";
                        			}
		                        ?>
							</button>
						</a>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--Header End-->

	<!--Start Main-->
	<main>	
	<!--Start Carousel Slider-->
	<div class="container-fluid p-0">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner p-0">
				<div class="carousel-item active">
					<img src="Assets/image1.jpg" class="d-block w-100" alt="...">
			  	</div>
			  	<div class="carousel-item">
					<img src="Assets/image2.jpg" class="d-block w-100" alt="...">
			  	</div>
			  	<div class="carousel-item">
					<img src="Assets/image3.jpg" class="d-block w-100" alt="...">
			  	</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			  	<span class="sr-only">next</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  	<span class="sr-only">prev</span>
			</a>
		</div>
	</div>
	<!--End Carousel Slide-->

	<!--Start Product Slider-->
	<div class="container-fluid p-0">
		<div class="featured-title pt-5 shadow p-5 mb-5 bg-white rounded">
			<h3>Featured</h3>
		</div>
		<div id="carouselproduct" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="row">
							<?php
								$result = $database1->getFeatured1();
								while($row = mysqli_fetch_assoc($result)){
									component($row['product_name'],$row['product_price'], $row['product_image'], $row['id']);
								}
							?>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="row">
							<?php
								$result = $database2->getFeatured2();
								while($row = mysqli_fetch_assoc($result)){
									component($row['product_name'],$row['product_price'], $row['product_image'], $row['id']);
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<a href="#carouselproduct" class="carousel-control-prev col-1" data-slide="prev">
				<span class="carousel-control-next-icon"></span>
			</a>
			<a href="#carouselproduct" class="carousel-control-next col-1" data-slide="next">
				<span class="carousel-control-prev-icon"></span>
			</a>
		</div>
	</div>
	<!--End Product Slider-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0">
				<div class="section2 shadow p-5 mb-4 bg-white rounded">
					<h3>Popular Categories</h3>
				</div>
			</div>
		</div>
		<div id="section3" class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 text-center p-5">
				<img src="Assets/image9.jpg" class="rounded-circle img-fluid" id="image-shadow" width="200px" 50% 50%>
				<div>
					<p>
						<h5>Headphones</h5>
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 text-center p-5">
				<img src="Assets/image4.jpg" class="rounded-circle img-fluid" id="image-shadow" width="200px" 50% 50%>
				<div>
					<p>
						<h5>Gaming</h5>
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 text-center p-5">
				<img src="Assets/image8.jpg" class="rounded-circle img-fluid" id="image-shadow" width="200px" 50% 50%>
				<div>
					<p>
						<h5>Sports</h5>
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 text-center p-5">
				<img src="Assets/image5.jpg" class="rounded-circle img-fluid" id="image-shadow" width="200px" 50% 50%>
				<div>
					<p>
						<h5>Fashion</h5>
					</p>
				</div>
			</div>
		</div>
	</div>
	</main>

	<footer>
		<div class="footer-top mt-5 shadow mb-3 bg-black rounded">
			<div id="footer-header" class="container-fluid">
				<div class="row">
					<div class="col-4 text-center pt-3">
						<h3><i class="fas fa-tag p-2"></i>Prices</h3>
						<p>Our prices are competitive </p>
					</div>
					<div class="col-4 text-center pt-3">
						<h3><i class="footer-star fas fa-star p-2"></i>Top Rated</h3>
						<p>Products provided by top-rated suppliers</p>
					</div>
					<div class="col-4 text-center pt-3">
						<h3><i class="fas fa-credit-card p-2"></i>Secure Payment</h3>
						<p>Secure Online Payment</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-mid pt-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4 pt-5">
						<h3 class="text-center">Contact Us</h3>
						<p class="text-center"><i class="fas fa-envelope p-2"></i>illustriousmarketing@gmail.com</p>
						<p class="text-center"><i class="fas fa-phone-alt p-2"></i>600-1344</p>
					</div>
					<div class="col-4 pt-5 text-center">
						<h3>Follow Us</h3>
						<a href="#" class="footer-links">
							<p><i class="fab fa-facebook pr-2"></i>Facebook</p>
						</a>
						<a href="#" class="footer-links">
							<p><i class="fab fa-instagram pr-2"></i>Instagram</p>
						</a>						
					</div>
					<div class="col-4 pt-5 text-center">
						<h3>Follow Us</h3>
						<a href="#" class="footer-links">
							<p><i class="fab fa-facebook"></i>  Facebook</p>
						</a>

						<a href="#" class="footer-links">
							<p><i class="fab fa-instagram"></i>  Instagram</p>
						</a>						
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center pt-5">
						<h6>&copy; Copyright illustrious Marketing 2020</h6>
					</div>
				</div> 
			</div>
		</div>
	</footer>
	

	<!-- Start Scripting Files-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
	<script src="js/scripts.js"></script>
	<!--End Scripting Files-->
</body>
</html>

