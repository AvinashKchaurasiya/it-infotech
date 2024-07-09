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

    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content:center; padding:0px 20px 0px 20px;">
            <div class="col-sm-7">
                <div class="hero-section">
                    <h1>Welcome to IT Infotech!</h1>
                    <p>We provide cutting-edge software and web solutions to help your business grow and thrive.</p>
                    <a href="#" class="btn btn-primary">Discover Our Services</a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="hero-image">
                    <img src="Assets/images/hero/team.png" width="100%" height="100%" alt="IT Infotech Hero Image">
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