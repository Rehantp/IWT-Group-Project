<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where to travel</title>
	<!--<link rel="stylesheet" href="../../style(galle).css">-->

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
	background-image:url("./images/Galle/tomas-malik-FHAHnF9C0Sw-unsplash.jpg");
	
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

@media screen and (max-width: 600px) {
	.column {
	 width: 100%;
	  display: block;
	  margin-bottom: 15px;
	}

</style>


</head>
<body>
<div id="hero">
<?php include 'navbar.php'; ?>
		<div class="container">
			<div class="text-box">
				<h1>Galle</h1>
				<br><b>
				<p>Galle is a world heritage city located on A2 road about 115 km away from Colombo, the Capital of Sri Lanka.
                    Galle town has been declared as a protected city due to the historical Dutch fortress and other Dutch monuments within the Galle Fort. The city of Galle that was badly damaged by the tsunami of 2004 has been restored to its original look thanks to its being a World Heritage city.
                <p><br>
                    Galle city is frequented by both local & foreign travelers due to its very beautiful coastal area & warm climate. Traveling in the narrow streets inside Galle Fort is truly a memorable experience where one will be treated to watching the glorious sunset. Also, Dutch monuments like the Old Dutch Reformed church, Old Dutch buildings and the Dutch museum are important places to visit, apart from the light house nearby.      
                </p></b><br>

				<a href="" class="button">View packages</a></button>
				<a href="" class="button">Add to wishList</a></button>
			</div>
		</div>
</div>

<?php include 'footer.php'; ?> 
</body>
</html>