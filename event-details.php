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
    <section class="banner_area mt-5">
        <div class="tear top"></div>
        <div class="container">
            <div class="banner_text">
                <h3 class="categoryName"></h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class=""> Our Activities</li>
                    <li class="categoryName"></li>
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
                <input type="hidden" id="eventId" value="<?php echo $_GET['id']; ?>">

                <div class="col-lg-10">
                    <div class="main_blog_inner single_blog_inner">
                        <div class="d-none" id="eventVideoDiv">
	 <iframe frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"  style="height: 500px; width:1000px"  src="" id="eventVideo"></iframe>
</div>
                        <div class="blog_item">
                       
<br>
                            <div class="blog_img">
                                <img class="img-fluid img-responsive" src=""  id="eventImage" alt="" style="width:100%;height:30%">
                            </div>
<br>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li class="eventCityName" id="eventCityName"></li>
                                            <li class="eventStateName" id="eventStateName"></li>

                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4 id="eventName"></h4>
                                </a>
                                <p id="eventDesc"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: center; padding-top: 15em;">
                    <a class="pink_btn" href="event-list.php?id=<?php echo $_GET['categoryId'] ?>" id=""> Check other
                        projects </a>
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
    <script src="js/theme.js"></script>

    <!-- JavaScript -->
    <script src="vendors/js/bundle.min.js"></script>
    <script src="vendors/js/jquery.cubeportfolio.min.js"></script>
    <script src="vendors/js/jquery.appear.js"></script>
    <script src="vendors/js/parallaxie.min.js"></script>
    <script src="vendors/js/wow.min.js"></script>

    <script>
    $(document).ready(function() {
        getEventCategory()
    });

    function getEventCategory() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getEventDetails',
            'eventId': $('#eventId').val(),
        };
        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.event.length; i++) {
                    let event = response.result.event[i];
                    $('#eventName').html(event.name);
                    $('#eventDesc').html(event.description);
                    $('.eventCityName').html(event.eventCity);
                    $('.eventStateName').html(event.eventState);
                    $('.categoryName').html(event.categoryName);
                    $("#eventImage").attr("src", ADMIN_BASE_URL + event.image);

                    if (event.videoLink != '') {
                        $('#eventVideoDiv').removeClass('d-none');
                        $("#eventVideo").attr("src", event.videoLink);
                    }


                }
            }

        });
    }
    </script>
</body>

</html>
