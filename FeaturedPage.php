<?php  

session_start();
require_once('php/CreateDB.php');
require_once('php/component.php');

$database=new CreateDB("illustriousmarketing", "producttb");
$database1=new CreateDB("illustriousmarketing", "featuredproducts1");
$database2=new CreateDB("illustriousmarketing", "featuredproducts2");


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
			print_r($_SESSION['cart']);
        }

	}else{
	
		$item_array = array(
			'product_id' => $_POST['product_id']
		);

		$_SESSION['cart'][0] = $item_array;
		print_r($_SESSION['cart']);
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
						<li class="nav-item">
					  		<a class="nav-link" href="indexloginbuyer.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
					  		<a class="nav-link" href="FeaturedPage.php">Featured</a>
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