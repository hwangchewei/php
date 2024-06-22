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
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">回首頁</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="md_account.html">帳號管理</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="md_news.html">新消息管理</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">訂單管理</a>
                                    </li>
                                    <li class="rd-nav-item "><a class="rd-nav-link" href="#">留言板管理</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                                </div>
                                <div class="project-close"><span></span><span></span></div>
                            </div> -->
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </header>
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
        <h4 class="text-center">新消息管理</h4><br>
        <div id="login" class="page-content card card-block p-3 p-sm-4 col-md-6 col-md-offset-3">
            
                    <?php
                    $count = 0;
                        while($record=mysqli_fetch_array($result)){
                            $count = $count + 1;
                            echo "<form class='needs-validation' method='post' novalidate>";
                            echo "<label class='font-weight-bolder'>標題</label>";
                            echo "<div class='form-wrap'>";
                            
                            $title = $record['news_subject'];
                            echo "<input class='form-control' type='text'  name = 'input' id='$count' value='$title' >";
                             echo "</div>";
                             
                             echo "<div class='form-group font-weight-bolder'>";
                             echo "<label for='user_password' class='font-weight-bolder'>文章內容</label>";
                             
                             
                            
                             echo "<textarea class='form-control' rows='3' name='input2'>";
                            echo $record['news_content'];
                             echo "</textarea>";
                             echo "</div>>";
                             
                             echo "<input type='submit' name='submit' class='btn btn-primary mb-3' value='修改'>";
        
                                 echo "</form>";
                        }

                            ?>

                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="user_check">
                    <label class="form-check-label" for="user_check"> Remember me</label>
                </div> -->
                <br>
                <input type="submit" name="submit" class="btn btn-primary mb-3" value="修改">
        </div>
    </div>
    <br>
    <br>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>