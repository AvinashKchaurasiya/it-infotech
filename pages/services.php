<?php
error_reporting(E_ALL);
require('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= BASEPATH .'Assets/images/logo/logo.png '?>" style="width: 100%; height:100%;" />
    <title>IT Infotech - Software Solution</title>

    <!-- CSS links -->
    <?php
    require(BASEPATH.'includes/CSSlink.php');
    ?>
</head>

<body class="index-page">
    <!-- Header Menu bar -->
    <?php
    include(BASEPATH.'includes/CSSlink.php');
    ?>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Our service is Web Development, Web Designing, Application Development.</h1>
        </div>
    </div>
    <!-- Our Services -->

    <section class="services" id="services">
        <h2 class="services-title">Our Services</h2>
        <div class="services-container">
            <div class="service-card" id="service1">
                <div class="service-icon">&#127760;</div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">Creating responsive and modern websites to enhance your online presence.</p>
            </div>
            <div class="service-card" id="service2">
                <div class="service-icon">&#128241;</div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-description">Developing user-friendly mobile applications for both iOS and Android platforms.</p>
            </div>
            <div class="service-card" id="service3">
                <div class="service-icon">&#128187;</div>
                <h3 class="service-title">Custom Software Solutions</h3>
                <p class="service-description">Providing tailored software solutions to meet your unique business needs.</p>
            </div>
            <div class="service-card" id="service4">
                <div class="service-icon">&#127912;</div>
                <h3 class="service-title">UI/UX</h3>
                <p class="service-description">Our UI/UX design services are focused on creating intuitive, engaging, and visually appealing interfaces that not only look great but also provide seamless user interactions.</p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h4>Contact Us</h4>
                    <address class="footer-address">
                        <i class="bi bi-geo-alt-fill me-2"></i>Ramadevi Market,<br>
                        Kanpur Nagar, UP <br>
                        India<br>
                        <a href="tel:+91 88876 22182"><i class="bi bi-telephone-fill me-2"></i> +91 88876 22182</a><br>
                        <a href="mailto:avinash8564kumar@gmail.com"><i class="bi bi-envelope me-2"></i>avinash8564kumar@gmail.com</a>
                    </address>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <ul class="footer-social-icons">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- JS links -->
    <?php
    require(BASEPATH.'includes/JSlink.php');
    ?>
</body>

</html>