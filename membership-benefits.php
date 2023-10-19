<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Membership Benefits | Hand for Handmade (HFH) </title>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/linearicons/style.css" rel="stylesheet">
    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!-- Main Header-->
<?php include 'include/header.php'; ?>
<!-- End Main Header -->

<br>
<br>
<br>


<!--================End Main Header Area =================-->
<section class="banner_area mt-5">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Membership Benefits </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Membership Benefits</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->

<!--================  Area =================-->
<section class="service_offer_area p_100">
    <div class="container">
        <div class="main_title">
            <h2> Membership Benefits </h2>
            <p> To energize the handmade industry through knowledge sharing, design innovation and building effective
                linkages in the ecosystem. </p>
        </div>
        <div class="row service_main_item_inner">
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Visibility and business discovery </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Bulletin Board </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Resource Material </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Designs Collaborations & Challenges </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Webinars & Masterclasses </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service_m_item">
                    <div class="service_img_inner">
                        <div class="service_img">
                            <img class="rounded-circle" src="img/icon-6.jpg" alt="">
                        </div>
                    </div>
                    <div class="service_text">
                        <h4> Publicity & Campaigns </h4>
                    </div>
                </div>
            </div>
        </div>


        <div style="padding-top: 4em;" class="row">
            <div class="col-md-12" style="text-align: center; padding-top: 3em;">
                <a class="pink_btn" href="signin.php"> Click here to become a member </a>
            </div>
        </div>

    </div>
</section>
<!--================End   Area =================-->


<div class="tear-footer bot"></div>

<!-- Main Footer -->
<?php include 'include/footer.php'; ?>
<!-- End Main Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Extra plugin js -->
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/datetime-picker/js/moment.min.js"></script>
<script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>

<script src="js/theme.js"></script>
</body>

</html>