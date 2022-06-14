<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where to travel</title>
	<!-- <link rel="stylesheet" href="../../style(sigiriya).css">  -->

<style>
	*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}

#hero{
	height: 100vh;
	width:100%;
	background-position:center;
	background-size:cover;
	position:relative;
	background-image:url("./images/Sigiriya/1000_F_322535378_f2I0DBWZpMIUz6DQdFGzBgasc9uE3CKY.jpg");
	
}

.text-box{
	width:50%;
	color:#fff;
	position:fixed;
	top:35%;
	left:40%;
	transform:translate(-50%,-50%);
	text-align:left;
}

.text-box h1{
	font-size:32px;
	align-content: center;
	color:#fff;
}

.text-box{
	margin:50px 5px 5px;
	font-size:15px;
	color:#000;
}

.button{
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
}

.button:hover{
	border:1px solid #190EDE;
	background:#190EDE;
	/* background:#CFD8DC; */
	transition:1s;
}

.container{
	width:50%;
	height:88%;
	background:rgba(86,86,86,0.3);
	backdrop-filter: blur(10px);
	position:absolute;
	right:0;
	top:90px;
}

</style>


</head>
<body>
<div id="hero">
<?php include 'navbar.php'; ?>
		<div class="container">
			<div class="text-box">
				<h1>Sigiriya</h1>
				<br><b>
				<p>The distance from the Colombo is 169km and is on the way to Anuradhapura or polonnaruwa. Sigiriya was designated as a world heritage site in 1982. Sigiriya is famous for it's palace ruins on top of a massive 200 meter high rock surrounded by the remains of an extensive network of gardens, reservoirs and other structures.</p><br>
				<p>	It was used as a rock-shelter mountain monastery from about the 5th century BC, with caves prepared and donated by devotees of the Buddhist Sangha. Sigiriya Museum shows photos of the excavation of Sigiriya, reproductions of the frescoes, examples and translations of some of the graffiti on the Mirror Wall, and artifacts excavated from the site. You can probably view the museum in about 1 hour. Since the museum is outside the main entrance</p><br><br>
				</b>
				
				<a href="" class="button">View packages</a></button>
				<a href="" class="button">Add to wishList</a></button>
			</div>
		</div>
		<!--<div class="slider1">
			<img src="images/Radiance_img/Radiance_img/left-arrow.png" width="42" height="20" id="prev">
			
			<div class="preview">
				<img src="images/Sigiriya/images (1).jpg" width="200" height="116" class="active thumbnail">
				<img src="images/Sigiriya/images.jpg" width="182" height="120" class="thumbnail">
				<img src="images/Sigiriya/images (3).jpg" height="120" class=" thumbnail">
				<img src="images/Sigiriya/images (5).jpg" height="120" class="thumbnail">
			</div>
			
			<img src="images/Radiance_img/Radiance_img/right-arrow.png" width="35" height="20" id="next">
	
		</div>-->
</div>	
<!--
<script>
	var prev= document.getElementById("prev");
	var next= document.getElementById("next");	
	var thumbnail= document.getElementByClassName("thumbnail");
	var header= document.getElementById("header");
	
	var backgroundImg =new Array(
		"images/Sigiriya/images (1).jpg" ,"images/Sigiriya/images.jpg","images/Sigiriya/images (3).jpg","images/Sigiriya/images (5).jpg"
	);
	
	let i=0;
	next.onclick= function(){
		
	if(i<4){	
	header.style.backgroundImage = 'url("'+backgroundImg[i+1]+'")';
	thumbnail[i+1].classList.add("active");
	thumbnail[i].classList.remove("active");
	i++;
	}

	prev.onclick= function(){
		
	if(i>0){	
	header.style.backgroundImage = 'url("'+backgroundImg[i-1]+'")';
	thumbnail[i-1].classList.add("active");
	thumbnail[i].classList.remove("active");
	i--;
	}
		
</script>
	-->
<?php include 'footer.php'; ?> 	
</body>
</html>

