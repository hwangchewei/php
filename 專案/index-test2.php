<?php
header("Content-Type:text/html;charset=utf-8");
$link = mysqli_connect("localhost","root","","workshop") 
or die("Could not connect server or use database");
mysqli_query($link,"SET NAMES 'utf8'");

$sql="SELECT*FROM work_news";
$result=mysqli_query($link,$sql) or die("invalid query"); 

// echo "<br>共有".mysqli_num_rows($result)."筆記錄<br>";
// while($record=mysqli_fetch_array($result)){
//     echo "標題:".$record['news_subject']."";
//     echo "日期:".$record['news_date']."";
//     echo "內容:".$record['news_content']."<br>";
// }
// mysqli_close($link);
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style>
        .panel-heading .accordion-toggle:before {  
    content: "－"; 
}
.panel-heading .accordion-toggle.collapsed:before {
    content: "＋";
}   
    .fonth2{font-size:20px;}

    </style>
</head>

<body>
    <!-- <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div> -->
    <div class="page">
        <a class="section section-banner d-none d-xl-block"></a>
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-modern-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
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
                                                <h6 class="cart-inline-title">Total price:<span> $800</span></h6>
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
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="service.html">Service</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="contact.html">Contact Us</a>
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
                                                    <div class="unit-left"><span><img src="images/o-phonetime-icon.png" style="width:20px;"></span></div>
                                                    <div class="unit-body"><a class="link-phone" href="tel:#"></a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-spacing-sm">
                                                    <div class="unit-left"><span><img src="images/o-address-icon.png" style="width:20px;"></span></div>
                                                    <div class="unit-body"><a class="link-location" href="#"> </a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-spacing-sm">
                                                    <div class="unit-left"><span><img src="images/o-mail-icon.png" style="width:20px;"></span></div>
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
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
            <div class="swiper-wrapper text-left">
                <div class="swiper-slide context-dark" data-slide-bg="images/banner.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-center justify-content-xxl-start">
                                <div class="col-md-10 col-xxl-6">
                                    <div class="slider-modern-box">
                                        <h2 style="font-family: 'Cinzel', cursive;font-weight:lighter;" id="lessismore" class="text-center">Less is more</h2>
                                        <p class="text-center" style="font-size: 26px;">空間節奏設計工作室</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-slide context-dark" data-slide-bg="images/slider-2-1920x729.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-center justify-content-xxl-start">
                                <div class="col-md-10 col-xxl-6">
                                    <div class="slider-modern-box">
                                        <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft" data-caption-delay="0">Quality Control</span></h1>
                                        <p data-caption-animate="fadeInRight" data-caption-delay="400">We control the process of farming at Herber to deliver the best organic products to our customers throughout the state.</p>
                                        <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="400">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slider-3-1920x729.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-center justify-content-xxl-start">
                                <div class="col-md-10 col-xxl-6">
                                    <div class="slider-modern-box">
                                        <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Eco-Friendly</span></h1>
                                        <p data-caption-animate="fadeInRight" data-caption-delay="400">As the leading organic farm, we maintain an eco-friendly policy of growing and selling healthy food without any additives.</p>
                                        <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInUp" data-caption-delay="400">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Swiper Navigation-->
            <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
            <!-- Swiper Pagination-->
            <!-- <div class="swiper-pagination swiper-pagination-style-2"></div> -->
        </section>
        <!-- News -->
        <!-- Latest posts-->
        <section class="section section-sm bg-default">
            <div class="container">
                <div class="oh">
                    <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s">
                        <h3 class="title-decoration-lines-content">最新消息</h3>
                    </div>
                </div>
                <br><br>
                <div class = "container">  
                <div class="panel-group" id="accordion">
                    <?php
                    $count = 0;
                        while($record=mysqli_fetch_array($result)){
                            $count = $count + 1;
                            echo "<section class='panel panel-default'>";
                            echo "<header class='panel-heading'>";
                            echo "<h2 class='panel-title text-left fonth2'>";
                            $href = '#post'.strval($count);
                            echo "<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='$href'>";
                            
                             echo "標題:".$record['news_subject'];
                             echo "</a>";
                             echo "</h2>";
                             echo "</header>";
                             
                             
                            $id = 'post'.strval($count);
                             echo "<footer id='$id' class='panel-collapse collapse'>";
                             echo "<p class='panel-body text-left'>";
                             echo $record['news_content'];
                             echo "</p>";
        
                                 echo "</footer>";
                                 echo "</section>";}
                            ?>

                            
                        
                    <!-- <section class="panel panel-default">
                        <header class="panel-heading">
                        <h2 class="panel-title text-left fonth2">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#post2">
                            Nintendo Switch 官方推出紙模，善用瓦楞紙板，打造周邊配件省錢又環保
                            </a>
                        </h2>
                        </header>
                        <footer id="post2" class="panel-collapse collapse">
                        <p class="panel-body text-left">
                            <img src="https://ds.minwt.com.tw/img/Content/life/nintendo-switch-idea/nl-01.jpg" alt=""><br>
                            知名遊戲廠商Nintendo，最近幫它們家的Switch推出了一個全新的idea，將體感遊戲推向更高的境界，不需要華麗昂貴的套件，而是用環保有善的瓦楞紙來組裝，組裝的過程都有影片教學示範，不用擔心會裝錯。搭配Switch的把手體感裝置結合，不管你是要釣魚、賽車、機器人格鬥、彈鋼琴都有相對應的模組，目前公開的項目就有十多餘種，讓人看了非常心動，好像不買一台Switch都對不起小編自己了。
                            <a href="https://www.minwt.com/life/19318.html">詳全文</a>
                        </p>
                        </footer>
                    </section>
                    <section class="panel panel-default">
                        <header class="panel-heading">
                        <h2 class="panel-title text-left fonth2">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#post3">
                            新版Macbook豆腐插，不但能充筆電還能充手機、平板、相機，所有配件一顆搞定
                            </a>
                        </h2>
                        </header>
                        <footer id="post3" class="panel-collapse collapse">
                        <p class="panel-body text-left">
                            <img src="https://ds.minwt.com.tw/img/Content/mac/usb-c-all-device/macbook-adapter-all-devie_00.jpg" alt=""><br>
                            自從換了新款MacBook Pro時，本來心想新版只有USB-C的接頭，應該會不習慣，沒想到使用了二、三個月後，卻相當的習慣，一來是透過innowatt DOCK Pro七合一擴充槽，一次解決了所有進接埠的問題，二來是當出門在外，也真的很少連接其它的設備，大部分最常連接就是滑鼠，或是連接手機進行充電，而新版的MacBook除了筆電的連接埠全面改成USB-C外，就連變壓器也一樣，變成一個USB-C的插槽，再用USB-C充電線連接，一開始梅干對於這個充電器有點失望，除了沒有磁吸線外，再來就是原來貼心的收線的兔耳朵也不見了。
                            <a href="https://www.minwt.com/mac/19286.html">詳全文</a>
                        </p>
                        </footer>
                    </section> -->
                    </div>
                </div>
                <!-- <div class="row row-50 justify-content-center">
                    <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 wow fadeInLeft" data-wow-delay="0s"> -->
                        <!-- Post Creative-->
                        <!-- <article class="post post-creative">
                            <div class="post-creative-header">
                                <div class="group-md">
                                    <div>
                                        <div class="unit flex-column flex-sm-row unit-spacing-sm align-items-center">
                                            <div class="unit-left"><img class="img-circles" src="images/user-4-49x49.jpg" alt="" width="49" height="49" />
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-creative-author">by<a href="#"> Mary Lee</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-creative-time">
                                        <time datetime="2019-05-17">May 17, 2019</time>
                                    </div>
                                </div>
                            </div>
                            <a class="post-creative-figure" href="blog-post.html"><img src="images/post-16-370x267.jpg" alt="" width="370" height="267" /></a>
                            <div class="post-creative-footer">
                                <h5 class="post-creative-title"><a href="blog-post.html">Flooring Pro’s Secrets that can Raise Your Home Value</a></h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 wow fadeInLeft" data-wow-delay=".1s"> -->

                    <!-- 消息欄位 -->
                    <!-- <div class="row mb-2">
                    <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                    </div>
                </div> -->
                    <!-- 消息欄位 -->
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </section>
        <!-- News End-->
        
        <!-- Icons Ruby-->
        <section class="section section-md bg-default section-top-image">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                        <article class="box-icon-ruby">
                            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-ruby-icon">
                                        <img src="images/loto.png">
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h4 class="box-icon-ruby-title"><a href="#">Natural</a></h4>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                        <article class="box-icon-ruby">
                            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-ruby-icon">
                                        <img src="images/molin-logo.png">
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h4 class="box-icon-ruby-title"><a href="#">Best Equipment</a></h4>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                        <article class="box-icon-ruby">
                            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-ruby-icon">
                                        <img src="images/frances-logo.png">
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h4 class="box-icon-ruby-title"><a href="#">Dedicated Team</a></h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Footer-->
        <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
            <div class="footer-variant-2-content">
                <div class="container">
                    <div class="row row-40 justify-content-between">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="oh-desktop">
                                <div class="wow slideInRight" data-wow-delay="0s">
                                    <div class="footer-brand">
                                        <a href="index.html"><img src="images/logo-white.png" alt="" width="100" /></a>
                                    </div>
                                    <p>擁有屬於自己的空間節奏
                                    </p>
                                    <!-- <ul class="footer-contacts d-inline-block d-md-block">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                          <div class="unit-body">
                            <p>Mon-Sat: 07:00AM - 05:00PM</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-4">
                            <div class="oh-desktop">
                                <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                                    <h5>About Us</h5>
                                    <p>2020年成立空間節奏設計工作室。<br> 簡約、舒適、永續是我們的設計理念。
                                    </p>
                                    <p>家居、商業空間規劃設計<br> 老屋翻新、住宅美學創造
                                        <br> 毛孩最大、貓狗友善空間
                                    </p>

                                    <div class="group-lg group-middle">
                                        <p class="text-white">Follow Us</p>
                                        <div>
                                            <ul class="list-inline list-inline-sm footer-social-list-2">
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
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-4">
                            <div class="oh-desktop">
                                <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                                    <h5>Contact Us</h5>
                                    <ul class="footer-contacts d-inline-block d-md-block">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span><img src="images/g-phonetime-icon.png" style="width:20px;"></span></div>
                                                <div class="unit-body">
                                                    <p><a class="link-phone" href="tel:#"></a><br>Mon-Fri: 09:00AM - 05:00PM</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span><img src="images/g-address-icon.png" style="width:20px;"></span></div>
                                                <div class="unit-body"><a class="link-location" href="#"></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span><img src="images/g-mail-icon.png" style="width:20px;"></span></div>
                                                <div class="unit-body"><a class="link-email" href="mailto:"></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-variant-2-bottom-panel">
                <div class="container">
                    <!-- Rights-->
                    <div class="group-sm group-sm-justify">
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> 空間節奏設計工作室 all rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Ragnar-->
</body>

</html>