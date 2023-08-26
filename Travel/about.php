<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .wrapper{
         margin-top: 10%;
      }

      .vision{
         display:flex;
         text-align: center;
         width: auto;
         justify-content: center;
         flex-wrap: wrap;
      }

      .vision .aboutus{
         background: #fff;
         margin: 5px;
         margin-bottom: 50px;
         width: 500px;
         padding: 20px;
         line-height: 20px;
         color: #8e8b8b;
         position: relative;
      }
      .vision .aboutus h3{
         color: purple;
         font-size: 26px;
         margin-top: 50px;
      }

      .vision .aboutus p.desc{
         color: #ccc;
         font-size: 12px;
         text-transform: uppercase;
         margin: 12px 0;

      }
      .vision .aboutus .team_img{
         width: 100px;
         height: 100px;
         border-radius: 50%;
         position: absolute;
         top: -50px;
         left: 50%;
         transform: translateX(-50%);
         background: #fff;
      }

      .vision .aboutus .team_img img{
         width: 100px;
         height: 100px;
      }



   </style>

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
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/aboutus.jpg) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about1.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p></p>
      <p></p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">
<div class="wrapper">
   <div class="vision">
      <div class="aboutus">
         <div class="team_img">
            <img src="images/vision.jpeg" alt="vision">
   </div>
         <h3>Vision</h3>
         <p class="desc">hello</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo sunt illo esse, impedit sit nam non quam, perferendis voluptatem dolore, nesciunt delectus qui. Libero temporibus veniam qui expedita fuga ab!</p>
</div>
 <div class="aboutus">
 <div class="team_img">
            <img src="images/mission.jpeg" alt="vision">
   </div>
         <h3>Mission</h3>
         <p class="desc">kiran</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo sunt illo esse, impedit sit nam non quam, perferendis voluptatem dolore, nesciunt delectus qui. Libero temporibus veniam qui expedita fuga ab!</p>
</div>

   </section>

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> services</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> explore</a>
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