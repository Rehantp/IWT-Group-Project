<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title>reg tg</title>
  <link rel="stylesheet" type="text/css" href="../css/regtg.css">
	
	
</head>
<body>

	<?php
	
		if(isset($_GET['status']))
		{
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	?>
<br/><br/>
       <h2>Registration Tour Guide </h2>
	   <div class="reg">
	<form method="POST" action="../db/register.php" enctype="multipart/form-data">
		<input type="hidden" value="true" name="register_user" id="register_user">
		<div>
			<label>First Name</label>
			<div>
				<input type="text" id="fname" name="fname" required>
			</div>
		</div>
		
		<div>
			<label>Last Name</label>
			<div>
				<input type="text" id="lname" name="lname" required>
			</div>
		</div>
		
		<div>
			<label>Email</label>
			<div>
				<input type="text" id="email" name="email" required>
			</div>
		</div>
		
		<div>
			<label>User Type</label>
			<div>
				<select id="type" name="type" required>
					<option value="">Select Type</option>
					<option value="Type 1">Type 1</option>
				</select>
			</div>
		</div>

		<div>
			<label>Photo</label>
			<div> 
				<input type="file" id="image" name="image" accept="image/*" required>
			</div>
		</div>

		<div>
			<label>Password</label>
			<div>
				<input type="password" id="password" name="password" required>
			</div>
		</div>
		
		<div>
			<Center>
			<button type="submit" >
				Register
			</button>
			</Center>
			
		</div>
	</form>
	<div>

</body>
</html>
<?php include '../db/config.php'; ?>