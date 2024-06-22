<?php
header("Content-Type:text/html;charset=utf-8");
$link = mysqli_connect("localhost","root","","workshop") 
or die("Could not connect server or use database");
mysqli_query($link,"SET NAMES 'utf8'");

$sql="SELECT*FROM `admin`";
$result=mysqli_query($link,$sql) or die("invalid query"); 

// echo "<br>共有".mysqli_num_rows($result)."筆記錄<br>";
// while($record=mysqli_fetch_array($result)){
//     echo "標題:".$record['news_subject']."";
//     echo "日期:".$record['news_date']."";
//     echo "內容:".$record['news_content']."<br>";
// }
// mysqli_close($link);


?>
<?php session_start(); ?>
<?php

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>空間節奏設計工作室</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="css/bootstrap2.css">
    <!--2是額外加上-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style>
        .marg {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <!-- <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div> -->
    <!-- <div class="page"> 影響文字置中-->
    <a class="section section-banner d-none d-xl-block"></a>
    <!-- Page Header-->
    <header class="section page-header marg">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true"
                data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a class="brand" href="index.html"><img src="images/logo.png" alt="" width="196" height="47" /></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <!-- login -->
                                <div class="desktop-user desktop d-inline-block">
                                    <div class="dropdown right1 md_acc ">
                                        <span class="dropdown-toggle" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a href="#" class="font-weight-bolder">
                                            <svg viewBox="0 0 482.9 482.9" id="header_user" width="25px" height="25px">  
                                                <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
                                                c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
                                                c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
                                                M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
                                                c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
                                                c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"/>
                                                <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
                                                c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
                                                c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
                                                c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
                                                c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
                                                c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
                                                c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
                                                C447,415.5,446.9,388.8,446.8,383.6z"/>
                                            </svg>
                                        </a>
                                        </span>
                                        <div class="dropdown-menu r_menu dropdown-menu-right">
                                            <a class="dropdown-item font-weight-bolder" href="login.html"><span class="m-space"><i class="fas fa-lock"></i></span>&nbsp;log in</a>
                                            <a class="dropdown-item font-weight-bolder" href="registration.html"><span class="m-space"><i class="fas fa-user-plus"></i></span>&nbsp;register</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- RD Navbar Basket-->
                                <div class="rd-navbar-basket-wrap">
                                    <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                                    <div class="cart-inline">
                                        <div class="cart-inline-header">
                                            <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                                            <h6 class="cart-inline-title">Total price:<span> $0</span></h6>
                                        </div>
                                        <div class="cart-inline-body">
                                            <div class="cart-inline-item">
                                                <div class="unit align-items-center">
                                                    <div class="unit-left">
                                                        <a class="cart-inline-figure" href="#"><img src="images/tinypic5.jpg" alt="" width="108" height="100" /></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <h6 class="cart-inline-name"><a href="#">客廳</a></h6>
                                                        <div>
                                                            <div class="group-xs group-inline-middle">
                                                                <div class="table-cart-stepper">
                                                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                                                </div>
                                                                <h6 class="cart-inline-title">$550</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-inline-item">
                                                <div class="unit align-items-center">
                                                    <div class="unit-left">
                                                        <a class="cart-inline-figure" href="#"><img src="images/tinypic10.jpg" alt="" width="108" height="100" /></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <h6 class="cart-inline-name"><a href="#">廚房</a></h6>
                                                        <div>
                                                            <div class="group-xs group-inline-middle">
                                                                <div class="table-cart-stepper">
                                                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                                                </div>
                                                                <h6 class="cart-inline-title">$250</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-inline-footer">
                                            <div class="group-sm"><a class="button button-md button-default-outline-2 button-wapasha" href="cart.html">Go to cart</a><a class="button button-md button-primary button-pipaluk" href="checkout.html">Checkout</a></div>
                                        </div>
                                    </div>
                                </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="#"><span>2</span></a>
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                    <form class="rd-search" action="#">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                            <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                                            <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="service.html">Service</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.html">Gallery</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                                </div>
                                <div class="project-close"><span></span><span></span></div>
                            </div>
                        </div>
                        <div class="rd-navbar-project rd-navbar-modern-project">
                            <div class="rd-navbar-project-modern-header">
                                <h4 class="rd-navbar-project-modern-title">Get in Touch</h4>
                                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                                <div>
                                    <p>如有需要服務的地方，<br>歡迎與我們聯繫。</p>
                                    <div class="heading-6 subtitle">Our Contacts</div>
                                    <div class="row row-10 gutters-10">
                                        <div class="col-12"><img src="images/coming-soon.png" alt="" width="394" height="255" />
                                        </div>
                                    </div>
                                    <ul class="rd-navbar-modern-contacts">
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone" href="tel:#"></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                                <div class="unit-body"><a class="link-location" href="#"></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-email" href="mailto:#"></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-inline rd-navbar-modern-list-social">
                                        <li>
                                            <a class="icon fa fa-facebook" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-twitter" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-google-plus" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-instagram" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-pinterest" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <class class="active">Login | Register</li>
        </ul>
    </div>
    <!-- Breadcrumbs -->
    <!-- <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-39">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                <ul class="breadcrumbs-custom-path">
                    <class class="active">Login | Register</li>
                </ul>
            </div>
            <div class="box-position" style="background-image: url(images/banner3-1.jpg);"></div>
        </div>
    </section> -->
    <!--會員表單-->
    <br>
    <div class="container">
        <h4 class="text-center">會員登入 </h4><br>
        <div id="login" class="page-content card card-block p-3 p-sm-4 col-md-6 col-md-offset-3">
            <form class="needs-validation " method="post" action="login_account.php" novalidate>
                <div class="form-group">
                    <label for="user_email" class="font-weight-bolder">Account/Email address</label>
                    <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" name="email" required>
                    <div class="invalid-feedback">Please Enter your Account Name.</div>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group font-weight-bolder">
                    <label for="user_password" class="font-weight-bolder">Password</label>
                    <input type="password" class="form-control" id="user_password" name="password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="user_check">
                    <label class="form-check-label" for="user_check"> Remember me</label>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mb-3 btn-block" value="Login">
                <div class="pass_acc border-bottom pt-3 pb-5">
                    <span class="forgot_password font-weight-bolder"><a href="forgot.html">Forgot your password? </a></span><br>
                    <span class="no_account font-weight-bolder"><a href="registration.html">No account? Create one here</a></span>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <!-- Page Footer-->
    <!-- <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">

        <div class="footer-variant-2-bottom-panel">
            <div class="container">
                <div class="group-sm group-sm-justify">
                    <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> 空間節奏設計工作室 all rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer> -->
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>