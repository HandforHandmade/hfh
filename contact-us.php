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

    <title> Contact us | Hand for Handmade (HFH) </title>

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

<br>
<br>
<br>


<!--================End Main Header Area =================-->
<section class="banner_area mt-5">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Contact us </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Contact us</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!-- Contact Form -->
<section class="contact-form-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="default-form-area">
                    <div class="sec-title">
                        <h1>Drop a line us</h1>
                    </div>
                    <form id="contact-form" name="contact_form" class="contact-form" action="#" method="post">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="form_name" id="form_name" class="form-control" value="" placeholder="Name"
                                           required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 column">
                                <div class="form-group">
                                    <input type="email" name="form_email"  id="form_email" class="form-control required email" value=""
                                           placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="form_phone" id="form_phone" class="form-control" value=""
                                           placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="form_subject" id="form_subject" class="form-control" value=""
                                           placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 column">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required"
                                              placeholder="Message...." id="form_message"></textarea>
                                </div>
                                <div class="form-group flex-box">
                                    <div class="submit-btn">
                                        <button class="theme-btn btn-style-one" type="button"
                                                data-loading-text="Please wait..."  onclick="sendInquiry()"><span>Send Message</span></button>
                                    </div>
                                    <!-- <span class="hint">*Get answers to common questions through our help center.</span> -->
                                </div>
                                <div id="inqSubmitMsg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-three">
                    <div class="single-info">
                        <h4> Hand For Handmade </h4>

                        <div class="text"><i style="font-size: 22px; padding-right: 8px;" class="fa fa-map-marker"
                                             aria-hidden="true"></i>

                            11/12 Raghuvanshi Mill <br> Compound, Near Phoenix Mall, Senapati Bapat Marg, Lower Parel,
                            Mumbai- 400013

                            <!-- 5404 Berrick Street, 2nd cross &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; str,  Boston, MA 02115.</div> -->
                            <!-- <a class="link-btn" href="#">Your Nearest Location</a>                             -->
                        </div>
                        <div class="single-info">
                            <h4>Quick Contact</h4>
                            <div class="wrapper-box">
                                <a href="mailto:info@handforhandmade.com">
                                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                         aria-hidden="true">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"></path>
                                    </svg>
                                    info@handforhandmade.com </a> <br>
                                <a href="tel:">
                                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                         aria-hidden="true">
                                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                                    </svg>
                                    +91 87791 55808
                                </a>
                            </div>
                            <!-- <a class="link-btn" href="#">Get Call Back</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Google Map -->
<div class="google-map">
    <!--Map Canvas-->
    <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
         data-hue="#ffc400" data-title="East Newyork" data-icon-path="images/icons/map-marker.png"
         data-content="<p>P. B: 222. Mid Corner Street, 11201 <br> +224 620 63 09 00 & 11 <br> supportyou@jexixteam.com</p>">
    </div>
</div>

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

    function sendInquiry() {


        let  form_name = $('#form_name').val();
        let  form_email = $('#form_email').val();
        let  form_phone = $('#form_phone').val();
        let  form_subject = $('#form_subject').val();
        let  form_message = $('#form_message').val();


        if(form_name==''){
            alert('Please enter name.');
            return false;
        }
        if(form_email==''){
            alert('Please enter email.');
            return false;
        }
        if(form_phone==''){
            alert('Please enter phone.');
            return false;
        }
        if(form_message==''){
            alert('Please enter message.');
            return false;
        }
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'addContactInquiry',
            'name':form_name,
            'email':form_email,
            'mobile':form_phone,
            'subject':form_subject,
            'remark':form_message,
        };
        APICallAjax(sendApiDataObj, function (response) {
            if (response.responseCode == resultOk) {
                $('#inqSubmitMsg').html('<div class="alert alert-success"> <strong>Success!</strong> We contact to you soon. </div>')
            }else{
                $('#inqSubmitMsg').html('<div class="alert alert-danger"> <strong>Warning!</strong> Something wrong we please try again. </div>')
            }
        });
    }
</script>
</body>

</html>