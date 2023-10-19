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

    <title> Pinjrakari Laptop Table | Hand for Handmade (HFH) </title>

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

    <link rel="stylesheet" href="css/masonry-style.css">
    <link rel="stylesheet" href="css/reset.min.css">
    <link rel='stylesheet' href="css/animate.min.css">

    <!-- <link rel="stylesheet" href="vendors/css/bundle.min.css">
    <link rel="stylesheet" href="vendors/css/cubeportfolio.min.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background: url(img/welcome-bg.jpg);">


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
            <h3> Pinjrakari Laptop Table </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Pinjrakari Laptop Table</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Blog Main Area =================-->
<section class="main_blog_area p_100">
    <div class="container">
        <div class="row blog_area_inner">
            <div class="col-lg-9">

                <div class="main_blog_inner single_blog_inner">
                    <div class="blog_item">
                        <div class="blog_text">
                            <div class="blog_time">
                                <div class="float-left">
                                    <a href="#"> WINNER(S): Namisha Bajpai </a>
                                </div>
                                <div class="float-right">
                                    <ul class="list_style">
                                        <li><a href="#"> MENTOR </a> :</li>
                                        <li><a href="#"> Sweta Raj </a></li>
                                    </ul>
                                </div>
                            </div>

                            <h4> Pinjrakari Laptop Table </h4>
                            <p> A foldable laptop table with 'Pinjrakari' jaali that provides proper ventilation and
                                avoids overheating in laptops. With added features such as foldable lamp, power bank,
                                height adjustable legs, slots for placing phones and tablets, adjustable position for
                                laptops, and attached mouse pad for convenience. </p>

                            <div class="layout-article-d">
                                <ul class="box-article">
                                    <li class="list-article wow flipInY">
                                        <article class="box-article">
                                            <a href="#">
                                                <figure><img src="img/laptop5_ZmbBWzA.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>
                                    <li class="list-article wow flipInY" data-wow-delay="0.3s">
                                        <article class="box-article">
                                            <a href="">
                                                <figure><img src="img/toy4_MwqSZln.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>

                                    <li class="list-article wow flipInY" data-wow-delay="0.9s">
                                        <article class="box-article">
                                            <a href="">
                                                <figure><img src="img/pottery5_VAjBDQM.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>

                                    <li class="list-article wow flipInY" data-wow-delay="0.6s">
                                        <article class="box-article">
                                            <a href="">
                                                <figure><img src="img/weaving4_f22gfXP.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>

                                    <li class="list-article wow flipInY" data-wow-delay="0.6s">
                                        <article class="box-article">
                                            <a href="">
                                                <figure><img src="img/weaving4_f22gfXP.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>
                                    <li class="list-article wow flipInY" data-wow-delay="0.3s">
                                        <article class="box-article">
                                            <a href="">
                                                <figure><img src="img/toy4_MwqSZln.webp" alt=""/></figure>
                                            </a>
                                        </article>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-3">
                <div class="right_sidebar_area">

                    <aside class="r_widget tags_widget">
                        <div class="r_title">
                            <h3> CRAFTS </h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#"> Pinjrakari </a></li>
                            <li><a href="#"> Khatumband </a></li>
                        </ul>


                    </aside>

                    <aside class="r_widget tags_widget">
                        <div class="r_title">
                            <h3> MATERIAL </h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#"> Pinjrakari </a></li>
                            <li><a href="#"> Khatumband </a></li>
                        </ul>
                    </aside>

                    <aside class="r_widget tags_widget">
                        <div class="r_title">
                            <h3> TECHNIQUE </h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#"> Pinjrakari </a></li>
                            <li><a href="#"> Khatumband </a></li>
                        </ul>
                    </aside>

                    <aside class="r_widget tags_widget">
                        <div class="r_title">
                            <h3> PRODUCT TYPE </h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#"> Pinjrakari </a></li>
                            <li><a href="#"> Khatumband </a></li>
                        </ul>
                    </aside>

                </div>
            </div>
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
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script src='http://mynameismatthieu.com/WOW/dist/wow.min.js'></script> -->


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Extra plugin js -->
<!-- <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
 <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
 <script src="vendors/datetime-picker/js/moment.min.js"></script>
 <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
 <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
 <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
 <script src="vendors/lightbox/simpleLightbox.min.js"></script>  -->

<script src="js/theme.js"></script>


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<!-- <script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script> -->
<script src="vendors/js/wow.min.js"></script>


<script>
    new WOW().init();
</script>


</body>

</html>