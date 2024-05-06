<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GentMode Barbers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/svg.css">
</head>

<body>
    <!-- LANDING PAGE -->
    <section class="landing_page">
<!-- NAV BAR -->
<nav>
    <img id="logo" src="../assets/images/logo.png" alt="GentMode Barbers Logo">

    <!-- anchor tags -->
    <div class="anchors">
        <a href="#" id="home_anchor">Home</a>
        <a href="#service" id="services_anchor">Services</a>
        <a href="#about" id="about_anchor">About</a>
        <a href="#contact" id="contact_anchor">Contact</a>
    </div>

    <div class="right_nav">
        <!-- Dropdown container -->
        <div class="dropdown">
            <!-- Font Awesome user icon -->
            <i class="fas fa-user"></i>
            <!-- Dropdown content -->
            <div class="dropdown-content">
                <!--<a href="../pages/account.php">Account</a>-->
                <a href="../pages/logout.php">Logout</a>
            </div>
        </div>

        <a href="./booking.php">
            <button id="book_button" type="button">Book Now</button>
        </a>
    </div>  
</nav>


        <!-- COMPANY NAME -->
        <p id="company_name">GENTMODE</br>BARBER</p>
    </section>

    <section class="service_page" id="service">
        <!-- left header -->
        <div class="our_services">
            <p id="p1">OUR HANDLING</p>
            <p id="p2">OUR SERVICES</p>
        </div>

        <!-- VIEW MORE
        <button id="view_more" type="button">VIEW MORE</button> -->

        <!-- SERVICES -->
        <div class="services">
            <!-- CARD TEMPLATE -->
            <div class="card card1">
                <!-- image -->
                <img src="../assets/images/gentmode_cut.jpg" alt="GentMode Shave">

                <!-- content -->
                <div class="content">
                    <p class="title">Gentmode Cut</p>
                    <p class="description">Shampoo, Back massage, hot towel.</p>
                </div>

                <!-- icon w/shadow-->
                <div class="icon_container">
                    <div class="icon">
                        <span class="razor_svg"></span>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>

            <div class="card card2">
                <!-- image -->
                <img src="../assets/images/bald_cut.jpg" alt="GentMode Shave">

                <!-- content -->
                <div class="content">
                    <p class="title">Bald Cut</p>
                    <p class="description">Back massage, hot towel.</p>
                </div>

                <!-- icon w/shadow-->
                <div class="icon_container">
                    <div class="icon">
                        <span class="razor_svg"></span>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>

            <div class="card card3">
                <!-- image -->
                <img src="../assets/images/gentmode_shave.jpg" alt="GentMode Shave">

                <!-- content -->
                <div class="content">
                    <p class="title">Gentmode Shave</p>
                    <p class="description">Facial pleasure.</p>
                </div>

                <!-- icon w/shadow-->
                <div class="icon_container">
                    <div class="icon">
                        <span class="razor_svg"></span>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>

            <div class="card card4">
                <!-- image -->
                <img src="../assets/images/treatment.jpg" alt="GentMode Shave">

                <!-- content -->
                <div class="content">
                    <p class="title">Hair Treatment</p>
                    <p class="description">Anti-dandruff treatment.</p>
                </div>

                <!-- icon w/shadow-->
                <div class="icon_container">
                    <div class="icon">
                        <span class="razor_svg"></span>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT IS GENTMODE -->
    <section class="what_is_gentmode" id="about">
        <div class="filter">
            <p>WHAT IS GENTMODE BARBER?</p>
        </div>
    </section>

    <!-- OUR STORY -->
    <section class="our_story">
        <!-- about pic -->
        <img src="../assets/images/about_pic.jpg" alt="GentMode Cut">

        <div class="story">
            <p class="title">Our Story</p>
            <p class="description">Nestled in the vibrant heart of Cebu, GentMode Barbers has been a beacon of style and sophistication for a year now. Our barbershop stands as a cornerstone of grooming excellence in this bustling city, offering a haven for gentlemen seeking more than just a haircut. With a year of service under our belt, we've perfected the art of blending classic barbering techniques with contemporary trends, ensuring every client leaves feeling confident and refreshed. Situated in the center of Cebu, our location is not just convenient, but also emblematic of our commitment to serving the diverse needs of our community. Whether it's a classic cut or a modern style, GentMode Barbers invites you to experience the epitome of grooming excellence right here in the heart of Cebu.</p>
        </div>
    </section>

    <!-- CONTACT US -->
    <section class="contact_us" id="contact">
        <!-- form container -->
        <div class="form_container">
            <!-- actual form -->
            <form class="contact_form" id="contact_form" action="../pages/process.php" method="post">
                <label for="name">fullname (family name, first name, middle name) :</label>
                <input id="name" type="text" name="fullname">
                <label for="email">email address : </label>
                <input id="email" type="email" name="email">
                <label for="number">Subject :</label>
                <input id="number" type="text" name="subject">
                <label for="message">message:</label>
                <textarea name="message" id="message" rows="2"></textarea>
                <div id="contact_message" style="display: none;"></div>
                <input type="submit" id="form_submit" value="SUBMIT" name="submit">
            </form>
            <!-- social media -->
            <div class="socials">
                <div class="social_container">
                    <span class="facebook_svg"></span>
                    <p class="title">GENT MODE BARBERS</p>
                </div>
                <div class="social_container">
                    <span class="instagram_svg"></span>
                    <p class="title">GENTMODEBARBERS</p>
                </div>
                <div class="social_container">
                    <span class="location_svg"></span>
                    <p class="title">3 Juana Osmeña St,<br> Baseline, Cebu City,<br> 6000 Cebu, Cebu<br> City, Philippines,<br> 6000
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER ONE -->
    <section class="footer_one">
        <!-- information, service, contact -->
        <div class="topic_container">
            <div class="topic">
                <p class="title">Information</p>
                <a href="#about"><p class="subtopic">About</p></a>
                <a href="#service"><p class="subtopic">Services</p></a>
                <a href="#contact"><p class="subtopic">Contact</p></a>
            </div>

            <div class="topic">
                <p class="title">Services</p>
                <a href="#service"><p class="subtopic">Haircut</p></a>
                <a href="#service"><p class="subtopic">Shave</p></a>
                <a href="#service"><p class="subtopic">Hair Treatment</p></a>
            </div>

            <div class="topic">
                <p class="title">Contact</p>
                <p class="subtopic">Phone: (+63) 998 570 2003</p>
                <p class="subtopic">email: info@apexeldevelopment.com</p>
                <p class="subtopic">Monday - Friday: 10AM - 8PM<br>Saturday - Sunday: 9AM - 9PM</p>
            </div>

            <div class="topic">
                <p class="title">Sign up for our Newsletter</p>
                <p class="subtopic">Get offers and discounts to your inbox</p>

                <!-- newsletter form -->
                <form class="newsletter_form" id="newsletter_form">
                    <input class="news_email" id="email" type="email" placeholder="Your Email Address*">
                    <button id="subscribe_button" type="submit">SUBSCRIBE</button>
                </form>
                <div id="subscribe_message" style="display: none;">Subscribed successfully!</div>
            </div>
        </div>
    </section>

    <!-- FOOTER TWO -->
    <section class="footer_two">
        <p>Copyright © 2024 - GentMode Barbers.</p>
        <p id="created_by">Created by Elderfield, Montera & Rondina</p>
        <!-- insert socials if necessary -->
        <p>socials</p>
    </section>

    <script src="../script/main.js"></script>

</body>

</html>