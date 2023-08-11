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
                    <a href="home.php" class="logo">
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
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> <span>Products</span>
        </div>
      </div>
    </div>
  </div>
<div class="section trending">
    <div class="container">
<?php
		 error_reporting(1);
		 include("connection.php");
			$sel=mysql_query("select * from item ");
			echo"<div class='row trending-box'>";
        $n=0;
          while($arr=mysql_fetch_array($sel))
        {
        $i=$arr['img'];
        
          if($n%1==0)
        {
        echo "<div>
              ";
        }
        echo 
        "<div class='row trending-box'>
        <div class='col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str'>
        <div class='item'>
          <div class='thumb'>
          <img src='admin/image/$i' alt=''>
            <span class='price'>".$arr['price']."</span>
          </div>
          <div class='down-content'>
            <span class='category'>Shoes</span>
            <h4>".$arr['prod_no']."</h4>
            <a href='order.php?img=$i'><i class='fa fa-shopping-bag'></i></a>
          </div></div>
        </div>
      </div>";
        $n++;

        }
            echo "</div>
            ";
	?>	
	</div>
      </div>

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