    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widgets">
            <div class="container">
                <div class="row footer_wd_inner">
                    <!-- <div class="col-lg-3 col-6">
                        <aside class="f_widget f_about_widget">
                            <img src="img/footer-logo.png" alt="">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </aside>
                    </div> -->
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3> About </h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="hand-for-handmade.php"> HFH </a></li>
                                <li><a href="team.php?id=4"> Founder & Directors </a></li>
                                <li><a href="team.php?id=3"> Executive Council </a></li>
                                <li><a href="team.php?id=2"> Team </a></li>
                                <li><a href="team.php?id=1"> Mentors </a></li>
                                <li><a href="initiatives.php"> Initiatives </a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3> Activities </h3>
                            </div>

                            <ul class="list_style">
                                <?php
                                global $master_conn;
                                $eventCategoryResult = mysqli_query($master_conn, "SELECT * FROM category WHERE status = 'Active' ORDER BY event_display_order ASC");

                                while ($RowData = mysqli_fetch_assoc($eventCategoryResult)) {
                                    $id = $RowData['id'];
                                ?>

                                    <li><a href="event-list.php?id=<?php echo $id; ?>">
                                            <?php echo $RowData['category_name']; ?> </a></li>
                                <?php } ?>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3> Members </h3>
                            </div>
                            <ul class="list_style">
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li><a href="membership-benefits.php"> Membership Benenfits </a></li>
                                <li><a href="view-members.php"> View Members </a></li>
                                <li><a href="signin.php"> Become a Member </a></li>
                                <li><a href="code-of-conduct.php"> Code of Conduct </a></li>
                            </ul>
                        </aside>
                    </div>


                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3> Explore HFH </h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="resources.php"> Resources </a></li>
                                <li><a href="be-a-donor.php"> Be a Donor </a></li>
                                <li><a href="contact-us.php"> Contact us </a></li>
                                <li><a href="faq.php"> FAQ </a></li>
                            </ul>
                        </aside>


                    </div>


                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="float-left">
                            <p style="color:#ffff">© 2020 Hand For Hand Made (HFH) </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img style="width: 50%;position: relative;top: -30px;float: right;" src="img/iA_Foundation.png" />
                        <!-- <a><img style="width: 55%;position: relative;top: -30px;float: right;" src="img/miweb.png" /></a> -->
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="float-right">
                            <aside class="f_widget f_about_widget">
                                <ul class="nav">
                                    <li><a href="https://www.facebook.com/HandForHandmade/" target="_blank"><i class="fa fa-facebook" style="padding:8px;"></i></a></li>
                                    <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FHandForHandmade" target="_blank"><i class="fa fa-twitter" style="padding:8px;"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/a-hand-for-handmade/" target="_blank"><i class="fa fa-linkedin" style="padding:8px;"></i></a></li>
                                    <li><a href="https://www.instagram.com/handforhandmade?igsh=NWk5YmViaTIzMjlu" target="_blank"><i class="fa fa-instagram" style="padding:8px;"></i></a>
                                    </li>
                                    <li><a href="https://youtube.com/@handforhandmadefoundation?si=QL_b3IHLsgbjX3mh" target="_blank"><i class="fa fa-youtube" style="padding:8px;"></i></a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>

                <div class="copyright_inner">


                </div>

            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->