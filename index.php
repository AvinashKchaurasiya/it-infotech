<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/images/logo/logo.png" style="width: 100%; height:100%;" />
    <title>IT Infotech - Software Solution</title>

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
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Innovative Software Solutions for a Digital World</h1>
            <p class="hero-subtitle">Expert Development in Web, Mobile, and Custom Software</p>

            <a href="inquiry" class="hero-button">Get Started</a>
        </div>
    </div>

    <!-- about section -->

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card mb-3" style="border: none;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="Assets/images/logo/logo.png" class="img-fluid rounded-start" alt="About company" title="It Infotech">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pt-5">
                                <h5 style="text-align: justify;" class="card-text">
                                    At <b><q><span style="color: black;">IT</span> <span style="color: lightblue;">Infotech</span></q></b>, we specialize in transforming innovative ideas into robust, scalable digital solutions. Our expertise spans across application development, web development, and custom software solutions, ensuring we cater to a wide array of business needs. Our dedicated team of professionals is committed to delivering high-quality products that enhance user experiences and drive business growth.
                                    <br/><br/>
                                    We leverage the latest technologies and agile methodologies to provide tailored solutions that align with our clients' goals and vision. Whether you need a sleek and functional website, a mobile app that engages users, or a comprehensive software system to streamline your operations, we have the skills and experience to bring your project to life.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS links -->
    <?php
    require('includes/JSlink.php');
    ?>
</body>

</html>