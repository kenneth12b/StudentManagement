<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Comedor De Mano!</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Craving delicious food without the hassle? Look no further! We're all about serving up fresh, flavorful dishes made with quality ingredients. Plus, ordering is a breeze – call ahead, swing by, or order online for a quick and convenient meal. We offer a friendly atmosphere, perfect for a casual lunch, relaxed dinner, or easy takeout. Come see why we're your neighborhood go-to for great food and a comfortable vibe!.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/Ken.png" alt="">
            <p>This online restaurant was a total win! 5 stars all around. I can't wait to try more dishes next time.</p>
            <p></p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star   "></i>
            </div>
            <h3>Kennedy</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Bev.png" alt="">
            <p>Wow! The food from this online restaurant was incredible. Fresh, delicious, and beautifully presented. 5 stars for sure!</p> 
            <p></p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Beverly</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Mike.png" alt="">
            <p>Ordering from this online restaurant was definitely convenient, The website was easy to navigate, but it took a while for my order to delivered.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mike Lester</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Ayessa.png" alt="">
            <p>his online restaurant is such a lifesaver! The ordering process was so easy and user-friendly. 5 stars for convenience!</p>
            <p></p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Ayessa</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Romeo.png" alt="">
            <p>Amazing service from the online restaurant! My order arrived perfectly on time and everything was packaged with care. 5 stars for them!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Romeo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Charles.png" alt="">
            <p>Really enjoyed the food from this online restaurant - 4.5 stars! Everything was fresh and flavorful. The delivery took a bit longer than expected though.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Charles Peter</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



<?php include 'components/footer.php'; ?>




<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>