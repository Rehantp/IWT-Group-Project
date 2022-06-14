<?php include 'db/connect.php' ?>
<? //session_start(); ?>

<!-- Get DB Data -->

<?php  
	if(isset($_GET['status'])){
		echo '<h1>'.$_GET['status'].'</h1>';
	}


	if(isset($_SESSION['hid'])){
		$sql ="SELECT * From hotel WHERE hid=".$_SESSION['hid'];

		$result=mysqli_query($link,$sql);

		foreach ($result as $row) {
	
		 $name = $row["name"]; 
         $tel =  $row["tel"];
         $address =  $row["address"];
		 $email =  $row["email"];
		 $Description=$row["Description"];
         $image = $row["image"];
		 
 ?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600&display=swap" rel="stylesheet">

	
<!-- style sheet start	 -->
<style>

* {
	box-sizing: border-box;
	font-family: 'Nunito', sans-serif;
}

/* background image  */
#hero{   
	height: 100vh;
	width:100%;
	background-position:center;
	background-size:cover;
	position:relative;
	background-image:url("./images/hotel/marvin-meyer-8CDuHXff3zo-unsplash.jpg");
	font-family: 'Nunito', sans-serif;
	opacity:1;
	
}

/* Text */
.text-box{
	width:700px;
	color:#fff;
	position:absolute;
	top:50%;
	left:60%;
	transform:translate(-50%,-50%);
	text-align:center;
	background:rgba(86,86,86,0.3);
	backdrop-filter: blur(10px);
	margin:90px 5px 5px 200px;
	font-size:15px;
	color:#000;
	padding:20px;
}


/*Profile Images*/
.imgP{
	display: inline-block;
	width: 400px; 
	height: 400px;
	opacity: 1;
	margin-left:200px;
	margin-bottom:100px;
	margin-top:100px;
	border:4px  double ;
	border-position:fixed;	
}

.img{
	width:50%;
	height:50%;
	position: absolute;
}

/* button */
.btn{
	display:inline-block;
	padding:8px 25px;
	background:transparent;
	outline:none;
	color:#fff;
	text-decoration: none;
	border:2px solid #fff;
	border-radius:20px;
	font-size:15px;
	/*font weight:bold;*/
	cursor:pointer;
	margin:5px;
}

/* button hover */
.btn:hover{
	border:1px solid #190EDE;
	background:#190EDE;
	transition:1s;
}

/* button link */
.btn a{
	text-decoration: none;
	color: #FFFF;
}


</style>
<!-- style sheet ends -->

</head>


<!-- body strats -->
<body>
<div id="hero">
	<?php include 'navbar.php'; ?>   										<!--  add navigation bar -->
	<div class="img">
		 <img src="db/<?php echo $image ?>" class="imgP" alt="profpic">      <!--profile image -->
	</div>
	
		 <div class="text-box">												<!--text box to display details that get -->
			<h2>
				Name: <?php echo $name; ?> <br>
				Contact No:  <?php echo $tel; ?> <br>
				Email:  <?php echo $email; ?> <br>
				Address:  <?php echo $address; ?> <br>
				Description: <?php echo $Description; ?><br><br><br>
			</h2>
				<button class="btn"><a href="./forms/register-hm.php">Add Hotels </a></button>     

			<!-- update profile -->
				<button class="btn"><a href="./update/edit-hm.php">Update Profile</a></button>

			<!-- delete profile -->
				<form method="POST" action="./db/delete.php">
					<input type="hidden" value="true" name="delete" id="delete">
					<input type="hidden" value="<?php echo $row['hid']; ?>" name="hid" id="hid">
					<button class="btn"><a href="">Delete Profile</a></button><br>
				</form>
		</div>
	</div>
</div>

<?php }	} ?>

<?php include 'footer.php'; ?> 
</body>
</html>
<?php include 'db/config.php'; ?>