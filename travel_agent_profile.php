<?php include 'db/connect.php' ?>

<!-- Get DB Data -->

<?php
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}

	
		if(isset($_SESSION['ta_id'])){
			$sql ="SELECT * From travel_agent WHERE ta_id=".$_SESSION['ta_id'];

			$result=mysqli_query($link,$sql);

			foreach ($result as $row) {
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome <?php echo $row['name']; ?></title>
	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="css/ta_profile.css">

</head>

<body>
	<div id="hero">
		<!-- navigation bar -->
		<?php include 'navbar.php'; ?>

		<div class="img">
			<img src="db/<?php echo $row['image']; ?>" class="imgP" alt="profpic">
		</div>

		<div class="text-box">
			<h2>
				Name: <?php echo $row['name']; ?> <br>
				Contact No:  <?php echo $row['tel']; ?> <br>
				Email:  <?php echo $row['email']; ?> <br>
				Address:  <?php echo $row['address']; ?> <br>
			</h2>
			<button class="btn"><a href="">Add Tour Package</a></button>

			<!-- update profile -->
			<button class="btn"><a href="./update/edit-ta.php">Update Profile</a></button>

			<!-- delete profile -->
			<form method="POST" action="db/delete.php">
				<input type="hidden" value="true" name="delete" id="delete">
				<input type="hidden" value="<?php echo $row['ta_id']; ?>" name="ta_id" id="ta_id">
				<button class="btn"><a href="db/delete.php">Delete Profile</a></button>
			</form>
		</div>
	</div> 
<?php }	} ?>

		<!-- footer -->
		<?php include 'footer.php'; ?>
</body>
</html>
<?php include 'db/config.php'; ?>