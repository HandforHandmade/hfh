<?php

session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';
include_once 'DB/connection.php';
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';

//	header("Content-Security-Policy: default-src 'self'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title> Hand for Handmade (HFH) </title>

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

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .l_news_item {
        max-height: 100% !important;
        min-height: 80% !important;
    }

    .categoryDescription {
        min-height: 25%;
        max-height: 25%;
    }
    .doc-img img {
        max-width: 100%;
        max-height: 100%;
    }
    </style>
</head>

<body>


    <!-- Main Header-->
    <?php include 'include/header.php'; ?>
    <!-- End Main Header -->


    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="img/sliders/slider-1.jpg" data-rotate="0" data-saveperformance="off"
                    data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/sliders/slider-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']" data-width="['800','800','800','500']"
                            data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">
                            Natural Dyeing with Natural Mordant
                        </div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']"
                            data-lineheight="['28','28','28','28']" data-width="['640','640','640','640','350']"
                            data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            Textile enthusiasts can look forward to learning the nuances of natural dyeing at the
                            “Natural
                            Dyeing with Natural Mordant” workshop organized Dr Pushyamitra Joshi, Founder, EcoFab...
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#"> Details </a>
                        </div>
                    </div>
                </li>

                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="img/sliders/2.jpg" data-rotate="0" data-saveperformance="off" data-title="Creative"
                    data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/sliders/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']" data-width="['800','800','800','500']"
                            data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Indonesian Batik, <br> Indian Expressions
                        </div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']"
                            data-lineheight="['28','28','28','28']" data-width="['640','640','640','640','350']"
                            data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            Batik is a technique that requires patience, creativity and imagination. It involves time,
                            effort, multiple processes and one can only see the end result after all the processes have
                            been
                            completed
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#"> Details </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_bakery_area">
        <div class="tear top"></div>
        <div class="container">
            <div class="welcome_bakery_inner p_100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main_title">
                            <h2> Hand for Handmade (HFH) </h2>
                            <p> HFH Foundation was registered on 1st December 2020 under Section 8 (1) of the Companies
                                Act,
                                2013. Mentorship, Collective Action, Knowledge Sharing and Volunteering are fundamental
                                to
                                the work of HFH. </p>

                        </div>
                        <div class="welcome_left_text">
                            <p> Hand for Handmade (HFH) is a network of artisans, designers, NGOs and craft patrons who
                                came
                                together to collectively respond to the havoc created by the 2020 pandemic. Originating
                                from
                                a deep concern for the survival of the
                                craft and handmade industry, HFH initially functioned as an informal social media
                                platform.
                                The network soon proved to be of immense value and relevance. It generated business,
                                enabled
                                sharing of knowledge, experience,
                                and above all became a sounding board to respond to the unprecedented challenges created
                                by
                                the pandemic...</p>
                            <a class="pink_btn" href="/hand-for-handmade.php">Know more about us</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcome_img">
                            <img class="img-fluid" src="img/welcome-right.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tear bot"></div>
    </section>
    <!--================End Welcome Area =================-->


    <!--================Latest Our Activities Area =================-->
    <section class="latest_news_area p_100">
        <div class="container">
            <div class="main_title">
                <h2> Our Activities </h2>
                <h5> Our Activities an turn into your instructor your helper, your </h5>
            </div>

            <div class="row latest_news_inner ourActivityDetails">

            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: center; padding-top: 3em;">
                    <a class="pink_btn" href="#"> All Activities </a>
                </div>
            </div>

        </div>
    </section>
    <!--================End Our Activities Area =================-->


    <!--================End Founder and Directors  Area =================-->
    <section class="our_chef_area p_100">
        <div class="tear top"></div>
        <div class="container">
            <div class="row our_chef_inner founderAndDirectorsDiv">

            </div>
        </div>
        <div class="tear bot"></div>
    </section>
    <!--================End Client Says Area =================-->


    <!--================members Area =================-->
    <section class="welcome_bakery_area pink_cake_feature">
        <div class="container">
            <div class="cake_feature_inner">
                <div class="title_view_all">
                    <div class="float-left">
                        <div class="main_w_title">
                            <h2> Members </h2>
                            <h5>Members Seldolor sit amet consect etur</h5>
                        </div>
                    </div>
                    <div class="float-right">
                        <a class="pest_btn" href="view-members.php">View all Members</a>
                    </div>
                </div>
                <div class="cake_feature_slider owl-carousel">
                    <?php
                    global $master_conn;
                    $query = mysqli_query($master_conn, "SELECT user_master.*,category_master.name AS categoryName 
                    FROM user_master LEFT JOIN category_master ON category_master.id=user_master.category_id ORDER BY name ASC");
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                    <div class="item">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img style="min-height: 275px;max-height: 275px;" class="img-fluid"
                                    src="<?php echo BASE_URL; ?>/assets/attachment/users/<?php echo $row['image'] ?>"
                                    alt="">
                            </div>
                            <div class="cake_text">
                                <h3> <?php echo substr($row['name'], 0, 10) ?> </h3>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="latest_news_area p_100">
        <div class="container">
            <div class="main_title">

            <?php
                $imagePath = './assets/img/Brochure.png';
                $imagePathCatalog = './assets/img/hamarivirast.jpg';
                
            ?>
                <h2> Hamari Virasat </h2>
                <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4 mt-5">
                    <div class=" profile-widget">
                        <div class="doc-img">
                            <a href="brochure.php?pdf=about">
                                <img class="img-fluid"  style="height: 200px;" alt="" src="<?php echo $imagePath; ?>" />
                            </a>
                        </div>
                        <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                            <h3 class="title" style="font-size: 18px">
                                <a href="#"> ABOUT </a>
                            </h3>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 col-lg-4 col-xl-4 mt-5">
                    <div class=" profile-widget">
                        <div class="doc-img">
                            <a href="brochure.php?pdf=about">
                                <img class="img-fluid"  style="height: 200px;" alt="" src="<?php echo $imagePathCatalog; ?>" />
                            </a>
                        </div>
                        <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                            <h3 class="title" style="font-size: 18px">
                                <a href="#"> CATALOG </a>
                            </h3>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 col-lg-4 col-xl-4 mt-5">
                    <div class=" profile-widget">
                        <div class="doc-img">
                            <a href="brochure.php?pdf=about">
                                <img class="img-fluid"  style="height: 200px;" alt="" src="./assets/attachment/gallery/A-2_Common Threads Studio.jpg" />
                            </a>
                        </div>
                        <div class="pro-content" style="max-height: 100px;min-height: 100px;">
                            <h3 class="title" style="font-size: 18px">
                                <a href="#"> MUMBAI LAUNCH </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
    <!--================End members Area =================-->
    <div class="slide-modal-window" id="modal-user" style="display: none">
        <div class="container userDetails">

        </div>
    </div>

    <div class="tear-footer bot"></div>


    <!-- Main Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- End Main Footer -->


    <!--================Search Box Area =================-->
    <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
        <div class="search_box_inner">
            <h3>Search</h3>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <!--================End Search Box Area =================-->


    <!-- modal windows -->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
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
    $(document).ready(function() {
        getUserMasterDetails();
        getUserActivity();
        getfounderAndDirectors();
    });

    function getUserMasterDetails() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUserMasterDetails',
            'userMasterId': $('#userMasterId').val(),
        };
        APICallAjax(sendApiDataObj, function(response) {
            let html = '';
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.userMaster.length; i++) {

                    let userMaster = response.result.userMaster[i];

                    $("#userFacebookLink").attr("href", userMaster.facebookLink);
                    $("#userTwitterLink").attr("href", userMaster.twitterLink);
                    $("#userGooglePlusLink").attr("href", userMaster.googlePlusLink);
                    $("#userLinkedinLink").attr("href", userMaster.linkedinLink);
                    $("#userEmail").attr("href", "mailto:'" + userMaster.email + "'").text(userMaster.email);
                    $(".whatsApp").attr("href", "https://wa.me/+91" + userMaster.mobile);
                    $('#userAddress').html(userMaster.state);
                    $('#userAbout').html(userMaster.aboutSelf);
                    $('.pro-user').html('<img src="' + userMaster.image + '" alt="user" id="">');
                }
            }

        });

    }

    function getUserActivity() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getCategoryDetails'
        };
        APICallAjax(sendApiDataObj, function(response) {
            let htmlData = '';
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.category.length; i++) {
                    let category = response.result.category[i];
                    htmlData += '<div class="col-lg-4 col-md-6">';
                    htmlData += '<div class="l_news_item">';
                    htmlData += '<div class="l_news_img">';
                    htmlData += '<img class="img-fluid" style="height: 210px;width: 354px;" src="' +
                        ADMIN_BASE_URL + 'resources/img/category/' + category.image + '" alt="">';
                    htmlData += '</div>';
                    htmlData += '<div class="l_news_text">';
                    htmlData += '<a href="#"><h5> Alimur Village, Dibrugarh | ASSAM </h5>';
                    htmlData += '</a>';
                    htmlData += '<a href="event-list.php?id=' + category.id + '">';
                    htmlData += '<h4> ' + category.name + ' </h4>';
                    htmlData += '</a>';
                
                    htmlData += '</div>';
                    htmlData += '</div>';
                    htmlData += '</div>';
                }
                $('.ourActivityDetails').html(htmlData);
            }
        });
    }

    function getfounderAndDirectors() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userTypeId': '4',
        };
        APICallAjax(sendApiDataObj, function(response) {
            let founderData = '<div class="col-lg-12 col-12">';
            founderData += '<div class="chef_text_item">';
            founderData += '<div class="main_title">';
            founderData += '<h2> Founder and Directors </h2>';
            founderData +=
                '<p>Shibani Dasgupta Jain an alumna of NID and founder of Baaya Design and founder and director of Hand for Handmade Foundation.Our two other directors are Vipul Jain; an alumnus of IIT-K and IIM-A and a serial tech entrepreneur and Architect Chirashree Thakkar; a heritage evangelist and an ardent advocate of conserving India’s handmade heritage</p>';
            founderData += '</div>';
            founderData += '</div>';
            founderData += '</div>';
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    founderData += '<div class="col-lg-3 col-6">';
                    founderData += '<div class="chef_item teamModal" data-id="' + users.id +'">';
                    founderData += '<div class="chef_img">';
                    founderData += '<img style="height: 230px;width: 200px;"  class="img-fluid" src="' +
                        ADMIN_BASE_URL + users.imagePath1 + '" alt="">';
                    founderData += '<ul class="list_style">';
                    if (users.twitterLink != '') {
                        founderData += '<li><a href="' + users.twitterLink +
                            '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
                    }
                    if (users.linkdInLink != '') {
                        founderData += '<li><a href="' + users.linkdInLink +
                            '" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>';
                    }
                    if (users.facebookLink != '') {
                        founderData += '<li><a href="' + users.facebookLink +
                            '" target="_blank"><i class="fa fa-facebook-square"></i></a></li>';
                    }
                    if (users.instagramLink != '') {
                        founderData += '<li><a href="' + users.instagramLink +
                            '" target="_blank"><i class="fa fa-instagram-square"></i></a></li>';
                    }
                    founderData += '</ul>';
                    founderData += '</div>';
                    founderData += '<a href="#">';
                    founderData += '<h4>' + users.userName + '</h4>';
                    founderData += '</a>';
                    founderData += '<h5> ' + users.designation + ' </h5>';
                    founderData += '</div>';
                    founderData += '</div>';
                }
                $('.founderAndDirectorsDiv').html(founderData);
            }
        });
    }

    
    $(document).on('click', '.teamModal', function() {
        getModalUserDetails($(this).attr('data-id'));
    });

    function getModalUserDetails(userId) {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userId': userId,
        };
        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {
                let teamDiv = '<div class="row">';
                 for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    teamDiv += '<div class="col-12 col-md-4 modal-img-area">';
                       teamDiv += '<img class="img-fluid" src="'+ADMIN_BASE_URL + users.imagePath1 +'" alt=""></div>';
                        teamDiv +='<div class="col-12 col-md-8 modal-des-area d-flex justify-content-center align-items-center">';
                       teamDiv += '<div class="modal-inner-description">';
                        teamDiv +='<h4 class="slide-heading"> ' + users.userName + ' </h4>';
                        teamDiv +='<p class="slide-des">' + users.userDesc + '</p>';
                        teamDiv +='<aside class="f_widget f_about_widget">';
                        teamDiv +='<ul class="nav">';
                        if(users.facebookLink!=''){
                            teamDiv +='<li><a href="' + users.facebookLink +'" target="_blank"><i class="fa fa-facebook" style="padding 10px;!important;padding: 8px;"></i></a></li>';
                        }
                        
                        if(users.twitterLink!=''){
                            teamDiv +='<li><a href="' + users.twitterLink +'" target="_blank"><i class="fa fa-twitter" style="padding 10px;!important;padding: 8px;"></i></a></li>';    
                        }
                        
                        if(users.webLink!=''){
                            teamDiv +='<li><a href="' + users.webLink +'" target="_blank"><i class="fa fa-link" style="padding 10px;!important;padding: 8px;"></i></a></li>';
                        }
                        
                        if(users.instagramLink!=''){
                            teamDiv +='<li><a href="' + users.instagramLink +'" target="_blank"><i class="fa fa-instagram" style="padding 10px;!important;padding: 8px;"></i></a></li>';
                        }
                        
                        teamDiv +='</ul>';
                        teamDiv +='</aside>';
                        teamDiv +='</div>';
                        teamDiv +='</div>';
                }
                teamDiv += '</div>';

                console.log(teamDiv);
                $('.userDetails').html(teamDiv);
            }
        });
    }
    </script>
</body>

</html>