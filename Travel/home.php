<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Share and Care</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Services</a>
      <!-- <a href="explore.php">Explore</a> -->
      <a href="book.php">Book</a>
      <a href="login.php">Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>Travel around the World</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Cities we are in ...</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/newdelhi.jpeg" id ="pic" alt="">
         <h3>New Delhi</h3>
      </div>

      <div class="box">
         <img src="images/mumbai.jpeg" alt="">
         <h3>Mumbai</h3>
      </div>

      <div class="box">
         <img src="images/bengaluru.jpeg" alt="">
         <h3>Bengaluru</h3>
      </div>

      <div class="box">
         <img src="images/kolkata.jpeg" alt="">
         <h3>Kolkata</h3>
      </div>

      <div class="box">
         <img src="images/chennai.jpeg" alt="">
         <h3>Chennai</h3>
      </div>
<!-- 
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div> -->

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/home.jpg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>This is a centralized platform with web-based portal for storing and sharing information of public places like location about the accessibility features that are ramps, handrails, wheelchairs etc. Our system stores and shares photographs and videos of such places. When a disabled person chooses a building/ location where he wants to travel using this app, the app will guide him with suitable voice-based announcements along with showing directions on the dynamic map until the customer navigates and reaches the place. Location facility would be like Google map or other apps which may integrate with our app for providing such facilities. </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Our Services </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/destination.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Reach Your Destination</h3>
            <p></p>
            <!-- <a href="book.php" class="btn">book now</a> -->
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/wheelchair.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Get Wheel Chair</h3>
            <p></p>
            <!-- <a href="book.php" class="btn">book now</a> -->
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/accessible.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Accessibility Location</h3>
            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p> -->
            <!-- <a href="book.php" class="btn">book now</a> -->
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<!-- <section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p> -->
      <!-- <a href="book.php" class="btn">book now</a> -->
   <!-- </div> -->
<!-- </section> --> -->

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">
   

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> services</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Explore</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> Copyright © 2008 - 2022 <span>All Rights Reserved.</span></div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>