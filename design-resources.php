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

    <title> Design Resources | Hand for Handmade (HFH) </title>

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
<section class="banner_area">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Design Resources </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Resources</li>
                <li> Design Resources</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Blog Main Area =================-->
<section class="main_blog_area p_100">
    <div class="container">

        <div class="main_title">
            <h2> Design Resources </h2>
            <p> Several National and Global studies which are useful to the craft and handmade community, research
                finding, survey reports, repositories, case studies are shared here so that individuals and
                organisations can benefit from these. </p>
        </div>

        <div class="blog_area_inner">
            <div class="main_blog_column row">
                <div class="col-lg-6">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="img/Screenshot_1.png" alt="">
                        </div>
                        <div class="blog_text">
                            <a href="pdf/mask_tested_patterns.pdf" target="_blank"><h4> Mask Tested Patterns </h4></a>
                            <a class="pink_more" href="pdf/mask_tested_patterns.pdf" target="_blank"> <i
                                        class="fa fa-download" aria-hidden="true"></i> Download </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="img/Screenshot_2.png" alt="">
                        </div>
                        <div class="blog_text">
                            <a href="pdf/campaign_brief.pdf" target="_blank"><h4> Campaign Brief </h4></a>
                            <a class="pink_more" href="pdf/campaign_brief.pdf" target="_blank"> <i
                                        class="fa fa-download" aria-hidden="true"></i> Download </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="img/Screenshot_3.png" alt="">
                        </div>
                        <div class="blog_text">
                            <a href="pdf/mask_design.pdf" target="_blank"><h4> Mask Design </h4></a>
                            <a class="pink_more" href="pdf/mask_design.pdf" target="_blank"> <i
                                        class="fa fa-download" aria-hidden="true"></i> Download </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="img/craft_list.png" alt="">
                        </div>
                        <div class="blog_text">
                            <a href="pdf/craft_list.pdf" target="_blank"><h4> Craft List </h4></a>
                            <a class="pink_more" href="pdf/craft_list.pdf" target="_blank"> <i
                                        class="fa fa-download" aria-hidden="true"></i> Download </a>
                        </div>
                    </div>
                </div>


            </div>
            <nav aria-label="Page navigation example" class="blog_pagination d-none">
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!--================End Blog Main Area =================-->


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