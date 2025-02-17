<?php
session_start();
include "conection.php";
$data     = file_get_contents("admin/catagory.txt");
$data_arr = explode(",", $data);
// print_r($data_arr);
?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Crafty magic</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/newlogo.jpeg" alt="CM" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <?php
$i = 0;
while ($i <= array_search(end($data_arr), $data_arr)) {
    echo "<a class='dropdown-item' href='" . $data_arr[$i] . ".php'>" . $data_arr[$i] . "</a>";
    $i++;
}
?>
                           </div>
                        </li>
                        <li class="nav-item active"><li class="nav-item"><a class="nav-link" href="order.php">Orders</a></li>
                        <li class="nav-item active"><li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item active"><li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        
                        <!-- billow code handles dynamic login and logout button dont change it or remove it -->
                        <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
if (isset($_SESSION["logindatabase"])) {
    echo $_SESSION["logindatabase"];
} else {
    echo "Login";
}
?>
 </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php
if (isset($_SESSION["logindatabase"])) {
    echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
} else {
    echo "<a class='dropdown-item' href='login.php'>Login</a>";
}
?>
 </div>
</div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    
    <!-- Start Contact -->

    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Contact</h2>
                        <p>You can directly contact me by leaving message here.</p>
                    </div>
                </div>
            </div>
			<form method="post" class="" action="">
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name *" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>      
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email *" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Number *" class="form-control" name="phone" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> 
                                    <textarea class="form-control" placeholder="Message*" name="message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <!-- <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div> 
                                </div> -->

								 <div class="col-md-12 mt-15">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>

                            </div>
                        </div>            
                    </form>
                </div>
            </div> 

			<!-- <form method="post" class="" action="">
			<div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required>
                                </div>

                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12 mt-15">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
              </div> -->
			</form>








        </div>
    </div>
    <!-- End Contact -->

<?php

if (isset($_POST['submit'])) {
    # code...
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `tblquerys` (`id`, `name`, `gmail`, `number`, `message`, `send_date`) VALUES (NULL, '$name', '$email', '$phone', '$message', current_timestamp());";
    $run = mysqli_query($con, $sql);
    
    if ($run) {
    # code...
    echo "<script>
    alert('Thanks for contact us');
    
    window.location.href='contact.php';
    </script>";
    }
    
}

?>

    
    
    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">
                            +91 9157305530
                        </p>
                    </div>
                </div>
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            pandyaomn@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            swastik society,station road,sihor,Bhavnagar-364240
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->
    
    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>About Us</h3>
                    <p>This website will serve the platform for buying and selling of crafts products.By refering to the huge variety of gifting materials here you can find best.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Subscribe</h3>
                    <div class="subscribe_form">
                        <form class="subscribe_form">
                            <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">swastik society,station road,sihor,Bhavnagar-364240</p>
                    <p class="lead"><a href="#">+91 9157305530</a></p>
                    <p><a href="#"> pandyaomn@gmail.com</a></p>
                </div>    
                </div>
        </div>
        
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2024 <a href="#">Crafty Magic</a> Design By : 
                    <a href="https://html.design/">om pandya</a></p>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- End Footer -->
    
    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery.mapify.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    
    <!--<script>
        $('.map-full').mapify({
            points: [
                {
                    lat: 40.7143528,
                    lng: -74.0059731,
                    marker: true,
                    title: 'Marker title',
                    infoWindow: 'Live Dinner Restaurant'
                }
            ]
        });    
    </script>-->
</body>
</html>
