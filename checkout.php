<!--REG NO: MF25266-->
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset= "utf-8">
<title> Template 1</title>
<link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include('./inc/header.php'); ?>
<?php require 'inc/functions.php';?>


<main id="checkout_page"> 
<!--src https://www.flaticon.com/free-icon/shopping-cart_8189342?term=order&related_id=8189342-->
	<img src="images/shopping_cart_icon.png" alt="shopping_cart_icon">
	<h1>Thank you for your purchase</h1>
	<p>Your order was completed successfully and will be processed soon. We have sent you an email with the order details and shipping information.</p>
	<a href="index.php">Back to homepage</a>
	
</main>

<?php include('./inc/footer.php'); ?>
</body>
</html>