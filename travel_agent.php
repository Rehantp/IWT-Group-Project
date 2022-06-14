<?php include 'db/connect.php' ?>
  <?php //session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Agent</title>

  <!-- font links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@0;1&display=swap" rel="stylesheet">
  
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="css/travel_agent.css">

</head>

  <!-- navigation bar -->
  <?php include 'navbar.php'; ?>

<body>
  

<!-- Slides -->
  <div class="slideshow-container">
      <div class="ta-bg1">
        <h1>Travel Agent</h1>
        <p>Travel agency is one of the most important organizations in the tourism private sector which plays a significant and crucial role in the entire process of developing and promoting tourism in the country or at a destination. It is a travel agency which packages and processes all the attractions, accesses, amenities and ancillary services of a country and present them to tourists.</p>
      </div>
        <div class="mySlides fade">
            <img src="images/bg1.jpg" width="100%" height="20%">
        </div>
    
        <div class="mySlides fade">
            <img src="images/bg2.jpg" width="100%" height="50%">
        </div>

        <div class="mySlides fade">
          <img src="images/bg3.jpg"  width="100%"height="50%">
        </div>

        <div class="mySlides fade">
          <img src="images/bg5.jpg"  width="100%"height="50%">
        </div>

        <div class="mySlides fade">
              <img src="images/travel.jpg" width="100%"height="50%">
        </div>

        <br>
        <div class="hidden">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
        </div>
</div>

<!-- Slides End-->
 
 <!-- Cards -->
  <div class="row">

     <!-- Enter DB data -->
     <?php
      $sql = "SELECT * FROM travel_agent";
      $result = $link->query($sql);
      while($row = $result->fetch_assoc())
      {
        $name = $row["name"];
        $regno =  $row["regno"];
        $tel =  $row["tel"];
        $address =  $row["address"];
        $image = $row["image"];
      ?>
    <div class="column">
      <div class="card">
        <img src="db/<?php echo $image ?>" class="imgP" alt="t1">
        <h3><?php echo $name ?></h3>
        <p>Reg. No:<?php echo $regno ?></p>
        <p>Tel:<?php echo $tel ?></p>
        <p>City:<?php echo $address ?></p>
      </div>
    </div>
    <?php } ?> 
    <!-- End DB Entry -->

  </div>
 <!-- Cards End  -->
</body>

<!-- footer -->
<?php include 'footer.php' ?>

<!-- javascript -->
<script type="text/javascript" src="js/travel_agent.js"></script>

</html>

