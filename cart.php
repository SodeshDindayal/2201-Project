<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");
require_once ("php/component2.php");


$db1 = new CreateDb("illustriousmarketing", "featuredproducts1");
$db2 = new CreateDb("illustriousmarketing", "featuredproducts2");
$db3 = new CreateDb("illustriousmarketing", "gaming");
$db4 = new CreateDb("illustriousmarketing", "fashion");
$db5 = new CreateDb("illustriousmarketing", "electronics");
$db6 = new CreateDb("illustriousmarketing", "sports");
$db7 = new CreateDb("illustriousmarketing", "furniture");



if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

?>

<!doctype html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Illustrious Marketing</title>
	
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cart.css">

	<!--Font-->
	<script src="https://kit.fontawesome.com/4f2c3df144.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
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
				  		<a class="nav-link" href="indexloginbuyer.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
				  		<a class="nav-link" href="CategoriesPage.php">Categories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
			    	</li>
				</ul>
				<div class="navbar-nav col-2">
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

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h3>My Cart</h3><hr>

                <div class="cart-content">
                    <?php
                        $total = 0;
                            if (isset($_SESSION['cart'])){
                                $product_id = array_column($_SESSION['cart'], 'product_id');

                                $result1 = $db1->getFeatured1();
                                    while ($row = mysqli_fetch_assoc($result1)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }

                                $result2 = $db2->getFeatured2();
                                    while ($row = mysqli_fetch_assoc($result2)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                                $result3 = $db3->getGaming();
                                    while ($row = mysqli_fetch_assoc($result3)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                                
                                $result4 = $db4->getFashion();
                                    while ($row = mysqli_fetch_assoc($result4)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                                
                                $result5 = $db5->getElectronics();
                                    while ($row = mysqli_fetch_assoc($result5)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                                
                                $result6 = $db6->getSports();
                                    while ($row = mysqli_fetch_assoc($result6)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                                
                                $result7 = $db7->getFurniture();
                                    while ($row = mysqli_fetch_assoc($result7)){
                                        foreach ($product_id as $id){
                                            if ($row['id'] == $id){
                                                cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                                $total = $total + (int)$row['product_price'];
                                            }
                                        }
                                    }
                            }
                            else{
                                echo "<h5>Cart is Empty</h5>";
                            }
                    ?>
               </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                                if (isset($_SESSION['cart'])){
                                    $count  = count($_SESSION['cart']);
                                    echo "<h6>Price ($count items)</h6>";
                                }
                                else{
                                    echo "<h6>Price (0 items)</h6>";
                                }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                              echo $total;
                             ?></h6>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div id="paypal-button-container"></div>
                            <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                            <script>
                                paypal.Buttons({
                                    style: {
                                    shape: 'rect',
                                    color: 'gold',
                                    layout: 'vertical',
                                    label: 'paypal',
                                },
                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: '1'
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(details) {
                                        alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                    });
                                }
                            }).render('#paypal-button-container');
                            </script>
                    </div>
            </div>
        </div> 
    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
