<?php
include("Assets/Connection/Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>STELLER POWER SOLUTION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="Assets/Templates/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="Assets/Templates/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Assets/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Templates/Main/css/icofont.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Templates/Main/css/style.css" rel="stylesheet">
    <style>
        .title{
            background-color: #78a600;
            color: white;
        }
        .why-choose-us-v1-sec{
	background-color: #fff;
	background-image: url("../img/slide3.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	overflow:hidden;
	background-attachment:fixed;
}
.why-choose-v1-title {
	margin: 0;text-align:left;
	margin-bottom: 40px;
}
.why-choose-v1-title span::before {
	position: absolute;
	content: "";
	background: #78a600;
	width: 60px;
	height: 1px;
	top: 14px;
	left: 0;
}
.why-choose-v1-title span {
	text-transform: capitalize;
	font-size: 20px;
	font-weight: 600;
	margin-bottom: 10px;
	display: inline-block;
	position: relative;
	color: #78a600;
	padding-left: 70px;
}
.why-choose-v1-title h1 {
	font-size: 36px;
	text-transform: capitalize;
	color: #fff;
	font-weight: bold;
}
.why-choose-v1 {
	padding: 60px 0px 20px 50px;
	position: relative;
	z-index: 2;	
}
.why-choose-v1::before {
	position: absolute;
	content: "";
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: #0f1934;
	left: -15px;
	width: 5000px;
	z-index: -1;
}
.why-choose-v1-single {
	margin: 20px 0;
	color: #cdcdcd;
}
.why-choose-v1-single .icon {
	width: 60px;
	height: 60px;
	margin-right: 10px;
	text-align: center;
	line-height: 60px;
	background: #78a600;
	color: #fff;
	font-size: 28px;
	border-radius: 100%;
	position: relative;
}
.why-choose-v1-single .media{
	overflow:visible;
}
.why-choose-v1-single .media-left{
position:relative;
}
.why-choose-v1-single .media-left::before {
	width: 1px;
	height: 170px;
	position: absolute;
	content: "";
	top: 0;
	left: 30px;
	border-left:1px dashed #f2f2f2;
	transition: all 0.4s ease 0s;
}
.why-choose-v1-single:last-child .media-left:before {
	display:none;
}
.why-choose-v1-single .media-body h2 {
	font-size: 20px;
	margin-bottom:10px;
	text-transform: capitalize;
	color:#fff;
}

.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.fill img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
}
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                
                <a href="">
                    <img src="Assets/Templates/Main/img/steller.png">
                </a>
                
            </div>
            <div class="col-lg-4 col-6 text-left">
                
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+91 8589931889</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    
                   
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-flex">
                            <a href="Guest/login.php" class="nav-item nav-link">Login</a>
                            <a href="Guest/Userregistration.php" class="nav-item nav-link">Sign up</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                        <li data-target="#header-carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="Assets/Templates/Main/img/inverters.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">SOLAR INVERTERS</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Brighten Your Home</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="Assets/Templates/Main/img/inverters.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">NORMAL INVERTERS</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Long Life Battery Available</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="Assets/Templates/Main/img/inverters.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">BATTERY</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Long Life Battery Available</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="Assets/Templates/Main/img/inverters.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">SOLAR PANELS</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">High Quality Panels Available</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h1>Welcome To Stellar Power Solutions</h1>
                <p> We the team of "Stellar Power Solutions" believes excellence in quality and dedication to service to provide a greener,
                     sustainable and cost effective energy creation to the increasing energy need of our beautiful state, Kerala. We believe 
                     in values as flexibility, speed, trust, reliability and long term relationship with our valued customers.</p>

            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fast Delivery</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Life Long Service</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <div class="why-choose-us-v1-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="position-absolute w-100 h-100"><img src="Assets/Templates/Main/img/slide3.jpg"></div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="why-choose-v1">
          <div class="why-choose-v1-title"> <span>WHY SOLAR ENERGY?</span> </div>
          <div class="why-choose-v1-single">
            <div class="media">
              <div class="media-left">
                <div class="icon"><i class="fa fa-bolt"></i></div>
              </div>
              <div class="media-body">
                <h2>Excellent RIO</h2>
                <p>Solar Power saves your Electricity and diesel consumption bills, thus give you an excellent return on your
                     investment with payback in 4-5 years.</p>
              </div>
            </div>
          </div>
          <div class="why-choose-v1-single">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-check-circle"></i> </div>
              </div>
              <div class="media-body">
                <h2>Income Tax Benefits</h2>
                <p>For Commercial and Industrial users 80% accelerated depreciation (Income Tax) for 1st years 99% depreciation in 3 years. </p>
              </div>
            </div>
          </div>
          <div class="why-choose-v1-single">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-globe"></i> </div>
              </div>
              <div class="media-body">
                <h2>Environment Benefits</h2>
                <p>Solar power reduces reliance on fossil fuels such as oil, coal and natural gas.
                     Solar energy produces no pollution and does not strip the landscape on burn the ozone layer.
                      SOLAR Energy source protect the environment for next generation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Our Products</span></h2>
        <div class="row">
            
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class='card-img' src="Assets/Templates/Main/img/g1.jpg" alt="">
            <div class="title">
            <p align='center'>On-Grid Solar System</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class='card-img' src="Assets/Templates/Main/img/g2.jpg" alt="">
            <div class="title">
            <p align='center'>Off-Grid Solar System</p>  
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class='card-img' src="Assets/Templates/Main/img/g3.jpg" alt="">
            <div class="title">
            <p align='center'>Solar Water Heater</p>  
            </div>
        </div>
            
        </div>
    </div>
    <!-- Products End -->





   


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/microteklogo.jpg" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/amazelogo.png" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/Havellslogo.png" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/exidelogo.jpg" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/turbologo.png" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4 fill">
                        <img src="Assets/Templates/Main/img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row"> 
        <!-- Single Footer Widget Start -->
        <div class="col-md-3 col-sm-6">
          <div class="footer-wedget-one">
            <h2 class="text-white">About Us</h2>
            <p>We the team of "Stellar Power Solutions" believes excellence in quality and dedication to service to provide a greener,
                 sustainable and cost effective energy creation to the increasing energy need of our beautiful state, Kerala.
                  We believe in values as flexibility, speed, trust, reliability and long term relationship with our valued customers.</p>
            
          </div>
        </div>
        
        
        <!-- Single Footer Widget End --> 
        <!-- Single Footer Widget Start -->
        <div class="col-md-3 col-sm-6">
          <div class="footer-wedget-four">
            <h2 class="text-white">Address </h2>
            <div class="footer-contact-inner">
              <div class="footer-contact-info">
                <div class="footer-contact-info-icon"> <i class="icofont-google-map"></i> </div>
                <div class="footer-contact-info-text"> <span>Stellar Power solutions <br>Kurisinkal building, <br>
                   Arakkunnam-682313, Ernakulam</span> </div>
              </div>
            </div>
            <div class="footer-contact-inner">
              <div class="footer-contact-info">
                <div class="footer-contact-info-icon"> <i class="icofont-email"></i> </div>
                <div class="footer-contact-info-text"> <span>Mail Us<br>
                  <a style="color:#FFF;" href="mailto:stellarpowersolutions@gmail.com">stellarpowersolutions@gmail.com</a></span></div>
              </div>
            </div>
            <div class="footer-contact-inner">
              <div class="footer-contact-info">
                <div class="footer-contact-info-icon"> <i class="icofont-telephone"></i> </div>
                <div class="footer-contact-info-text"> <span>Call Us<br>
                  <a style="color:#FFF;" href="tel:+91 9645006435">+91 9645006435</a></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#"></a>2023 Steller Power Solutions. All Rights Reserved.
                  
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="Assets/Templates/Main/Main/img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Templates/Main/lib/easing/easing.min.js"></script>
    <script src="Assets/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="Assets/Templates/Main/js/main.js"></script>
</body>

</html>