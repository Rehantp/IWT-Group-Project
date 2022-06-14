<?php include 'db/connect.php' ?>
<?php //session_start(); ?>
<html>
<head>
    <!-- Stylesheet-->
  <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div>
        <div class="mySlides fade">
            <img src="images/img1.jpg" style="width:100%">
            <div class="imgTex">
                World Heritage
            </div>
        </div>

        <div class="mySlides fade">
            <img src="images/img2.jpg" style="width:100%">
            <div class="imgTex">
                Nature beauty
            </div>
        </div>

        <div class="mySlides fade">
            <img src="images/img3.jpg" style="width:100%">
            <div class="imgTex">
                Wild life
            </div>
        </div>

        <div class="mySlides fade">
            <img src="images/img4.jpg" style="width:100%">
            <div class="imgTex">
                Travel
            </div>
        </div>

        <div class="mySlides fade">
            <img src="images/img5.jpg" style="width:100%">
            <div class="imgTex">
                Spent your vacation
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>

    <div class="heading">
        <h1>Our Services</h1>
        <hr>
    </div>
    <div class="shadow">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="hotel and accommodations.php">
                <img src="images/hotel.jpg" width="600" height="400">
                </a>
                <div class="desc">Hotel & accomodation</div>
            </div>
        </div>
        
        
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="Where to travel.php">
                <img src="images/travel.jpg" width="600" height="400">
                </a>
                <div class="desc">Where to travel</div>
            </div>
        </div>
        
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="Tour_driver_page.php">
                <img src="images/driver.jpg" width="600" height="400">
                </a>
                <div class="desc">Tour driver</div>
            </div>
        </div>
        
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="welcome.php">
                <img src="images/guide.jpg" width="600" height="400">
                </a>
                <div class="desc">Tour Guide</div>
            </div>
        </div>
        
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="travel_agent.php">
                <img src="images/agent.jpg" width="600" height="400">
                </a>
                <div class="desc">Travel Agent</div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!--footer-->
    <?php include 'footer.php'; ?>

    <!-- javascript -->
    <script type="text/javascript" src="js/home.js"></script>
</body>


</html> 
<?php 