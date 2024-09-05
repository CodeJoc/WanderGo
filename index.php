<?php
include './database/conn.php';

try{
    if(isset($_POST['book'])){
        $name = $_POST['name'];
        $place = $_POST['place'];
        $members = $_POST['members'];
    
        $q = " INSERT INTO `booking`(`name`, `place`, `members`) VALUES ('$name','$place','$members')";
        $query = mysqli_query($conn, $q);
        if($query){
            $msg = "Booked your tour successfully";
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('$msg');
                    window.location.href='index.php';
                    </script>");
        }
    }
}
catch(Exception $e){
    $error_msg= $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanderGo</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">

    <!--custom js file link-->
    <script src="js/index.js"></script>

    <style>
        .home {
            margin-top: 9rem;
            margin: 0 auto;
            width: 90%;
            border-radius: 1rem;
            background: url(images/bg1.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            min-height: 80vh;
            align-items: center;
            justify-content: center;
        }

        .home .content {
            text-align: center;
        }

        .home .content span {
            font-weight: bolder;
            color: #333;
            font-size: 4vw;
            display: block;
        }

        .home .content h3 {
            font-size: 6vw;
            color: #333;
        }

        .home .content p {
            max-width: 70rem;
            margin: 1rem auto;
            font-size: 2rem;
            color: #555;
            line-height: 2;
            font-weight: 650;
        }

        .home-btn {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.7rem;
            color: white;
            border: .2rem solid #FF1700;
            cursor: pointer;
            background: #FF1700;
            border-radius: 5rem;
            text-decoration: none;
        }

        .home-btn:hover {
            background: #333;
            color: #FF1700;
        }
    </style>
    
</head>
<body>

    <!--header section-->
    <header class="header">

        <div id="menu-btn" class="fa fa-bars">
        </div>

        <a href="" class="logo">
            <i class="fa fa-paper-plane"></i>
            WanderGo
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#destination">Destinations</a>
            <a href="#service">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Reviews</a>
</nav>

        <a href="#book-form" class="btn">Book Now</a>
    </header>
    

    <!--home section-->

    <section class="home" id="home">
        <div class="content">
        <span>Join Our Journey</span>
        <h3>Into the Unexplored</h3>
        <p>Let us craft your perfect India adventure.
           Tailored, meticulously designed tour packages for unforgettable experiences.</p>
        <a href="#book-now" class="home-btn">Book now</a>
        </div>
    </section>


    <!--booking form section-->
    <section class="book-form" id="book-form">
        <form action="#" method="POST">

            <div class="inputBox">
                <span>Your Name:</span>
                <input type="text" placeholder="Name" name="name">
            </div>

            <div class="inputBox">
                <span>where to?</span>
                <input type="text" placeholder="Place name" name="place">
            </div>


            <div class="inputBox">
                <span>how many people?</span>
                <input type="number" placeholder="Number of people" name="members">
            </div>

            <button class="btn" type="submit" name="book">Book Now</button>

        </form>
    </section>


    <!--about section starts-->
    <section id="about" class="about">
        <div class="video-container">
            <img src="images/natr.jpg" alt="" class="image">
        </div>

        <div class="content">
        <span>Why Choose Us?</span>
        <h3>Embrace Nature's Wonders</h3>
        <p>We offer thrilling adventures for the young and young-at-heart, from trekking and rafting to yak safaris and paragliding. Enjoy family-friendly stays with breathtaking views, ensuring every member has an unforgettable experience. Discover the best of India with our expertly crafted holiday packages.</p>
        <a href="#" class="btn">Learn More</a>
        </div>
    </section>


    <!--destination section start-->
    <section class="destination" id="destination">
        <div class="heading">
        <span>Our Destinations</span>
        <h1>Your Journey, Our Expertise</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/jamt.jpg" alt="">
            <div class="content">
                <h3>Jammu & Kashmir</h3>
                <p>Experience the unparalleled beauty of Jammu and Kashmir, 
                    where majestic mountains and tranquil valleys await. 
                    Whether it's adventure or serenity you seek, this paradise on Earth offers it all.
                    Your journey begins here.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
            </div>

            <div class="box">
                <img src="images/man.jpg" alt="">
            <div class="content">
                <h3>Manali</h3>
                <p>Escape to Manali, where lush valleys and snow-capped peaks 
                    create a picturesque retreat. Enjoy thrilling adventures and 
                    serene moments in this Himalayan gem.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/rish.jpg" alt="">
            <div class="content">
                <h3>Rishikesh</h3>
                <p>Find peace and adventure in Rishikesh, the yoga capital of 
                   the world. Experience spiritual serenity and exhilarating 
                   river rafting in this tranquil haven.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/uda.jpg" alt="">
            <div class="content">
                <h3>Udaipur</h3>
                <p>Discover the romance of Udaipur, with its stunning lakes and 
                    regal palaces. Immerse yourself in the grandeur and charm of 
                    this enchanting city.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/jai.jpg" alt="">
            <div class="content">
                <h3>Jaisalmer</h3>
                <p>Step into the golden sands of Jaisalmer, where ancient forts and vibrant
                    markets bring the desert to life. Experience the rich heritage and timeless 
                    beauty of this desert city.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

            <div class="box">
                <img src="images/var.jpg" alt="">
            <div class="content">
                <h3>Varanasi</h3>
                <p>Explore Varanasi, one of India’s oldest cities, where the sacred 
                    Ganges River and vibrant cultural rituals offer a profound 
                    and memorable experience.</p>
                <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box">
            <img src="images/goa.jpg" alt="">
        <div class="content">
            <h3>Goa</h3>
            <p>Relax in Goa’s sun-kissed beaches and vibrant nightlife. Enjoy a blend of laid-back luxury and lively entertainment in this 
                tropical paradise.</p>
            <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
        </div>
        </div>

        <div class="box">
            <img src="images/mun.jpg" alt="">
        <div class="content">
            <h3>Munnar</h3>
            <p>Immerse yourself in the lush tea gardens and cool climate of Munnar. 
                This hill station offers a serene escape amidst stunning green landscapes.</p>
            <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
        </div>
        </div>

        <div class="box">
            <img src="images/mal.jpg" alt="">
        <div class="content">
            <h3>Maldives</h3>
            <p>Unwind in the Maldives, where crystal-clear waters and luxurious resorts create
               an idyllic tropical getaway. Perfect for romance and relaxation.</p>
            <a href="#">Read more&nbsp;<i class="fa fa-angle-right"></i></a>
        </div>
        </div>

        </div>
    </section>

    <!--services section-->

    <section class="service" id="service">
        <div class="heading">
            <span>our Services</span>
            <h1>Endless Adventures Await</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>worldwide destinations</h3>
                <p>Explore the globe with our expertly crafted itineraries.
                   Your next adventure is just a click away.</p>
            </div>

            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>thrilling adventures</h3>
                <p>From mountain treks to ocean dives, we offer adrenaline-pumping 
                   experiences for the adventure seeker in you.</p>
            </div>

            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>Culinary Delights</h3>
            <p>Savor the flavors of the world with our gourmet food and drink experiences,
                tailored to your taste.</p>
            </div>

            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>Comfortable Stays</h3>
            <p>Enjoy affordable, luxurious hotels that promise comfort and convenience,
                wherever you travel.</p>
            </div>

            <div class="box">
                <i class="fa fa-bars"></i>
                <h3>24/7 Support</h3>
            <p>We’re here for you, day and night, ensuring your travel experience is 
                seamless and stress-free.</p>
            </div>
            
            <div class="box">
                <i class="fa fa-female"></i>
                <h3>Happy Travelers</h3>
            <p>Join our community of satisfied customers who trust us to make their travel
                 dreams come true.</p>
            </div>
        </div>
    </section>

    <!--gallery section starts-->
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>our gallery</span>
            <h1>we record memories</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/jam2.jpg" alt="">
                <span>travel spot</span>
                <h3>Jammu & Kashmir</h3>
            </div>

            <div class="box">
                <img src="images/udat.jpg" alt="">
                <span>travel spot</span>
                <h3>udaipur</h3>
            </div>

            <div class="box">
                <img src="images/goat.jpg" alt="" style="height: 281px;">
                <span>travel spot</span>
                <h3>goa</h3>
            </div>

            <div class="box">
                <img src="images/mant.jpg" alt="">
                <span>travel spot</span>
                <h3>manali</h3>
            </div>

            <div class="box">
                <img src="images/jait.jpg" alt="">
                <span>travel spot</span>
                <h3>Jaisalmer</h3>
            </div>

            <div class="box">
                <img src="images/munt.jpg" alt="">
                <span>travel spot</span>
                <h3>munnar</h3>
            </div>

            <div class="box">
                <img src="images/risht.jpg" alt="">
                <span>travel spot</span>
                <h3>Rishikesh</h3>
            </div>

            <div class="box">
                <img src="images/vart.jpg" alt="">
                <span>travel spot</span>
                <h3>varanasi</h3>
            </div>

            <div class="box">
                <img src="images/malt.jpg" alt="">
                <span>travel spot</span>
                <h3>Maldives</h3>
            </div>

        </div>
    </section>

    <!--review section starts-->
    <section class="review" id="review">
        <div class="heading">
            <span>Customer Review</span>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/manr.jpg" alt="">
                </div>
                <div class="content">
                <a href="#" class="link">"Life is a Journey, Not Just a Destination"</a>
                <p>This travel experience was nothing short of incredible. Every moment was thoughtfully planned, 
                    making our journey unforgettable.</p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i>03rd January,2023</a>
                        <a href="#"><i class="fa fa-user"></i>by Akash</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/malr.jpg" alt="">
                </div>
                <div class="content">
                <a href="#" class="link">"Live Every Moment to the Fullest"</a>
                <p>Our trip was a perfect blend of adventure and relaxation. Every detail was handled flawlessly,
                    making it an experience we'll never forget.
                </p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i> 22nd March,2023</a>
                        <a href="#"><i class="fa fa-user"></i>by Shruti</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/munr.jpg" alt="">
                </div>
                <div class="content">
                <a href="#" class="link">"You Only Live Once"</a>
                <p>This trip was a once-in-a-lifetime experience! Every moment was perfectly curated, 
                    making it truly unforgettable.</p>
                    <div class="icon">
                        <a href="#"><i class="fa fa-calendar"></i>02nd May,2023</a>
                        <a href="#"><i class="fa fa-user"></i>by Ketan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--banner section starts-->
    <section class="banner">
    <div class="content">
        <span>Begin Your Journey</span>
        <h3>Explore the Wonders of Our Nation</h3>
        <p>Step into a world of endless possibilities, where every destination tells a story and
            every journey transforms into a cherished memory. From the towering peaks of the Himalayas
            to the serene beaches of the Maldives, explore diverse cultures, breathtaking landscapes, 
            and hidden gems that few have seen. Your adventure begins here—let's make it a journey
            you'll never forget.</p>
        <a href="#book-form" class="btn">Book Now</a>
    </div>
    </section>


    <!-- Footer Section Starts -->
<section class="footer" id="footer">
    <div class="box-container">
        <div class="box">
            <a href="#" class="logo">
                <i class="fa fa-paper-plane"></i>
                WanderGo
            </a>
            <p>Embark on unforgettable journeys with WanderGo. We bring you the world's most breathtaking
                destinations, expertly curated for an adventure of a lifetime.</p>
            <div class="share">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home" class="links"><i class="fa fa-arrow-right"></i> Home</a>
            <a href="#about" class="links"><i class="fa fa-arrow-right"></i> About</a>
            <a href="#destination" class="links"><i class="fa fa-arrow-right"></i> Destinations</a>
            <a href="#service" class="links"><i class="fa fa-arrow-right"></i> Services</a>
            <a href="#gallery" class="links"><i class="fa fa-arrow-right"></i> Gallery</a>
            <a href="#reviews" class="links"><i class="fa fa-arrow-right"></i> Reviews</a>
            <a href="#contact" class="links"><i class="fa fa-arrow-right"></i> Contact</a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <p><i class="fa fa-map"></i> Maharashtra, India</p>
            <p><i class="fa fa-phone"></i> 123-456-7890</p>
            <p><i class="fa fa-envelope"></i> wandergo@gmail.com</p>
            <p><i class="fa fa-clock-o"></i> 8:00 AM - 10:00 PM</p>
        </div>

        <div class="box">
            <h3>About Us</h3>
            <p>At WanderGo, we are passionate about crafting extraordinary travel experiences.
                From hidden gems to world-renowned landmarks, we guide you to the heart
                of every destination.</p>
        </div>
    </div>
</section>
<!-- Footer Section Ends -->


    <div class="credit">Created by: <span>Harsh Doliya</span> | all rights reserved!</div>
</body>
</html>