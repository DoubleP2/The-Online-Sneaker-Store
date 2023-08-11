<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Template - Contact Page</title>

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
                    <a href="index.html" class="logo">
                    <img src="assets/images/logo7.png" alt="" style="width: 170px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="home.php" class="active">Home</a></li>
                      <li><a href="shop.php" class="active">Our Shop</a></li>
                      <li><a href="order.php" class="active">Order_form</a></li>
                      <li><a href="contact.php" class="active">Contact Us</a></li>
                      <li><a href="logout.php">Sign Out</a></li>
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Discover Sneaker Paradise!

Step into a world of style and comfort at [Sneaker Haven]. Explore a curated collection of the latest trends and classic favorites. From iconic brands to unique designs, find your perfect fit today! </p>
            <ul>
              <li><span>Address</span>NO.25,Kyuntaw st,Myaynigone tw,Yangon </li>
              <li><span>Phone</span> 09755028545</li>
              <li><span>Email</span> comfortzont@contact.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/place/Comfort+Zone/@16.8049195,96.091564,13z/data=!4m22!1m15!4m14!1m6!1m2!1s0x30c1eb3e68d9847d:0xb77eef9b6fc7b1f5!2sComfort+Zone,+Yangon!2m2!1d96.1327646!2d16.8048417!1m6!1m2!1s0x30c1eb3e68d9847d:0xb77eef9b6fc7b1f5!2sComfort+Zone,+Yangon!2m2!1d96.1327646!2d16.8048417!3m5!1s0x30c1eb3e68d9847d:0xb77eef9b6fc7b1f5!8m2!3d16.8048414!4d96.1327639!16s%2Fg%2F11sx4tfy9g?entry=ttu" width="500px" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>


              <div class="col-lg-12">
                <?php
                    error_reporting(1);
                    include("connection.php");
                    if($_POST['submit'])
                        { 
                        $name=$_POST['t1'];
                        $email=$_POST['t2'];
                        $phone=$_POST['t3'];
                        $mesg=$_POST['t4'];
                if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
                    {
                        $er="<font color='red' size='+1'> Message sent successfully</font>"; 
                    }
                    }

                    ?>
                <form id="contact-form" action="#" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                <label>Name: </label>
                <input type="text" name="t1" id="t1"  placeholder="Enter Your Name" required />
                <label>Email:</label>
                <input type="email" name="t2" id="t2"  placeholder="Enter Your Email" required/>
                 <label>Phone:</label>
                <input type="text" name="t3" id="t3" placeholder="Enter Your Ph-number" required /></div>
                 <label>Message :</label>
               <textarea name="t4" id="t4" placeholder="Write A Message"></textarea>
                 
                <div class="">
                <button type="submit-button" name="submit" id="submit" value="Submit" >
                    Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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