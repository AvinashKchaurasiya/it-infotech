<?php
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/images/logo/logo.png" style="width: 100%; height:100%;" />
    <title>BharatX Technologis - Software Solution Company</title>

    <!-- CSS links -->
    <?php
    require('includes/CSSlink.php');
    ?>
</head>

<body class="index-page">
    <!-- Header Menu bar -->
    <?php
    include('includes/header.php');
    ?>

    <!-- Hero Section -->

    <div class="container-fluid mt-5 p-0">
        <div class="row hero align-items-center justify-content-center text-center">
            <div class="col-12 p-0">
                <img src="Assets/images/hero/banner.png" class="img-fluid banner-image" alt="Hero Banner"/>
            </div>
        </div>
    </div>


    <!-- about section -->

    <div class="container mt-5" id="about">
        <div class="row pt-4">
            <div class="col-sm-12">
                <h2 class="about-title text-center">About Us</h2>
            </div>
            <?php echo ''; ?>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card about-card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="Assets/images/logo/logo.jpg" class="img-fluid rounded-start" alt="About company" title="It Infotech">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-text">
                                    At <b><q><span style="color: black;">BharatX</span> <span style="color: lightblue;">Technologies</span></q></b>, we specialize in transforming innovative ideas into robust, scalable digital solutions. Our expertise spans across application development, web development, and custom software solutions, ensuring we cater to a wide array of business needs. Our dedicated team of professionals is committed to delivering high-quality products that enhance user experiences and drive business growth.
                                    <br><br>
                                    We leverage the latest technologies and agile methodologies to provide tailored solutions that align with our clients' goals and vision. Whether you need a sleek and functional website, a mobile app that engages users, or a comprehensive software system to streamline your operations, we have the skills and experience to bring your project to life.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- our portfolio -->

    <div class="container" id="portfolio">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="portfolio-title text-center">Our Portfolio</h2>
                <div class="portfolio-filter">
                    <button class="filter-button active" data-filter="all">All</button>
                    <button class="filter-button" data-filter="web">Web</button>
                    <!-- <button class="filter-button" data-filter="app">App</button> -->
                    <!-- Add more filter buttons as needed -->
                </div>
            </div>
        </div>
        <div class="row portfolio-list mb-5">
            <div class="portfolio-item web">
                <img src="Assets/images/projects_image/school-erp.jpeg" alt="Project 1">
                <h3 class="project-title">
                    <a href="" style="text-decoration: none; color:#ff6f61;">School ERP System</a>
                </h3>
                <p class="project-description">Description of Project 1 goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="portfolio-item web">
                <img src="Assets/images/projects_image/realEstate.png" alt="Project 2">
                <h3 class="project-title">
                    <a href="" style="text-decoration: none; color:#ff6f61;">RealEstate</a>
                </h3>
                <p class="project-description">Description of Project 2 goes here. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="portfolio-item web">
                <img src="Assets/images/projects_image/e-shopper.png" alt="Project 3">
                <h3 class="project-title">
                    <a href="" style="text-decoration: none; color:#ff6f61;">Shopping website</a>
                </h3>
                <p class="project-description">Description of Project 3 goes here. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row portfolio-list">
            <div class="portfolio-item web">
                <img src="Assets/images/projects_image/portfolio.png" alt="Project 1">
                <h3 class="project-title">
                    <a href="" style="text-decoration: none; color:#ff6f61;">Portfolio</a>
                </h3>
                <p class="project-description">Description of Project 1 goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="portfolio-item web">
                <img src="Assets/images/projects_image/winkel.png" alt="Project 2">
                <h3 class="project-title">
                    <a href="" style="text-decoration: none; color:#ff6f61;">Shopping Website</a>
                </h3>
                <p class="project-description">Description of Project 2 goes here. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>

    <!-- contact us section -->

    <div class="container contact-section" id="contact">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="contact-title">Contact Us</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card contact-card mb-3">
                    <div class="row g-0">
                        <div class="col-sm-7">
                            <h3 style="font-weight:bold; text-align:center;">Get In touch</h3>
                            <div class="card-body">
                                <form id="contactForm" onsubmit="submitContact(event)">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="5" name="message" placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" id="submitBtn" class="btn btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-5" style="margin-top: 2rem;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.3745182213697!2d80.38401711192745!3d26.41138807685338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c413da95a7d25%3A0x5f94c0c7ff24c3e8!2sRama%20Devi%20Market!5e0!3m2!1sen!2sin!4v1720955766435!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="100%"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('includes/footer.php');
    ?>
</body>

</html>