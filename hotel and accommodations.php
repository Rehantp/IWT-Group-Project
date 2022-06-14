<?php include 'db/connect.php'?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
*{box-sizing:border-box}
.mySlides {display: none;}
 img {vertical-align: middle;}


.header{
  background:linear-gradient(rgb(100, 204, 183),rgba(0,0,0,1));
  background-image:url("./images/Galle/annie-spratt-pKpipZVVEC0-unsplash.jpg");
}

.heading{
    font-size:50px;
    color: darkblue;
}

.fieldset.legend{
    font-size:30px;
    color:cadetblue;  
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
    padding:0%;
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

.packages.box-container{
  display:flex;
  flex-wrap:wrap;
  gap:50px;
}


.packages.box-container.box{
  flex:30rem 30rem 30rem;
  border-radius:.10px;
  overflow:hidden;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.packages.box-container.box img{
  height:100%;
  width:100%;
  position:center;
  object-fit:fill;

} 

.packages.box-container.box h1{
    font-size:larger;
  }
.packages.box-container.box p{
  font-size:x-small;
}

</style>
<!--<link rel="stylesheet" href="style(hotel and accommodations).css">-->

</head>


<body>
<div class="header">
<?php include 'navbar.php'; ?>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="images/hotel/dinuka-lankaloka-8bMBk5h4K04-unsplash.jpg" width="100%" height="20%">
        </div>
    
        <div class="mySlides fade">
            <img src="images/hotel/dinuka-lankaloka-pm3vGgDnb3o-unsplash.jpg" width="100%" height="50%">
        </div>
        

        <div class="mySlides fade">
        <img src="images/hotel/dinuka-lankaloka-HKr5cn6S0q0-unsplash.jpg"  width="100%"height="50%">

        </div>

        <div class="mySlides fade">
        <img src="images/hotel/dinuka-lankaloka-s2e8AiqYWOo-unsplash.jpg"  width="100%"height="50%">

        </div>
        </div>

        <div class="mySlides fade">
            <img src="images/hotel/artem-beliaikin-Z7y5dhZewVc-unsplash.jpg" width="100%"height="50%">
        
        </div>
        </div>

        <br>
        <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        </div>

        <section class="packages" id="packages">
            <h1 class="heading">

                <span>Hotel</span>
                <span class="space"></span>
                <span>and</span>
                <span class="space"></span>
                <span>Accommodations</span>
                <br>

                <fieldset width="100%">
                    <legend><span>Hotels</span></legend>
                    
                        <!--Enter DB data-->
                    <?php 
                        $sql = "select * from hotel";
                        $result = $link->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                            $name=$row["name"];
                            $address=$row["address"];
                            $tel=$row["tel"];
                            $image=$row["image"];
                            $Description=$row["Description"];
                     ?>
                    <div class="column">
                        <div class="card">
                            <img src="db/<?php echo $image ?>" alt="Hotel 3" width=100%  height=400px>
                            <h1><?php echo $name ?></h1>
                            <p><?php echo $tel ?></p>
                            <p><?php echo $address ?></p>
                            <p><?php echo $Description ?></p>
                            <a href="" class="button">Read more</a></button>
                        </div>
                    </div>
                    <?php } ?>
                    <!--End DB entry-->

                   </div>
                
        </fieldset>         
    </div>
</div>
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
      setTimeout(showSlides, 2000); 
    }
    </script>
    
    <?php include 'footer.php'; ?> 
    </body>
    </html> 
    