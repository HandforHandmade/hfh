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

    <title> FAq | Hand for Handmade (HFH) </title>

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
            <h3> FAq </h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> FAq</li>
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

                        <div class="special_item_text mb-25">
                            <h6> When was HFH Formed? Is HFH Registered? How old is HFH Foundation? </h6>
                            <p>

                                Hand for Handmade (HFH) was started as an informal network to collectively respond to
                                the challenges of the craft and handmade industry in the face of the Covid -19 global
                                pandemic. HFH Foundation was formally registered as a Section 8 Company in December,
                                2020.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Does HFH Foundation work in India or other countries too? </h6>
                            <p>
                                HFH currently works in India and is open to working in other countries. </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What is the Vision and Mission of HFH Foundation? </h6>
                            <p>

                                Vision: To re-imagine the Indian Handmade industry as a vibrant, contemporary industry
                                that is meaningful for today and tomorrow. Mission: To energize the handmade industry
                                through knowledge sharing, design innovation and building effective linkages in the
                                ecosystem. </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Who are the people behind HFH Foundation? </h6>
                            <p>

                                HFH is a network of artisans, designers, NGOs and individuals engaged in the craft and
                                handmade sector.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What is the purpose of HFH Foundation? What kind of work is HFH involved in? </h6>
                            <p>

                                HFH is engaged with artisans in the craft and handmade ecosystem and intervenes in
                                design, production and marketing of craft and handmade products. It also organises
                                capacity building programmes, trend surveys and research, participates in events,
                                campaigns and advocacy in support of the craft community.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What is the source of funding for the organization? </h6>
                            <p>


                                HFH is open to multiple sources of funding. Individual donations, CSR support,
                                consultancies, and other similar compatible opportunities.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Is HFH a Private or Public Foundation? </h6>
                            <p>

                                HFH is a Public Foundation registered under Section 8 of the Companies Act, 2013. </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Who are the target beneficiaries of HFH? </h6>
                            <p>


                                Artisans and artisan-based organizations (specified years of work on craft) Fair-trade
                                organizations CSOs, CBOs, NGOs with focus on community development and livelihoods
                                Corporates (without any conflict of interest or contradicting business practices) CSR
                                wing of Corporates Media Educational Institutions Public interest institutions (Museums,
                                Libraries) Industrialists, Philanthropists, Entrepreneurs, Social entrepreneurs and
                                students.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How does HFH empower the artisans? </h6>
                            <p>


                                HFH provides design, production and market related inputs to the artisans. HFH organises
                                trainings and workshops for artisans. HFH demystifies the trends, challenges,
                                regulations, policies, research findings for the artisans. HFH identifies and curates
                                products by working with artisans and offers their platform handmadekatha.com to market
                                these products.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can I contact the Foundation with specific questions about my project/ idea? </h6>
                            <p>


                                Yes, you can contact the Foundation at info@handforhandmade.org

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What kind of support does the Foundation provide? </h6>
                            <p>


                                The Foundation provides inputs in the sphere of design, production and marketing of
                                craft and handmade products.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> I have a plan that will support cluster or group of Artisans. Can HFH grant any funds
                                for my project? </h6>
                            <p>


                                HFH frequently calls for applications. Please become a member to get regular updates
                                from HFH. You can also mail us your idea in the template given in our website. We will
                                respond to you within five working days.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Is HFH Pan India? Which are the geographic areas where HFH works? </h6>
                            <p>


                                HFH has members from across India and plans to be involved in projects across India.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How does HFH choose the projects / grassroots NGOs to work with? </h6>
                            <p>


                                HFH has a rigorous process of selection to identify craft communities and partners. </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> Making a donation to HFH </h4>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How can I donate to HFH Foundation? </h6>
                            <p>

                                For other donations related queries please write to info@handforhandmade.org </p>
                        </div>


                        <div class="special_item_text mb-25">
                            <h6> Donations are accepted in what currency by HFH Foundation?
                            </h6>
                            <p>
                                The HFH Foundation accepts online donations only in Indian Rupees (INR) </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can a Non-resident Indian (NRI) make a donation? </h6>
                            <p>


                                Yes, a Non-Resident Indian (NRI) holding a valid Indian Passport can make donations to
                                HFH. For donation above Rs. 50,000, the PAN number would be required.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6>
                                Is the website safe to make online payments? </h6>
                            <p>


                                Yes, the website is safe for making online transactions. Also, the payment gateway (CC
                                Avenue) is a recognized third-party payment gateway making all transactions secured.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How much should one donate? </h6>
                            <p>


                                There is no specific amount. One can become a member and pay donation as applicable to
                                the category. One can also just make a donation.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Will individual donor get a receipt for the donation made? </h6>
                            <p>


                                Yes, a receipt will be issued for the donation made.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">

                            <p>
                                HFH cannot provide 80G receipt as yet for tax benefits.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Will I be updated on how the donated funds are utilized? </h6>
                            <p>


                                Our website will reflect all our ongoing work and projects. You will also receive
                                regular updates through e-mail.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> I have donated to HFH. What are the benefits available to me as a donor? </h6>
                            <p>


                                Please check the Donations section for detailed information
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What are the various CSR initiatives that I can make use of to donate to your
                                programmes? </h6>
                            <p>


                                Under the latest guidelines of Companies Act 2013 Clause no 135, corporates have been
                                mandated to spend at least 2 per cent of their average net profit on CSR initiatives. We
                                can help corporates channelize their funds according to their company’s CSR policy. We
                                believe it’s time for urban corporates to consider investing in rural industrialisation
                                that would secure and strengthen livelihoods in the rural areas. The corporates can
                                select one or multiple of our programmes across India to achieve the mandated CSR
                                target. All our projects have artisans at the core, are supported by committed
                                professionals, and are diligently monitored.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What are the benefits of becoming HFH Member?
                            </h6>
                            <p>

                                Please check the Membership section on our website for detailed information

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How to Apply for Membership? How do I become a member of HFH? </h6>
                            <p>


                                Please visit the membership section of our website.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> How can one associate with HFH Foundation? </h6>
                            <p>


                                HFH is constantly looking for new ideas and partners. You could become a member. You
                                could also volunteer with HFH. Please write to us at info@handforhandmade.org
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Is there any eligibility criteria for becoming HFH Member? </h6>
                            <p>


                                Yes. Please visit the section on Membership in our website.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can an NGO become a HFH member? </h6>
                            <p>


                                Yes. Please visit the section on Membership in our website.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Does HFH have Code of conduct for its Members? </h6>
                            <p>


                                Yes, please read it in the Membership section.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> I am an individual and a registered member; do I need to register my Organisation
                                separately? </h6>
                            <p>


                                Yes, individual members have to register their organization as well if they wish to
                                avail the benefits offered to Organisations by HFH.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Is our information private? Will you share or sell your data to anyone? </h6>
                            <p>


                                The Foundation does not share personal data like PAN and AADHAR Number or sell data.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can HFH members meet independent of HFH? </h6>
                            <p>


                                Yes. HFH Foundation would not be responsible for any action or untoward situation
                                arising in any of these meetings.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can I find any trend reports or research reports or any other resources on HFH
                                platform? </h6>
                            <p>


                                Yes. Members of HFH will be able to access various useful resources on the craft
                                ecosystem. </p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> HFH Volunteering and Internship </h4>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> What are the tax benefits for donors? Can I get 80G receipts for my donation? </h6>
                            <p>

                                Yes, you can check on the ‘Volunteer with HFH’ section for more details. </p>
                        </div>


                        <div class="special_item_text mb-25">
                            <h6> Does HFH provide internships? If yes, how can I apply for it? </h6>
                            <p>

                                Please write to us and share your internship project and duration details in the given
                                template. </p>
                        </div>


                    </div>
                </div>
            </div>


            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> HFH Products, Marketing, Member Venture Collaboration </h4>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Does HFH have any merchandise? </h6>
                            <p>


                                HFH helps in curating handmade products which are sold on the online platform
                                handmadekatha.com
                            </p>
                        </div>


                        <div class="special_item_text mb-25">
                            <h6>
                                Is HFH a selling and buying platform? </h6>
                            <p>


                                HFH has created a platform HandmadeKatha for its members to connect with each other for
                                buying and selling.

                            </p>
                        </div>

                        <div class="special_item_text  mb-25">
                            <h6> Does HFH promote handmade products only? </h6>
                            <p>


                                Yes

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can one connect to other members for business purposes? </h6>
                            <p>


                                Yes, HFH can connect its members for business in handmade and handicraft products.

                            </p>
                        </div>

                        <div class="special_item_text  mb-25">
                            <h6> Can members partner with each other outside HFH platform? Can I connect directly to the
                                seller or any other member on HFH platform?
                            </h6>
                            <p>

                                Yes, but HFH does not take any responsibility for such partnerships.

                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can we sell on HFH platform? </h6>
                            <p>


                                Yes, a seller can become a registered vendor with handmadekatha.com

                            </p>
                        </div>

                        <div class="special_item_text  mb-25">
                            <h6> Are the sellers and buyers on HFH platform authentic? </h6>
                            <p>


                                Yes, they undergo thorough scrutiny and registration process.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Can one find connections related to their Business? </h6>
                            <p>


                                Yes, members can find connections related to their business on HFH Website. Please use
                                the Search option on the website.

                            </p>
                        </div>

                        <div class="special_item_text  mb-25">
                            <h6> Can we do Import or Export of any handicraft through HFH platform? </h6>
                            <p>


                                Members can do deals between themselves which may involve import and export.
                            </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Does HFH focus on women empowerment and products developed by women artisans? </h6>
                            <p>


                                Yes, HFH aims at empowering women artisans by working with them and promoting their
                                products. </p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special_item_text">
                            <h4> HFH Campaign and Mentoring </h4>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Is HFH a learning platform? </h6>
                            <p>

                                Yes </p>
                        </div>


                        <div class="special_item_text">
                            <h6> Can one join various educative workshops and webinars on HFH platform? </h6>
                            <p>

                                Yes </p>
                        </div>

                        <div class="special_item_text mb-25">
                            <h6> Will I get a virtual exposure for learning various crafts? </h6>
                            <p>

                                Yes
                            </p>
                        </div>

                        <div class="special_item_text">
                            <h6> Will there be any live sessions happening on HFH platform? </h6>
                            <p>

                                Yes </p>
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