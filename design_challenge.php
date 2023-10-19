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

    <title> Design Challenge | Hand for Handmade (HFH) </title>

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
            <h3> Design Challenge </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Design Challenge</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<section style="background: url(img/welcome-bg.jpg); margin-top: 0px;  padding: 0em 0em 5em 0em;"
         class="latest_news_area">
    <div class="container">

        <div class="main_title">

            <p> An opportunity for design students to ideate and create new designs from India’s fascinating craft
                techniques and handmade traditions, and taking them into brave new directions, the Design Challenge
                brought together educational institutions, design sector experts and the millennials.

                <span id="dots"></span><span id="more"> <br>The focus was to engage young designers in the handmade sector, in a bid to infuse it with the energy of youth, innovation and new-age design ideas. The Challenge particularly targeted design institute students or students studying design, who are familiar with the discourse and can generate unique ideas and creative solutions. A larger objective was to ultimately connect design with potential artisans and business houses on an open-source platform. <br>
                     Participation by young and budding designers in this challenge were a glimpse into how the next generation, the future of craft design, can help contemporarise India’s handmade traditions. The challenge enabled exchange of critical thoughts on India’s handmade traditions, how to make them of world-class standards, generate sustained livelihoods for the artisans and create a repertoire of contemporary designs for the future. The project was conceptualised and executed by the Hand for Handmade collective and in partnership with Direct Create (DC) and the Indian Institute of Craft and Design (IICD). </span>
                <a style="text-decoration: underline;     color: #AB3833;" href="#" onclick="myFunction()" id="myBtn">
                    continue reading... </a>
            </p>


        </div>

        <div class="row latest_news_inner">

            <div class="col-lg-4 col-md-6">
                <div class="l_news_item">
                    <div class="l_news_img">
                        <a href="design-challenge-one-winners.php">
                            <img class="img-fluid" src="img/banner_mobile_3rqtjan.webp" alt="">
                        </a>
                    </div>
                    <div style="    padding: 20px 10px 10px 10px;" class="l_news_text">
                        <a href="design-challenge-one-winners.php">
                            <h4> Winners of Design Challenge- Edition I </h4>
                        </a>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>


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

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "continue reading...";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>


</body>

</html>