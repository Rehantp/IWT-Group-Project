<?php include '../db/connect.php';?>

<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		body{
			background-image: url("../images/bg4.jpg");
		}
		h1{
			text-align: center;
		}
		.border{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
			padding: 10px 80px;
		}
		.container{
			font-size : 18px;
			opacity: 60%;
			border-collapse : collapse;
			radius:3%; 
			padding : 30px 50px;
			border-radius: 6px;
			background-color: white ;
		}

		.container2{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
			width: 100%;
			padding: 10px 40px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 2px;

		}

		.button1{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
			border:1px blue;
			font-size : 18px;
			color:white;
			border-radius: 2px;
			background-color: rgb(27, 107, 160);
			border-bottom: 2px blue;
			float: left;
		}
	

		.button2{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
			border:1px red;
			font-size: 18px;
			color:white;
			border-radius: 2px;
			background-color: rgb(185, 54, 82);
			border-bottom: 2px red;
			float: right;
		}

		.button1:hover{
			background-color: rgb(15, 2, 92);
		}

		.button2:hover{
			background-color: red;
		}
		
		
		.adjust{
			padding: 0px 400px;
		}

	</style>
</head>
<body>

	<?php
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}

	
		if(isset($_SESSION['hid'])){
			$sql ="SELECT * From hotel WHERE hid=".$_SESSION['hid'];

			$result=mysqli_query($link,$sql);

			foreach ($result as $val) {

				if ($val['image']!=null){
					$img="<img src='../db/".$val['image']."' width='45px'>";
				}
	?>

	<!-- new -->
	<h1>User profile update</h1>
		<div class="border">
			<div class="container">
				<form method="POST" action="../db/edit.php" enctype="multipart/form-data">
					<input type="hidden" value="true" name="register_hm" id="register_hm"> <!-- change -->
					<input type="hidden" value="<?php echo $val['hid']; ?>" name="hid" id="hid"> <!-- change -->
					<div class="container2">
						<label>Name</label>
						<div>
							<input type="text" id="name" name="name" value="<?php echo $val['name']; ?>" required>
						</div>
					</div>

					<div class="container2">
						<label>Contact Number</label>
						<div>
							<input type="text" id="tel" name="tel" value="<?php echo $val['tel']; ?>" required>
						</div>
					</div>

					<div class="container2">
						<label>Address</label>
						<div>
							<input type="textarea" id="address" name="address" value="<?php echo $val['address']; ?>" required>
						</div>
					</div>
					
					<div class="container2">
						<label>Email</label>
						<div>
							<input type="email" id="email" name="email" value="<?php echo $val['email']; ?>" required>
						</div>
					</div>

					<div class="container2">
						<label>Photo</label>
						<div>
							<?php echo $img; ?>
							<input type="file" id="image" name="image" accept="image/*" required>
						</div>
					</div>

					<div class="container2">
						<label>Password</label>
						<div>
							<input type="password" id="password" name="password" value="<?php echo $val['pw']; ?>" required>
						</div>
					</div>
					
					
					<div class="container2">
						<label>Description</label>
						<div>
							<input type="textarea" id="description" name="description" value="<?php echo $val['Description']; ?>" required>
						</div>
					</div>
					
					<div class="adjust">
						<button type="submit" class="button1">Update</button>
				</form>

				<form method="POST" action="../db/delete.php">
					<input type="hidden" value="true" name="delete" id="delete">
					<input type="hidden" value="<?php echo $val['hid']; ?>" name="hid" id="hid">
					<div>
						<button type="submit" class="button2">Delete</button>
					</div>
				</form>
			</div>
	</div>
</div>

<?php }	} ?>

</body>
</html>
<?php include '../db/config.php'; ?>