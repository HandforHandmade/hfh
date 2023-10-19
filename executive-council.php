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

    <title> Executive Council | Hand for Handmade (HFH) </title>

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
<!-- End Main Header -->

<br>
<br>
<br>

<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Executive Council </h3>
            <ul>
                <li><a style="color: #797979" href="index.php">Home</a></li>
                <li><a style="color: #797979" href="#"> About </a></li>
                <li> Executive Council</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!-- Page Content -->
<section class="our_bakery_area p_100">
    <div class="container executiveCouncil">

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

<div class="slide-modal-window" id="modal-post-fancy-box-1" style="display: none">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-7 modal-img-area">
                <img src="grid/img/img2-big.jpg" alt="image">
            </div>
            <div class="col-12 col-lg-5 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">

                    <h4 class="slide-heading">Glame Studio</h4>
                    <p class="slide-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>

                    <div class="hashtags_div">
                        <a href="#.">
                            #coding
                            &#x1f60d;
                        </a>
                        <a href="#.">
                            #development
                            &#x1F4BB;
                        </a>
                    </div>
                    <a href="#" class="btn slide-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide-modal-window" id="modal-post-fancy-box-2" style="display: none">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-7 modal-img-area">
                <img src="grid/img/img3-big.jpg" alt="image">
            </div>
            <div class="col-12 col-lg-5 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">

                    <h4 class="slide-heading">Bang Shadow</h4>
                    <p class="slide-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>

                    <div class="hashtags_div">
                        <a href="#.">
                            #coding
                            &#x1f60d;
                        </a>
                        <a href="#.">
                            #development
                            &#x1F4BB;
                        </a>
                    </div>
                    <a href="#" class="btn slide-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide-modal-window" id="modal-post-fancy-box-3" style="display: none">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-7 modal-img-area">
                <img src="grid/img/img4-big.jpg" alt="image">
            </div>
            <div class="col-12 col-lg-5 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">

                    <h4 class="slide-heading">Globe Glow</h4>
                    <p class="slide-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>

                    <div class="hashtags_div">
                        <a href="#.">
                            #coding
                            &#x1f60d;
                        </a>
                        <a href="#.">
                            #development
                            &#x1F4BB;
                        </a>
                    </div>
                    <a href="#" class="btn slide-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide-modal-window" id="modal-post-fancy-box-4" style="display: none">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-7 modal-img-area">
                <img src="grid/img/img5-big.jpg" alt="image">
            </div>
            <div class="col-12 col-lg-5 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">

                    <h4 class="slide-heading">Smooth Texture</h4>
                    <p class="slide-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>

                    <div class="hashtags_div">
                        <a href="#.">
                            #coding
                            &#x1f60d;
                        </a>
                        <a href="#.">
                            #development
                            &#x1F4BB;
                        </a>
                    </div>
                    <a href="#" class="btn slide-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide-modal-window" id="modal-post-fancy-box-5" style="display: none">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-7 modal-img-area">
                <img src="grid/img/img6-big.jpg" alt="image">
            </div>
            <div class="col-12 col-lg-5 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">

                    <h4 class="slide-heading">Music Studio</h4>
                    <p class="slide-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>

                    <div class="hashtags_div">
                        <a href="#.">
                            #coding
                            &#x1f60d;
                        </a>
                        <a href="#.">
                            #development
                            &#x1F4BB;
                        </a>
                    </div>
                    <a href="#" class="btn slide-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
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
    $(document).ready(function () {
        getUserDetails()
    });

    function getUserDetails() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userTypeId': '3',
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                let executiveCouncil = '<div class="row">\n' +
                    '     <div class="col-md-12 col-lg-12 col-xl-12">\n' +
                    '          <div class="row row-grid">';
                for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    executiveCouncil += '<div class="col-md-4 col-lg-4 col-xl-3">\n' +
                        '     <div data-id="' + users.id + '" data-fancybox="modal-user" data-src="#modal-user" class="executiveModal profile-widget">\n' +
                        '          <div class="doc-img">\n' +
                        '               <a href="#">\n' +
                        '                     <img class="img-fluid" alt="" src="img/executive_council/Meghna_Ajit.jpg">\n' +
                        // '                     <img class="img-fluid" alt="" src="'+ users.imagePath +'">\n' +
                        '                 </a>\n' +
                        '           </div>\n' +
                        '           <div class="pro-content">\n' +
                        '               <h3 class="title">\n' +
                        '                   <a href="#"> ' + users.userName + ' </a>\n' +
                        '               </h3>\n' +
                        '           </div>\n' +
                        '     </div>\n' +
                        '</div>';

                }
                executiveCouncil += '</div></div></div>';
                $('.executiveCouncil').html(executiveCouncil);
            }

        });
    }

    function getModalUserDetails(userId) {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userTypeId': '3',
            'userId': userId,
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                let executiveCouncil = '<div class="row">';
                for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    executiveCouncil += '<div class="col-12 col-md-4 modal-img-area">\n' +
                        '    <img class="img-fluid" src="img/executive_council/Meghna_Ajit.jpg" alt="">\n' +
                        // '    <img class="img-fluid" src="'+ users.imagePath +'" alt="">\n' +
                        '</div>\n' +
                        '<div class="col-12 col-md-8 modal-des-area d-flex justify-content-center align-items-center">\n' +
                        '    <div class="modal-inner-description">\n' +
                        '        <h4 class="slide-heading"> '+ users.userName +' </h4>\n' +
                        '        <p class="slide-des">'+ users.userDesc +'</p>\n' +
                        '        <aside class="f_widget f_about_widget">\n' +
                        '            <ul class="nav">\n' +
                        '                <li><a href="'+ users.facebookLink +'" target="_blank"><i class="fa fa-facebook"></i></a></li>\n' +
                        '                <li><a href="'+ users.twitterLink +'" target="_blank"><i class="fa fa-twitter"></i></a></li>\n' +
                        '                <li><a href="'+ users.webLink +'" target="_blank"><i class="fa fa-link"></i></a></li>\n' +
                        '            </ul>\n' +
                        '        </aside>\n' +
                        '    </div>\n' +
                        '</div>';
                }
                executiveCouncil += '</div>';

                $('.userDetails').html(executiveCouncil);
            }
        });
    }

    $(document).on('click', '.executiveModal', function () {
        getModalUserDetails($(this).attr('data-id'));
    });

</script>


</body>

</html>