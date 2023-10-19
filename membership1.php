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

    <title> View Members | Hand for Handmade (HFH) </title>

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

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" /> -->


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
<section class="banner_area mt-5">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Members </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Members</li>
                <li> View Members</li>
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

                        <form class="form">
                            <input type="hidden" id="userId" value="<?php echo $userId; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group input-group-md">
                                        <label class="form-lbl"> PAN number </label>
                                        <input type="text" class="form-control" id="panNumber" placeholder="PAN number">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label class="form-lbl"> Add your PAN Card image </label>
                                        <input type="file" class="form-control remove_file_space" id="panAttachment"
                                               placeholder="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label class="form-lbl"> City/ Town/ Village </label>
                                        <input type="text" class="form-control" id="city" placeholder="">
                                    </fieldset>

                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label class="form-lbl"> Landmark </label>
                                        <input type="text" class="form-control" id="landmark" placeholder="">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label class="form-lbl"> State </label>
                                        <input type="text" class="form-control" id="state" placeholder="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label class="form-lbl"> Pin Code
                                        </label>
                                        <input type="text" class="form-control" id="pincode" placeholder="">
                                    </fieldset>
                                </div>


                            </div>

                        </form>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div style="    margin-bottom: 5px;" class="form-group col-md-12 text-right">
                                <button href="" class="btn btn-danger btn-md" role="button" onclick="addMemberShip()">
                                    Next
                                </button>
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
            '<?php echo systemModuleFunction; ?>': 'getUserMasterDetails',
            'userMasterId': $('#userId').val(),
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.userMaster.length; i++) {
                    let userMaster = response.result.userMaster[i];
                    $('#panNumber').val(userMaster.panCardNumber);
                    $('#city').val(userMaster.city);
                    $('#landmark').val(userMaster.landmark);
                    $('#state').val(userMaster.state);
                    $('#pincode').val(userMaster.pincode);
                }
            }
        });
    }

    function addMemberShip() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            'systemProject': 'Sessions',
            'systemModuleFunction': 'userRegister',
            'action': 'update',
            'actionType': 'membershipContact',
            'panNumber': $('#panNumber').val(),
            'city': $('#city').val(),
            'landmark': $('#landmark').val(),
            'pincode': $('#pincode').val(),
            'state': $('#state').val(),
            'userId': $('#userId').val(),

        };

        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                window.location.href = 'membership2.php';

            }

        });
    }
</script>


</body>

</html>