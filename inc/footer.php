 <!--REG NO: MF25266-->
 <!--footer template-->
 <?php
    $text = "";
    if(isset($_POST['subscribe'])){
        $text="Thank you. An email will be sent to you shortly.";
    }
 ?>
 <footer>
        <div class="footer_aboutUs">
            <h2>About us</h2>
            <p>At our studio, creativity is a way of life. We're a community of artists dedicated to exploring bold ideas, refining craft, and inspiring others through the power of visual expression. Whether you're picking up a brush for the first time or expanding your artistic voice, our space is designed to nurture curiosity, collaboration, and growth.</p>
            <div class="footer_social_media">
                <a href="https://x.com/"><img src="images/twitter_logo.svg" alt="twitter_logo"></a>
                <a href="https://instagram.com/"><img src="images/instagram_logo.svg" alt="instagram_logo"></a>
                <a href="https://facebook.com/"><img src="images/facebook_logo.svg" alt="facebook_logo"></a>
                <a href="https://linkedin.com/"><img src="images/linkedin_logo.svg" alt="linkedin_logo"></a>
            </div>


            <!--https://www.flaticon.com/free-icon/maps-and-flags_447031?k=1770823143014-->
            <div class="footer_contacts">
                <div class="location_logo">
                   <img src="images/location_logo.png" alt="location_logo" >
                    <p>London, United Kingdom</p>
                </div>

                <!--https://www.flaticon.com/free-icon/phone-call_3059446?term=phone&page=1&position=8&origin=search&related_id=3059446-->
                <div class="footer_contact_logo">
                    <img src="images/email_logo.svg" alt="email_logo">
                    <p>moonStudios@contact.com</p>
                </div>
                
                 <div class="location_logo">
                    <img src="images/phone_logo.png" alt="phone_logo">
                    <p>0204572898</p>
                 </div>   
            </div>
        </div>

        <div class="footer_nav">
            <h3>Links</h3>
            <ul>
                <li> <a href="Merch.php">Shop</a></li>
                <li> <a href="Gallery.php">Gallery</a></li>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="About.php">About</a></li>
                <li> <a href="SignUp.php">Sign Up</a></li>
                <li> <a href="Basket.php">Basket</a></li>
            </ul>
            
        </div> 

        <div class="footer_newsLetter">
            <h3>Subscribe to our newsletter</h3>
            <p>Stay connected with the creative world we're building. Join our newsletter for studio updates, upcoming workshops, artist spotlights, and a little inspiration delivered straight to your inbox.You'll get a first look at new classes, behind-the-scenes glimpses of our artists at work, and special invitations to events and exhibitions.</p>
            <div class="footer_user_input">
                <form method="post">
                    <input type="email" required>
                    <button type="submit" name="subscribe">Subscribe</button> 
                    <p id="userSubscribedTextfooter"><?php echo $text?></p>
                </form>
               
            </div>
            <p>&copy 2026 All rights reserved</p>
            
        </div>
    </footer>