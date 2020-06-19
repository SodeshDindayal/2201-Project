<?php

function component1($productname, $productprice, $productimage){
    $element = "
    
    <div class=\"col-md-4 pt-md-2 col-lg-3 pt-lg-2 col-xl-2 pt-2 mb-3\">
								<form action=\"index.php\" method=\"post\">
									<div class=\"card shadow\">
										<div>
											<img src=\"$productimage\" id=\"CardImage\"class=\"img-fluid card-img-top\" alt=\"Product1\">
										</div>
										<div class=\"card-body\">
						  					<h5 class=\"card-title\">$productname</h5>
											<h6>
												<i class=\"product-star fas fa-star\" style=\"color: #4476e1\"></i>
												<i class=\"product-star fas fa-star\" style=\"color: #4476e1\"></i>
												<i class=\"product-star fas fa-star\" style=\"color: #4476e1\"></i>
												<i class=\"product-star fas fa-star\" style=\"color: #4476e1\"></i>
												<i class=\"product-star far fa-star\" style=\"color: #4476e1\"></i>
											</h6>
						  					<p class=\"card-text\">
											  Lorem ipsum dolor sit amet.
											</p>
											<h5>
												<span class=\"price text-center\">$$productprice</span>
											</h5>
						  					<button type=\"submit\" class=\"btn btn-danger btn p-1\" name=\"add\"><i class=\"fas fa-shopping-cart\"></i>  Add to Cart</button>
										</div>
									</div>
								</form>
							</div>

    ";
    echo $element;
}

function cartElement1($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded p-0\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Illustrious Marketing</small><br>
                                <small class=\"text-secondary\">Condition: New</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
?>