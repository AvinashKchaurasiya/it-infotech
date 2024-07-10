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
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are creative</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are smart</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are amazing</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
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