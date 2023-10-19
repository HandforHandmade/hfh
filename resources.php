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

    <title>Resources | Hand for Handmade (HFH) </title>

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

    <!-- <link rel="stylesheet" href="vendors/css/bundle.min.css">
    <link rel="stylesheet" href="vendors/css/cubeportfolio.min.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="    background: url(img/welcome-bg.jpg);">


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
            <h3> Resources </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Resources</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Resources Offer Area =================-->
<section class="resources_offer_area p_100">
    <div class="container">
        <div class="main_title">
            <h2> Resources </h2>
            <p> Several National and Global studies which are useful to the craft and handmade community, research
                finding, survey reports, repositories, case studies are shared here so that individuals and
                organisations can benefit from these. </p>
        </div>
        <div class="row resources_main_item_inner">
            <div class="col-lg-4 col-sm-6">
                <div class="resources_m_item">

                    <div class="resources_img_inner">
                        <a href="business_resources.php">
                            <div class="resources_img">
                                <img class="rounded-circle img-fluid" src="img/resources-1.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="resources_text">
                        <a href="business_resources.php">
                            <h4> Business Resource </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="resources_m_item">
                    <div class="resources_img_inner">
                        <a href="design-resources.php">
                            <div class="resources_img">
                                <img class="rounded-circle img-fluid" src="img/resources-2.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="resources_text">
                        <a href="design-resources.php">
                            <h4> Design Resources </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="resources_m_item">
                    <div class="resources_img_inner">
                    <a href="research_trends.php">
                        <div class="resources_img">
                            <img class="rounded-circle img-fluid" src="img/resources-3.png" alt="">
                        </div>
                    </a>
                    </div>
                    <div class="resources_text">
                        <a href="research_trends.php">
                            <h4> Research Trends </h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Resources Offer Area =================-->


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
<!-- <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/datetime-picker/js/moment.min.js"></script>
<script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script> -->

<script src="js/theme.js"></script>


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script>
<script src="vendors/js/wow.min.js"></script>


</body>

</html>