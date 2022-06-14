<!DOCTYPE html>
<html >
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>

  <?php include 'navbar.php'; ?>
  <body style="background: url(images/cbg.jpg); background-repeat: no-repeat; background-size: cover;">
  <?php
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	
	?>
 
     <br/><br/><br/>
      <div class="contact-form">
    
       <center> <h2><b>Contact Us</b></h2></center>
        <form class="contact" action="db/contactUs.php" method="post">
     
        <input type="hidden" name="contact_us" value="true" id="contact_us">
        <div>
          <input type="text" name="fullname"  class="text-box" placeholder="Your full name*" required>
          <input type="email" name="email" class="text-box" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="Your Email*" required>
          <input type="phone" name="mobile" class="text-box" pattern="[0-9]{10}" placeholder="Your Mobile number*" required>
          <textarea name="message" rows="5" placeholder="Your Message*" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
       </div>    
        </form>
      </div><br/><br/><br/>
      <center>
      <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17401.882662790482!2d79.85014800155531!3d6.926593499542425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259396a72f305%3A0x5e7e24c6bf94136f!2sGalle%20Face%20Green!5e0!3m2!1sen!2slk!4v1652739917106!5m2!1sen!2slk" width="500" height="500" sttyle="border:2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>
     <div class="contact-section">
      <div class="contact-info">
        <div><i class="fa fa-map-marker-alt"></i>Address: Galle face green,Galle road,colombo</div>
        <div><i class="fas fa-envelope"></i>Email:travel@gmail.com</div>
        <div><i class="fas fa-phone"></i>Contact num:+94 777 556 000</div>
        <div><i class="fas fa-fax"></i>Fax:234 435 45450</div>
      </div>
      </div>

      <?php include 'footer.php'; ?>

  </body>
</html>
