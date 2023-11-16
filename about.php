<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>About us</h3>
         <p>Welcome to BookBash, a literary haven established in 2023. Founded by Ritesh, Ashwajeet, and Saharsh, our bookstore is a celebration of the written word and a commitment to fostering a love for reading. With a carefully curated selection spanning various genres, we aim to be more than just a bookstore; we aspire to be your reading sanctuary. Beyond the shelves, BookBash is a community of book enthusiasts, where we host events, share recommendations, and create a space for literary exploration. Join us on this literary journey, where every book has a story, and every reader is part of ours.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rahul Singh</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rhonda Jules</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jack</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aura</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohan Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maria Sanchez</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title"> Some Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://www.williamshakespeare.net/images/shakespeare.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>William Shakespeare</h3>
      </div>

      <div class="box">
         <img src="https://images.saymedia-content.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:eco%2Cw_1200/MjAxMjAwODQ0MjE1OTUyOTE4/book-review-persuasion-by-jane-austen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jane Austen</h3>
      </div>

      <div class="box">
         <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Chetan_Bhagat.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="data:image/jpeg;base64,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" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sudha Murthy</h3>
      </div>

      <div class="box">
         <img src="data:image/jpeg;base64,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" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amish Tripathi</h3>
      </div>

      <div class="box">
         <img src="https://hips.hearstapps.com/hmg-prod/images/amelia-earhart.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amelia</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>