<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$pass=$_POST['t2'];
$email=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$country=$_POST['t6'];
if(mysql_query("insert into register(name,pass,email,phone,city,country) values('$name','$pass','$email','$phone','$city','$country')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>The Online Sneaker Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                    <img src="assets/images/logo7.png" alt="" style="width: 170px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="register.php">REGISTER-FORM</a></li>
                     
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
    <div class="contact-page section">
       <div class="right-content">
      <div class="row">
     <form  method="post">
        <div class="row">
                <div class="col-lg-4">
                <label>Name: </label>
                <input type="text" name="t1" id="t1" class="input_field" placeholder="Enter Your Name" required />
                <label>Password:</label>
                <input type="password" name="t2" id="t2" class="input_field" placeholder="Enter Your Password" required/>
                 <label>Email:</label>
                <input type="emial" name="t3" id="t3" class="input_field"  placeholder="Enter Your Email" required /></div>
                <div class="col-lg-4">
                 <label>Phone: </label>
                <input type="text" name="t4" id="t4" class="input_field" placeholder="Enter Your Ph-number" required />
                 <label>City :</label>
                <input type="text" name="t5" id="t5" class="input_field"  placeholder="Enter Your Home-town" required />
                 <label>Country: </label>
                <input type="text" name="t6" id="t6" class="input_field"  placeholder="Enter Your Country" required /></div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                <button type="submit" name="sub" id="sub" value="Register" class="orange-button" >
                    Register</button>
                    <button type="reset" name="Cancel" class="submit_button">Cancle</button> </div>
                </div>
                <label><?php echo "<font color='red'>$error</font>";?></label>
            </form>
            
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
      <p>NO.25,Kyuntaw st,Myaynigone tw,Yangon &nbsp;&nbsp; <a href="contact.php" target="_blank">Comfort Zone SneakerStore</a></p>      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>