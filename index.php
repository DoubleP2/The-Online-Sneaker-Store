<?php
error_reporting(1);
session_start();
include("connection.php");
if(isset($_POST['login']))
	{
	if($_POST['id']=="" || $_POST['pwd']=="")
		{
		 $er= "<font color='red' size='8'>Please fill your name or password</font>";
		}
		else{
				$d=mysql_query("select * from register where name='{$_POST['id']}' ");
				$row=mysql_fetch_object($d);
				$fid=$row->name;
				$fpass=$row->pass; 
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
			{
				$_SESSION['sid']=$_POST['id'];
				header('location:home.php');
			}
	else 
		{  $err="<font color='red' size='8'>Fill the correct Password</font>"; }
		}
	}
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
      <h2>LOGIN HERE</h2><br/><br/>
      <div class="row">
        
    <form id="contact-form" action="#" method="post">
                    <div class="col-lg-4">
                      Name:
                      <fieldset>
                        <input type="text" name="id" placeholder="Please Fill Your Name"></input>
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      Password:
                      <fieldset>
                      <input type="password" name="pwd" placeholder="Please Fill Your Password"></input>
                      </fieldset>
                      </div>
                      <div class="row">
                    <div class="col-lg-3">
                    Already have an account?
                      <fieldset>
                        
                        <button id="login" name="login" class="orange-button">login</button>
                      </fieldset>
                    </div>
                    <div class="col-lg-3">
                    If you don't have an account?
                      <fieldset>  
                        <button class="orange-button"><a href="register.php">Sign Up</a></button>
                      </fieldset>
                    </div>
                    </div>
                  </form>
</div>
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