<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>

	<style>
		.div-r{
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			margin: 50px;
		}

		form div{
			padding: 10px;
		}

		input, select{
			width: 100%;
			padding: 14px 20px;
			margin: 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		input [type=file] {
			background-color: yellow !important;
		}

		button[type = submit] {
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			/*margin: 0 0 0px 115px;*/
			border: none;
			border-radius: 4px;
			cursor: pointer;
			/*float: right;*/
			align-self: center;
			font-size: 15pt;
		}

		button[type = submit]:hover{
			background-color: #45a049;
		}

		h2{
			text-align: center;
			/*padding-top: 20px;*/
			font-size: 30pt;
		}

		p{
			text-align: center;
		}
	</style>
	
</head>
<body>

	<?php
	
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	?>
	<div class="div-r">
		<h2>Register</h2>
		<form method="POST" action="../db/register.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_td" id="register_td">
			<div>
				<label>Full name</label>
				<div>
					<input type="text" id="name" name="name" required>
				</div>
			</div>
			
			<div>
				<label>Contact number</label>
				<div>
					<input type="tel" id="tel" name="tel" required>
				</div>
			</div>

			<div>
				<label>Date of birth</label>
				<div>
					<input type="date" id="dob" name="dob" required>
				</div>
			</div>
			
			<div>
				<label>Email</label>
				<div>
					<input type="email" id="email" name="email" required>
				</div>
			</div>
			
			<div>
				<label>Vehicle Type</label>
				<div>
					<select id="veh_type" name="veh_type" required>
						<option value="auto">Auto</option>
						<option value="manual">Manual</option>
					</select>
				</div>
			</div>

			<div>
				<label>Photo</label>
				<div>
					<input type="file" id="image" name="image" accept="upload_image/*" required>
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
				<p>Already Registered? <a href="login-td.php">Login</a></p>
			</div>
		</form>
	</div>
</body>
</html>
<?php include '../db/config.php'; ?>