-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2026 at 09:54 AM
-- Server version: 10.11.14-MariaDB-0+deb12u2
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce154_mf25266`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Published` date NOT NULL,
  `Stars` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Type`, `Price`, `Category`, `Image`, `Description`, `Published`, `Stars`) VALUES
(1, 'Jojonicle', 'Artbook', 54, 'Featured', 'images/featuredArtbook2.webp', 'Includes illustrations of the Nagasaki and Kanazawa venues, including the official visuals drawn by the artist and Hirohiko Araki new interview: Talking about the official visual.', '2020-03-20', 4),
(2, 'Golden Wind Colorful Tote Bag', 'Bag', 12.9, 'Featured', 'images/shop_featured_tote1.jpg', 'This tote bag is a collaboration item of \"JOJO\'S BIZARRE ADVENTURE No. Gohei Golden Wind x Abbey. Shipments will take 1-2 weeks to be delivered from our suppliers and orders are processed once received in our warehouse.', '2021-02-10', 2),
(3, 'Jojo S V3 Ex Mug', 'Decor', 18.95, 'Featured', 'images/shop_featured_mug1.jpg', 'This ceramic cup/mug is the perfect gift for any occasion, and with its customized design, it is sure to please anyone who receives it. The best part about our mug is the high-quality printing that ensures your mug will look great for years to come.', '2016-06-09', 4),
(4, 'Jojo A-Go!Go!', 'Artbook', 45, 'Featured', 'images/shop_featured_jojoAgo.jpeg', 'Hirohiko Araki’s JoJo’s Bizarre Adventure is a beloved epic with dedicated fans everywhere under the sun. The art book JoJo A-Go!Go! collects exclusive illustrations and color pages as it dances through Stardust Crusaders!', '2000-09-12', 3),
(5, 'Stand Users Tote Bag', 'Bag', 12.95, 'Featured', 'images/shop_featured_tote2.jpg', 'Handcrafted to ensure the highest quality standards but is still affordable. Premium polyester-cotton blend material tote bag. Durable and strong with two straps for over-the-shoulder carrying. Use as a book bag, grocery bag, shopping bag, or daily for carrying.', '2012-05-04', 3),
(6, 'Jojo S Bizarre Adventure Mug', 'Decor', 18.95, 'Featured', 'images/shop_mug_2.jpg', 'Large tea cup with bright colours inspired in Japanese anime television series JoJo\'s Bizarre Adventure, an adaptation of the Japanese manga series. Ceramic coffee cup has a capacity of 350 ml (35 cl) and is made of ceramic. This large mug measures 9.5 cm in height and 8 cm in diameter and is shipped in a protective box.', '2018-03-13', 4),
(7, 'Stardust Crusaders, Vol. 1', 'Manga', 12.99, 'Manga', 'images/shop_manga_item1.jpg', 'A fiendish villain once thought to be dead has resurfaced and become even more powerful! To fight this evil, the aging Joseph Joestar enlists the help of his hot-blooded grandson, Jotaro Kujo. Together they embark on a perilous adventure that will take them around the world!', '2019-01-14', 3),
(8, 'Golden Wind Vol.5', 'Manga', 15.99, 'Manga', 'images/shop_manga_item2.jpg', 'A multigenerational tale of the heroic Joestar family and their never-ending battle against evil!The legendary Shonen Jump series is now available in deluxe hardcover editions featuring color pages! JoJo\'s Bizarre Adventure is a groundbreaking manga famous for its outlandish characters, wild humor and frenetic battles. There\'s no rest for the wicked! The crew\'s next stop is scenic Venice, but they\'re going to have to fight for every inch of progress. Standing in their way is an enemy who seems to have no weaknesses whatsoever. They\'ve gotten lucky so far, but will they overcome this new obstacle and get out with their lives intact?', '2022-09-29', 5),
(9, 'Rohan Kishibe Vol 1', 'Manga', 25, 'Manga', 'images/shop_manga_item3.jpg', 'Debuting in the same deluxe hardcover format as the hit JoJo’s Bizarre Adventure manga is a standalone series featuring everyone’s favorite manga artist, Rohan Kishibe! Rohan has freed himself of Josuke Higashikata, but that doesn’t mean his life is going to be easy! No, now the supernatural has come knocking, and Rohan must contend with an all-new level of bizarre adventure…', '2019-10-31', 4),
(10, 'Demonic Heartbreak', 'Manga', 10.65, 'Manga', 'images/shop_manga_item4.jpg', 'The story is set between Stardust Crusaders and Diamond is Unbreakable. A decade after DIO\'s death, Hol Horse accepts a request from an old acquaintance\'s mother to find and bring back her missing parrot, who was raised with Pet Shop. He travels to Morioh with Boingo after seeing a prediction from Tohth, where the two encounter Josuke Higashikata and Ryoko Kakyoin. The four of them are psychologically tortured by illusions of DIO\'s presence and memories of the past, due to the parrot\'s Stand and a mysterious assailant.\r\n', '2022-05-18', 3),
(11, 'Purple Smoke Distortion', 'Manga', 23, 'Manga', 'images/shop_manga_item5.jpg', 'Purple Haze is a humanoid Stand of height and build similar to Fugo\'s. Its face and body are patterned by horizontal lozenges of alternating shade, and armor pieces are present on its shoulders, elbows, and knees. It has spikes along its back. Its lips and appendages are loosely stitched, and its eyes have distinct irides with miotic pupils.', '2010-12-09', 5),
(12, 'Steel Ball Run Vol. 6', 'Manga', 12.95, 'Manga', 'images/shop_manga_item6.jpg', 'Set in the United States in 1890, the story follows Johnny Joestar, a paraplegic ex-jockey, and Gyro Zeppeli, master in a mystic art named the Spin, as they compete with a vast number of others in the Steel Ball Run race: a mad-dash across America for a grand prize of 50 million dollars.', '2017-01-22', 4),
(13, 'How Many People?', 'Art', 156, 'Artwork', 'images/shop_artworks2.png', 'Jojo\'s Bizarre Adventure has directly inspired countless pieces of global media, including the Japanese TCG and TV franchiseYu-Gi-Oh! and numerous American TV series, from Family Guy to Paw Patrol.Jojo\'s\' characteristic iconography has become so pervasive that it has long embedded itself in international meme culture. After releasing the TV adaptations of the first two arcs in the series, the show\'s \"To Be Continued\" screens, scored by Yes\' 1971 hit Roundabout, were parodied into virality through video sites like Youtube and Vine.', '2000-10-01', 4),
(14, 'Ripples Of Adventure', 'Art', 89, 'Artwork', 'images/shop_artworks1.png', 'A second venue was opened in Osaka from November 24, 2018 to January 14, 2019. Another venue was held in Nagasaki from January 25 to March 29. A venue in Kanazawa was initially announced to be held from April 25 to May 23. However, it was postponed to a later date due to health concerns about the COVID-19 pandemic. On August 18, 2021 it was announced via Twitter from the official Exhibition account that the Kanazawa venue would be opening in 2022. Said new instance ran from April 30 to May 28, 2022.', '2016-04-14', 5),
(15, 'Welcome to Morioh Cho', 'Art', 95, 'Artwork', 'images/shop_artworks4.png', 'Morioh has undergone a huge earthquake and giant unnatural protuberances, called \"Wall Eyes\" have sprung out of the ground across the town, splitting it in two. While hiding from a stalker, a girl finds a mysterious man stuck under some earth, with a bite-shaped wound around his star-shaped birthmark. Assuming he might have some kind of infectious disease, the girl decides to not approach him and calls the fire department.', '2020-05-29', 5),
(16, 'Prisoner Jolyne Cujoh', 'Art', 45, 'Artwork', 'images/shop_artworks3.png', 'Jolyne befriends Ermes Costello in prison while awaiting her transfer, and also receives a gift from her mother, a pendant on which she pricks herself and throws away immediately, unaware that it was a fragment of a Stand Arrow. During the transfer, Jolyne awakens her power to unravel into strings, but without friends or money, Jolyne is in a precarious position in the Green Dolphin Street Prison. Victimized by her cellmate Gwess.', '2020-01-17', 5),
(17, 'Gold Strikes Back', 'Art', 101, 'Artwork', 'images/shop_artworks5.png', 'Gold Experience is a humanoid Stand of slender build and average height, like Giorno. The top of its head is similar to that of a typical helmet of a soldier with a ladybug-like design, with curved markings similar to the letter J coming down from the eyes on both sides. There are stylized wings on its shoulders and large ladybugsW all over its body, which seem to parallel the ladybug emblems present on Giorno\'s design.', '2026-03-11', 5),
(18, 'Under Execution Under Jailbreak', 'Art', 202, 'Artwork', 'images/shop_artwork6.png', 'Under Execution, Under Jailbreak is a one-shot featuring a prisoner condemned to death. The prisoner discovers and attempts to escape several deadly traps within his jail cell, slowly realizing that it doubles as his execution room. The one-shot was originally published in issue 2 of Super Jump in 1995. Dolce, and His Master is a two-chapter short story about a cat named Dolce and his master, two survivors aboard a crashed yacht stranded on the open sea. The short story was originally published in issues 11 and 12 of Manga Allman in 1996.', '2016-06-24', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `user_id`, `comment`, `stars`) VALUES
(1, 1, 17, 'This art book is the best thing for JoJo fans, particularly the ones that are obsessed with the art of it, the book contains 200 pages, the first 30 or so pages aren’t art they’re more related to the exhibition that happened, the actual art is really good, the prints are really good quality and look perfect, the colours are on point , the pages themselves are really good too they’re all matt and thick so it won’t be damaged easily, this is the perfect gift or collectible for JoJo fans.', 4),
(2, 1, 15, 'I love JoJo, and this ArtBook is amazing. I\'m so happy with this purchase', 5),
(3, 2, 16, 'I have used this tote a good bit over the past three months since I bought it in June, but I do not think it is quite big enough to use on a work commute or while traveling, probably mainly because of the shorter handles. However the shorter handles make it a bit tight to wear on your shoulder…', 3),
(4, 2, 17, 'I love that the bag has two handle lengths, allowing you to easily switch from carrying the bag with your hand or on your shoulder. While there is no full zipper, there are lots of snaps, which made everything feel secure. And then there are two interior pockets (one with a zipper!)\r\n\r\n', 4),
(5, 3, 18, 'Fast and easy to order on the website. Quality of mugs that arrived are excellent, Quick and professional service.', 5),
(6, 3, 15, 'It was uncomfortably lightweight, and one of the glasses arrived already broken inside the package. Design is cool tho.', 2),
(9, 4, 16, 'Artwork aside, the designers of the book have done a fantastic job. It reads like a music ensemble, split into sections of the \'song\'. Each spread is carefully thought out, some images collaged or repeated and dissected, others simple full spread bleeds that let the original pieces talk for themselves. ', 5),
(10, 4, 18, 'Absolutely stunning art-of book. This is my first exposure to the world of JoJo, and I am intrigued to immerse myself further. The question is, which first- the manga or the anime?', 5),
(11, 5, 18, 'I have just been using these to create Christmas gifts. They are a good size and well made. I washed the bags at 60 degrees, tumble dried them and ironed them before use and am very pleased with the result. Calico needs to be pre-washed for shrinkage and because it can be coated with some sort of preservative which doesn\'t smell good. ', 4),
(12, 5, 17, 'Eco-Friendly- It\'s great to have a reusable option that helps reduce plastic waste. Knowing these are made from natural materials adds to their appeal. The simple, natural design is stylish and versatile. They work for any occasion, from casual shopping trips to beach days.', 5),
(13, 7, 16, 'Would highly recommend, even to fans who have already seen the anime, as the manga offers a new experience and showcase of Araki’s art (the occasional full-colour pages are a real treat for this reason). The story is top notch, albeit as bizarre as the title suggests but is an incredible opening to the series’ third part. These new hardback covers are beautifully done, with characters from earlier parts reborn .', 5),
(14, 7, 15, 'Stardust Crusaders is one of the most recognisable Jojo parts in the West, being the first to release in graphic novel format. It\'s introduction of stands and a \'Around the world\' story line, sets it apart from its predecessors, as well as a fresher take on the Jojo of the time period, being the silent delinquent.', 5),
(15, 8, 18, 'Bought as a gift for my little sister for Christmas and she loved it', 4),
(16, 8, 17, 'Holy peak', 5),
(17, 9, 15, 'Arrived in good condition. Slight small dent on the bottom of the spine. Great collection of four short \"horror\" stories featuring the character of Rohan Kishibe, from Jojo\'s Bizarre Adventure Diamond is Unbreakable. Highly recommend purchasing if you are a fan of the series or of the character himself.', 5),
(18, 9, 16, 'Story is quite bizarre. Like Jojos wanted to have an adventure or something.', 3),
(19, 10, 18, 'Questo volume è il volume conclusivo di una storia a fumetti composta da 3 volumi. È uno spin-off della saga di \"Le Bizzarre avventure di Jojo\". Non ritengo sia necessario aver letto o conoscere la trama dell\'opera principale per poter godere appieno di questa opera, in ogni caso è fortemente consigliato almeno per avere un quadro maggiore dell\'intera vicenda.\r\n', 5),
(20, 10, 15, 'The box was put into a very well padded, hard and heavy cardboard box, well-padded inside on all sides, had its original plastic wrapper and was in perfect condition when I took it out. No missing parts (as far as I saw, haven\'t opened all the volumes to check the pages, but I doubt Viz Media releases manga with missing pages in collector edition boxes. Highly recommending this listing.', 5),
(21, 11, 16, 'The story never lets you down. Great read as always. Should\'ve been loonger imo.', 3),
(22, 11, 18, 'Son loves them, he\'s was very pleased', 5),
(23, 12, 15, 'This was absolutely the best thing I have ever read! Great book. Back came quite badly scratched.', 4),
(24, 12, 15, 'Bought this book for my sister for Christmas as she collects them. Hours of reading and adventures.', 5),
(25, 13, 16, ' I think Araki’s art is actually pretty easy to explain to someone who hasn’t read Jojo. You can see a lot of different inspirations in his work: western culture, classical art, fashion magazines and a lot of specific artists he mentioned in the past. What he wants to express is the beauty of the human spirit and body, and because of that his characters defy the normal expectations of anatomy, gender norms, even colors.', 5),
(26, 13, 17, 'I couldn’t be happier with the service I received! From start to finish, everything was handled with care and professionalism. The team was always there to answer my questions and made sure I was completely satisfied. It’s rare to find such great customer service these days—highly recommend!', 5),
(27, 14, 18, 'This is hands down one of the best purchases I\'ve made this year. The value for money is incredible and I\'ve already recommended it to several friends and family members. Don\'t hesitate if you\'re on the fence about this one. I love hirohiko araki sm', 5),
(28, 14, 16, 'decided to buy this on a whim and I\'m so glad I did. The attention to detail is impressive and you can tell they really care about their customers.', 5),
(29, 15, 15, 'Got as a gift for a friend. They were happy with it. High quality art inside, No complaints at all.', 5),
(30, 15, 16, 'not as big as I wanted it to be but still beautiful glad to be in possession of one of my favourite artworks ', 3),
(31, 16, 18, 'alright condition, slight damage to the corners of the box. The figure was easy enough to assemble and stood pretty straight on its standing plate (if you can call it that). Overall it’s good for it’s price, I would recommend to those looking for figures on a rough budget.', 4),
(32, 17, 18, 'love it so much cant wait to surprise my husband ', 5),
(33, 18, 15, 'so cool.', 4),
(40, 1, 18, 'I LOVE THIS BOOK SO MCUH', 5),
(41, 6, 19, 'This mug saved my life you all need to get one', 5),
(42, 5, 19, 'its so small and lowkey useless but yeah cool design ig...', 2),
(43, 17, 19, 'most beautiful artpiece ever I CANT i love it so much', 5),
(44, 14, 19, 'its so cool i wish it was bigger or had a frame', 3),
(45, 2, 18, 'this bag is seriously so cool have gotten tons of compliments on it lol', 4),
(46, 15, 42, 'yes this product is really nice ', 4),
(47, 1, 53, 'I liked this book a lot', 4),
(48, 9, 55, 'really cool story', 5),
(49, 2, 57, 'wow I really love this bag', 4),
(50, 10, 57, 'love this manga so much but came broken', 2),
(51, 8, 64, 'this is such a great manga', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(15, 'Kenma', 'Haikyuu', 'kenma@hotmail.com', 'kenma111', '$2y$10$LYgjfUleha.R4OU0S8QZaePI2/6scSsaua.vvqmF6xvcguED3AREe'),
(16, 'Miku', 'Hatsune', 'HatsuneMiku@hotmail.com', 'MikuMiku', '$2y$10$3bIi/Alc/LQjS0HNf6TK8.bIPg.CpMao3FAfJ7wPHe12O8fahhxky'),
(17, 'Futaba', 'Sakura', 'futaba@hotmail.com', 'futaba111', '$2y$10$RmUlfbp.4kOPkaKlTAHzrecaMJVka0Lw1NxhNA8yIY0OIp/BvX2Aa'),
(18, 'Sypha', 'Belmont', 'Sypha@hotmail.com', 'syphaBelmont9', '$2y$10$UCCWOFnZoVb.YlbTkk.tResujMCJEyXQysyhHCaMsgzWsgIn.qC7W'),
(19, 'Hitori', 'Gotoh', 'notBocchi@gmail.com', 'BOCCHI_ROCK', '$2y$10$bzqkTjiRYIKT6H6vXUQBweYLbuEbSB1UvTnOjcbH44DbExch1GF2K'),
(29, 'round', 'fib', 'fib@hotmail.com', 'fib111', '$2y$10$KoZ0YblxPAD.09PoTiQL7uiLzSs0XADAt5PozA1FMZa6HYqiNtI52'),
(32, 'Ryo', 'Yamada', 'RyoBocchi@gmail.com', 'Ryo101', '$2y$10$5/JgPeHoKvEBniiXlZhDjuffln2j/lCHV1x7IDxrKUeyqzN2kHGjO'),
(40, 'Tifa', 'Lockhart', 'Tifalockhart101@hotmail.com', 'Tifa77', '$2y$10$eEU.bg0Jj9C3D/p2bksID.uBRIiw1qDNz/wB4RGH2unvh1l.55CjO'),
(41, 'Jinx', 'Powder', 'jinx99@hotmail.com', 'jinxxP', '$2y$10$Kw/WgfMh6m0aH5RgihYsk.VkTX7m6kohAdMxkj03ejtHeuvidJBAa'),
(42, 'Diane', 'Ngyuen', 'DianeN@hotmail.com', 'DianeNgyuen11', '$2y$10$MtPAJCnq54H9TfH7Vc8iru//mJV1Px/4MQZdhdhbziZEtNVanb/MG'),
(53, 'mon', 'fig', 'mon@hotmail.com', 'mon11', '$2y$10$nsFn2NQ91MZngDrMWA/NveFMvADkoQMpli5o/DR73WDRrp7VBwQyS'),
(54, 'asa', 'mitaka', 'mf25266@essex.ac.uk', 'asa', '$2y$10$z6sjSCzlhGWBg/.lwdk95uXCzjyzPq75GzRq91ViLtlXN.TTW0Pyq'),
(55, 'yassin', 'alswaifi', 'yassin.alswaifi@outlook.com', 'vern_6', '$2y$10$PTMarBanPZ4j0KyP07TaJ.p24XjV.jlnkB18zuzbX/hQ2ncOxD1a6'),
(56, 'josuke', 'fig', 'josuke23@gmail.com', 'josuke11', '$2y$10$myDuTtro6rLAeiCmxZQOmuHvI0H.uB97INZIJcVmGZ.IDq/0.Mley'),
(57, 'yotsuba', 'loki', 'yotsuba11@hotmail.com', 'Yotsuba_', '$2y$10$sJwQJjeQJCWbM9NtL.QP1uV1HJnds6nm8t6t8tAt6fxDD5PjuVqh6'),
(58, 'aerith', 'gainsborough', 'aerith@hotmail.com', 'aerith', '$2y$10$Pwo75Kozp9G8e.JZr1vz0.yUKlsUA0fb19khdHKIelZIhsysYE0kS'),
(59, 'cloud', 'strife', 'cloud@hotmail.com', 'cloud', '$2y$10$DmpEQNF1zMfJ3vlxbSqeq.ikc5Our3fuhA00tL9STOE9s18.opGyu'),
(60, 'ren', 'akiyama', 'ren@hotmail.com', 'ren', '$2y$10$gTDEG8H2jWEGZ/RZFE0h5e4HirFZQPv0U296hrhDaexg5LNNtqzQS'),
(61, 'akechi', 'persona', 'akechi@gmail.com', 'Akechi_2', '$2y$10$hoRHTfWIh37dDB3OAllIOexWxcSoTWZuywsJ/fQP1.hGgSkNAbRfa'),
(62, 'tali', 'cap', 'yaaboitt@gmail.com', 'taliquewashere', '$2y$10$7sXgiEPTxcpToUgrvJ/sB.5xrK5q6OqHo2w3eN9lUBZaNYdG5nvvq'),
(63, 'childe', 'tartaglia', 'ajax@hotmail.com', 'Tartaglia6_6', '$2y$10$8eRvsAGGhMNTZcO858Twpe9dxCjSs8hJZsKJVHryvBhttvqjxGWLC'),
(64, 'yatora', 'yaguchi', 'yato12@hotmail.com', 'yatora_Yaguchi', '$2y$10$t4Uvq4DfYwp5II7d8zcJiO35fUnhepGbrbDux4peuDCAKpbPareFu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviews_ibfk_1` (`product_id`),
  ADD KEY `reviews_ibfk_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
