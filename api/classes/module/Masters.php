<?php

/**
 * @author : Pinank Soni
 * @class :Masters
 * @desc: This class for using masters.
 **/
class Masters extends Config
{
    public function __construct($HEADERS)
    {
        parent::__construct($HEADERS);
    }

    public function getCategoryDetails()
    {
        try {

            $categoryId = $this->handleSpecialCharacters($_POST['categoryId']);
            $parentId = $this->handleSpecialCharacters($_POST['parentId']);

            $appendQuery = '';
            if ($this->isNotNullOrEmptyOrZero($parentId)) {
                $appendQuery = " AND parent_id = '$parentId' ";
            }
            if ($this->isNotNullOrEmptyOrZero($categoryId)) {
                $appendQuery = " AND id = '$categoryId' ";
            }
            $query = $this::$masterConn->prepare("SELECT * FROM category $appendQuery WHERE  status='Active' ORDER BY event_display_order ASC ");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['category_name']),
                            'description' => $this->convertNullToEmptyString($row['cat_desc']),
                            'image' => $this->convertNullToEmptyString($row['img_path']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'parentId' => $this->convertNullOrEmptyStringToZero($row['parent_id']),
                        );
                    }
                    $this::$result = array('category' => $this->data);
                } else {
                    $this->noData("No any category");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getQuickLinkDetails()
    {

        try {

            $linkId = $this->handleSpecialCharacters($_POST['linkId']);
            $appendQuery = " ";
            if ($this->isNotNullOrEmptyOrZero($linkId)) {
                $appendQuery = " WHERE id = '$linkId'";
            }
            $query = $this::$masterConn->prepare("SELECT * FROM quick_links $appendQuery ORDER BY id;");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {

                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'description' => $this->convertNullToEmptyString($row['description']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'subTitle' => $this->convertNullToEmptyString($row['sub_title']),
                            'title' => $this->convertNullToEmptyString($row['title']),
                        );
                    }
                    $this::$result = array('quickLinks' => $this->data);
                } else {
                    $this->noData("No any quickLinks");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getEventCategoryDetails()
    {

        try {

            $categoryId = $this->handleSpecialCharacters($_POST['categoryId']);
            $parentId = $this->handleSpecialCharacters($_POST['parentId']);

            if ($this->isNotNullOrEmptyOrZero($parentId)) {
                $appendQuery = " WHERE parent_id = '$parentId' ";
            }
            if ($this->isNotNullOrEmptyOrZero($categoryId)) {
                $appendQuery = " WHERE id = '$categoryId' ";
            }
            $query = $this::$masterConn->prepare("SELECT * FROM event_category $appendQuery ORDER BY category_name ASC ");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['category_name']),
                            'description' => $this->convertNullToEmptyString($row['cat_desc']),
                            'image' => $this->convertNullToEmptyString($row['img_path']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'parentId' => $this->convertNullOrEmptyStringToZero($row['parent_id']),
                        );
                    }
                    $this::$result = array('eventCategory' => $this->data);
                } else {
                    $this->noData("No any eventCategory");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getUsersDetails()
    {
        try {
            $userTypeId = $this->handleSpecialCharacters($_POST['userTypeId']);
            $userId = $this->handleSpecialCharacters($_POST['userId']);

            $appendQuery = '';
            $userQuery = "";
            if ($this->isNotNullOrEmptyOrZero($userId)) {
                $userQuery = " AND users.id = '$userId'";
            }

            if ($this->isNotNullOrEmptyOrZero($userTypeId)) {
                $appendQuery = " WHERE users.user_type = '$userTypeId' AND users.status = 'Active' $userQuery";
            }

            if ($this->isNotNullOrEmptyOrZero($userId)) {
                $appendQuery = " WHERE users.id = '$userId'";
            }

            $query = $this::$masterConn->prepare("SELECT
    users.*,user_type.type_name AS userType
FROM users
 LEFT JOIN user_type ON user_type.id=users.user_type
 $appendQuery ORDER BY display_order ASC");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {

                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'userName' => $this->convertNullToEmptyString($row['user_name']),
                            'userDesc' => $this->convertNullToEmptyString($row['user_desc']),
                            'designation' => $this->convertNullToEmptyString($row['designation']),
                            'imagePath' => $this->generateUserProfileAttachmentUrl($row['img_path']),
                            'imagePath1' => $this->convertNullToEmptyString($row['img_path']),
                            'userType' => $this->convertNullToEmptyString($row['userType']),
                            'userTypeId' => $this->convertNullToEmptyString($row['user_type']),
                            'facebookLink' => $this->convertNullToEmptyString($row['facebook_link']),
                            'twitterLink' => $this->convertNullToEmptyString($row['twitter_link']),
                            'linkdInLink' => $this->convertNullToEmptyString($row['linkedin_link']),
                            'webLink' => $this->convertNullToEmptyString($row['website']),
                            'facebookLink' => $this->convertNullToEmptyString($row['facebook_link']),
                            'twitterLink' => $this->convertNullToEmptyString($row['twitter_link']),
                            'linkdInLink' => $this->convertNullToEmptyString($row['linkedin_link']),
                            'webLink' => $this->convertNullToEmptyString($row['website']),
                            'instagramLink' => $this->convertNullToEmptyString($row['instagram_link']),
                        );
                    }
                    $this::$result = array('users' => $this->data);
                } else {
                    $this->noData("No record");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getEventDetails()
    {
        try {

            $categoryId = $this->handleSpecialCharacters($_POST['categoryId']);
            $eventId = $this->handleSpecialCharacters($_POST['eventId']);

            $appendQuery = '';
            if ($this->isNotNullOrEmptyOrZero($categoryId)) {
                $appendQuery = " WHERE event.category_id = '$categoryId' ";
            }
            if ($this->isNotNullOrEmptyOrZero($eventId)) {
                $appendQuery = " WHERE event.id = '$eventId' ";
            }
            $query = $this::$masterConn->prepare("SELECT
    event.*,
    category.category_name AS categoryName,
    category.cat_desc AS categoryDesc
FROM event
LEFT JOIN category ON category.id = event.category_id
$appendQuery  AND event.status ='Active'
ORDER BY event.event_order ASC, event.event_name ASC;");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['event_name']),
                            'description' => $this->convertNullToEmptyString($row['event_desc']),
                            'categoryId' => $this->convertNullToEmptyString($row['category_id']),
                            'categoryName' => $this->convertNullToEmptyString($row['categoryName']),
                            'categoryDesc' => $this->convertNullToEmptyString($row['categoryDesc']),
                            'image' => $this->convertNullToEmptyString($row['img_path']),
                            'videoLink' => $this->convertNullToEmptyString($row['video_link']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'eventCity' => $this->convertNullToEmptyString($row['event_city']),
                            'eventState' => $this->convertNullToEmptyString($row['event_state']),
                        );
                    }
                    $this::$result = array('event' => $this->data);
                } else {
                    $this->noData("No any event");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getUserMasterDetails()
    {
        try {

            $userMasterId = $this->handleSpecialCharacters($_POST['userMasterId']);

            $appendQuery = '';

            if ($this->isNotNullOrEmptyOrZero($userMasterId)) {
                $appendQuery = " WHERE user_master.id = '$userMasterId' ";
            }
            $query = $this::$masterConn->prepare("SELECT `user_master`.*,category_master.name AS categoryName FROM `user_master` LEFT JOIN category_master ON category_master.id=`user_master`.category_id $appendQuery ORDER BY name ASC ");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {

                        $userId = $row['id'];

                        $portfolioQry = $this::$masterConn->prepare("SELECT * FROM `user_portfolio` WHERE user_id = '$userId' ");

                        $portfolioArr = array();
                        if ($portfolioQry->execute()) {
                            if ($portfolioQry->rowCount() > 0) {

                                foreach ($portfolioQry->fetchAll(PDO::FETCH_ASSOC) as $portfoliRow) {
                                    $portfolioArr[] = array(
                                        'id' => $portfoliRow['id'],
                                        'image' => $portfoliRow['image'],
                                        'title' => $portfoliRow['title'],
                                    );
                                }
                            }
                        }

                        $catalogueQry = $this::$masterConn->prepare("SELECT * FROM `user_catalogue` WHERE user_id = '$userId' ");

                        $catalogueArr = array();
                        if ($catalogueQry->execute()) {
                            if ($catalogueQry->rowCount() > 0) {

                                foreach ($catalogueQry->fetchAll(PDO::FETCH_ASSOC) as $catalogueRow) {
                                    $catalogueArr[] = array(
                                        'id' => $catalogueRow['id'],
                                        'image' => $catalogueRow['image'],
                                        'title' => $catalogueRow['title'],
                                    );
                                }
                            }
                        }

                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['name']),
                            'email' => $this->convertNullToEmptyString($row['email']),
                            'mobile' => $this->convertNullToEmptyString($row['mobile']),
                            'userName' => $this->convertNullToEmptyString($row['username']),
                            'password' => $this->convertNullToEmptyString($row['password']),
                            'dateOfBirth' => $this->convertNullToEmptyString($row['dob']),
                            'anniversary' => $this->convertNullToEmptyString($row['anniversary']),
                            'dateOfBirthDisplayDate' => $this->convertNullToEmptyString($this->formatDateTime('d-m-Y', $row['dob'])),
                            'anniversaryDisplayDate' => $this->convertNullToEmptyString($this->formatDateTime('d-m-Y', $row['anniversary'])),
                            'uotp' => $this->convertNullToEmptyString($row['uotp']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'gender' => $this->convertNullToEmptyString($row['gender']),
                            'panCardNumber' => $this->convertNullToEmptyString($row['pan_card_number']),
                            'city' => $this->convertNullToEmptyString($row['city']),
                            'landmark' => $this->convertNullToEmptyString($row['landmark']),
                            'state' => $this->convertNullToEmptyString($row['state']),
                            'pincode' => $this->convertNullToEmptyString($row['pincode']),
                            'membershipReason' => $this->convertNullToEmptyString($row['membership_reason']),
                            'agentId' => $this->convertNullToEmptyString($row['agent_id']),
                            'categoryId' => $this->convertNullToEmptyString($row['category_id']),
                            'categoryName' => $this->convertNullToEmptyString($row['categoryName']),
                            'facebookLink' => $this->convertNullToEmptyString($row['facebook_link']),
                            'linkedinLink' => $this->convertNullToEmptyString($row['linkedin_link']),
                            'twitterLink' => $this->convertNullToEmptyString($row['twitter_link']),
                            'googlePlusLink' => $this->convertNullToEmptyString($row['google_plus_link']),
                            'aboutSelf' => $this->convertNullToEmptyString($row['about_self']),
                            'userPhoto' => $this->convertNullToEmptyString($row['image']),
                            'image' => $this->generateUserProfileAttachmentUrl($row['image']),
                            'portfolioArray' => $portfolioArr,
                            'catalogueArray' => $catalogueArr,
                        );
                    }
                    $this::$result = array('userMaster' => $this->data);
                } else {
                    $this->noData("No any user");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData($e);
        }
    }

    public function getCategoryMasterDetails()
    {
        try {

            $categoryId = $this->handleSpecialCharacters($_POST['categoryId']);
            $parentId = $this->handleSpecialCharacters($_POST['parentId']);

            $appendQuery = '';
            if ($this->isNotNullOrEmptyOrZero($parentId)) {
                $appendQuery = " WHERE parent_id = '$parentId' ";
            }
            if ($this->isNotNullOrEmptyOrZero($categoryId)) {
                $appendQuery = " WHERE id = '$categoryId' ";
            }
            $query = $this::$masterConn->prepare("SELECT * FROM `category_master` $appendQuery ORDER BY name ASC ");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['name']),
                            'description' => $this->convertNullToEmptyString($row['description']),
                            'image' => $this->convertNullToEmptyString($row['img_path']),
                            'status' => $this->convertNullToEmptyString($row['status']),
                            'parentId' => $this->convertNullOrEmptyStringToZero($row['parent_id']),
                        );
                    }
                    $this::$result = array('category' => $this->data);
                } else {
                    $this->noData("No any category");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function addUpdatePortfolio()
    {
        try {

            $portfolioTitle = $this->handleSpecialCharacters($_POST['portfolioTitle']);
            if ($this->isAttachmentUpdate) {
                $attachmentData = $this->uploadAttachment($this->filePathStructure['portfolio'], $this->filePrefixName['portfolio']);

                if ($this->isNotNullOrEmptyOrZero($attachmentData)) {
                    foreach ($attachmentData as $value) {
                        $path = $this->generatePortfolioAttachmentUrl($value['fileName']);
                        $queryUpdate = $this::$masterConn->prepare("INSERT INTO `user_portfolio`(`image`, `title`, `user_id`) VALUES ('$path','$portfolioTitle','" . $this->userMasterId . "')");
                        $queryUpdate->execute();
                        $this->successData("Portfolio Added");
                    }
                }
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function addMasterTag()
    {
        try {
            $tagName = $this->handleSpecialCharacters($_POST['tagName']);

            $getQuery = $this::$masterConn->prepare("SELECT name FROM master_tag WHERE name IN ('$tagName')");
            if ($getQuery->execute()) {
                if ($getQuery->rowCount() <= 0) {
                    $query = $this::$masterConn->prepare("INSERT INTO master_tag (name) VALUES ('$tagName')");
                    if ($query->execute()) {
                        if ($query->rowCount() > 0) {
                            $this->successData("Tag Added");
                        } else {
                            $this->noData("Tag Not Added");
                        }
                    } else {
                        $this->failureData();
                    }
                } else {
                    $this->noData("Tag Already Exist");
                }
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getMasterTag()
    {
        try {
            $query = $this::$masterConn->prepare("SELECT * FROM master_tag ORDER BY id DESC");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['name']),
                        );
                    }
                    $this::$result = array('tag' => $this->data);
                } else {
                    $this->noData("No any tags");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getPortfolioDetails()
    {

        try {

            $query = $this::$masterConn->prepare("SELECT * FROM `user_portfolio` WHERE user_id = '" . $this->userMasterId . "' ORDER BY id DESC ");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'title' => $this->convertNullToEmptyString($row['title']),
                            'image' => $this->convertNullToEmptyString($row['image']),
                        );
                    }
                    $this::$result = array('portfolio' => $this->data);
                } else {
                    $this->noData("No any portfolio");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function deletePortFolio()
    {
        try {

            $id = $this->handleSpecialCharacters($_POST['id']);
            $name = $this->handleSpecialCharacters($_POST['name']);

            unlink($name);
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getUserTags()
    {
        try {
            $userId = $this->handleSpecialCharacters($_POST['userId']);

            $query = $this::$masterConn->prepare("SELECT master_tag.*,user_tags.user_id FROM user_tags
                    LEFT JOIN master_tag ON master_tag.id = user_tags.tag_id WHERE user_tags.user_id IN('$userId') GROUP BY master_tag.id");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'name' => $this->convertNullToEmptyString($row['name']),
                        );
                    }
                    $this::$result = array('tag' => $this->data);
                } else {
                    $this->noData("No any tags");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function getCatalogueDetails()
    {

        try {

            $query = $this::$masterConn->prepare("SELECT * FROM `user_catalogue` WHERE user_id = '" . $this->userMasterId . "' ORDER BY id DESC ");

            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $this->successData();
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->data[] = array(
                            'id' => $this->convertNullOrEmptyStringToZero($row['id']),
                            'title' => $this->convertNullToEmptyString($row['title']),
                            'image' => $this->convertNullToEmptyString($row['image']),
                        );
                    }
                    $this::$result = array('catalogue' => $this->data);
                } else {
                    $this->noData("No any catalogue");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData($e->getMessage());
        }
    }

    public function addUpdateCatalogue()
    {
        try {

            $catalogueTitle = $this->handleSpecialCharacters($_POST['catalogueTitle']);
            if ($this->isAttachmentUpdate) {
                $attachmentData = $this->uploadAttachment($this->filePathStructure['catalogue'], $this->filePrefixName['catalogue']);

                if ($this->isNotNullOrEmptyOrZero($attachmentData)) {
                    foreach ($attachmentData as $value) {
                        $path = $this->generateCatalogueAttachmentUrl($value['fileName']);
                        $queryUpdate = $this::$masterConn->prepare("INSERT INTO `user_catalogue`(`image`, `title`, `user_id`) VALUES ('$path','$catalogueTitle','" . $this->userMasterId . "')");
                        $queryUpdate->execute();
                        $this->successData("Catalogue Added");
                    }
                }
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function addContactInquiry()
    {
        try {

            $name = $this->handleSpecialCharacters($_POST['name']);
            $mobile = $this->handleSpecialCharacters($_POST['mobile']);
            $email = $this->handleSpecialCharacters($_POST['email']);
            $subject = $this->handleSpecialCharacters($_POST['subject']);
            $remark = $this->handleSpecialCharacters($_POST['remark']);

            $queryUpdate = $this::$masterConn->prepare("INSERT INTO `contact_inquiry`(`name`, `email`, `mobile`, `subject`, `remark`) VALUES ('$name','$email','$mobile','$subject','$remark')");

            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {

                    $body = "Name:" . $name . "<br>";
                    $body .= "Email Id:" . $email . "<br>";
                    $body .= "Phone:" . $mobile . "<br>";
                    $body .= "Subject:" . $subject . "<br>";
                    $body .= "Remark:" . $remark . "<br>";

                    $emailArray = array(
                        'Host' => $this->emailHost,
                        'SSL' => 1,
                        'Port' => $this->emailPort,
                        'Userid' => "mi.pinanksoni@gmail.com",
                        'Password' => "whlcgfedtmeipdkj",
                        'Subject' => "New Inquiry Received",
                        'Body' => $body,
                        'FromEmailId' => "mi.pinanksoni@gmail.com",
                        'FromEmailName' => "Pinank Soni",
                        'ReplayEmailId' => '',
                        'ReplayEmailName' => '',
                        'ToEmailId' => [['Name' => 'Pinank', 'Id' => 'mi.pinanksoni@gmail.com'], ['Name' => 'h', 'Id' => 'info@handforhandmade.com']],
                        'CCEmailId' => [],
                        'BCCEmailId' => [],
                        'Attachment' => '',
                    );

                    $emailInstance = new Email($emailArray);
                    if ($emailInstance->SendEmail($emailArray)) {
                        $this->successData();
                    } else {
                        $this->noData(Email::$emailErrorMsg);
                    }
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function addSubscriber()
    {
        try {

            $name = $this->handleSpecialCharacters($_POST['name']);
            $email = $this->handleSpecialCharacters($_POST['email']);
            $contactNumber = $this->handleSpecialCharacters($_POST['contactNumber']);
            $queryUpdate = $this::$masterConn->prepare("INSERT INTO `subscriber`(`name`,`email`,`contact`) VALUES  ('$name','$email','$contactNumber');");
            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {
                    $this->successData();
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData($e);
        }
    }
}
