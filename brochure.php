<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';

$pdf = $_GET['pdf'];
if (!empty($pdf)) {
    if ($pdf === 'about') {
        $pdfPath =  'pdf/Hamari Virasat_Pitch Deck.pdf';
        $imagePath = './assets/img/hamarivirast.jpg';
    } else {
        $pdfPath =  'pdf/brochure.pdf';
        $imagePath = './assets/img/Brochure.png';
    }
} else {
    // Handle the case where $pdf is empty (provide a default behavior or error handling)
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Brochure | Hand for Handmade (HFH) </title>

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
        .doc-img {}

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
                    <li><a style="color: #797979" href="#"> Brochure </a></li>
                    <li class="userTypeName">Brochure</li>
                </ul>
            </div>
        </div>

    </section>
    <!--================End Main Header Area =================-->


    <!-- Page Content -->
    <section class="testimonials_item_area">
        <div class="container">
            <input type="hidden" id='pdf' value="<?php echo $pdf; ?>" />
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4 mt-5"></div>
                <div class="col-md-4 col-lg-4 col-xl-4 mt-5">
                    <div class="teamModal profile-widget">
                        <div class="doc-img">
                            <button onclick="showLoginAlert()">
                                <img class="img-fluid" alt="" src="<?php echo $imagePath; ?>" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal" id="subscriberModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Add this modified form to your modal body -->
                <div class="modal-body">
                    <form id="subscriberForm">
                        <!-- You can add more form groups for additional fields -->
                        <div class="form-group">
                            <label for="name">Name: <span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: <span style="color:red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Mobile:</label>
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber" maxlength="10">
                        </div>

                    </form>
                </div>
                <!-- Move the buttons to the modal footer and align them to the right -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addSubscriber()">Subscribe</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Content -->


    <div class="tear-footer bot"></div>

    <!-- Main Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- End Main Footer -->

    <!-- modal windows end -->


    <!-- fancybox modal JavaScript -->
    <script src="vendors/js/bundle.min.js"></script>
    <script src="vendors/js/jquery.fancybox.min.js"></script>

    <!-- jQuery (necessary for Bootstrap' s JavaScript plugins) -->
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
        function showLoginAlert() {


            let subscribeFlag = localStorage.getItem('subscribeFlag');
            if (subscribeFlag == null) {
                $('#subscriberModal').modal('show');
                return false;
            } else {
                let pdfPath = '<?php echo $pdfPath; ?>';
                window.open(pdfPath, '_blank');

            }

        }

        function addSubscriber() {
            let resultOk = '<?php echo resultOk; ?>';
            let name = $('#name').val();
            let email = $('#email').val();
            let contactNumber = $('#contactNumber').val();

            if (name === '') {
                alert("Please enter name.");
                $('#name').focus();
                return false;
            }


            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '' || !emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                $('#email').focus();
                return false;
            }

            // Contact number validation for a typical mobile number (adjust the regex as needed)
            let contactNumberRegex = /^\d{10}$/;
            if (contactNumber !== '' && !contactNumberRegex.test(contactNumber)) {
                alert("Please enter a valid 10-digit contact number.");
                $('#contactNumber').focus();
                return false;
            }

            let sendApiDataObj = {
                '<?php echo systemProject; ?>': 'Masters',
                '<?php echo systemModuleFunction; ?>': 'addSubscriber',
                'name': name,
                'email': email,
                'contactNumber': contactNumber,
            };

            APICallAjax(sendApiDataObj, function(response) {
                if (response.responseCode == resultOk) {
                    localStorage.setItem('subscribeFlag', true);
                    let pdfPath = '<?php echo $pdfPath; ?>';
                    window.open(pdfPath, '_blank');
                }
            });
        }

        $('#contactNumber').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
        });
    </script>


</body>

</html>