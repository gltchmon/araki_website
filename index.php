<!--REG NO: MF25266-->
<?php session_start();?>
<?php require "inc/functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Creating navigation bar-->
   <?php include('./inc/header.php'); ?>
<!--section 1 title -->
    <main id="home-sec1-main">
        <div class="home-sec1">
            <!--source : https://jojowiki.com/Yoshikage_Kira/Gallery-->
            <img src="images/KiraArt.jpg" alt="Kira" id="kiraArt">

            <div id="imgcarousel-section">
                <h1 class="home-sec1-title" id="hirohikoText">HIROHIKO</h1>
               <div id="home_sec1_images">
                <!--https://mangaart.jp/_next/image?url=https%3A%2F%2Fimages.ctfassets.net%2Fk789xrk0yzk2%2F2CrLtivIuM1Ydwmtw04rpY%2F95e66199e45c387b857e271c37e0c68f%2FJOJO_LIT_001.jpg%3Fw%3D1500%26fm%3Davif%26q%3D50&w=3840&q=75-->
                    <img src="images/home_sec1_img1.png" alt="hirohiko araki Lithograph work 1">
                    <img src="images/home_sec1_img2.png" alt="hirohiko araki Lithograph work 2">
                    <img src="images/home_sec1_img3.png" alt="hirohiko araki Lithograph work 3">
               </div>
               <div id="home-sec1-titleText">
            <!--src: https://en.wikipedia.org/wiki/Hirohiko_Araki#Biography-->
                    <h1 class="home-sec1-title" id="arakiText">ARAKI</h1>
                    <p>Japanese manga artist best known for his long-running series JoJo's Bizarre Adventure, which began publication in Weekly Shōnen Jump in 1987 and has over 120 million copies in circulation as of 2022, making it one of the best-selling manga series in history.</p>
                </div>
               
                <div class="homePage_buttons">
                    <form action="Merch.php">
                    <button>SHOP</button>
                </form>
               <form action="Gallery.php">
                    <button>GALLERY</button>
               </form>
                </div>
                
               
            </div>
            
        </div>
    </main>
<!--section 2 meet the artist-->
<!--(https://jojowiki.com)--->
    <article id="home-sec2-main">
        <h2 id="home-sec2-title">MEET THE ARTIST</h2>
        <p id="home-sec2-titleText">Hirohiko Araki's artwork and manga are inspired by numerous Western influences including music, paintings, sculptures, fashion, and films. He is one of the most well-known manga artists in the world and has won several awards throughout his career.But just who is he?</p>

        <div id="home-sec2">
            <div id="arakiBWCon"><img src="images/arakiBW.jpeg" alt="black and white image of hirohiko araki"></div>

            <div id="galleryPics">
                <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyfc_G2xHd4FXNiqNg0LaX0ExvSs2GCcg9UYhqVmyAqzVXZAUD-->
                <div id="arakiGalleryPic2">
                    <img src="images/arakiLourve2.avif" alt="image of hirohiko araki standing next to art" >
                </div>
                <!--https://www.nocloo.com/hirohiko-araki-biography/?utm_source=copilot.com-->
                <!--https://en.wikipedia.org/wiki/Hirohiko_Araki?utm_source=copilot.com-->
                <h3>Profile</h3>
                <p>Hirohiko Araki (born June 7, 1960, in Sendai, Japan) is a renowned Japanese manga artist best known for creating JoJo's Bizarre Adventure, a long-running series that began in 1987 and has sold over 120 million copies worldwide.  His career started in the early 1980s with works like Poker Under Arms and Baoh, but JoJo became his defining masterpiece, celebrated for its stylish art, inventive battles, and multi-generational storytelling.  Araki's evolving, fashion-inspired art style and imaginative worldbuilding have made him one of the most influential figures in modern manga.</p>
                <!--placed in form as a tags in buttons are not allowed-->
                <form action="About.php">
                    <button class="gallery_pics_button">Learn more</button>
                </form>
                
                
                <!--https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSfAVTg9VhzTzNOtc_nsiCyup0L3UMVIbAtuwrGezJLq08O0xks-->
                <div id="arakiGalleryPic1"><img src="images/araki_home_art_cropped.jpg" alt="art of hirohiko araki" ></div>
                <h3>Exhibitions</h3>
                <!--https://jojowiki.com/Hirohiko_Araki-->
                <p>"The Hirohiko Araki JoJo Exhibition: Ripples of Adventure will be held this summer of 2018 at the National Art Center, Tokyo in Roppongi, Tokyo. It is a great honor for me to be able to unveil the culmination of JoJo's 30th anniversary in such a prestigious location. At the same time, I also feel nervous. The essence of what JoJo aims to depict is "spiritual growth" through every phenomenon in the world, and through the battles between good and evil." - Hirohiko Araki. </p>
                <form action="Gallery.php">
                    <button class="gallery_pics_button">View Gallery</button>
                </form>
                
            </div>
        </div>
    </article>

    <!--section 3: featured items-->
    <h2 id="home-sec3-title">Featured Items</h2>
    <section id="home-sec3">

            <div id="home-sec3-featured-img">
               <!--https://i.pinimg.com/736x/13/d1/9c/13d19cc47ce229ca340e6f06eb7a8970.jpg-->
                <img src="images/featured31.jpg" alt="jolyne kujoh illustration" id="home-sec3-conImg"> 
            </div>
            <div id="home-sec3-gridCon">
                <div id="home-sec3-grid">
                    <?php $featuredProducts = getFeaturedProducts(3) ?>
                        <?php # format each image
                            foreach($featuredProducts as $product) {
                                ?>  <!--Generate code for each image and replace-->
                                    <div class="home-sec3-Items">
                                       <img src="<?php echo $product['Image'] ?>" alt="$product['Name']">
                                        <div class="home-sec3-ItemDesc">
                                            <a href="Merch.php"><?php echo $product['Name'] ?></a>
                                            <p class="home-sec3-ItemDescText"> <?php echo $product['Description'] ?></p>
                                            <p class="home-sec3-ItemPrice">£<?php echo number_format($product['Price'], 2) ?></p>
                                        </div> 
                                    </div>
                                     
                                <?php
                            }
                        ?>  

                </div> 
        </div>
    </section>

    <section id="home-sec4">
                        <!--https://mangaart.jp/exhibitions/jojo-msp?utm_source=copilot.com-->
        <h2>Recent works and Exhibitions</h2>
        <p id="home-sec4-titleText">Hirohiko Araki has remained highly active in recent years, producing new lithographic and lenticular art prints that have been featured in major international exhibitions. In 2025, his newly created set of nine lithographs and nine lenticular works debuted in San Francisco as part of the Shueisha Manga-Art Heritage project, marking his first venture into traditional lithography techniques. .</p>
        <div id="carousel">

            <div class="group">
                <!--https://www.tanseisha.co.jp/resource/61856_4.jpg-->
                <div class="card"><img src="images/caro1.jpg" alt="jojo ripples of adventure art exhibtion">
                    <h3>JOJO Ripples of Adventure</h3>
                    <p class="home-sec4-cardText">Araki's artwork is defined by bold, fashion-inspired character designs that blend realism with dramatic stylization.</p>
                </div>
<!--https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2018/10/18101908573426.jpg?fit=2016,980&amp;ssl=1-->
                <div class="card square"><img src="images/caro7.jpg" alt="Jojo exhibition image">
                    <h3>Tokyo Adventures: JoJo Exhibition</h3>
                    <p class="home-sec4-cardText">His storytelling often spans generations, giving his narratives an epic, evolving structure rarely seen in manga.</p>
                </div>

                <!--https://external-preview.redd.it/xe2qxJusP6yiYUDpUyrbssH6B2AqMci-9u0dN-9m3AY.jpg?auto=webp&s=fb385a55dba7e7c29eadcff6fc9e5f60e0094e31-->
                <div class="card"><img src="images/caro8.jpg" alt="josuke higashikata art">
                    <h3>Josuke Higashikata</h3>
                    <p class="home-sec4-cardText">He is known for creating inventive supernatural battle systems, most famously the Stand abilities in JoJo's Bizarre Adventure.</p>
                </div>
                <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPN0XXeQtWcmwRKMXo_4E4owW-agpTjPWGWw&s-->
                <div class="card square"><img src="images/caro3.jpg" alt="">
                    <h3>Art of Manga Exhibition</h3>
                    <p class="home-sec4-cardText">Araki's use of dynamic posing and anatomical exaggeration gives his illustrations a sense of motion and theatricality.</p>
                </div>

                <!--https://w0.peakpx.com/wallpaper/79/654/HD-wallpaper-jojos-bizarre-adventure-iphone-jojo-bizarre-adventure-part-7-thumbnail.jpg-->
                <div class="card"><img src="images/caro4.jpg" alt="art of jolyne Kujoh">
                    <h3>Strike a pose</h3>
                    <p class="home-sec4-cardText">His color work is highly experimental, frequently shifting palettes to evoke mood, symbolism, or thematic contrast.</p>
                </div>
                <!--https://static01.nyt.com/images/2025/10/11/multimedia/11cul-manga-qcjk/11cul-manga-qcjk-googleFourByThree.jpg-->
                <div class="card square"><img src="images/caro6.jpg" alt="art of manga exhibtion 2">
                    <h3>Art of Manga De Young</h3>
                    <p class="home-sec4-cardText">Western art, classical sculpture, and high fashion heavily influence his visual approach, resulting in a unique cross-cultural aesthetic.</p>
                </div>
            </div>
            <!--ignore for accesibility purposes-->
           <div class="group">
                <!--https://www.tanseisha.co.jp/resource/61856_4.jpg-->
                <div class="card"><img src="images/caro1.jpg" alt="jojo ripples of adventure art exhibtion">
                    <h3>JOJO Ripples of Adventure</h3>
                    <p class="home-sec4-cardText">Araki's artwork is defined by bold, fashion-inspired character designs that blend realism with dramatic stylization.</p>
                </div>
<!--https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2018/10/18101908573426.jpg?fit=2016,980&amp;ssl=1-->
                <div class="card square"><img src="images/caro7.jpg" alt="Jojo exhibition image">
                    <h3>Tokyo Adventures: JoJo Exhibition</h3>
                    <p class="home-sec4-cardText">His storytelling often spans generations, giving his narratives an epic, evolving structure rarely seen in manga.</p>
                </div>

                <!--https://external-preview.redd.it/xe2qxJusP6yiYUDpUyrbssH6B2AqMci-9u0dN-9m3AY.jpg?auto=webp&s=fb385a55dba7e7c29eadcff6fc9e5f60e0094e31-->
                <div class="card"><img src="images/caro8.jpg" alt="josuke higashikata art">
                    <h3>Josuke Higashikata</h3>
                    <p class="home-sec4-cardText">He is known for creating inventive supernatural battle systems, most famously the Stand abilities in JoJo's Bizarre Adventure.</p>
                </div>
                <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPN0XXeQtWcmwRKMXo_4E4owW-agpTjPWGWw&s-->
                <div class="card square"><img src="images/caro3.jpg" alt="">
                    <h3>Art of Manga Exhibition</h3>
                    <p class="home-sec4-cardText">Araki's use of dynamic posing and anatomical exaggeration gives his illustrations a sense of motion and theatricality.</p>
                </div>

                <!--https://w0.peakpx.com/wallpaper/79/654/HD-wallpaper-jojos-bizarre-adventure-iphone-jojo-bizarre-adventure-part-7-thumbnail.jpg-->
                <div class="card"><img src="images/caro4.jpg" alt="art of jolyne Kujoh">
                    <h3>Strike a pose</h3>
                    <p class="home-sec4-cardText">His color work is highly experimental, frequently shifting palettes to evoke mood, symbolism, or thematic contrast.</p>
                </div>
                <!--https://static01.nyt.com/images/2025/10/11/multimedia/11cul-manga-qcjk/11cul-manga-qcjk-googleFourByThree.jpg-->
                <div class="card square"><img src="images/caro6.jpg" alt="art of manga exhibtion 2">
                    <h3>Art of Manga De Young</h3>
                    <p class="home-sec4-cardText">Western art, classical sculpture, and high fashion heavily influence his visual approach, resulting in a unique cross-cultural aesthetic.</p>
                </div>
            </div>
        </div>

            


    </section>

	<!--add footer using php-->
   <?php include('./inc/footer.php'); ?>
   
    <script src="inc/hamburger.js"></script>
    
</body>
</html>