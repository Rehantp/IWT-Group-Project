<?php include 'db/connect.php' ?>
<?php //session_start(); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tour driver</title>
  <!-- stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/tour_driver_page.css">

</head>

<body>
<?php include 'navbar.php'; ?>

<div class="container">
      <div class="back">
        <h1>Tour driver</h1>
      </div>
      <img src="images/tour_driver_wall.jpg" width="100%" height="60%">
        <div class="mySlides fade">
            
        </div>

</div>

  <div class="row">

     <?php
       $sql = "SELECT * FROM tour_driver";
       $result = $link->query($sql);
       while($row = $result->fetch_assoc())
      {
        $name = $row["name"];
        $dob =  $row["dob"];
        $tel =  $row["tel"];
        $type = $row["veh_type"];
        $email =  $row["email"];
        $image = $row["image"];
      ?>
    <div class="container2">
      <div class="container1">
        <img src="db/<?php echo $image ?>" class="img1" alt="image">
        <h3><?php echo $name ?></h3>
        <p><strong>DOB:</strong><?php echo $dob ?></p>
        <p><strong>Tel:</strong><?php echo $tel ?></p>
        <p><strong>Vehicle type:</strong><?php echo $type ?></p>
        <p><strong>Email:</strong><?php echo $email ?></p>
      </div>
    </div>
    <?php } ?> 

  </div>
</body>

<!-- footer -->
<?php include 'footer.php' ?>

</html>

