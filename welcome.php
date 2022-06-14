<!--  IWT PROJECT
    IT21272240 Pereara K.P.R.T -->
<?php include 'db/all.php'?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/footer.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour Guide</title>
    <script src="js/tg.js"></script>
    <script>
        alert("Welcome to Tour Guides Area");
    </script>
 

</head>

<?php include'navbar.php'?>
<body id="iwt">


  <br/> <br/> <br/> <br/> <br/>
    <div style="padding-left: 10%; padding-right: 10%">
        <div class="discrip">
            <h1><b>Tour Guides</b></h1>
            <P><b>
            Tourist guides provides the visitor with in depth knowledge in their mother tongue, smoothing creases and wrinkles that is bound to occur while touring a foreign country for the first time. It is best to choose a tourist guide who had been professionally
            trained and authorized by Sri Lanka tourism, who are categorized as National Tourist Guides or Chauffeur Tourist Guides. The National Tourist Guides caters to a large group of tourists traveling in luxury coaches driven by reserved drivers while
            Chauffeur Tourist Guides would be guiding small groups conveyed in small vans and luxury cars.
           
            </b><br/>
            </P>
            <a href="./update/edit-tg.php">Edit Logged profile</a>
        </div>
    </div>

    <hr/>

    <div style="padding-left: 10%; padding-right: 10%">
        <div style="font-family: Verdana, sans-serif; font-size:1.0em">
            <div style="padding: 2%;">
                <h3><b>Permanent Tour Guides</b></h3>
            </div>
        <div>
         <!-- 1 -->
        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">
            <div class="card" style="width:100%;">
                <div class="row">
                    <div class="column1">
                        <div style="padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px">
                            <img src="./images/tg1.png" alt="Avatar" style="width: 65%" />
                        </div> 
                    </div>

                    <div class="column2">
                        <div class="container" style="padding-top: 2%;">
                            <h4><b>Duminda Samarakoon</b></h4> 
                            <ul>
                                <li> Category : Chauffeur</li>
                                <li> Languages : English</li>
                                <li> Tel : 0714483643</li>
                                <li> Registration No : C-1013</li>
                            </ul>
                            <div style="padding-bottom: 3%; padding-top: 4%;">
                                <button class="button" onclick="displaymsg()" style="width: 80%">View Licence</button>
                            </div>
                            <div>
                                <p id="hiddenMesseage" style="display:none; font-size:1.0em">
                                    <b>Mr.Duminda's Validity status of licence: Valid till 31st December 2022</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">
            <div class="card" style="width:100%;">
                <div class="row">
                    <div class="column1">
                        <div style="padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px">
                            <img src="./images/tg1.png" alt="Avatar" style="width: 65%" />
                        </div> 
                    </div>

                    <div class="column2">
                        <div class="container" style="padding-top: 2%;">
                            <h4><b>Sunil Jayasinghe</b></h4> 
                            <ul>
                                <li> Category : National</li>
                                <li> Lanuages : German</li>
                                <li> Tel : 0777171317</li>
                                <li> Registration No : N-0464</li>
                            </ul>
                            <div style="padding-bottom: 3%; padding-top: 4%;">
                                <button class="button" onclick="displaymsg1()" style="width: 80%">View Licence</button>
                            </div>
                            <div>
                                <p id="hiddenMesseage1" style="display:none; font-size:1.0em">
                                    <b>Mr.Sunil's Validity status of licence: Valid till 31st December 2022</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 3 -->
        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">
            <div class="card" style="width:100%;">
                <div class="row">
                    <div class="column1">
                        <div style="padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px">
                            <img src="./images/tg1.png" alt="Avatar" style="width: 65%" />
                        </div> 
                    </div>

                    <div class="column2">
                        <div class="container" style="padding-top: 2%;">
                            <h4><b>Kumara Darmarathne</b></h4> 
                            <ul>
                                <li> Category : National</li>
                                <li> Lanuages : German</li>
                                <li> Tel : 0777810317</li>
                                <li> Registration No : N-0463</li>
                            </ul>
                            <div style="padding-bottom: 3%; padding-top: 4%;">
                                <button class="button" onclick="displaymsg2()" style="width: 80%">View Licence</button>
                            </div>
                            <div>
                                <p id="hiddenMesseage2" style="display:none; font-size:1.0em">
                                    <b>Mr.Kumara's Validity status of licence: Valid till 31st December 2022</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">
            <div class="card" style="width:100%;">
                <div class="row">
                    <div class="column1">
                        <div style="padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px">
                            <img src="./images/tg1.png" alt="Avatar" style="width: 65%" />
                        </div> 
                    </div>

                    <div class="column2">
                        <div class="container" style="padding-top: 2%;">
                            <h4><b>Sudarshana Dissanayake</b></h4> 
                            <ul>
                                <li> Category : National</li>
                                <li> Lanuages : English</li>
                                <li> Tel : 0773684294</li>
                                <li> Registration No : N-0453</li>
                            </ul>
                            <div style="padding-bottom: 3%; padding-top: 4%;">
                                <button class="button" onclick="displaymsg3()" style="width: 80%">View Licence</button>
                            </div>
                            <div>
                                <p id="hiddenMesseage3" style="display:none; font-size:1.0em">
                                    <b>Mr.Sudarshana's Validity status of licence: Valid till 31st December 2022</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 5 -->
        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">
            <div class="card" style="width:100%;">
                <div class="row">
                    <div class="column1">
                        <div style="padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px">
                            <img src="./images/tg1.png" alt="Avatar" style="width: 65%" />
                        </div> 
                    </div>

                    <div class="column2">
                        <div class="container" style="padding-top: 2%;">
                            <h4><b>Basil  Rohana</b></h4> 
                            <ul>
                                <li> Category : National</li>
                                <li> Lanuages : English</li>
                                <li> Tel : 0773119119</li>
                                <li> Registration No : N-6969</li>
                            </ul>
                            <div style="padding-bottom: 3%; padding-top: 4%;">
                                <button class="button" onclick="displaymsg4()" style="width: 80%">View Licence</button>
                            </div>
                            <div>
                                <p id="hiddenMesseage4" style="display:none; font-size:1.0em">
                                    <b>Mr.Basil's Validity status of licence: Valid till 31st May 2022</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div>
        <div style="padding-top: 5%;">
            <h3><b>  New Tour Guides </b></h3>
        </div>

        <div style="padding: 2%; font-family: Verdana, sans-serif; font-size:1.0em">

          
<!--get new user sessions  -->
            <?php all_data($link,$_SESSION['user_id'])?>


        </div>
    </div>

    
    <footer class="footer">
			<div class="copy">
				<p>Copyright &#169; 2022 - Travel and Tourism Management system- All Right Reserved</p>
            </div>

      <div class="row">

      <div class="colum" >   <h3>Qick links</h3>
        <ul>
      
          <li><a href="travelagent.com">travelagent link</a></li>
          <li><a href="tourdriver.com">tourdriver link</a></li>
          <li><a href="tourguide.com">tourguide link</a></li>
        </ul>
          </div>
      <div class="colum">
           <h3>Explore</h3>
           <ul>
           <li><a href="travelagent.com">travelagent link</a></li>
            <li><a href="tourdriver.com">tourdriver link</a></li>
            <li><a href="tourguide.com">tourguide link</a></li>
           </ul>
              </div>
           
              <div class="colum" >   <h3>Our policy
              </h3>
                <ul>
                  <li><a href="tourdriver.com"> link 1</a></li>
                  <li><a href="tourdriver.com"> link 2</a></li>
                  <li><a href="tourdriver.com">link 3</a></li>
                </ul>
                </div> 
    	
			<div class="SocialLogos">
				<a href="http://facebook.com" ><img src="./images/FBLogo.png" alt="Facebook"></a> 
				<a href="http://instagram.com" ><img src= "./images/InstaLogo.png" alt="Instagram"></a> 
				<a href="http://twitter.com" ><img src= "./images/TwitterLogo.png" alt="Twitter"></a> 
				<a href="http://google+.com" ><img src="./images/G+Logo.png" alt="GooglePlus"></a> 

           </div>
     </div>

	
        </footer>
</body>

</html>
<?php include 'db/config.php'; ?>