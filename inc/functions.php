<!--REG NO: MF25266-->
<?php
// file containing functions and classesof website 

    # ACCESS THE DB LOG IN DETAILS
    require "db.php";

    # connect to database
    function dbConnect() {

        # create mysqli object
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        # check the connection property value 
        if($mysqli -> connect_errno != 0) {
            die("Failed to connect");
            return FALSE;
        } else {
            return $mysqli;
        }
    }

    # get categories function
    function fetchCategories() {

        # call db connection function
        $mysqli = dbConnect();
        
        # fetch distinct categories 
        $result = $mysqli -> query("SELECT DISTINCT category FROM products");

        # fetch rows as associative array meaning strings are used as index
        while($row = $result -> fetch_assoc()) {
            # place in categories array
            $categories[] = $row;
        }

        return $categories;

    }

    # get featured products to display in homepage

    function getFeaturedProducts($int) {
        # connect to db
        $mysqli = dbConnect(); 

        # get only the featured products and order them randomly
        $result = $mysqli-> query("SELECT * FROM products WHERE category = 'Featured' ORDER BY rand() LIMIT $int ");

        while($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    # get products by category 
    function getProductsByCategory($category) {
        $mysqli = dbConnect(); 
        $smtp = $mysqli -> prepare("SELECT * FROM products WHERE category = ?");
        $smtp -> bind_param("s", $category);

        $smtp -> execute();
        $result = $smtp -> get_result();
        $data = $result ->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    // get all featured products as default for merch page
    function fetchAllFeaturedProducts() {
        # connect to db
        $mysqli = dbConnect(); 

        # get only the featured products and order them randomly
        $result = $mysqli-> query("SELECT * FROM products WHERE category = 'Featured'");

        while($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }


    /// function to render each cart item passes with product specific information
    function cartProducts($productImg, $productName, $productType, $productPrice, $productid, $itemQuantity){
        $product_html = "
            <form action=\"Basket.php?action=remove&id=$productid\" method=\"post\">
                <div id=\"item\" class=\"basket_con\">
                    <img src=$productImg alt=\"NEEDS TO BE UPDATED\" class=\"basket_item_img\">

                    <div>
                        <h2 class=\"basket-product-name\">$productName</h2>
                        <p class=\"product-type\">$productType</p>
                        <p class=\"basket_item_price\">£$productPrice</p>
                        <div class=\"delete_save_option\">
                            <button type=\"submit\" name=\"remove\" class=\"basket-items-button remove_item\">Remove from basket</button>
                            <form  action=\"https://www.instagram.com/\" method=\"post\" aria-label=\"share item to instagram\">
                                <button type=\"submit\" class=\"basket-items-button\" name=\"shareItem\">Share item</button>
                            </form>
                            
                        </div>
                    </div>

                    <div class=\"basket_quantity\">
                        <form action=\"Basket.php\" method=\"post\" autocomplete=\"off\">
                            <p>Quantity</p>
                            <input type=\"number\" value=\"$itemQuantity\" name=\"quant\" class=\"basket-quantity\" min=\"1\" max=\"10\">
                            <input type=\"hidden\" name=\"product-id\" value=\"$productid\">
                            <input type=\"submit\" name=\"update-quant\" value=\"Update Quantity\" class=\"update-quant\">
                        </form>
                    </div>
                    
                </div>

            </form>
        ";

        echo $product_html;
    }
    
    // get data to display products and link to what they are in cart
    function getData(){
        $mysqli = dbConnect(); 
        $result = $mysqli-> query("SELECT * FROM products");

        while($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    };
   

    // check if user already exists
    function existingUser($email, $username){
        $data = "mysql:host=".SERVER.";dbname=".DATABASE;
        if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
            die("failed to connect");
        };

        $arr['username'] = $username;
        $arr['email'] = $email;

        $query = "SELECT * FROM users WHERE username = :username || email = :email limit 1";

        
        $stm = $connection->prepare($query);
        
        $stm -> execute($arr);

        $count = $stm->rowCount();
        
        if($count == 0){
            return false;
        } else{
            return true;
        }
    }
   
    // check if user logged in
    function userLoggedIn(){

        if(isset($_SESSION['username'])){
             $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };

            $arr['username'] = $_SESSION['username'];

            $query = "SELECT fname,lname,email,username,id FROM users WHERE username = :username limit 1";        
            $stm = $connection->prepare($query);
        
            $stm -> execute($arr);

            $data = $stm -> fetchAll(PDO::FETCH_OBJ);
            return $data[0];
        } else{
            return false;
        }

}

function logInPage($username){

    $html = "
            <div id=\"userProfile\">	
                <h1>User Profile</h1>
                <div id=\"account_icon_img\">
                    <img src=\"images/account_icon.png\" alt=\"account_icon_png\">
                </div>
                <p>Hello <span id=\"logInUsernameSpan\">$username</span> you are currently logged in!</p>
                <a href=\"SignUp.php?logOut=$username\" id=\"logoutButton\">Log Out</button></a>
            </div>
    ";

    return $html;
}

// code to display sign up page
function renderSignUp($error,$success){
    $html = "<p id=\"sign_up_sec1_text\">Sign into your account to have a more personalised experience! Checkout, leave reviews and save your basket in case you want to come back. Create a new account or sign in if you are already registered with us. You can also subscribe to our newsletter to hear about future events and hear about our new items.</p>
     <?php if(isset($error) && $error != \"\"){
    ?>    
            <p id=\"errorMessage\"> $error </p> 
    
    <?php
        } elseif(isset($success) && $success != \"\"){
        ?>
            <p id=\"successMessage\"> $success </p> 
        <?php
        }
    ?>

    <section id=\"signIn_register_con\">
        <div id=\"signIn\">
            <h1>SIGN IN</h1>
            <div id=\"signIn_con\">
<!--post so user information is not seen in the url-->
                <form action=\"\" method=\"post\">
                    <label for=\"text\">Username</label>
                    <input type=\"text\" name=\"username\" class=\"user_input\" required>

                    <label for=\"Password\">Password</label>
                    <input type=\"password\" name=\"password\" class=\"user_input\" required>
                    <button type=\"submit\" name =\"logInsubmit\" class=\"submit_button\" id=\"logInButton\">Log in</button>
                </form>
                

            </div>
        </div>
        
        <div id=\"register\">
            <h1>REGISTER</h1>

            <div id=\"register_con\">
                <form action=\"SignUp.php\" method = \"post\">

                    <div id=\"fname_lname\">
                        <div>
                            <label for=\"fname\" class=\"new_line\">First Name</label>
                            <input type=\"text\" name=\"fname\" id=\"fname\" class=\"flname_inputs\">
                        </div>
                        

                        <div>
                            <label for=\"lname\" class=\"new_line\">Last Name</label>
                            <input type=\"text\" name=\"lname\" id=\"lname\" class=\"flname_inputs\">
                        </div>
                        
                    </div>
                    

                    <label for=\"email\" class=\"new_line\">Email</label>
                    <input type=\"email\" name=\"email\" id=\"email\" class=\"new_line inputs colour\" required>

                    <label for=\"username\" class=\"new_line\">Username</label>
                    <input type=\"username\" name=\"username\" id=\"username\" class=\"new_line inputs colour\" required>
                    <p id=\"password_requirements\">Username should be at least 3 characters long</p>
                    <p id=\"password_requirements\">Username can only contain numbers, letters and underscore</p>

                    <label for=\"password\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"new_line inputs colour\" required>
                    <p id=\"password_requirements\">Password must be at least 8 characters long</p>

                    <label for=\"password\">Confirm Password</label>
                    <input type=\"password\" name=\"conPassword\" id=\"conPassword\" class=\"new_line inputs colour\" required>

            
                    

                    <button type=\"submit\" name =\"regsubmit\" class=\"submit_button inputs\">Register</button>
                </form>
            </div>

        </div>

    </section>
	";

    return $html;
}

function errorMessages($errorMessage){
    switch ($errorMessage){
        case "invalidName":
            return "Please enter a valid name.";
        case "invalidEmail":
            return "Please enter a valid email.";
        case "existingUser":
            return "This user already exists.";
        case "invalidUsername";
            return "This is not a valid username";
        case "passwordMatch":
            return "Passwords do not match.";
        case "wrongPassword":
            return "Wrong password";
        case "doesNotExist":
            return "User does not exist please register.";
        case "notLogged":
            return "Please log in to checkout.";
        case "passwordRequirement":
            return "Password does not meet requirements";
        default:
            return "";
    }
}

function getReviews($productID){
     $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };

            $arr['prodID'] = $productID;

            $query = "SELECT user_id, comment,stars FROM reviews WHERE product_id = :prodID";        
            $stm = $connection->prepare($query);
        
            $stm -> execute($arr);

            $data = $stm -> fetchAll(PDO::FETCH_OBJ);

            return $data;

}

// function to get the username
function findUser($userID){
    $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };

            $arr['userID'] = $userID;

            $query = "SELECT username FROM users WHERE id = :userID limit 1";        
            $stm = $connection->prepare($query);
        
            $stm -> execute($arr);

            $data = $stm -> fetchAll(PDO::FETCH_OBJ);

            return $data[0];
}


function postReview($prod_id, $comment,$stars,$user_id){

     $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };

            $arr['user_id'] = $user_id;
            $arr['prod_id'] = $prod_id;
            $arr['comment'] = $comment;
            $arr['stars'] = $stars;

            // query is hidden using prepared system
            $query = " INSERT INTO reviews(product_id,user_id,comment,stars) VALUES (:prod_id, :user_id,:comment, :stars)";
            $stm = $connection->prepare($query);
            $stm -> execute($arr);
            header("Location: Merch.php?message=success");
            die;
            

}

// check if user has already left review on the product
function userReviews($userID) {
    // select user id where product = product
     $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };

            $arr['userID'] = $userID;

            $query = "SELECT product_id FROM reviews WHERE user_id = :userID";        
            $stm = $connection->prepare($query);
        
            $stm -> execute($arr);

            $data = $stm -> fetchAll(PDO::FETCH_OBJ);

            return $data;
}

// return bool if user has reviewed 
function userHasReviewed($productID, $userID) {
    $userReviews = userReviews($userID);
    foreach($userReviews as $review){
        if($review -> product_id == $productID){
            return True;
        } 
    }

    return false;
}


