<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style(where%20to%20travel).css"> -->

<style>
    
*{box-sizing:border-box}
.mySlides {display: none;}
img {vertical-align: middle;}
    

.heading{
  font-size:50px;
  color: darkblue;
}

.slideshow-container {
  max-width: 1200px;
  max-inline-size: 100%;
  position:relative;
  margin: auto;
 
}

.mySlides .fade {
  display: none;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 0px;
  background-color: #bbb;
  border-radius:100%;
  display: inline-block;
  transition: background-color 0.6s ease;
  cursor:pointer;
}
  
.active {
  background-color:rgb(255, 225, 0);
}
  
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
    
}

/* .fieldset{
  margin-left:0;
  margin-right:0;
  padding-left: 0;
  padding-right: 0;
} */
.column {
  float: left;
  width: 33.33%;
  padding: 0 10px;
}

.row {margin: 0 0px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.button{
  display:inline-block;
	padding:8px 25px;
	background:transparent;
	outline:none;
	color:black;
	text-decoration: none;
	border:2px solid black;
	border-radius:20px;
	font-size:15px;
	/*font weight:bold;*/
	cursor:pointer;
}

.button:hover{
	border:1px solid black;
	background:blue;
	transition:1s;
}

section{
  padding:0;
}

.card{
  align-content:space-around;
  padding: 3px 3px;
  width:100%;
  height:500%;
  font-size: 11px;
  border-style: solid;
  border-color:burlywood;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


</style>
</head>

<body>
<?php include 'navbar.php'; ?>
<div class="slideshow-container">

<div class="mySlides fade">
  <video src="images/Galle/SRI%20LANKA%202020_new%20-%20Cinematic%20Video_Trim.mp4"muted loop autoplay width="100%" height=20%>
  
</div>

<div class="mySlides fade">
  <video src="images/Galle/new6.mp4"muted loop autoplay width="100%" height="50%">
  
</div>

<div class="mySlides fade">
  <video src="images/Galle/new4.mp4" muted loop autoplay width="100%"height="50%">

</div>

<div class="mySlides fade">
  <video src="images/Galle/5.mp4" muted loop autoplay width="100%"height="50%">

</div>
</div>

<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<section class="packages" id="packages">
    <div class="heading">
        <span>Where</span>
        <span class="space"></span>
        <span>To</span>
        <span class="space"></span>
        <span>Travel</span>
        <br>
    </div>
        <div class="column">
            <div class="card">
                    <img src="images/Sigiriya/download.jpg" alt="Sigiriya" width=100%  height=400px>
                    <h1>Sigiriya</h1>
                    <p>Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka</p>
                    <a href="..\IWT_Project\index1(sigiriya).php" class="button"> Read more</a></button>
                
            </div>
        </div>
        
        
        <div class="column">
            <div class="card">
                    <img src="images/Galle/Ultimate%20Two%20Week%20Sri%20Lanka%20Itinerary.jpg" alt="Galle" width=100% height=400px>
                    <h1>Galle</h1>
                    <p>Galle (formerly Point de Galle) is a major city in Sri Lanka, situated on the southwestern tip, 119 kilometres (74 mi) from Colombo.</p>
                    <a href="..\IWT_Project\index3(galle).php" class="button">Read more</a></button>
            </div>
        </div>
        
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="images/Yala/egle-sidaraviciute--K626L6m9vE-unsplash.jpg" alt="Yala" width=100%  height=400px>
                    <h1>Yala</h1>
                    <p> sri lanka's most famous wild life park. Yala is in a hot, semi-arid environment despite its lush greenish look, especially during the monsoon season. </p>
                    <a href="..\IWT_Project\index2(yala).php" class="button">Read more</a></button>
                </div>
            </div>
        </div>
        <br>  
        
        <div class="column">
            <div class="card">
                    <img src="images/Hikkaduwa/download%20(3).jpg" alt="Hikkaduwa" width=100%  height=400px>
                    <h1>Hikkaaduwa</h1>
                    <p>Hikkaduwa is a small town on the south coast of Sri Lanka located in the Southern Province, about 17 km (11 mi) north-west of Galle</p>
                    <a href="https://en.wikipedia.org/wiki/Hikkaduwa" class="button">Read more</a></button>
            </div>
        </div>
        
        
       
            <div class="column">
                <div class="card">
                    <img src="images/Dambulla/images%20(8).jpg" alt="Dambulla" width=100% height=400px>
                    <h1>Dambulla</h1>
                    <p>Dambulla is a town situated in the north of Matale District, Central Province of Sri Lanka. It is the second largest populated and urbanised centre after Matale in the Matale District</p>
                    <a href="https://en.wikipedia.org/wiki/Dambulla" class="button">Read more</a></button>
                </div>
            </div>
        
        
        
            <div class="column">
                <div class="card">
                    <img src="images/nuwara/8%20Incredible%20Things%20to%20do%20in%20Ella%20Sri%20Lanka.jpg" alt="Nuwara Eliya" width=100%  height=400px>
                    <h1> Nuwara Eliya</h1>
                    <p>Nuwara Eliya is a city in the hill country of the Central Province, Sri Lanka. Its name means "city on the plain (table land)" or "city of light".</p>
                    <a href="https://en.wikipedia.org/wiki/Nuwara_Eliya" class="button">Read more</a></button>
                </div>
            </div>
        
         <br> 
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
  </div>
  <!-- <?php include 'footer.php'; ?>  -->
</section>



<script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 15000); //change the video slider in every 15s
    }
    </script>
    
 
    </body>
    </html> 
    