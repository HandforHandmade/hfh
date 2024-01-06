<?php
session_start();

$name = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
define('API_BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/api/');

define('AssetPath', '../assets/');
error_reporting(1);
if (isset($_GET['error'])) {
    $errormsg = '<label class="btn btn-danger cls-danger kt-btn col-sm-12">
<i class="flaticon2-attention"></i>
Invalid credentials
</label>';
}

if (isset($_GET['error_msg'])) {
    $errormsg = '<label class="btn cls-danger cls-danger kt-btn col-sm-12">
<i class="flaticon2-attention"></i>
Invalid Username or Password
</label>';
}

if (isset($_GET['error_msgstatus'])) {
    $errormsg = '<label class="btn cls-danger cls-danger kt-btn col-sm-12">
<i class="flaticon2-attention"></i>
This User is Deactive
</label>';
}

if (isset($_GET['error_client'])) {
    $errormsg = '<label class="btn cls-danger cls-danger kt-btn col-sm-12 client_msg">
<i class="flaticon2-attention"></i>
Enter Client Name
</label>';
}

if (isset($_GET['status_error'])) {
    $errormsg = '<label class="btn btn-danger cls-danger kt-btn col-sm-12">
<i class="flaticon2-attention"></i>
Your Web Account Is Disabled Please Contact To Admin
</label>';
}

/*$sql="select * from client where foldername='".$_SESSION['CLINETFOLDERNAME']."'";
$res=mysqli_query($master_conn,$sql);

while($row=mysqli_fetch_assoc($res))
{
    $foldername=$row['foldername'];
}*/

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
                        <h2 class=""> Sign In </h2>
                        <p class="small mb-4"> Sign in to Continue. </p>
                        <label style="display:none" class="btn btn-danger cls-danger kt-btn col-sm-12 msg">

                        </label>
                        <?php if ($errormsg != "") {
                            echo $errormsg;
                        } ?>
                        <error id="errorMsgDiv">
                        </error>
                        <hr>
                        <form action="#" method='POST' id="loingform" onsubmit="return userLogin()">
                            <input type="hidden" name="webAT" id="webAT" value=""/>
                            <input type="hidden" name="webRT" id="webRT" value=""/>
                            <input type="hidden" name="signin" id="signin" value=""/>

                            <div class="form-group">
                                <label for="">User Name</label>
                                <input placeholder="Enter User Name" type="text" class="form-control input-lg"
                                       id="userName" aria-describedby="emailHelp" name="userName">
                            </div>


                            <div class="form-group">
                                <label for="">Password</label>
                                <input placeholder="Enter Password" type="password" class="form-control input-lg"
                                       id="userPassword" name="userPassword">
                            </div>

                            <button type="submit" class="btn btn-danger rounded btn-lg btn-block" id="login">
                                Sign in
                            </button>
                        </form>
                        <p class="text-muted text-center small py-2 m-0">or</p>

                        <a href="signin-phone.php"
                           class="btn btn-light border btn-block rounded btn-lg btn-google">
                            <i class="icofont-google-plus text-danger mr-2"></i>
                            Sign In with Phone No.
                        </a>
                        <p class="text-center mt-3 mb-0"><a href="signup.php" class="text-dark">
                                Don't have an account? Sign up </a></p>

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

    function userLogin() {
        ApiAuthencationForLogin(function (data) {
            console.log(data);
            if (data.responseCode == 1) {
                $('#loingform').removeAttr('onsubmit');
                $('#loingform').attr('action', 'authentication.php');
                $('#webAT').val(data.result.AT);
                localStorage.setItem("AT", data.result.AT);
                $('#webRT').val(data.result.RT);
                localStorage.setItem("RT", data.result.RT);
                $('#signin').val('Submit');
                $("#loingform").submit();
                return true;
            } else {
                $('#errorMsgDiv').html('<div class="alert alert-danger" role="alert">' + data.message + '</div>');
            }
            return false;

        });
        return false;

    }

    async function ApiAuthencationForLogin(callback) {
        let sendApiDataObj = {
            'systemProject': 'Sessions',
            'systemModuleFunction': 'login',
            'userMasterUsername': btoa($('#userName').val()),
            'userMasterPassword': btoa($('#userPassword').val()),
            'userMasterDeviceType': 'web',
            'userMasterDeviceId': '',
            'userMasterDeviceToken': '',
            'tokenValidityValue': '10',
            'tokenValidityType': 'days'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo API_BASE_URL; ?>",
            async: false,
            data: sendApiDataObj,
            success: function (response) {

                callback(response);
            },
            error: function (jqXHR, status, err) {
                callback(err);
            }
        });


    }
</script>
</body>

</html>
