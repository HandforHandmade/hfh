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

    <title> Mentors | Hand for Handmade (HFH) </title>

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
            <h3> Mentors </h3>
            <ul>
                <li><a style="color: #797979" href="index.php">Home</a></li>
                <li><a style="color: #797979" href="#"> About </a></li>
                <li> Mentors</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!-- Page Content -->
<section class="our_bakery_area p_100">
    <div class="container mentorDiv">
        <!--<div class="row">

            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="row row-grid">

                    <div class="col-md-5 col-lg-5 col-xl-4">
                        <div data-fancybox="modal-team1" data-src="#modal-mentors1" class="profile-widget">
                            <div class="doc-img">
                                <a href="#">
                                    <img class="img-fluid" src="img/mentors/Jaya_Jaitly.jpg" alt="">
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="#"> JAYA JAITLY </a>
                                </h3>
                                <p class="speciality"> President Dastkari Haat Samiti, Editor Publisher “The Other
                                    Side”, political activist, writer </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-5 col-xl-4">
                        <div data-fancybox="modal-team1" data-src="#modal-mentors1" class="profile-widget">
                            <div class="doc-img">
                                <a href="#">
                                    <img class="img-fluid" src="img/mentors/Jaya_Jaitly.jpg" alt="">
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="#"> PROF. ASHOKE CHATTERJEE </a>
                                </h3>
                                <p class="speciality"> CCI Honorary Advisor </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>-->
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
        <!--<div class="row">
            <div class="col-12 col-md-4 modal-img-area">
                <img class="img-fluid" src="img/mentors/Jaya_Jaitly.jpg" alt="">
            </div>
            <div class="col-12 col-md-8 modal-des-area d-flex justify-content-center align-items-center">
                <div class="modal-inner-description">
                    <h4 class="slide-heading"> JAYA JAITLY </h4>
                    <p class="slide-des">
                        Jaya Jaitly ji is the promoter and expert in field of India's arts and crafts cottage
                        industries. Dastkari Haat Samiti (Arts & Crafts Market) was founded by her in year 1986, to
                        enable rural artisans of traditional Indian crafts to gain confidence in the marketplace through
                        many innovative strategies. Her work brings together artisans of India, Pakistan, Vietnam,
                        Africa, Asia and has been taken up by the Indian government as an instrument in diplomacy to
                        bring together crafts practitioners from all over the globe to share their skills and assist in
                        capacity building.
                    </p>

                    <p class="slide-des">
                        She has authored and published books including Crafts of Jammu, Kashmir and Ladakh, the Craft
                        Traditions of India, Viswakarma's Children, a socio-economic study of crafts people, and
                        Crafting Nature. A selection of her articles on politics, social issues, women, human rights,
                        foreign affairs, etc. was compiled into a book titled Podium on the Pavement. She has assisted
                        NCERT in creating a syllabus for the craft heritage of India's schools. She edits and publishes
                        a monthly political journal of democratic socialist thought and action called The Other Side.
                        She has been deeply involved in heritage issues at all levels and has received awards from PHD
                        Chamber and FICCI for her work in culture and arts and as a role model for women leaders.
                    </p>

                    <aside class="f_widget f_about_widget">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>-->
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
            'userTypeId': '1',
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                let mentorDiv = '<div class="row">\n' +
                    '     <div class="col-md-12 col-lg-12 col-xl-12">\n' +
                    '          <div class="row row-grid">';
                for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    mentorDiv += '<div class="col-md-4 col-lg-4 col-xl-3">\n' +
                        '            <div data-id="' + users.id + '" data-fancybox="modal-user" data-src="#modal-user" class="mentorModal profile-widget">\n' +
                        '                <div class="doc-img">\n' +
                        '                    <a href="#">\n' +
                        '                     <img class="img-fluid" alt="" src="' + users.imagePath + '">\n' +
                        '                    </a>\n' +
                        '                </div>\n' +
                        '                <div class="pro-content">\n' +
                        '                    <h3 class="title">\n' +
                        '                        <a href="#"> ' + users.userName + ' </a>\n' +
                        '                    </h3>\n' +
                        '                    <p class="speciality"> ' + users.designation + ' </p>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>';

                }
                mentorDiv += '</div></div></div>';
                $('.mentorDiv').html(mentorDiv);
            }

        });
    }

    function getModalUserDetails(userId) {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userTypeId': '1',
            'userId': userId,
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                let mentorDiv = '<div class="row">';
                for (let i = 0; i < response.result.users.length; i++) {
                    let users = response.result.users[i];
                    mentorDiv += '<div class="col-12 col-md-4 modal-img-area">\n' +
                        '    <img class="img-fluid" src="img/mentors/Jaya_Jaitly.jpg" alt="">\n' +
                        // '    <img class="img-fluid" src="'+ users.imagePath +'" alt="">\n' +
                        '</div>\n' +
                        '<div class="col-12 col-md-8 modal-des-area d-flex justify-content-center align-items-center">\n' +
                        '    <div class="modal-inner-description">\n' +
                        '        <h4 class="slide-heading"> ' + users.userName + ' </h4>\n' +
                        '        <p class="slide-des">' + users.userDesc + '</p>\n' +
                        '        <aside class="f_widget f_about_widget">\n' +
                        '            <ul class="nav">\n' +
                        '                <li><a href="' + users.facebookLink + '" target="_blank"><i class="fa fa-facebook"></i></a></li>\n' +
                        '                <li><a href="' + users.twitterLink + '" target="_blank"><i class="fa fa-twitter"></i></a></li>\n' +
                        '                <li><a href="' + users.webLink + '" target="_blank"><i class="fa fa-link"></i></a></li>\n' +
                        '            </ul>\n' +
                        '        </aside>\n' +
                        '    </div>\n' +
                        '</div>';
                }
                mentorDiv += '</div>';

                $('.userDetails').html(mentorDiv);
            }
        });
    }

    $(document).on('click', '.mentorModal', function () {
        getModalUserDetails($(this).attr('data-id'));
    });

</script>

</body>

</html>