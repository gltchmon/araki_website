<!--REG NO: MF25266-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navigation bar-->
	<?php include('./inc/header.php'); ?>

    <!--GALLERY SECTION 1: THE ART OF ARAKI-->
    <section id="gallery_sec1">
        <!--SOURCE: https://static.jojowiki.com/images/thumb/e/ed/latest/20191015214804/RippleAdventurePromo.jpg/800px-RippleAdventurePromo.jpg-->
        <img src="images/gallery_sec1_img.png" alt="jojo art ripples of adventure">

        <div id="gallery_sec1_textContent">
            <h1>THE ART OF HIROHIKO ARAKI</h1>
<!--src:https://www.wikiart.org/en/hirohiko-araki -->
            <p>Hirohiko Araki ( born June 7, 1960 in Sendai, Miyagi) is a Japanese manga artist. He made his debut under the name Toshiyuki Araki in 1980 with his one-shot Poker Under Arms, and began his professional career with the short series Cool Shock B.T., Baoh, and The Gorgeous Irene. Araki is best known for his long-running series JoJo's Bizarre Adventure, first published in Weekly Shōnen Jump in 1987 and which to date has sold over 100 million copies in Japan alone, which is known for its frequent references to Western rock music and Italy, both of which Araki is reportedly very fond of.</p>

        </div>

    </section>

<!--GALLERY SECTION 2: GALLERY-->
    <main id="gallery_sec2">
        <h1>GALLERY</h1>
<!--GALLERY ITEMS-->
        <div id="gallery">
            <!--SOURCE: https://static.jojowiki.com/images/f/fe/latest/20210614112834/Volume_130.jpg-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_2021_1.jpg" alt="">
                <p>JOJO magazine 2023 WINTER</p>
            </div>
<!--https://static.jojowiki.com/images/c/c9/latest/20250205232847/Hirohiko_Araki_Yebisu1.jpg-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_2021_2.jpg" alt="">
                <p>Hirohiko Araki x Yebisu Beer Collaboration, 2022</p>
            </div>
<!--https://static.jojowiki.com/images/c/cd/latest/20260108030914/TJL_Vol1_Clean.png-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_2021_3.png" alt="">
                <p>Jump Comics The JOJOLands, 2021</p>
            </div>
            <!--SOURCE: https://x.com/ByAraki/status/1988329471095828724/photo/1-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_img4.jpg" alt="jojolion_img">
                <p>JoJolion, 2016.</p>
            </div>
            <!--https://static.jojowiki.com/images/f/f9/latest/20200918210956/Rohan_DNA_BM_Clean_Cover.png-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_img5.png" alt="">
                <p>Bessatsu Margaret, 2017</p>
            </div>
            <!--SOURCE: https://www.southlakessentinel.com/wp-content/uploads/2022/02/unnamed-20.png-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gal_img_6.webp" alt="">
                <p>Stone Ocean - South Lakes Sentinel, 2022</p>
            </div>

             <!--SOURCE: https://pbs.twimg.com/media/G5JzYsoWcAApFPD?format=jpg&name=4096x4096-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_img7.jpg" alt="jojolion 2011 _img">
                <p>JoJolion, 2011</p>
            </div>
            <!--https://pbs.twimg.com/media/G5Ebiu-XUAADuEs?format=jpg&name=large-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_img_8.jpg" alt="Jotaro and Iggy image">
                <p>Jotaro & Iggy with Fujiyama, 2012</p>
            </div>
            <!--SOURCE: https://pbs.twimg.com/media/G4yCRdsW0AAMfGa?format=jpg&name=large-->
            <div class="gallery_2021" class="gallery_items">
                <img src="images/gallery_img_9.jpg" alt="steel ball run manga cover img">
                <p>Steel Ball Run, 2006.</p>
            </div>
        </div>
        

    </main>


	<!--add footer using php-->
   <?php include('./inc/footer.php'); ?>

</body>