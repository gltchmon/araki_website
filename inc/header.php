<!--creating nav bar in php-->
<!--REG NO: MF25266-->
<?php // get the page title whenever you go to new tab
	$directoryURI = $_SERVER['REQUEST_URI'];
	$filePath = parse_url($directoryURI,PHP_URL_PATH);
	$pageArr = explode('/',$filePath);
	//$page_title = $pageArr[3];

?>

<header> 
	<nav class="nav_bar">
		<div class="logo">
			<p>MOONSTUDIOS</p>
			<select name="region" id="user_region">
				<option  value="5.00" disabled selected>Region</option>
				<option value="5.00">Europe</option>
				<option value="25.00">Japan</option>
				<option value="15.00">United States</option>
				<option value="20.00">South Africa</option>
			</select>
	</div>
<!--setting active nav bar and accessibility label with php-->
	<ul class="menu" aria-label = "Main page navigation">
		<li><a href="Merch.php" 
			class="<?php if ($page_title == "Merch.php"){echo "nav_active";}else {echo " ";}?>" 
			aria-current ="<?php if ($page_title == "Merch.php"){echo "Shop";}else {echo " ";}?>">Shop</a></li>
		<li><a href="Gallery.php" 
			class="<?php if ($page_title == "Gallery.php"){echo "nav_active";}else {echo " ";}?>"
			aria-current ="<?php if ($page_title == "Gallery.php"){echo "Gallery";}else {echo " ";}?>">Gallery</a></li>
		<li><a href="index.php" 
			class="<?php if ($page_title == "index.php"){echo "nav_active";}else {echo " ";}?>"
			aria-current ="<?php if ($page_title == "index.php"){echo "Home";}else {echo " ";}?>">Home</a></li>
		<li><a href="About.php" 
			class="<?php if ($page_title == "About.php"){echo "nav_active";}else {echo " ";}?>"
			aria-current ="<?php if ($page_title == "About.php"){echo "About";}else {echo " ";}?>">About</a></li> 
		<li><a href="SignUp.php" 
			class="<?php if ($page_title == "SignUp.php"){echo "nav_active";}else {echo " ";}?>"
			aria-current ="<?php if ($page_title == "SignUp.php"){echo "Sign Up";}else {echo " ";}?>">Sign up</a></li>
		<li><a href="Basket.php" 
			class="<?php if ($page_title == "Basket.php"){echo "nav_active";}else {echo " ";}?>"
			aria-current ="<?php if ($page_title == "Basket.php"){echo "Basket";}else {echo " ";}?>">Basket (<?php
			
			if(isset($_SESSION['cart'])){
				$item_count = count($_SESSION['cart']);
				echo $item_count;
			} else {
				echo "0";
			}
			
			?>)</a></li>  
	</ul>
	</nav>
</header>

