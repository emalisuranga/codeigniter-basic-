<?php

include 'include/header.php';
?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("/w3images/mac.jpg");
        min-height: 100%;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }
</style>
<body>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
            <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">Responsive</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Passion</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Design</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Support</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
    </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3>We know design.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
        </div>
    </div>
</div>


</body>
</html>