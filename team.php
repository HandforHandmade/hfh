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

    <title> Team | Hand for Handmade (HFH) </title>

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
    <input type="hidden" id="userTypeId" value="<?php echo $_GET['id'] ?>">


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
                    <li><a style="color: #797979" href="#"> About </a></li>
                    <li class="userTypeName"></li>
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
    $(document).ready(function() {
        getUserDetails()
    });

    function getUserDetails() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUsersDetails',
            'userTypeId': $('#userTypeId').val(),
        };
        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {

                let chunks = [];
                let users = response.result.users;
                for (let i = 0; i < users.length;) {
                    chunks.push(users.slice(i, i += 4));
                }
                let teamDiv = '';
                let userTypeName = '';

                for (let i = 0; i < chunks.length; i++) {

                    let users = chunks[i];
                    teamDiv += '<div class="row">';

                    for (let j = 0; j < users.length; j++) {
                        let userData = users[j];
                        userTypeName = userData.userType;
                        teamDiv += '<div class="col-md-4 col-lg-4 col-xl-3 mt-5">';
                        teamDiv += '<div data-id="' + userData.id +
                            '" data-fancybox="modal-user" data-src="#modal-user" class="teamModal profile-widget">';
                        teamDiv += '<div class="doc-img">';
                        teamDiv += ' <a href="#">';
                        teamDiv += '<img style="height: 200px;"  class="img-fluid" alt="" src="'+ADMIN_BASE_URL + userData
                            .imagePath1 + '"/>';
                        teamDiv += '</a>';
                        teamDiv += '</div>';
                        teamDiv += '<div class="pro-content" style="max-height: 100px;min-height: 100px;">';
                        teamDiv += '<h3 class="title" style="font-size: 18px">';
                        teamDiv += '<a href="#"> ' + userData.userName + ' </a>';
                        teamDiv += '</h3>';
                        teamDiv += '<p class="speciality"> ' + userData.designation + '  </p>';
                        teamDiv += '</div>';
                        teamDiv += '</div>';
                        teamDiv += '</div>';

                    }

                    teamDiv += '</div>';
                }


                $('#teamData').html(teamDiv);
                $('.userTypeName').html(userTypeName);

            }

        });
    }

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

    $(document).on('click', '.teamModal', function() {
        getModalUserDetails($(this).attr('data-id'));
    });
    </script>

</body>

</html>
