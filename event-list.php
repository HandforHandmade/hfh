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

    <title> Initiatives | Hand for Handmade (HFH) </title>

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
<section class="banner_area mt-5">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3 class="eventCategoryName"> Initiatives </h3>
            <ul>
                <li><a style="color: #797979" href="index.php">Home</a></li>
                <li><span class="eventListText">Initiatives</span></li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<section style="background: url(img/welcome-bg.jpg); margin-top: 0px;  padding: 0em 0em 5em 0em;"
         class="latest_news_area">
    <div class="container">
        <input id="categoryId" type="hidden" value="<?php echo $_GET['id']; ?>">
        <h5 style="text-align: left" >
<div class="blog_text">
<p class="" id="categoryDesc"></p>
</div>
</h5>
        <div class="row latest_news_inner mt-5" id="eventList"></div>
    </div>
</section>


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


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script>
<script src="vendors/js/wow.min.js"></script>

<script src="js/script.js"></script>


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script>
<script src="vendors/js/wow.min.js"></script>

<script>

    $(document).ready(function () {
        getEventCategory()
    });

    function getEventCategory() {
        let resultOk = '<?php echo resultOk;?>';
        let sendApiDataObj = {
            '<?php echo systemProject;?>': 'Masters',
            '<?php echo systemModuleFunction;?>': 'getEventDetails',
            'categoryId': $('#categoryId').val(),
        };
        APICallAjax(sendApiDataObj, function (response) {
            let html = '';
            if (response.responseCode == resultOk) {

let categoryDesc = '';
                for (let i = 0; i < response.result.event.length; i++) {

                    let event = response.result.event[i];
		    categoryDesc = event.categoryDesc;    	 

                    html += '<div class="col-lg-4 col-md-6">';
                    html += '<div class="l_news_item">';
                    html += '<div class="l_news_img">';
                    html += '<a href="event-details.php?id=' + event.id + '&categoryId=' + event.categoryId + '">';
                    html += '<img class="img-fluid" style="height: 250px;width: 350px;"  src="'+ADMIN_BASE_URL + event.image + '" alt="">';
                    html += '</a>';
                    html += '</div>';
                    html += '<div class="l_news_text">';
                    

                    if(event.eventCity!='' && event.eventState!=''){
                        html += '<h5> ' + event.eventCity + ' | ' + event.eventState + ' </h5>';
                    }
                    html += '<a href="event-details.php?id=' + event.id + '&categoryId=' + event.categoryId + '">';
                    html += '<h4> ' + event.name + '</h4>';
                    html += '</a>';
                    html += '<p>' + event.description.substr(0, 200) + ' </p>';
                    html += '<a class="pest_btn" href="event-details.php?id=' + event.id + '&categoryId=' + event.categoryId + '"> Details </a>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                    $('.eventCategoryName').text(event.categoryName);
                    $('.eventListText').text(event.categoryName);
                    //$('#categoryName').text(event.categoryName);
                   

                }
 $('#categoryDesc').html(categoryDesc);
                $('#eventList').html(html);
            }

        });
    }
</script>

</body>

</html>
