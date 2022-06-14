<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/nav.css">
	
</head>
<body>
	<!-- navigation bar -->
	<div class="navbar">
		<img src="images/11/logo.png" alt="logo" class="logo">
		<a href="home.php">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Plan Your Trip <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="./hotel and accommodations.php">Hotel & other Accommodation</a>
				<a href="./Where to travel.php">Where To Travel</a>
				<a href="./welcome.php">Tour Guide</a>
				<a href="./Tour_driver_page.php">Tour Driver</a>
				<a href="./travel_agent.php">Travel Agent</a>	
			</div>
		</div>
		<a href="about.php">About Us</a>
		<a href="contactus_page.php">Contact Us</a>

		<!-- Logout dropdown -->
		<div class="dropdown3">
			<button class="dropbtn">Logout<i class="fa fa-caret-down"></i></button>
			<div class="dropdown3-content">

				<!-- Check Login and Logout of Traveler -->
				<?php if (isset($_SESSION["t_id"])) {  ?>
					<!-- check login -->
					<?php if (isset($_SESSION["t_id"])) { ?>	
					<a href="?logout=1.php">Logout As Traveler</a>
					<?php } else { ?>
					<a href="forms/login-t.php">As Traveler</a>
				<?php } ?>
				<!-- Check Login and Logout of Traveler End-->
				
				<!-- Check Login and Logout of Travel Agent -->
				<?php } if (isset($_SESSION["ta_id"])) {  ?>
					<!-- check login -->
					<?php if (isset($_SESSION["ta_id"])) { ?>
						<a href="?logout=1.php">Logout As Travel Agent</a>
					<?php } else {?>
						<a href="forms/login-ta.php">As Travel Agent</a>
				<?php } ?>
				<!-- Check Login and Logout of Travel Agent end -->

				<!-- Check Login and Logout of Tour Guide -->
				<?php } if (isset($_SESSION["id"])) {  ?>
					<!-- check login -->
					<?php if (isset($_SESSION["id"])) { ?>
						<a href="?logout=1.php">Logout As Tour Guide</a>
					<?php } else {?>
						<a href="forms/login-tg.php">As Tour Guide</a>
				<?php } ?>
				<!-- Check Login and Logout of Tour Guide end-->

				<!-- Check Login and Logout of Tour Driver -->
				<?php } if (isset($_SESSION["td_id"])) {  ?>
					<!-- check login -->
					<?php if (isset($_SESSION["t_id"])) { ?>
						<a href="?logout=1.php">Logout As Tour Driver</a>
					<?php } else {?>
						<a href="forms/login-td.php">As Tour Driver</a>
				<?php } ?>
				<!-- Check Login and Logout of Tour Driver end-->

				<!-- Check Login and Logout of Hotel Manager -->
				<?php } if (isset($_SESSION["hid"])) {  ?>
					<!-- check login -->
					<?php if (isset($_SESSION["hid"])) { ?>
						<a href="?logout=1.php">Logout As Hotel Manager</a>
					<?php } else {?>	
						<a href="forms/login-hm.php">As Hotel Manager</a>
				<?php } } ?>
				<!-- Check Login and Logout of Hotel Manager end-->
			</div>	
		</div>

		<!-- Login dropdown -->
		<div class="dropdown2">
				<button class="dropbtn">Login<i class="fa fa-caret-down"></i></button>
				<div class="dropdown2-content">

					<a href="forms/login-t.php">As Traveler</a>
					<a href="forms/login-ta.php">As Travel Agent</a>
					<a href="forms/login-tg.php">As Tour Guide</a>
					<a href="forms/login-td.php">As Tour Driver</a>
					<a href="forms/login-hm.php">As Hotel Manager</a>
				</div>
		</div>

	</div>
	<!-- navigation bar -->
</body>

<!-- Logout -->
<?php
if(isset($_REQUEST["logout"]))
{

  session_destroy();
  echo "<script>alert('You are logged out!'); window.location.href='home.php.' ;</script>";
}
?>
</html>