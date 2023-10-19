<?php
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign in | Hand for Handmade (HFH) </title>

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


<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Sign in </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Sign in</li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->


<section class="osahan-main-body">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">

            <div class="col-lg-3"></div>

            <div class="col-lg-6 pl-lg-5">
                <div class="osahan-signup shadow bg-white p-4 border rounded">
                    <div class="p-3">
                        <h2 class=""> Sign Up </h2>
                        <!-- <p class="small mb-4">Create account to see our top picks for you!</p> -->
                        <hr>
                        <form action="#">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input placeholder="Enter Name" type="text" class="form-control input-lg"
                                       id="name" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Phone Number</label>
                                <input placeholder="Enter Phone Number" type="number" class="form-control input-lg"
                                       id="mobile">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input placeholder="Enter Email" type="email" class="form-control input-lg"
                                       id="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input placeholder="Enter Password" type="password" class="form-control input-lg"
                                       id="password">
                            </div>

                            <button type="button" class="btn  btn-danger rounded btn-lg btn-block"
                                    onclick="registerUser()">
                                Create Account
                            </button>
                        </form>

                        <p class="text-center mt-3 mb-0"><a href="signin.php" class="text-dark">Already have an
                                account! Sign Up </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3"></div>

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

    function registerUser() {
        let sendApiDataObj = {
            'systemProject': 'Sessions',
            'systemModuleFunction': 'userRegister',
            'action': 'add',
            'name': $('#name').val(),
            'mobile': $('#mobile').val(),
            'email': $('#email').val(),
            'password': $('#password').val(),
        };
        APICallAjax(sendApiDataObj, function (response) {

            if (response.responseCode == "1") {
                for (let i = 0; i < response.result.category.length; i++) {

                }
            }

        });


    }
</script>
</body>

</html>
