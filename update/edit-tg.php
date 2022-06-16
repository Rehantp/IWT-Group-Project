<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		body{
			background-image: url("../images/reg.jpg");
		}
		h1{
			text-align: center;
		}
		.reg
		 {
           padding-left:20px;
		   padding-right:20px;
		   padding-top:20px;
		   padding-bottom:20px; 

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
	 .h1
	 {
		 color:white;
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

		include '../db/connect.php';

		if(isset($_GET['status']))
		{
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
		if(isset($_SESSION['user_id'])){
			$sql ="SELECT * From users WHERE id=".$_SESSION['user_id'];

			$result=mysqli_query($link,$sql);

			foreach ($result as $val) {

				if ($val['image']!=null)
				
				{
					$img="<img src='../db/".$val['image']."' width='45px'>";
				}
	?>

<h1> profile update</h1>
<div class="border">
	<div class="container">
		<form method="POST" action="../db/edit.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_user" id="register_user">
			<input type="hidden" value="<?php echo $val['id']; ?>" name="id" id="id">
			<div class="container2">
				<label>First Name</label>
					<input type="text" id="fname" name="fname" value="<?php echo $val['fname']; ?>" required>
			</div>
			<br>
			<div class="container2">
				<label>Last Name</label>
				
					<input class="ajust" type="text" id="lname" name="lname" value="<?php echo $val['lname']; ?>" required>
				
			</div>
			<br>
			<div class="container2">
				<label>Email</label>
					<input type="email" id="email" name="email" value="<?php echo $val['email']; ?>" required>
			</div>
			
			<div class="container2">
			<label>Guide Type :</label>
				<select id="type" name="type" required>
			
					<option><?php echo $val['type']; ?></option>
					<option value="Type 1">Type 1</option>
				</select>
			</div>
			<br>
			<div class="container2">
				<label>Photo</label>
				
					<?php echo $img; ?>
					<input type="file" id="image" name="image" accept="image/*" >
				
			</div>
			<br>
		
			<div class="container2">
				<label>Password</label>
				
					<input type="password" id="password" name="password" value="<?php echo $val['password']; ?>" required>
				
			</div>

			<div class="adjust">
				<button type="submit" class="button1" >
					Edit
				</button>
				
			</form>
			

				<form method="POST" action="../db/delete.php">
					<input type="hidden" value="true" name="delete" id="delete">
					<input type="hidden" value="<?php echo $val['id']; ?>" name="id" id="id">

					<button type="submit" class="button2" >
						Delete
					</button>
					
				</form>
			</div>
	</div>
</div>

	<?php }
	} ?>

</body>
</html>
<?php include '../db/config.php'; ?>