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

    <title> Winners of Design Challenge | Hand for Handmade (HFH) </title>

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
            <h3> Winners of Design Challenge </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Winners of Design Challenge-</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!-- partial:index.partial.html -->
<section class="layout-article">
    <ul class="box-article">
        <li class="list-article wow flipInY">
            <article class="box-article">
                <a href="pinjrakari-laptop-table.php">
                    <h1> Pinjrakari Laptop Table </h1>
                    <figure><img src="img/laptop5_ZmbBWzA.webp" alt=""/></figure>
                    <p> A foldable laptop table with 'Pinjrakari' jaali that provides proper ventilation and avoids
                        overheating in laptops. </p>
                </a>
            </article>
        </li>
        <li class="list-article wow flipInY" data-wow-delay="0.3s">
            <article class="box-article">
                <a href="">
                    <h1> Raja Rani Etikopakka Toys </h1>
                    <figure><img src="img/toy4_MwqSZln.webp" alt=""/></figure>
                    <p> Raja- Rani, an Etikoppaka handicraft toy, is a doll made by stacking up the different pieces of
                        body parts and clothes on a wooden stand. </p>
                </a>
            </article>
        </li>

        <li class="list-article wow flipInY" data-wow-delay="0.9s">
            <article class="box-article">
                <a href="">
                    <h1> ABI Pottery Dish Set </h1>
                    <figure><img src="img/pottery5_VAjBDQM.webp" alt=""/></figure>

                    <p> Blue pottery is usually linked with tiles, vases, pots, and other such rotund objects. Platters
                        will give a newer perspective to the area of production, furthermore, there will be ease</p>
                </a>
            </article>
        </li>

        <li class="list-article wow flipInY" data-wow-delay="0.6s">
            <article class="box-article">
                <a href="">
                    <h1> ECOuture </h1>
                    <figure><img src="img/weaving4_f22gfXP.webp" alt=""/></figure>
                    <p> ECOuture PRODUCTS ARE: 1) TRAVELLING BAG (for laptop), 2) SHOES. ECOuture is the project of
                        reviving the craft as well as the community of Himachal which is Gaddi Tribe who create this
                        luxurious textile for their own use but this tradition is under threat of extinction. </p>
                </a>
            </article>
        </li>

        <li class="list-article wow flipInY" data-wow-delay="0.6s">
            <article class="box-article">
                <a href="">
                    <h1> ECOuture </h1>
                    <figure><img src="img/weaving4_f22gfXP.webp" alt=""/></figure>
                    <p> ECOuture PRODUCTS ARE: 1) TRAVELLING BAG (for laptop), 2) SHOES. ECOuture is the project of
                        reviving the craft as well as the community of Himachal which is Gaddi Tribe who create this
                        luxurious textile for their own use but this tradition is under threat of extinction. </p>
                </a>
            </article>
        </li>
        <li class="list-article wow flipInY" data-wow-delay="0.3s">
            <article class="box-article">
                <a href="">
                    <h1> Raja Rani Etikopakka Toys </h1>
                    <figure><img src="img/toy4_MwqSZln.webp" alt=""/></figure>
                    <p> Raja- Rani, an Etikoppaka handicraft toy, is a doll made by stacking up the different pieces of
                        body parts and clothes on a wooden stand. </p>
                </a>
            </article>
        </li>
    </ul>
</section>


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
    // new WOW().init();
</script>


</body>

</html>