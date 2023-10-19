<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';
$userId = isset($_SESSION['userId'])?$_SESSION['userId']:'';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> About | Hand for Handmade (HFH) </title>

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
            <h3> Hand for Handmade (HFH) </h3>
            <ul>
                <li><a style="color: #797979" href="index.php">Home</a></li>
                <li><a style="color: #797979" href="#"> About </a></li>
                <li> Hand for Handmade (HFH)</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Our  Area =================-->
<section class="our_bakery_area p_100">
    <div class="container">
        <div id="aboutContent">

        </div>
        <div class="row our_bakery_image d-none">
            <div class="col-md-4 col-6">
                <img class="img-fluid" src="img/about-img1.jpg" alt="">
            </div>
            <div class="col-md-4 col-6">
                <img class="img-fluid" src="img/about-img2.jpg" alt="">
            </div>
            <div class="col-md-4 col-6">
                <img class="img-fluid" src="img/about-img3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Our Bakery Area =================-->


<!--================Our Mission Area =================-->
<!--<section class="our_mission_area">
    <div class="container">
        <div class="row our_mission_inner">
            <div class="col-lg-3">
                <div class="single_m_title">
                    <h2> Our Vision </h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="mission_inner_text">
                    <h6> To re-imagine the Indian Handmade industry as a vibrant, contemporary industry that is
                        meaningful for today and tomorrow. </h6>
                </div>
            </div>
        </div>

        <hr style="margin-bottom: 25px; border-top: 1px solid rgb(255 255 255 / 10%);">

        <div class="row our_mission_inner">
            <div class="col-lg-3">
                <div class="single_m_title">
                    <h2> Our Mission </h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="mission_inner_text">
                    <h6> To energise the handmade industry through knowledge sharing, design innovation and building
                        effective linkages in the ecosystem. </h6>
                </div>
            </div>
        </div>

    </div>
</section>-->
<!--================End Our Mission Area =================-->


<!--================Special Area =================-->
<!--<section class="special_area p_100">
    <div class="container">
        <div class="main_title">
            <h2> HFH – Values & Beliefs
            </h2>

        </div>
        <div class="special_item_inner">
            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Artisans are the core </h4>
                            <p> There would be no Handmade industry without artisans. Our initiatives must result in
                                their increased wellbeing; not only livelihoods, but respect, knowledge transfer, and
                                enhanced capabilities. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Fair Business Practices </h4>
                            <p> We will support fair and ethical business practices and increased trust between members
                                of the eco-system. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Focus on Innovation </h4>
                            <p> Innovation at multiple levels – design, production process, supply chain, market
                                linkages and use of technology is essential to make the industry vibrant and meaningful
                                for tomorrow. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Open to change </h4>
                            <p> We cannot succeed if we work in silos or are insular about change. Exchange of ideas and
                                learnings, creating connects with business and technology, understanding markets and
                                consumers, venture funding etc is essential for healthy growth of the industry. </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>-->
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
<script>
    $( document ).ready(function() {
        getQuickLinkDetails()
    });

    function getQuickLinkDetails() {
        let resultOk='<?php echo resultOk;?>';
        let sendApiDataObj = {
            '<?php echo systemProject;?>':'Masters',
            '<?php echo systemModuleFunction;?>':'getQuickLinkDetails',
            'linkId':'1',
        };
        APICallAjax(sendApiDataObj, function (response){
            if (response.responseCode ==  resultOk) {
                for (let i = 0; i < response.result.quickLinks.length; i++) {

                    let quickLinks = response.result.quickLinks[i];
                    $('#aboutContent').html(quickLinks.description)
                }
            }

        });
    }
</script>
</body>

</html>