<!--REG NO: MF25266-->
<!--// start session to retrive id -->
<?php session_start();?>

<?php require "inc/functions.php"?>

<!--get current category-->
<?php 
    # check if there is a get request that holds the category key
    if(isset($_GET['category'])) {
        # get request is coming from the category links
        # use url decode function to decode the category name 
        $cat = urldecode($_GET['category']);
    }

?>


<!--add to cart functionality-->
<?php
    if(isset($_POST['add'])){
        // if we already have a session variable
        if(isset($_SESSION['cart'])){
            $item_arr = array_column($_SESSION['cart'], 'product_id');

            // if the item id is already in the array
            if(!in_array($_POST['product_id'], $item_arr)){
                // count function returns how many items are in session variable. no of elements in array
                $product_count = count($_SESSION['cart']);
                $products_array = array(
                'product_id'=> $_POST['product_id'],
                "quantity" => 1
                );
                $_SESSION['cart'][$product_count] = $products_array;
            }

        }else {
            $products_array = array(
                'product_id'=> $_POST['product_id'],
                "quantity" => 1
            );

            $_SESSION['cart'][0] = $products_array;

            // new session variable
           
        }

        header("Location: Basket.php");

    }
?>

<!--user posts review-->
<?php

    if(isset($_POST['submitReview'])){

        $prod_id = $_POST['product_id'];
        $comment = htmlspecialchars($_POST['comment']);
        $stars = $_POST['stars'];
        $user_id = userLoggedIn() -> id;
        postReview($prod_id,$comment,$stars,$user_id);
    }

?>

<!--take user to log in-->
<?php
    if(isset($_POST['toLogIn'])){
        header("Location: SignUp.php");
    }
?>

<!--quick user subscribed functionality-->
<?php
    $userSub = "";
    if(isset($_POST['subscribeEmail'])){
        $userSub = "Thanks for subscribing. An email should be sent to you shortly!.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navigation bar-->
	<?php include('./inc/header.php'); ?>
<!--shop section 1: main title-->
    <main>
        <div id="shop-sec1">
            <!--https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQZCFMQh4TORszwKS3sZq67qPP5nR4q_Q0XLNuGcTVSTcPCnfmz-->
            <img src="images/shopMainImgL.jpg" alt="Jotaro kujo art">
            <h1 id="shop-sec1-title">ARAKI COLLECTION</h1>
            <img src="images/shopMainImgR.jpg" alt="Jotaro kujo art">
        </div>

        <div id="shop-sec1-2">
            <div class="shop-sec1-sub-CONS">
                <!--https://pbs.twimg.com/media/D-LQ7itU4AAFDYM.jpg-->
                <img src="images/shop-sec1-img1.png" alt="image of johnnt joestar">
                <div>
                    <!--source: https://fontawesome.com/icons/gift?f=classic&s=solid-->
                    <div class="shop_heading_image">
                       <h3>New Items</h3> 
                       <img src="images/shop_gift_icon.svg" alt="gift_icon">
                    </div>
                    
                    <p>We have new items coming in every week! Subscribe to be the first to hear about them.</p>
                </div>
                
            </div>

            <div class="shop-sec1-sub-CONS">
                <!--https://i.pinimg.com/736x/1c/13/38/1c13384992818925df8a83c64230725c.jpg-->
                <img src="images/shop-sec1-img2.png" alt="giorno giovana image">
                <div>
                    <div class="shop_heading_image">
                       <h3>Free Shipping</h3> 
                       <!--source: https://fontawesome.com/icons/cart-shopping?f=classic&s=solid-->
                       <img src="images/shop_cart_icon.svg" alt="shopping_card_icon">
                    </div>
                    <p>We offer free shipping on all our products across all the regions we deliver to.</p>
                </div>
            </div>

            <div class="shop-sec1-sub-CONS">
                <!--https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTVlMpG23b7sjmJs5wRn1T-z8FFyxg7gT215HCBbkyPBkWj8BPq-->
                <img src="images/shop-sec1-img3.png" alt="image of jodio joestar">
                <div>
                    <!--source:https://fontawesome.com/icons/dolly?f=classic&s=solid&sz=2xs&pc=%23000000&sc=%23000000-->
                    <div class="shop_heading_image">
                        <h3>Next day delivery</h3>
                        <img src="images/shop_delivery_item.svg" alt="delivery_icon">
                    </div>
                    
                    <p>Need something fast? We can guarantee free next day delivery for an additional cost.</p>
                </div>
            </div>
        </div>
    </main>
<!--featured merch SECTION 2-->
<!--display categories-->
<h1 class="shop-sec-title"><?php 
    if(isset($cat)){
        echo strtoupper($cat) ;
    } else {
        echo 'FEATURED';
    }
    ?></h1>
<main id="shop">
    
    <section id="Categories"> 
        <h2>Categories:</h2>
        <!--display categories-->
        <div id="categories_con">
        <!--call fetch categories function and save into array-->
        <!--for each category create link tag to display-->
            <?php $categories = fetchCategories();
            ?>
            <?php foreach($categories as $category){

            ?> 
                <!-- encode each category as url and place into a tag  -->
                <a class="category_link" href = "Merch.php?category=<?php echo urlencode($category['category']);?>" aria-label="select categories" aria-current ="<?php $category['category']?>">
                    <?php echo $category['category'];?> 
                </a>

            <?php
            } 

            ?>


        </div>
    </section>
        <!--get products by category-->
    <section class="shop-wrapper-con">
        <div class="shop-carousel-con">

    <?php
    // get products by category using cat variable
        if(isset($cat)){
           $products =  getProductsByCategory($cat); 
           foreach($products as $product) {
                ?>  <!--Generate code for each image and replace-->
                <div class="shop-cardCon">
                    <div class="shop-moreInfo">
                        <button type="button" class="shop-reviewsbtn js-reviewsbtn" data-item="<?php echo $product['ID'] ?>" aria-label="Button to view reviews">Reviews</button>
                        <button type="button" class="shop-infosbtn js-featuresbtn" data-item="<?php echo $product['ID'] ?>" aria-label="Button to view description">Description</button>
                    </div>
                <div class="shop-cardImg">
                    <div class="shop-imageWrapper">
                        <img src="<?php echo $product['Image'] ?>" draggable="false"> 
                    </div>
                
                </div>
                
                <!--ITEM CONTENT AND BUTTONS-->
                <div class="shop-cardContent">
                    <h3><?php echo $product['Name'] ?></h3>
                    <div class="shop-stars">
                        <?php
                            // create loop to get product stars
                             for ($x = 0; $x < $product['Stars']; $x++) {
                        ?>
                            <img src="images/shop_starsRating.png" alt="stars_rating" >
                        <?php
                            }
                        ?>
                    </div>
                    <p class="shop_item_type"><?php echo $product['Type'] ?></p>
                    <p class="shop-Price">£<?php echo number_format($product['Price'], 2) ?></p>
                    <!--FEATURES INFORMATION-->
                    <div class="shop-features js-<?php echo $product['ID'] ?>-features">
                        <h4>Description</h4>
                        <p><?php echo $product['Description'] ?>.</p>
                        <div class="shop-card-featuresDetails">
                            <p>Published: <?php echo $product['Published']?></p>
                        </div>
                    </div>
                    <!--REVIEWS INFORMATION-->
                    <div class="shop-reviews js-<?php echo $product['ID'] ?>-reviews">
                        <h4>Reviews</h4>
                            <?php $reviews = getReviews($product['ID']);
                                $index = 0;
                                while($index < count($reviews) ){
                            ?>      
                                    <div class="shop-review1">
                                    <p> 
                                    <?php
                                        $user = findUser($reviews[$index] -> user_id); 
                                        //echo $user;                                               
                                        echo $user -> username;                                   
                                    ?>
                                    </p>

                                    <!--ALL STARS RATING SOURCE: https://e7.pngegg.com/pngimages/461/155/png-clipart-starfish-computer-icons-shape-black-star-angle-desktop-wallpaper-thumbnail.png-->
                                    <div class="shop-reviewStars">
                                         <?php
                                            // create loop to get product stars
                                            for ($x = 0; $x < $reviews[$index] -> stars; $x++) {
                                            ?>
                                            <img src="images/shop_starsRating.png" alt="stars_rating" >
                                            <?php
                                                }
                                             ?>
                                    </div>

                                    <p> <?php echo $reviews[$index] -> comment; ?> </p>
                                    </div>
                                    
                                    
                            <?php
                                $index += 1;
                                }
                               
                            ?>
                            
                            
                            <!--check if user can post review-->
                                <div class="shop_user_review">
                                    <?php
                                        if(isset($_SESSION['username']) && !userHasReviewed($product["ID"],$_SESSION['id'])){
                                    ?>
                                         <p id="postReviewTitle">Post your review</p>
                                        <form action="Merch.php?category=<?php $cat?>" method="post">
                                        <textarea name="comment" id="userReviewText" placeholder="type review here" cols=36 rows=8 maxlength="500" minlength="1" required></textarea>
                                        <br>
                                        <label for="stars" id="starsLabel">Stars</label>
                                        <input type="number" max=5 name="stars" id="starsInput" min=0 value=0 required>
                                        <button type="submit" name="submitReview" class="shop_loginBtn" id="postReviewButton">Post</button>
                                        <input type = "hidden" name='product_id' value=<?php echo $product["ID"]?>>  
                                        </form>
                                    <?php
                                        } elseif(isset($_SESSION['username']) && userHasReviewed($product["ID"],$_SESSION['id'])){
                                    ?>  
                                        <p id="userHasReviewed">Thank you for reviewing.</p>
                                    <?php // user is not logged in
                                        }else {
                                    ?>
                                         <div class="shop_user_review">
                                        <p>Want to write a review?</p>
                                        <form action="SignUp.php">
                                            <button class="shop_loginBtn">Log in</button>
                                        </form>
                                        </div>
                                    <?php
                                        }
                                    ?>
                               
                                
                                </div>
                            
                            
                    </div>
                <form method="post">
                        <button class="shop-addToBasketbtn" type="submit" name="add">Add to basket</button>
                        <input type = "hidden" name='product_id' value=<?php echo $product["ID"]?>>   
                    </div>
                </div>
            </form>
                        
                <?php
            }
        } else{
            $products =  fetchAllFeaturedProducts(); 
            foreach($products as $product) {
                    ?>  <!--Generate code for each image and replace-->
                    <div class="shop-cardCon">
                        <div class="shop-moreInfo">
                            <button type= "button"class="shop-reviewsbtn js-reviewsbtn" data-item="<?php echo $product['ID'] ?>" aria-label="check and post reviews about product">Reviews</button>
                            <button type="button" class="shop-infosbtn js-featuresbtn" data-item="<?php echo $product['ID'] ?>"  aria-label="view description about product">Description</button>
                        </div>
                    <div class="shop-cardImg">
                        <div class="shop-imageWrapper">
                            <img src="<?php echo $product['Image'] ?>" draggable="false" alt="<?php echo $product['Name'] ?>"> 
                        </div>
                    
                    </div>
                    
                    <!--ITEM CONTENT AND BUTTONS-->
                    <div class="shop-cardContent">
                        <h3><?php echo $product['Name'] ?></h3>
                        <div class="shop-stars">
                            <img src="images/shop_starsRating.png" alt="stars_rating" >
                            <img src="images/shop_starsRating.png" alt="stars_rating">
                            <img src="images/shop_starsRating.png" alt="stars_rating">
                            <img src="images/shop_starsRating.png" alt="stars_rating">
                        </div>
                        <p class="shop_item_type"><?php echo $product['Type'] ?></p>
                        <p class="shop-Price">£<?php echo number_format($product['Price'], 2) ?></p>
                        <!--FEATURES INFORMATION-->
                        <div class="shop-features js-<?php echo $product['ID'] ?>-features">
                            <h4>Description</h4>
                            <p><?php echo $product['Description'] ?>.</p>
                            <div class="shop-card-featuresDetails">
                                <p>Published: <?php echo $product['Published'];?></p>
                            </div>
                        </div>
                        <!--REVIEWS INFORMATION-->
                        <div class="shop-reviews js-<?php echo $product['ID'] ?>-reviews">
                            <h4>Reviews</h4>
                            <!--get reviews-->
                            <?php $reviews = getReviews($product['ID']);
                                $index = 0;
                                while($index < count($reviews) ){
                            ?>      
                                    <div class="shop-review1">
                                    <p> 
                                    <?php
                                        $user = findUser($reviews[$index] -> user_id); 
                                        //echo $user;                                               
                                        echo $user -> username;                                   
                                    ?>
                                    </p>

                                    <!--ALL STARS RATING SOURCE: https://e7.pngegg.com/pngimages/461/155/png-clipart-starfish-computer-icons-shape-black-star-angle-desktop-wallpaper-thumbnail.png-->
                                    <div class="shop-reviewStars">
                                         <?php
                                            // create loop to get product stars
                                            for ($x = 0; $x < $reviews[$index] -> stars; $x++) {
                                            ?>
                                            <img src="images/shop_starsRating.png" alt="stars_rating" >
                                            <?php
                                                }
                                             ?>
                                    </div>

                                    <p> <?php echo $reviews[$index] -> comment; ?> </p>
                                    </div>
                                    
                                    
                            <?php
                                $index += 1;
                                }
                               
                            ?>
                            
                            
                            <!--check if user can post review-->
                                <div class="shop_user_review">
                                    <?php
                                        if(isset($_SESSION['username']) && !userHasReviewed($product["ID"],$_SESSION['id'])){
                                    ?>
                                         <p id="postReviewTitle">Post your review</p>
                                        <form action="Merch.php" method="post">
                                        <textarea name="comment" id="userReviewText" placeholder="type review here" cols=36 rows=8 maxlength="500" minlength="1" required></textarea>
                                        <br>
                                        <label for="stars" id="starsLabel">Stars</label>
                                        <input type="number" max=5 name="stars" id="starsInput" min=0 value=0 required>
                                        <button type="submit" name="submitReview" class="shop_loginBtn" id="postReviewButton">Post</button>
                                        <input type = "hidden" name='product_id' value=<?php echo $product["ID"]?>>  
                                        </form>
                                    <?php // new text if user has reviewed 
                                        } elseif(isset($_SESSION['username']) && userHasReviewed($product["ID"],$_SESSION['id'])){
                                    ?>  
                                        <p id="userHasReviewed">Thank you for reviewing.</p>
                                    <?php // user is not logged in
                                        }else {
                                    ?>
                                         <div class="shop_user_review">
                                        <p>Want to write a review?</p>
                                        <form action="SignUp.php" method="post">
                                            <button class="shop_loginBtn" name="toLogIn">Log in</button>
                                        </form>
                                        
                                        </div>
                                    <?php
                                        }
                                    ?>
                               
                                
                                </div>
                                
                        </div>
            <form method="post">
                        <button class="shop-addToBasketbtn" type="submit" name ="add">Add to basket</button>
                        <input type = "hidden" name='product_id' value=<?php echo $product["ID"]?>>   
                    </div>
                </div>
            </form>   
                <?php
            }
        }
        ?>  
    
           
            </div>
    </section> 
</main>                  

    <section id="shop-sec7">
        <!--https://pbs.twimg.com/profile_images/1662481527207342087/hSVIG5YT_400x400.jpg-->
            <img src="images/subscribe_newsletter.jpg" alt="">
        <div id="shop-sec7-text">
            <h2>SUBSCRIBE TO GET OFFERS AND DISCOUNTS</h2>
            <p>By subscribing to us you get a chance to have early access to products when they are on offer and hear about Hirohiko Araki's latest activities. </p>

            <form action="Merch.php" method="post">
                 <div id="user_input">
                    <input type="email" placeholder="Email*" name="subscribeEmail" required id="subscribeInput">
                    <button id="js-subscribe-button"  aria-label="subscribe to araki website newletter confirmation">Subscribe!</button> 
                </div> 
                <p id="userSubscribedText"><?php echo $userSub?></p>
            </form>
           
            
        </div>
    </section>


    <!--add footer using php-->
   <?php include('./inc/footer.php'); ?>
   
    <script  src="./inc/merch.js"></script>
</body>