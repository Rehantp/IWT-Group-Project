<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title>Register | Traveler</title>
	<link rel="stylesheet" type="text/css" href="../css/forms_reg.css">
	
</head>
<body>

	<?php
	
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	?>
	<div class="div-r">
		<h2>Traveler Register</h2>
		<form method="POST" action="../db/register.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_t" id="register_t">
			<div>
				<label>Name</label>
				<div>
					<input type="text" id="name" name="name" required>
				</div>
			</div>
			
			<div>
				<label>Email</label>
				<div>
					<input type="email" id="email" name="email" required>
				</div>
			</div>
			
			<div>
				<label>Contact number</label>
				<div>
					<input type="tel" id="tel" name="tel" required>
				</div>
			</div>

			<div>
				<label>Address</label>
				<div>
					<input type="text" id="address" name="address" required>
				</div>
			</div>

			<div>
				<label>Password</label>
				<div>
					<input type="password" id="pw" name="pw" required>
				</div>
			</div>
			
			<div>
				<center>
					<button type="submit" >
						Register
					</button>
				</center>
				<p>Already Registered? <a href="login-t.php">Login</a></p>
			</div>
		</form>
	</div>
</body>
</html>
<?php include '../db/config.php'; ?>