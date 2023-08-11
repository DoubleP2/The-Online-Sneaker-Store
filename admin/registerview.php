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
                      <li><a href="home.php" class="active">Home</a></li>
                      <li><a href="shop.php" class="active">Product</a></li>
                      <li><a href="order.php" class="active">Orders</a></li>
                      <li><a href="contact.php" class="active">Contact-View</a></li>
                      <li><a href="registerview.php" class="active">Register-View</a></li>
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
          <h3>Register-View</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >Register-View</span>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
    <div class="contact-page section">
       <div class="right-content">
      <div class="row">
      <h2 align="center"> View Order form</h2>
       <table  style="border-color: red;border-style: solid;margin-left:20px;margin-right:50px;" width="500px" align="right;"  >
					
					<tr><th width="100px" height="50px">ID:</th>					
						<th width="100px" height="50px">Name:</th>
						<th width="100px" height="50px">Password:</th>
						<th width="100px" height="50px">Email:</th>
						<th width="100px" height="50px">Phone:</th>
						<th width="100px" height="50px">Hometown:</th>	
						<th width="100px" height="50px">Country:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from register ");
						while($row=mysql_fetch_array($sel))
							{		
									$id=$row['reg_id'];					
									$name=$row['name'];
									$pass=$row['pass'];
									$email=$row['email'];
									$phone=$row['phone'];
									$city=$row['city'];
									$country=$row['country'];
						?>
					 <tr>
						
						<td width="100px" height="50px"><?php echo $id; ?></td>
						<td width="100px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $pass; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $phone; ?></td>
						<td width="100px" height="50px"><?php echo $city; ?></td>
						<td width="100px" height="50px"><?php echo $country; ?></td>
						
						
												
					  </tr>			
					<?php				  
							}	
					?>
					</table>  

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