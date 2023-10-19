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

    <title> Code of Conduct | Hand for Handmade (HFH) </title>

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
            <h3> Code of Conduct </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> Code of Conduct</li>
            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--================Special Area =================-->
<section class="special_area p_100">
    <div class="container">
        <div class="special_item_inner">
            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> This Code of Conduct is derived from the core values and beliefs of HFH. They are
                                applicable to all its endeavours and members. </h4>
                            <ul class="list">
                                <li> Artisans are at the core of HFH. The interest of the artisan community is always at
                                    the forefront of all our engagements. We must always be respectful of their skill,
                                    knowledge and would always gauge the impact of our work on the artisans. Under no
                                    circumstances would we promote any work that goes against the interest of the
                                    artisan. HFH will prohibit unfair competition. No undue advantage of artisans will
                                    be tolerated.
                                </li>
                                <li> HFH will conduct all its business in fair and ethical manner. Plagiarism, fraud,
                                    misrepresentation, and other unconscionable practices will be dealt with utmost
                                    strictness.
                                </li>
                                <li> Agreements with other parties will be respected and adhered to. No such steps will
                                    be taken that may amount to breach of trust of members and other parties. HFH will
                                    proactively promote fair-trade practices.
                                </li>
                                <li> Facilitate healthy interaction between producer artisans and the consumers to
                                    strengthen a fair ecosystem.
                                </li>
                                <li> HFH is committed to staying contemporary, constantly innovating and embracing
                                    change.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Membership Do’s and Don’ts </h4>

                            <h6 style="    margin-bottom: 0px;"> The following guidelines are applicable to all the
                                members of Hand for Handmade (HFH) Foundation. These are framed keeping in mind ethical
                                practices in the craft ecosystem where many players, artisans, designers, NGOs, markets
                                and others interact and because of which it becomes essential that we recognise the need
                                for directives in order to make it fair and transparent. These are designed to uphold
                                the integrity and credibility of HFH. </h6>

                            <ul class="list">
                                <li> Members of HFH are expected to bear in mind the objective of HFH and its commitment
                                    to the artisan communities, and not get involved knowingly in transactions,
                                    platforms or work that goes against the objectives of HFH.
                                </li>
                                <li> Members shall not make any public statements, partner with any other Organisation,
                                    or accept a position that will conflict with the interest of HFH.
                                </li>
                                <li> Any confidential information obtained in the capacity of Member of HFH should not
                                    be divulged to others.
                                </li>
                                <li> A Member shall not act in a manner that compromises the position of HFH.</li>
                                <li> A Member should not engage in plagiarism which involves HFH or any other member of
                                    HFH.
                                </li>
                                <li> Members must pay the fees and renew their membership on time.</li>
                                <li> Members shall acknowledge HFH when using any of its studies, reports, research data
                                    or any other information which is accessed as a member of HFH.
                                </li>
                                <li> Any pitching or sale of products or services on behalf of HFH must be done after
                                    entering into an agreement with HFH.
                                </li>
                                <li> Members may be approached by HFH to assist in attaining the goal of HFH by
                                    volunteering with HFH, mentoring young professionals or campaigning for building a
                                    fair ecosystem for craft and handmade.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Termination of Membership </h4>
                            <h6 style="    margin-bottom: 0px;"> A member may be terminated on the following grounds
                                : </h6>
                            <ul class="list">
                                <li> Unpaid membership fees for more than 30 days</li>
                                <li> If found indulging in any of the above stated “Membership Don’ts”</li>
                                <li> Financial misconduct</li>
                                <li> Proven or under investigation for sexual harassment</li>
                                <li> Any other action or behaviour which goes against the values of HFH</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--================End Special Area =================-->


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
</body>

</html>