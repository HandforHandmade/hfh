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

    <title> Member Details | Hand for Handmade (HFH) </title>

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
    .nav-link {
        background-color: #b03d3c !important;
    }
    </style>

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
    <br>
    <br>

    <!--================End Main Header Area =================-->
    <section class="banner_area ">
        <div class="tear top"></div>
        <div class="container">
            <div class="banner_text">
                <h3 id="userName"> </h3>

            </div>
        </div>
        <!-- <div class="tear bot"></div> -->
    </section>
    <!--================End Main Header Area =================-->


    <!--SECTION START-->
    <section class="members-details">


        <div class="stu-db">
            <div class="container pg-inn" style="height: 450% !important;">

                <div class="row">
                    <input type="hidden" id="userMasterId" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" id="userSessionId" value="<?php echo $userId; ?>">

                    <div class="col-md-3 col-xs-3">
                        <div class="pro-user">

                        </div>
                        <div class="d-none withSignIn">
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="portfolio-userbuttons text-center">
                                        <a aria-label="Chat on WhatsApp" href="" target="_blank"
                                            class="btn btn-success btn-sm whatsApp">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                        <a href="" class="btn btn-secondary btn-sm mt-2" id="userEmail"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="portfolio-userbuttons text-center">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong">
                                            Inquiry
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2" style="margin-top: 25px;">
                                <div class="col-lg-12 text-center">
                                    <ul class="social-network social-circle">
                                        <li>
                                            <a href="#" target="_blank" class="icoFacebook" title="Facebook"
                                                id="userFacebookLink">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="icoTwitter" title="Twitter"
                                                id="userTwitterLink">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="icoGoogle" title="Google +"
                                                id="userGooglePlusLink">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="icoLinkedin" title="Linkedin"
                                                id="userLinkedinLink">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-lg-12 text-left">

                                    <h5 style="font-weight: 600;">Address</h5>
                                    <p id="userAddress"></p>

                                </div>
                            </div>
                        </div>
                        <div class="d-none withOutSignIn">
                            <a href="signin.php" class="pest_btn">Sign In</a>
                        </div>


                    </div>

                    <div class="col-md-9 col-xs-9">

                        <div class="pro-menu">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="" role="presentation">
                                    <a href="#" class="nav-link pro-act active" id="home-tab" data-toggle="tab"
                                        data-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">About
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link pro-act" id="portfolio-tab" data-toggle="tab"
                                        data-target="#portfolio" type="button" role="tab" aria-controls="portfolio"
                                        aria-selected="false">
                                        portfolio
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link pro-act" id="catalogue-tab" data-toggle="tab"
                                        data-target="#catalogue" type="button" role="tab" aria-controls="catalogue"
                                        aria-selected="false">Catalog
                                    </a>
                                </li>

                            </ul>

                        </div>


                        <div class="udb">


                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="udb-sec udb-prof">
                                        <p id="userAbout"></p>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="portfolio" role="tabpanel"
                                    aria-labelledby="portfolio-tab">
                                    <div class="row row-grid" id="portfolioList">


                                    </div>

                                </div>
                                <div class="tab-pane fade" id="catalogue" role="tabpanel"
                                    aria-labelledby="catalogue-tab">
                                    <div class="row row-grid" id="catalogueList">


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--SECTION END-->

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text"
                                    required autofocus />
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" id="email" name="email" placeholder="E-mail" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" id="mobile" name="mobile" placeholder="mobile" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" id="subject" name="subject" placeholder="Subject"
                                    type="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Message..."
                                    rows="6" name="comment" id="remark" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="saveInquiry()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="tear-footer bot"></div>

    <!-- Main Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/theme.js"></script>


    <!-- JavaScript -->
    <script src="vendors/js/bundle.min.js"></script>
    <script src="vendors/js/jquery.cubeportfolio.min.js"></script>
    <script src="vendors/js/jquery.appear.js"></script>
    <script src="vendors/js/parallaxie.min.js"></script>
    <script src="vendors/js/wow.min.js"></script>
    <script>
    $(document).ready(function() {
        getUserMasterDetails();

        let userSessionId = $('#userSessionId').val();
        if (userSessionId == '') {
            $('.withSignIn').addClass('d-none');
            $('.withOutSignIn').removeClass('d-none');

        } else {
            $('.withSignIn').removeClass('d-none');
            $('.withOutSignIn').addClass('d-none');
        }
    });


    function saveInquiry() {
        let resultOk = '<?php echo resultOk;?>';
        if ($('#name').val() === '') {
            alert("Enter Name");
            return false;
        }
        if ($('#mobile').val() === '') {
            alert("Enter Mobile");
            return false;
        }
        if ($('#email').val() === '') {
            alert("Enter Email");
            return false;
        }
        if ($('#subject').val() === '') {
            alert("Enter Subject");
            return false;
        }
        if ($('#remark').val() === '') {
            alert("Enter Remark");
            return false;
        }
        let sendApiDataObj = {
            '<?php echo systemProject;?>': 'Masters',
            '<?php echo systemModuleFunction;?>': 'addContactInquiry',
            'userMasterId': $('#userMasterId').val(),
            'name': $('#name').val(),
            'mobile': $('#mobile').val(),
            'email': $('#email').val(),
            'subject': $('#subject').val(),
            'remark': $('#remark').val(),
        };

        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {

            }
        });

    }

    function getUserMasterDetails() {
        let resultOk = '<?php echo resultOk;?>';
        let sendApiDataObj = {
            '<?php echo systemProject;?>': 'Masters',
            '<?php echo systemModuleFunction;?>': 'getUserMasterDetails',
            'userMasterId': $('#userMasterId').val(),
        };
        APICallAjax(sendApiDataObj, function(response) {
            let html = '';
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.userMaster.length; i++) {

                    let userMaster = response.result.userMaster[i];

                    if (userMaster.facebookLink !== '') {
                        $("#userFacebookLink").attr("href", userMaster.facebookLink);
                    } else {
                        $("#userFacebookLink").addClass("d-none");

                    }
                    if (userMaster.twitterLink !== '') {
                        $("#userTwitterLink").attr("href", userMaster.twitterLink);
                    } else {
                        $("#userTwitterLink").addClass("d-none");
                    }
                    if (userMaster.linkedinLink !== '') {
                        $("#userLinkedinLink").attr("href", userMaster.linkedinLink);
                    } else {
                        $("#userLinkedinLink").addClass("d-none");
                    }

                    $("#userEmail").attr("href", "mailto:'" + userMaster.email + "'").text(userMaster.email);
                    $(".whatsApp").attr("href", "https://wa.me/+91" + userMaster.mobile);
                    $('#userAddress').html(userMaster.state);
                    $('#userName').html(userMaster.name);
                    $('#userAbout').html(userMaster.aboutSelf);
                    $('.pro-user').html('<img class="img-fluid" src="' + userMaster.image +
                        '" alt="user" id="" >');

                    html = '';
                    if (userMaster.portfolioArray.length > 0) {
                        for (let j = 0; j < userMaster.portfolioArray.length; j++) {

                            let portfolio = userMaster.portfolioArray[j];

                            html +=
                                '<div class="members col-md-3 col-lg-3 col-sm-6 col-xl-3 mr-2" style="background: none;margin-top: -7rem!important;">';
                            html += '<div class="card widget-profile pat-widget-profile">';
                            html += '<div class="card-body">';
                            html += '<div class="pro-widget-content">';
                            html += '<div class="profile-info-widget">';
                            html += '<a href="' + portfolio.image + '" target="_blank"class="booking-doc-img">';
                            html += '<img src="' + portfolio.image + '" alt="">';
                            html += '</a>';
                            html += '<div class="profile-det-info">';
                            html += '<h3><a href="' + portfolio.image + '" target="_blank" >' + portfolio
                                .title + '</a></h3>';

                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }
                    }

                    $('#portfolioList').html(html);

                    html = '';
                    if (userMaster.catalogueArray.length > 0) {
                        for (let j = 0; j < userMaster.catalogueArray.length; j++) {

                            let catalogue = userMaster.catalogueArray[j];

                            html +=
                                '<div class="members col-md-3 col-lg-3 col-sm-6 col-xl-3" style="background: none;margin-top: -7rem!important;">';
                            html += '<div class="card widget-profile pat-widget-profile">';
                            html += '<div class="card-body">';
                            html += '<div class="pro-widget-content">';
                            html += '<div class="profile-info-widget">';
                            html += '<a href="' + catalogue.image +
                                '" target="_blank" class="booking-doc-img">';
                            html += '';
                            html += '</a>';
                            html += '<div class="profile-det-info">';
                            html += '<h3><a href="' + catalogue.image + '" target="_blank" >' + catalogue
                                .title + '</a></h3>';

                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }
                    }
                    $('#catalogueList').html(html);
                    html = '';
                }
            }

        });

    }
    </script>

</body>

</html>