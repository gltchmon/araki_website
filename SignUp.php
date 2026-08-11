<!--REG NO: MF25266-->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "inc/functions.php";?>
    <!-- navigation bar-->
    <?php include('inc/header.php')  ?>


<?php
    
?>
    
<!--REGISTER NEW USER-->
<?php 
    // print error messages
    $error = "";
    $success= "";
     if(isset($_GET['error'])){
            $error = errorMessages($_GET['error']);
        }

    if(isset($_GET['message'])) {
        $success = "Registration complete please log in to proceed!";
    }


    if(isset($_POST['regsubmit'])) {
        $fname = trim(strtolower($_POST['fname']));
        $lname = trim(strtolower($_POST['lname']));
        $email = trim(strtolower($_POST['email']));
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $passwordCon = trim($_POST['conPassword']);

        $username = htmlspecialchars($username);
        $fname = htmlspecialchars($fname);
        $lname = htmlspecialchars($lname);

        
    
        // validate name 
        if(preg_match('~[0-9]+~', $fname) || preg_match('~[0-9]+~', $lname) ){
            header('Location: SignUp.php?error=invalidName');
            exit();
        }

        // validate username
        if(!preg_match('/^[a-z\d_]{3,}$/i', $username)){
            header('Location: SignUp.php?error=invalidUsername');
            exit();
        }

         // add password requirements
        if(strlen($password) < 8){
            header('Location: SignUp.php?error=passwordRequirement');
            exit();
        }

        //validate email 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location: SignUp.php?error=invalidEmail');
            exit();
        }

        // check if user exists
        if(existingUser($email, $username)){
            header('Location: SignUp.php?error=existingUser');
            exit();
        }


        // check passwords match
        if($password != $passwordCon){
            header('Location: SignUp.php?error=passwordMatch');
            exit();
        }

       
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        if($error == ""){
            $data = "mysql:host=".SERVER.";dbname=".DATABASE;
            if(!$connection = new PDO ($data, USERNAME, PASSWORD)){
                die("failed to connect");
            };


            
            $arr['fname'] = $fname;
            $arr['lname'] = $lname;
            $arr['email'] = $email;
            $arr['username'] = $username;
            $arr['password'] = $hashedPassword;

            // query is hidden using prepared system
            $query = " INSERT INTO users(fname,lname,email,username,password) VALUES (:fname, :lname,:email, :username, :password)";
            $stm = $connection->prepare($query);
            $stm -> execute($arr);
            $success= "Sign up complete! Please log in.";
            header("Location: SignUp.php?message=success");        
            die;
            
        
        }

        
    }


?>
<!--LOG IN USER-->
<?php

    // log in section
    if(isset($_POST['logInsubmit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $databaseData = "mysql:host=".SERVER.";dbname=".DATABASE;
        if(!$connection = new PDO ($databaseData, USERNAME, PASSWORD)){
            die("failed to connect");
        };

        
        $arr['username'] = $username;
        //$arr['password'] = $password;
        
        $query = "SELECT * FROM users WHERE username = :username limit 1";        
        $stm = $connection->prepare($query);
        
        $stm -> execute($arr);
        $count = $stm->rowCount();
        
        // only log user in if they exist in db
        if($count != 0){
            $data = $stm -> fetchAll(PDO::FETCH_OBJ); 
            $data = $data[0];
            if(password_verify($password, $data -> password)){
                $_SESSION['username'] = $data -> username;
                $_SESSION['id'] = $data -> id;
                header("Location: Merch.php?user=".$_SESSION['username']); 
                die;
            } else{
                header("Location: SignUp.php?error=wrongPassword");
                die;
            }
            
        } else{
            header("Location: SignUp.php?error=doesNotExist"); 
            die;
        }

        //echo($_SESSION['username']);
    }

?>
<!--USER LOG OUT-->
<?php 

    if(isset($_SESSION['username'])){
        if(isset($_GET['logOut'])){
            unset($_SESSION['username']);
            if(isset($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            header("Location: index.php");
            die;
        }
    }
    
?>
<!--main content-->
    <div id="signup_sec1">
        <img src="images/signup_titleImg.jpg" alt="Thus Spoke Kisibe Rohan">
    </div>

    <?php 
	
		$user = userLoggedIn();

		if(is_object($user)){
			echo logInPage($user -> username);
		} else {
            echo renderSignUp($error, $success);
        }
	
	?>

    
	<!--add footer using php-->
   <?php include('./inc/footer.php'); ?>

</body>