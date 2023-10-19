<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';

if (empty($userId)) {
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Protfolio | Hand for Handmade (HFH) </title>

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


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css'>


</head>

<body>


<!-- Main Header-->
<?php include 'include/header.php'; ?>
<!-- End Main Header -->
<br>
<br>
<br>

<!--================End Main Header Area =================-->
<section class="banner_area  mt-5">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Portfolio </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Members</li>
                <li> Portfolio</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!-- Page Content -->
<section class="members">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row ">
                            <input type="hidden" id="userId" value="<?php echo $userId; ?>">
                            <div class="col-md-4">
                                <fieldset class="form-group input-group-md">
                                    <label class="form-lbl"> Title</label>
                                    <input type="text" class="form-control" id="portfolioTitle"/>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="form-group input-group-md">
                                    <label class="form-lbl"> File</label>
                                    <input type="file" class="form-control" id="attachment"
                                           accept="image/png, image/gif, image/jpeg"/>
                                </fieldset>
                            </div>

                        </div>


                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div style="margin-bottom: 5px;" class="form-group col-md-12 text-right">
                                <button class="btn btn-danger btn-md" onclick="addUpdatePortfolio()"> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row ">
                            <input type="hidden" id="userId" value="<?php echo $userId; ?>">
                            <div class="col-md-12">
                                <fieldset class="form-group input-group-md">
                                    <label class="form-lbl"> Portfolio List </label>
                                    <table class="table table-bordered table-hover" id="portfolioList">
                                        <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Title</th>
                                            <th>Attachement</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- /Page Content -->


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


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script>
<script src="vendors/js/wow.min.js"></script>

<script src="js/script.js"></script>


<script>
    $(document).ready(function () {

        getUserMasterDetails();
    });

    function getUserMasterDetails() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getPortfolioDetails',

        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                let html = '';
                let count = 1;
                for (let i = 0; i < response.result.portfolio.length; i++) {
                    let portfolio = response.result.portfolio[i];

                    html += '<tr>';
                    html += '<td>' + count + '</td>';
                    html += '<td>' + portfolio.title + '</td>';
                    html += '<td><a target="_blank" href="' + portfolio.image + '"><img src="' + portfolio.image + '" height="50px" width="50px"></a></td>';
                    html += '<td><button class="btn btn-danger btn-md" onclick="deletePortFolio("' + portfolio.image + '")"> Delete </button></td>';
                    html += '</tr>';
                    count++;
                }

                $('#portfolioList tbody').html(html);
            }
        });
    }

    function addUpdatePortfolio() {
        let resultOk = '<?php echo resultOk; ?>';
        let file_data = $('#attachment')[0].files;
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'addUpdatePortfolio',
            '<?php echo ERPFileElement;?>': file_data,
            'portfolioTitle': $('#portfolioTitle').val(),
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                location.reload();
            }
        });
    }

    function deletePortFolio(name) {
        let resultOk = '<?php echo resultOk; ?>';

        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'deletePortFolio',
            'name': name,
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                location.reload();
            }
        });
    }
</script>


</body>

</html>
