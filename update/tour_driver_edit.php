<!DOCTYPE >
<html>
<head>
		<link rel="stylesheet" href="../css/tour_driver_edit.css">
	
</head>
<body>

<?php

include '../db/connect.php';
if(isset($_GET['status'])){
	echo '<h1>'.$_GET['status'].'</h1>';
}


if(isset($_SESSION['td_id'])){
	$sql ="SELECT * From tour_driver WHERE td_id=".$_SESSION['td_id'];

	$result=mysqli_query($link,$sql);

	foreach ($result as $val) {

		if ($val['image']!=null){
			$img="<img src='../db/".$val['image']."' width='45px'>";
		}
?>
	<h1>User profile update</h1>
<div class="border">
	<div class="container">
		<form method="POST" action="../db/edit.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_td" id="register_td">
			<input type="hidden" value="<?php echo $val['td_id']; ?>" name="td_id" id="td_id">
			<div class="container2">
				<label>Name</label>
					<input type="text" id="name" name="name" value="<?php echo $val['name']; ?>" required>
			</div>
			<br>
			<div class="container2">
				<label>Email</label>
					<input type="email" id="email" name="email" value="<?php echo $val['email']; ?>" required>
			</div>
			
			<br>
			<div class="container2">
				<label>Photo</label>
				
					<?php echo $img; ?>
					<input type="file" id="image" name="image" accept="image/*" >
				
			</div>
			<br>
		
			<div class="container2">
				<label>Date of birth</label>
				
					<input type="date" id="dob" name="dob" value="<?php echo $val['dob']; ?>" required>
				
			</div>
			<div class="container2">
				<label>Contact number</label>
				
					<input type="text" id="tel" name="tel" value="<?php echo $val['tel']; ?>" required>
				
			</div>
			<div class="container2">
				<label>Vehicle type</label>
				
					<input type="text" id="veh_type" name="veh_type" value="<?php echo $val['veh_type']; ?>" required>
				
			</div>
			
			<div class="container2">
				<label>Password</label>
				
					<input type="password" id="pw" name="pw" value="<?php echo $val['pw']; ?>" required>
				
			</div>

			<div class="adjust">
				<button type="submit" class="button1" >
					Edit
				</button>
				
			</form>
			

				<form method="POST" action="../db/delete.php">
					<input type="hidden" value="true" name="delete" id="delete">
					<input type="hidden" value="<?php echo $val['td_id']; ?>" name="td_id" id="td_id">

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