<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Mumbai Launch | Hand for Handmade (HFH) </title>

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

    <style>
    .doc-img {
        height: 200px;
        width: 240px;
    }

    .doc-img img {
        max-width: 100%;
        max-height: 100%;
    }
    </style>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- fancybox modal  -->
    <!-- <link rel="stylesheet" href="vendors/css/bundle.min.css"> -->
    <link rel="stylesheet" href="vendors/css/jquery.fancybox.min.css">

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
    <br><br><br>
    <br><br><br>
    <!-- End Main Header -->
    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="tear top"></div>
        <div class="container">
            <div class="banner_text">
                <h3 class="userTypeName"></h3>
                <ul>
                    <li><a style="color: #797979" href="index.php">Home</a></li>
                    <li><a style="color: #797979" href="#"> Mumbai Launch </a></li>
                    <li class="userTypeName">Mumbai Launch</li>
                </ul>
            </div>
        </div>

    </section>
    <!--================End Main Header Area =================-->


    <!-- Page Content -->
    <section class="testimonials_item_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12" id="teamData">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> NAKSHA </a>
                                    </h3>
                                    <p class="speciality"> Kantha of West Bengal
                                    </p>
                                    <p class="speciality">Kolkata, West Bengal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-3 mt-5">
                            <div class="teamModal profile-widget">
                                <div class="doc-img">
                                    <a href="#">
                                        <img style="height: 200px;" class="img-fluid" alt=""
                                            src="./assets/attachment/portfolio/portfolio_20230509143140_645a0bf425ca9.png" />
                                    </a>
                                </div>
                                <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                                    <h3 class="title" style="font-size: 18px">
                                        <a href="#"> </a>
                                    </h3>
                                    <p class="speciality"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Page Content -->


    <div class="tear-footer bot"></div>

    <!-- Main Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- End Main Footer -->


    <!-- modal windows -->
    <div class="slide-modal-window" id="modal-user" style="display: none">
        <div class="container userDetails">

        </div>
    </div>

    <!-- modal windows end -->


    <!-- fancybox modal JavaScript -->
    <script src="vendors/js/bundle.min.js"></script>
    <script src="vendors/js/jquery.fancybox.min.js"></script>

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
    <script>

    </script>

</body>

</html>