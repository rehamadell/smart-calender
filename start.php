<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>


    <!--swiper css linkkk-->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css/"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">


</head>
<body>
  
     
<!--header begining -->

<section class="header">

<a href="home.php" class="logo">CALEN-DOK</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="start.php">Sign-up</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header End -->



<section class="signup">
    <h1 class="heading-title">Sign Up!</h1>
    <form action="start_form.php" method="post" class="Sign-Up-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            
            <div class="inputBox">
                <span>E-mail:</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            
            <div class="inputBox">
                <span>Password:</span>
                <input type="password" placeholder="Enter your password" name="password">
            </div>
            
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter your phone number" name="phone">
            </div>
            
            <div class="inputBox">
                <span>Date of Birth:</span>
                <input type="date" name="age">
            </div>
        </div>
        <input type="submit" value="Submit" class="btn" name="send">
    </form>
</section>

























<!--footer begining -->


<secction class="footer">

<div class="box-container">

<div class="box">
  <h3>Quick Links</h3>
    <a href="home.php"><i class= "fas fa-angle-right"></i> Home</a>
    <a href="about.php"><i class= "fas fa-angle-right"></i>About</a>
    <a href="package.php"><i class= "fas fa-angle-right"></i>Services</a>
    <a href="start.php"><i class= "fas fa-angle-right"></i>Sign-UP</a>
</div>

<div class="box">
  <h3>Extra Links</h3>
    <a href="#"><i class= "fas fa-angle-right"></i> Ask Questions</a>
    <a href="#"><i class= "fas fa-angle-right"></i> FAQ </a>
    <a href="#"><i class = "fas fa-angle-right"></i> About Us </a>
    <a href="#"><i class= "fas fa-angle-right"></i> Privacy </a>
    <a href="#"><i class= "fas fa-angle-right"></i> Terms of Use </a>
 
    </div>

    <div class="box">
  <h3>Contact Info</h3>
    <a href="#"><i class= "fas fa-phone"></i> 02-01002653253 </a>
    <a href="#"><i class= "fas fa-phone"></i> 02-01014331434 </a>
    <a href="#"><i class= "fas fa-phone"></i> 02-01094350059 </a>
    <a href="#"><i class= "fas fa-phone"></i> 02-01551430459 </a>
    <a href="#"><i class= "fas fa-envelope"></i> mariam2202717@miuegypt.edu.eg </a>
    <a href="#"><i class= "fas fa-map"></i>Egypt, Cairo, Nasr city </a>

    </div>

<div class="box">
  <h3>Follow Us</h3>
  <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
  <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
  <a href="#"><i class="fab fa-instagram"></i>Instagram</a>

</div>
</div>

<div class="credit">created by <span> Group 28</span>| all rights reserved!</div>

</secction>






<!--footer end -->


<!--swiper js linkk-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script src="js/script.js"></script>
</body>
</html>
