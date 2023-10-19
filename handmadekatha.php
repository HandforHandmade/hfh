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

    <title> HandmadeKatha | Hand for Handmade (HFH) </title>

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
<section class="banner_area">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> HandmadeKatha </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> HandmadeKatha</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Special Area =================-->
<section class="special_area p_100">
    <div class="container">

        <div class="special_item_inner">
            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="s_left_img">
                            <img class="img-fluid" src="img/handmadekatha.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="special_item_text">
                            <div class="main_title">
                                <h2> Handmadekatha </h2>
                            </div>
                            <p style="line-height: 34px;"> HandmadeKatha is an initiative of Hand for Handmade
                                Foundation to create an online selling portal for artisans, artisan clusters, designers
                                and vendors who are registered members of Hand for Handmade Foundation. This platform
                                will facilitate ethical practices in the online space by encouraging fair pricing and
                                commissions in the terms of trade in craft and handmade ecosystem. The products will be
                                carefully selected, curated and onboarded. HandmadeKatha aspires to connect artisans and
                                artisan groups with larger market networks and buyers of handmade products. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Special Area =================-->


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