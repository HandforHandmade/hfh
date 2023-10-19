<?php
session_start();
include_once 'include/common-constat.php';
include_once 'include/APICALL.php';

$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';

if (empty($userId)) {
    header("Location: signin.php");
}
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
    <link href="js/select2/dist/css/select2.css" rel="stylesheet">
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
    <section class="banner_area">
        <div class="tear top"></div>
        <div class="container">
            <div class="banner_text">
                <h3> Profile</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li> Profile</li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->


    <section class="osahan-main-body">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center vh-100">

                <div class="col-lg-3"></div>
                <input type="hidden" id="userSessionId" value="<?php echo $userId; ?>">

                <div class="col-lg-12 pl-lg-5">
                    <div class="osahan-signup shadow bg-white p-4 border rounded">
                        <div class="p-3">
                            <h2 class=""> Profile </h2>
                            <!-- <p class="small mb-4">Create account to see our top picks for you!</p> -->
                            <hr>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input placeholder="Enter Name" type="text" class="form-control input-lg"
                                                id="name" autocomplete="false">
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputNumber1">Phone Number</label>
                                            <input placeholder="Enter Phone Number" type="number"
                                                class="form-control input-lg" id="mobile">
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input placeholder="Enter Email" type="email" class="form-control input-lg"
                                                id="email">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputName1">Facebook link</label>
                                            <input placeholder="Enter face book link" type="text"
                                                class="form-control input-lg" id="facebook" autocomplete="false">
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputNumber1">Twitter link</label>
                                            <input placeholder="Enter twitter link" type="text"
                                                class="form-control input-lg" id="twitter">
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Linkedin Link</label>
                                            <input placeholder="Enter linkedin link" type="text"
                                                class="form-control input-lg" id="linkdin">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">About Self</label>
                                            <textarea class="form-control" id="aboutSelf" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Image</label>

                                            <input type="file" class="form-control" id="attachment"
                                                accept="image/png, image/gif, image/jpeg" />
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <img id="userImage" src="" style="height: 100px;width: 100px">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputName1">Tags</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="hidden" id="selectedTag">
                                                    <select class="form-control kt-select2 masterTag"
                                                        multiple="multiple"></select>
                                                </div>
                                                <div class="col-md-4">
                                                    <input placeholder="Enter tag" type="text" class="form-control"
                                                        id="tagName">
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn rounded btn-sm btn-danger"
                                                        id="tagBtn" onclick="addTag()">
                                                        Add Tag
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-md-12 userTag">
                                        
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn  btn-danger rounded btn-sm btn-block"
                                            onclick="updateProfile()">
                                            Update
                                        </button>
                                    </div>
                                    <div class="col-md-4"></div>


                                </div>
                        </div>

                        </form>

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
    <script src="js/select2/dist/js/select2.full.js"></script>
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
        getUserMasterDetails();
        getUserTags();
        getTags();

        $('.kt-select2').select2();
    });



    function addTag() {
        let resultOk = '<?php echo resultOk; ?>';
        let tagName = $('#tagName').val();
        if (tagName == '') {
            alert("Please enter tag name.");
            return false;
        }
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'addMasterTag',
            'tagName': tagName
        };
        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {
                console.log("Add");
            }
        });
    }


    function getTags() {

        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getMasterTag',
        };
        APICallAjax(sendApiDataObj, function(response) {
            let html = '';
            if (response.responseCode == resultOk) {
                let getUserTagId = '';
                console.log($('#selectedTag').val())
                if($('#selectedTag').val()!=''){
                    getUserTagId = JSON.parse($('#selectedTag').val());
                                    }

                for (let i = 0; i < response.result.tag.length; i++) {
                        let tag = response.result.tag[i];
                        var selected = '';
                        console.log(getUserTagId)
                        console.log(getUserTagId.length)
                        if (getUserTagId === '') {
                            $('.masterTag').append('<option value="' + tag.id + '">' + tag.name + '</option>');
                        } else {
                            $.each(getUserTagId, function(key, val) {
                                var option = $('.masterTag option[value="' + tag.id + '"]');
                                if (option.length === 0) {
                                    if (tag.id == val) {
                                        $('.masterTag').append('<option value="' + tag.id + '" selected>' +
                                            tag.name + '</option>');
                                    } else {
                                        $('.masterTag').append('<option value="' + tag.id + '">' + tag
                                            .name + '</option>');
                                    }
                                } else {
                                    if (tag.id == val) {
                                        option.prop('selected', true);
                                    }
                                }
                            });
                        }

                    }
                
            }
        });
    }

    function getUserTags() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUserTags',
            'userId': $('#userSessionId').val()
        };
        APICallAjax(sendApiDataObj, function(response) {
            let html = '';
            let selectedTagId = [];
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.tag.length; i++) {
                    let tag = response.result.tag[i];
                    selectedTagId.push(tag.id);
                    html += '<span class="badge badge-primary mr-1">' + tag.name + '</span>';
                }
                $('#selectedTag').val(JSON.stringify(selectedTagId));
                $('.userTag').html(html);
            }
        });
    }


    function getUserMasterDetails() {
        let resultOk = '<?php echo resultOk; ?>';
        let sendApiDataObj = {
            '<?php echo systemProject; ?>': 'Masters',
            '<?php echo systemModuleFunction; ?>': 'getUserMasterDetails',
            'userMasterId': $('#userSessionId').val(),
        };
        APICallAjax(sendApiDataObj, function(response) {
            let html = '';
            if (response.responseCode == resultOk) {
                for (let i = 0; i < response.result.userMaster.length; i++) {

                    let userMaster = response.result.userMaster[i];

                    $('#name').val(userMaster.name);
                    $('#mobile').val(userMaster.mobile);
                    $('#email').val(userMaster.email);
                    $('#facebook').val(userMaster.facebookLink);
                    $('#twitter').val(userMaster.twitterLink);
                    $('#linkdin').val(userMaster.linkedinLink);
                    $('#aboutSelf').val(userMaster.aboutSelf);
                    $("#userImage").attr("src", userMaster.userPhoto);
                    $("#getUserTags").attr("src", userMaster.getUserTags);


                }
            }

        });

    }

    function updateProfile() {
        let resultOk = '<?php echo resultOk; ?>';
        let file_data = $('#attachment')[0].files;
        let sendApiDataObj = {
            'systemProject': 'Sessions',
            'systemModuleFunction': 'userRegister',
            'action': 'update',
            'actionType': 'profileUpdate',
            'name': $('#name').val(),
            'mobile': $('#mobile').val(),
            'email': $('#email').val(),
            'facebook': $('#facebook').val(),
            'twitter': $('#twitter').val(),
            'aboutSelf': $('#aboutSelf').val(),
            'linkdin': $('#linkdin').val(),
            'userId': $('#userSessionId').val(),
            'tagIds': JSON.stringify($('.masterTag').val()),
            '<?php echo ERPFileElement; ?>': file_data,
        };

        APICallAjax(sendApiDataObj, function(response) {
            if (response.responseCode == resultOk) {
                window.location.href = 'submitted.php';
            }

        });
    }
    </script>
</body>

</html>