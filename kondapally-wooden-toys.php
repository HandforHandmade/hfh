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

    <title> Kondapally Wooden Toys | Hand for Handmade (HFH) </title>

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
            <h3> Kondapally Wooden Toys </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Our Activities</li>
                <li> Our Activities</li>
                <li> Kondapally Wooden Toys</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<section class="main_blog_area p_100">
    <div class="container">
        <div class="row blog_area_inner">
            <div class="col-lg-1"></div>

            <div class="col-lg-10">
                <div class="main_blog_inner single_blog_inner">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="img/kondapally2.jpg" alt="">
                        </div>
                        <div class="blog_text">
                            <div class="blog_time">
                                <div class="float-right">
                                    <ul class="list_style">
                                        <li> Vijayawada</li>
                                        <li> ANDRA PRADESH</li>

                                    </ul>
                                </div>
                            </div>
                            <a href="#"><h4> Kondapally Wooden Toys </h4></a>
                            <p> Kondapally toys originated few hundred years ago. It is believed that in the 16th
                                century, wooden handicraft artisans from Rajasthan were invited to this region. They
                                were offered a kind of soft wood abundant in the Easter Ghats, Tella Poniki (Givotia
                                rottlerifromis) for their craft. These handmade traditional toys struggle to survive the
                                onslaught of mass-produced plastic toys. In a village near the lush Eastern Ghats, a
                                community of highly skilled artisans continue to make these toys. Most of the younger
                                generation do not follow this profession. Skill building with a focus on women,
                                strengthening their access to new tools, techniques and business acumen are the
                                identified areas for intervention. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center; padding-top: 3em;">
                <a class="pink_btn" href="craft-clusters.php"> Check other projects </a>
            </div>
        </div>

    </div>
</section>


<div class="tear-footer bot"></div>

<!-- Main Footer -->
<?php include 'include/footer.php'; ?>
<!-- End Main Footer -->


<div id="js-singlePage-container" class="d-none">

    <!-- PROJECT 1 -->
    <div>
        <div class="cbp-l-project-title">business <span class="font-weight-600">planning</span></div>
        <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases1.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases2.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases3.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil,
                    alias, vel consequatur ab aliquam aspernatur optio harum facilis
                    excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel
                    provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti
                    mollitia consequatur
                    expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                    magnam!
                </div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list mb-4">
                    <li><strong>Client</strong>Will Burk</li>
                    <li><strong>Date</strong>09/05/19</li>
                    <li><strong>Categories</strong>Finance, Corporate</li>
                </ul>
                <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn more</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project2" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases2.jpg" alt="">
                            <div class="cbp-l-project-related-title">Strategy Buildup</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project3" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases3.jpg" alt="">
                            <div class="cbp-l-project-related-title">Marketing Analysis</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project4" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases4.jpg" alt="">
                            <div class="cbp-l-project-related-title">Online Consultation</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>


    <!-- PROJECT 2 -->
    <div>
        <div class="cbp-l-project-title"> PROJECT 2 <span class="font-weight-600">planning</span></div>
        <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases1.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases2.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                    <img src="consulting/img/cases3.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil,
                    alias, vel consequatur ab aliquam aspernatur optio harum facilis
                    excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel
                    provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti
                    mollitia consequatur
                    expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                    magnam!
                </div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list mb-4">
                    <li><strong>Client</strong>Will Burk</li>
                    <li><strong>Date</strong>09/05/19</li>
                    <li><strong>Categories</strong>Finance, Corporate</li>
                </ul>
                <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn more</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project2" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases2.jpg" alt="">
                            <div class="cbp-l-project-related-title">Strategy Buildup</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project3" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases3.jpg" alt="">
                            <div class="cbp-l-project-related-title">Marketing Analysis</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#js-singlePage-container/project4" class="cbp-singlePage cbp-l-project-related-link"
                           rel="nofollow">
                            <img src="consulting/img/cases4.jpg" alt="">
                            <div class="cbp-l-project-related-title">Online Consultation</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>


</div>


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