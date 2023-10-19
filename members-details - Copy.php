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

    <title> Abhihaara Social Enterprise | Hand for Handmade (HFH) </title>

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
<section class="banner_area">
    <div class="tear top"></div>
    <div class="container">
        <div class="banner_text">
            <h3> Abhihaara Social Enterprise </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Abhihaara Social Enterprise</li>

            </ul>
        </div>
    </div>
    <!-- <div class="tear bot"></div> -->
</section>
<!--================End Main Header Area =================-->


<!--SECTION START-->
<section class="members-details">


    <div class="stu-db">
        <div class="container pg-inn">

            <div class="row">

                <div class="col-md-3 col-xs-3">
                    <div class="pro-user">
                        <img src="img/Abhihaara.jpg" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>  </h4>
                            </li>
                            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9 col-xs-9">

                    <div class="pro-menu">

                        <ul>
                            <li><a href="#" class="pro-act"> ABOUT </a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#"> Catalog </a></li>
                        </ul>

                    </div>

                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4> About </h4>
                            <p> Abhihaara is committed to sustain cotton, handloom and craft-based livelihoods in
                                Telangana and Andhra Pradesh through skilling and connecting women producers across the
                                cotton handloom supply chain. As a new age energetic social enterprise, Abhihaara stands
                                for its unique cotton, natural and low impact dyed handwoven and handcrafted products
                                that are traditional yet modern with a contemporary twist appealing to young generation
                                also, produced by strengthening local supply chains and following all fair-trade
                                practices in complete spirit. Ensuring fair wages, restoring pride and recognition to
                                farmers, weavers, craft artisans and ancillary workers is its underlying mission.</p>
                        </div>
                        <div class="udb-sec udb-cour">
                            <h4><img src="img/3.jpg" alt=""> Booking Courses</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text.The point of using Lorem Ipsummaking it look like readable
                                English.</p>
                            <div class="sdb-cours">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"><img src="img/3.jpg" alt=""> <span
                                                            class="home-list-pop-rat list-mi-pr">Duration:150 Days</span>
                                                </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"><img src="img/3.jpg" alt=""> <span
                                                            class="home-list-pop-rat list-mi-pr">Duration:60 Days</span>
                                                </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Java Programming</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"><img src="img/3.jpg" alt=""> <span
                                                            class="home-list-pop-rat list-mi-pr">Duration:30 Days</span>
                                                </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Aeronautical Engineering</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"><img src="img/3.jpg" alt=""> <span
                                                            class="home-list-pop-rat list-mi-pr">Duration:20 Days</span>
                                                </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt=""/> Course Status</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text.The point of using Lorem Ipsummaking it look like readable
                                English.</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Course Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Software Testing</td>
                                        <td>12May 2018</td>
                                        <td>18Aug 2018</td>
                                        <td><span class="pro-user-act">active</span></td>
                                        <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Mechanical Design</td>
                                        <td>05Jan 2019</td>
                                        <td>10Feb 2019</td>
                                        <td><span class="pro-user-act">active</span></td>
                                        <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Architecture & Planning</td>
                                        <td>21Jun 2020</td>
                                        <td>08Dec 2020</td>
                                        <td><span class="pro-user-act">active</span></td>
                                        <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Board Exam Training</td>
                                        <td>08Jun 2018</td>
                                        <td>21Sep 2018</td>
                                        <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                        <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Yoga Training Classes</td>
                                        <td>16JFeb 2018</td>
                                        <td>26Mar 2018</td>
                                        <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                        <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="udb-sec udb-time">
                            <h4><img src="images/icon/db4.png" alt=""/> Class Time Line</h4>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable
                                English.</p>
                            <div class="tour_head1 udb-time-line days">
                                <ul>
                                    <li class="l-info-pack-plac"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Today</h5>
                                                <span>10Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class timing">
                                                            <span>09:30 am</span>
                                                            <span>10:15 pm</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class Details">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class timing">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class Details">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="l-info-pack-plac"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Tuesday</h5>
                                                <span>11Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class timing">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top"
                                                             data-delay="50" data-tooltip="Class Details">
                                                            <h5>Agriculture <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Google Product Training <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Web Design & Development <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Wednesday</h5>
                                                <span>12Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <h4><span>Holiday: </span> Thursday </h4>
                                        <p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World
                                            Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the
                                            hotel.In the evening, enjoy a tasty dinner on the Dhow cruise.
                                            Later, head back to the hotel for a comfortable overnight stay.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!--SECTION END-->


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
<!-- <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/datetime-picker/js/moment.min.js"></script>
<script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script> -->

<script src="js/theme.js"></script>


<!-- JavaScript -->
<script src="vendors/js/bundle.min.js"></script>
<script src="vendors/js/jquery.cubeportfolio.min.js"></script>
<script src="vendors/js/jquery.appear.js"></script>
<script src="vendors/js/parallaxie.min.js"></script>
<script src="vendors/js/wow.min.js"></script>


</body>

</html>