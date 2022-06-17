<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title>Login | Travel Agent</title>
	<link rel="stylesheet" type="text/css" href="../css/forms_login.css">
</head>
<body>
	<?php
	
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	?>
	<div class="div-log">
		<form method="POST" action="../db/login.php">
			<h1>Travel Agent Login</h1>
			<input type="hidden" name="login_ta" value="true">
			<div >
				<!-- <label>Email</label> -->
				<div>
					<input type="text" id="email" name="email" placeholder="e-mail" required>
				</div>
			</div>
			
			<div>
				<!-- <label >Password</label> -->
				<div >
					<input type="password" id="password" name="password" placeholder="Password" required>
				</div>
			</div>
			
			<div>
				<center>
				<button type="submit">
					Login
				</button>
				<p>Not Registered? <a href="register-ta.php">Register</a></p>
				</center>
			</div>
		</form>
	</div>
</body>
</html>
<?php include '../db/config.php'; ?>