<?php include 'db/connect.php' ?>

<!-- Get DB Data -->

<?php
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}

	
		if(isset($_SESSION['td_id'])){
			$sql ="SELECT * From tour_driver WHERE td_id=".$_SESSION['td_id'];

			$result=mysqli_query($link,$sql);

			foreach ($result as $row) {
				
	?>
<html>
<head>
<title>Tour driver driver</title>
  <!-- stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/tour_driver_page.css">
</head>

<body>
<?php include 'navbar.php'; ?>

<div class="container back">
      
	  <h1><?php echo $row['name']; ?> <br></h1>
		<img class= "img1" src="db/<?php echo $row['image'] ?>"  alt="profpic">
		<h2>
		Contact No:  <?php echo $row['tel']; ?> <br>
		Email:  <?php echo $row['email']; ?> <br>
		</h2> 
</div>
<!-- update profile -->
<button class="btn"><a href="update/tour_driver_edit.php">Update Profile</a></button>

</div>
<h2 >Vehicle owned</h2>
<div class="row">
	
	<div class="container2">
	    <div class="container1">
	    	<img class="img1" src="images/vehicle2.jpg" class="imgP2">
	      <h3>Off road</h3>
	      <p>semi luxury</p>
	      <p>Toyota</p>
	    </div>
	</div>
	<div class="container2">
	    <div class="container1">
	    	<img class="img1" src="images/vehicle3.jpg" class="imgP2">
	      <h3>Off road</h3>
	      <p>semi luxury</p>
	      <p>Jeep Renegade</p>
	    </div>
	</div>
	<div class="container2">
	    <div class="container1">
	    	<img class="img1" src="images/vehicle4.jpg" class="imgP2">
	      <h3>Van</h3>
	      <p>Luxury</p>
	      <p>Mazda</p>
	    </div>
	</div>
	<div class="container2">
	    <div class="container1">
	    	<img class="img1" src="images/vehicle5.jpg" class="imgP2" >
	      <h3>Bus</h3>
	      <p>Luxury</p>
	      <p>King Long</p>
	    </div>
	</div>
	<div class="container2">
	    <div class="container1">
	    	<img class="img1" src="images/vehicle6.jpg" class="imgP2" >
	      <h3>Bus</h3>
	      <p>Luxury</p>
	      <p>Yutong</p>
	    </div>
	</div>

</div>
<?php }	} ?>

</body>

<!-- footer -->
<?php include 'footer.php' ?>

</html>
<?php include 'db/config.php'; ?>

