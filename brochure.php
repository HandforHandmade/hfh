<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';

$pdf = $_GET['pdf'];

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
            <?php if (isset($_SESSION) && isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] === 'FlagTrue') { ?>
                <div class="row mt-5">
                    <div class="col-10">

                    </div>

                    <div class="col-2">
                        <div class="form-group flex-box">

                            <a href="pdf/brochure.pdf" class="btn btn-danger rounded btn-lg btn-block d-none" download="" id="brochureBtn">
                                Download
                            </a> <a href="pdf/Hamari Virasat_Pitch Deck.pdf" class="btn btn-danger rounded btn-lg btn-block d-none" download="" id="aboutBtn">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row mt-2 ">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div id="pdfIframeContainer">
                        <iframe id="pdfIframe" width="100%" height="800px" frameborder="0" style="border: none;"></iframe>
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
        $(document).ready(function() {
            let pdf = $('#pdf').val();
            console.log(pdf)
            if (pdf == 'Brochure') {
                openPDF('pdf/brochure.pdf');
                $('#brochureBtn').removeClass('d-none');
                $('#aboutBtn').addClass('d-none');
            } else {
                openPDF('pdf/Hamari Virasat_Pitch Deck.pdf');
                $('#aboutBtn').removeClass('d-none');
                $('#brochureBtn').addClass('d-none');

            }
        });

        function openPDF(pdfPath) {
            // Get the iframe element
            var pdfIframe = document.getElementById('pdfIframe');

            // Set the src attribute of the iframe to the PDF path
            pdfIframe.src = pdfPath;

            // Show the iframe container
            document.getElementById('pdfIframeContainer').style.display = 'block';
        }

        function downloadPDF() {
            var pdf = $('#pdf').val();
            var downloadLink;

            if (pdf == 'Brochure') {
                downloadLink = document.createElement('a');
                downloadLink.href = 'pdf/brochure.pdf';
                downloadLink.download = 'Brochure.pdf';
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
            } else {
                // Handle other PDF download logic here
                downloadLink = document.createElement('a');
                downloadLink.href = 'pdf/Hamari Virasat_Pitch Deck.pdf';
                downloadLink.download = 'Hamari Virasat_Pitch Deck.pdf';
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
            }
        }
    </script>


</body>

</html>