<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where to travel</title>
<!--	<link rel="stylesheet" href="../../style(yala).css"> -->

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
	background-image:url("./images/Yala/geoff-brooks-3TwThGdEUZA-unsplash.jpg");
	
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
				<h1>Yala</h1>
				<br><b>
				<p>Yala National Park is a huge area of forest, grassland and lagoons bordering the Indian Ocean, in southeast Sri Lanka. It’s home to wildlife such as leopards, elephants and crocodiles, as well as hundreds of bird species. The park consists of five blocks, two of which are now open to the public, and also adjoining parks.
                    Yala National park is the most famous and popular national park in Sri Lanka. The main reason for it is that it has the characteristics of a coastal park mixed with the features of the lowland tropics since it is in the southeast region of the country in Southern Province and Uva Province.</p>
                    
                <p><br>One of the unique features of Yala national park is that it has in its vicinity six national parks and three wildlife sanctuaries,Lunugamvehera National Park, being the largest among them.
                The Yala park is situated in the dry semi-arid climatic region. So this area receives rain mainly during the northeast monsoon which is from December to February. Yala in Sri lanka hosts a variety of ecosystems ranging from moist monsoon forests to freshwater and marine wetlands.
				</p></b><br>

				<a href="" class="button">View packages</a></button>
				<a href="" class="button">Add to wishList</a></button>
			</div>
		</div>
		<!--<div class="slider1">
			<img src="images/Radiance_img/Radiance_img/left-arrow.png" width="42" height="20" id="prev">
			
			<div class="preview">
				<img src="./images/Yala/dulana-kodithuwakku-ZOjhZbz1vOc-unsplash.jpg" width="200" height="116" class="active thumbnail">
				<img src="./images/Yala/hayo-roskam-9oscr9ot0uw-unsplash.jpg" width="182" height="120" class="thumbnail">
				<img src="./images/Yala/chanuka-nimsara-u073SHSte0k-unsplash.jpg" height="120" class=" thumbnail">
				<img src="./images/Yala/eddy-billard-zxneeblyEtI-unsplash.jpg" height="120" class="thumbnail">
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
		"./images/Yala/dulana-kodithuwakku-ZOjhZbz1vOc-unsplash.jpg" ,"./images/Yala/hayo-roskam-9oscr9ot0uw-unsplash.jpg","./images/Yala/chanuka-nimsara-u073SHSte0k-unsplash.jpg","./images/Yala/eddy-billard-zxneeblyEtI-unsplash.jpg"
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
		
</script>	-->
<?php include 'footer.php'; ?> 
</body>
</html>