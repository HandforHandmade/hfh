<?php

//include_once '../DB/connection.php';
include("DB/connection.php");
?>
<!--================Main Header Area =================-->
<header class="main_header_area">
    <div class="top_header_area row m0">
        <div class="container">
            <div class="float-left">
                <a href="tell:"><i class="fa fa-phone" aria-hidden="true"></i> +91 87791 55808</a>
                <a href="mainto:"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@handforhandmade.com </a>
            </div>
            <div class="float-right">
                <ul class="h_social list_style">
                    <li><a href="https://www.facebook.com/HandForHandmade/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FHandForHandmade"><i class="fa fa-twitter"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                    <li><a href="https://www.linkedin.com/company/a-hand-for-handmade/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <!-- <ul class="h_search list_style">
                    <li class="shop_cart"><a href="#"><i class="lnr lnr-cart"></i></a></li>
                    <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="">
                    <img src="img/logo-2.png" alt="">
                    <img src="img/logo-3.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"> About </a>
                            <ul class="dropdown-menu">
                                <li><a href="hand-for-handmade.php"> Hand For Handmade (HFH) </a></li>
                                <li><a href="team.php?id=4"> Founder And Directors </a></li>
                                <li><a href="team.php?id=3"> Executive Council </a></li>
                                <li><a href="team.php?id=2"> Team </a></li>
                                <li><a href="team.php?id=1"> Mentors </a></li>
                                <li><a href="initiatives.php"> Initiatives </a></li>
                            </ul>
                        </li>


                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"> Our Activities </a>
                            <ul class="dropdown-menu" id="activityDropDown">

                                <?php
                                global $master_conn;
                                $eventCategoryResult = mysqli_query($master_conn, "SELECT * FROM category WHERE status='Active' ORDER BY event_display_order ASC");

                                while ($RowData = mysqli_fetch_assoc($eventCategoryResult)) {
                                    $id = $RowData['id'];
                                    ?>

                                    <li><a href="event-list.php?id=<?php echo $id;?>"> <?php echo $RowData['category_name']; ?> </a></li>
                                <?php } ?>
                               <!-- <li><a href="handmadekatha.php"> HandmadeKatha </a></li>-->

                            </ul>
                        </li>

                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"> Members </a>
                            <ul class="dropdown-menu">
                                <li><a href="membership-benefits.php"> Membership Benefits </a></li>
                                <li><a href="view-members.php"> View Members </a></li>
                                <li><a href="code-of-conduct.php"> Code of Conduct </a></li>
                            </ul>
                        </li>


                        <!-- <li class="dropdown submenu active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> LINK </a></li>
                                <li><a href="#"> LINK </a></li>
                                <li><a href="#"> LINK </a></li>
                                <li><a href="#"> LINK </a></li>
                            </ul>
                        </li>
                        <li><a href="cake.html">Our Cakes</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-team.html">Our Chefs</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav justify-content-end">

                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"> Explore HFH </a>
                            <ul class="dropdown-menu">
                                <li><a href="resources.php"> Resources </a></li>
                                <li><a href="be-a-donor.php"> Be a Donor </a></li>
                                <li><a href="contact-us.php"> Contact us </a></li>
                                <li><a href="faq.php"> FAQ </a></li>
                            </ul>
                        </li>

                        <li><a href="membership.php"> Membership </a></li>
                        <?php
                        if (isset($_SESSION) && isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] === 'FlagTrue') { ?>
                            <li class="dropdown submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['name']; ?> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="portfolio.php"> Portfolio </a></li>
                                    <li><a href="catalogue.php"> catalogue </a></li>

                                </ul>
                            </li>
                            <li><a href="logout.php">Logout</a></li>

                        <?php } else {
                            ?>
                            <li><a href="signin.php"> Sign In / Sign up </a></li>
                        <?php } ?>
                        <!-- <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="service.html">Services</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio.html">-  Gallery Classic</a></li>
                                        <li><a href="portfolio-full-width.html">-  Gallery Full width</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="what-we-make.html">What we make</a></li>
                                <li><a href="special.html">Special Recipe</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="comming-soon.html">Coming Soon page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog with sidebar</a></li>
                                <li><a href="blog-2column.html">Blog 2 column</a></li>
                                <li><a href="single-blog.html">Blog details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Main shop</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Main Header Area =================-->
