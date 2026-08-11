<!--REG NO: MF25266-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basket</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php session_start();
    require_once "./inc/functions.php";
    $mysqli = dbConnect();
    
    if(isset($_POST['remove'])){
        if($_GET['action']== 'remove'){
            foreach($_SESSION['cart'] as $key=> $val) {
                if($val["product_id"]==$_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                    // change this later use javascript to insert into element
                    //echo "<script>alert(\"Product has been removed\")</script>";
                    header("Location: Basket.php");
                }
            }
        }
    }

    // allow user to share item on insta
    if(isset($_POST['shareItem'])){
        header("Location: https://www.instagram.com");
    }
    
    ?>
    <!-- navigation bar-->
	<?php include('./inc/header.php'); ?>

    

    <?php 
         //update cart quantity functionality 
        if(isset($_POST['update-quant'])) {
            // continue with video

            // get product id
            $product_id = $_POST['product-id'];
            $quant = $_POST['quant'];

            foreach($_SESSION['cart'] as $key=> $val) {
                if($product_id == $val['product_id']) {
                    $_SESSION['cart'][$key]['quantity'] = $quant;
                }
            }
        
    }
    ?>

<!--user attempts to checkout-->

    <?php
        $user = userLoggedIn();

        
        if(isset($_GET['action']) && $_GET['action'] == "checkout" && isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'])){
                if($user){
                    header("Location:checkout.php");
                    unset($_SESSION['cart']);
                } else {
                    header("Location: SignUp.php?error=notLogged");
                    exit();
                }
            } 
        }
    
    ?>

    <!--item total-->

    <?php
        $item_total = 0;
    
    ?>

   

	
    <!--SECTION 1 IMG-->
    <!--Header image -->
    <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcmbsa5lwbzlCae5Z_B6O2c1WgsjB7DmBb-yyphw-F0Xkok-P4-->
    <div id="basket_header_con">
        <img src="images/OLD2.jpg" alt="JOLYNYE kujoh illustration">
    </div>
    <h1 id="basket_title">MY CART (<?php
			
			if(isset($_SESSION['cart'])){
				$item_count = count($_SESSION['cart']);
				echo $item_count;
			} else {
				echo "0";
			}
			
			?>)</h1>
    
    <a href="Merch.php" id="continueShoppingLink">Back to shopping &#8594;</a>
    <section id="basket_sec2">

        <!--container containing basket items-->
        <div id="basket_items_con">
            <?php 
            // if we have something in cart
            if (isset($_SESSION['cart']) && $item_count > 0) {
                $product_id = array_column($_SESSION['cart'], 'product_id');
                $products = getData();
                $quant = array();
                foreach($_SESSION['cart'] as $productDetail) {
                    $quant[$productDetail["product_id"]] = $productDetail["quantity"];
                }

                // place quantity 
                // match product to whatever is in cart
                foreach($products as $product){
                    if(in_array($product["ID"], $product_id)){
                        
                        cartProducts($product['Image'], $product['Name'], $product['Type'], number_format($product['Price'],2), $product["ID"], $quant[$product['ID']]);
                        $item_total += ((float)$product['Price'] * $quant[$product['ID']]);
                    }


                }

            } else{
                echo "<p id=\"emptyCart\">Nothing in cart yet...</p>";
            }

            
            
            
            ?>

        
        </div>
            
<!--order summary container-->
            <div id="order_summary">
                <h2>Order Summary</h2>
                <!--container of order summary details to be displayed with grid for content alignment-->
                    <div id="basket_order">
        <!--place item total-->
                            <div id="order_content">
                            <p >Item subtotal</p>
                            <p id="item_total" >£<?php echo number_format($item_total,2) ?></p>
                            <p >Delivery Option</p>
                            <select name="del_options" id="delivery_option">
                                <option value="3.50">Next Day: £3.50</option>
                                <option value="1.50">3 days: £1.50</option>
                                <option value="0">5 days: £0.00</option>
                            </select>
                            <p >Estimated Shipping</p>
                            <p class="order_prices">£5.00</p>
                            <p>Total</p>
                            <p id="basket_subtotal"></p>
                    </div>

                
                
                <div id="checkout_button">
                    <a href="Basket.php?action=checkout">Checkout</a>
                </div>
                
            </div>
        </div>
                

    </section>


   <!--add footer using php-->
   <?php include('./inc/footer.php'); ?>

   <script src="inc/basket.js"></script>
</body>