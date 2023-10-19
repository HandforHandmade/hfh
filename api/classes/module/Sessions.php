<?php

/**
 * @author : Pinank Soni
 * @class :Sessions
 * @desc: This class for using session related data
 **/
class Sessions extends Config
{
    public function __construct($HEADERS)
    {
        parent::__construct($HEADERS);
    }

    public function refreshToken()
    {
        $tokenValidityValue = $this->handleSpecialCharacters(($_POST['tokenValidityValue']));
        $tokenValidityType = $this->handleSpecialCharacters(($_POST['tokenValidityType']));

        $issuedAt = time();
        $ATExpireToken = $this->setJwtTokenExpireTime($issuedAt, $tokenValidityValue, $tokenValidityType);
        $refreshIssuedAt = $ATExpireToken - 120; /* Access Token Expire before 2 minute ago refresh token start */

        $isValidToken = $this->verifiedJwtToken($this->accessToken, true);
        if (!$isValidToken) {
            $this->successData();
            $this::$result = array(
                'AT' => $this->generateJwtToken(
                    [
                        'companyMasterKey' => self::$companyMasterKey,
                        'userMasterId' => $this->userMasterId,
                        'userMasterDeviceType' => $this->userMasterDeviceType,
                        'userMasterDeviceId' => $this->userMasterDeviceId,
                        'userMasterDeviceToken' => $this->userMasterDeviceToken,
                        'iat' => $issuedAt,
                        'exp' => $ATExpireToken,
                        'isMaster' => $this->isMaster,
                    ]
                ),
                'RT' => $this->generateJwtToken(
                    [
                        'companyMasterKey' => self::$companyMasterKey,
                        'userMasterId' => $this->userMasterId,
                        'userMasterDeviceType' => $this->userMasterDeviceType,
                        'userMasterDeviceId' => $this->userMasterDeviceId,
                        'userMasterDeviceToken' => $this->userMasterDeviceToken,
                        'iat' => $refreshIssuedAt,
                        'exp' => $this->setJwtTokenExpireTime($refreshIssuedAt, $tokenValidityValue, $tokenValidityType),
                        'isMaster' => $this->isMaster,
                    ]
                )
            );
        } else {
            $this->forceLogout("Token not valid");
        }
    }

    public function login()
    {
        try {

            $companyMasterKey = $this->handleSpecialCharacters(base64_decode($_POST['companyMasterKey']));
            $userMasterUsername = $this->handleSpecialCharacters(base64_decode($_POST['userMasterUsername']));
            $userMasterPassword = $this->handleSpecialCharacters(base64_decode($_POST['userMasterPassword']));
            $userMasterDeviceType = $this->handleSpecialCharacters(($_POST['userMasterDeviceType']));
            $userMasterDeviceId = $this->handleSpecialCharacters(($_POST['userMasterDeviceId']));
            $userMasterDeviceToken = $this->handleSpecialCharacters(($_POST['userMasterDeviceToken']));
            $tokenValidityValue = $this->handleSpecialCharacters(($_POST['tokenValidityValue']));
            $tokenValidityType = $this->handleSpecialCharacters(($_POST['tokenValidityType']));


            $queryUser = $this::$masterConn->prepare("SELECT * FROM user_master WHERE BINARY email IN ('$userMasterUsername') AND BINARY password IN ('$userMasterPassword') LIMIT 0,1");

            if ($queryUser->execute()) {

                if ($queryUser->rowCount() > 0) {
                    foreach ($queryUser->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        if ($this->equals($row['status'], $this->arrayAllStatus['sessions']['user']['enable'])) {
                            $issuedAt = time();
                            $ATExpireToken = $this->setJwtTokenExpireTime($issuedAt, $tokenValidityValue, $tokenValidityType);
                            $refreshIssuedAt = $ATExpireToken - 120; // Access Token Expire before 2 minit ago refesh token start

                            if ($this->equals($userMasterDeviceType, "web")) {


                                $loginWebId = md5(uniqid(rand(), true));
                                $queryUser = $this::$masterConn->prepare("UPDATE user_master SET webDeviceId = '" . $loginWebId . "' WHERE id ='" . $row['id'] . "' ");
                                $queryUser->execute();


                                $this->successData();
                                $this::$result = array(
                                    'AT' => $this->generateJwtToken(
                                        [
                                            'companyMasterKey' => $companyMasterKey,
                                            'userMasterId' => $row['id'],
                                            'userMasterDeviceType' => $userMasterDeviceType,
                                            'userMasterDeviceId' => $userMasterDeviceId,
                                            'userMasterDeviceToken' => $userMasterDeviceToken,
                                            'callFrom' => 'system',
                                            'iat' => $issuedAt,
                                            'exp' => $ATExpireToken,
                                            'loginWebId' => $loginWebId,

                                        ]
                                    ),
                                    'RT' => $this->generateJwtToken(
                                        [
                                            'companyMasterKey' => $companyMasterKey,
                                            'userMasterId' => $row['id'],
                                            'userMasterDeviceType' => $userMasterDeviceType,
                                            'userMasterDeviceId' => $userMasterDeviceId,
                                            'userMasterDeviceToken' => $userMasterDeviceToken,
                                            'callFrom' => 'system',
                                            'iat' => $refreshIssuedAt,
                                            'exp' => $this->setJwtTokenExpireTime($refreshIssuedAt, $tokenValidityValue, $tokenValidityType),
                                            'loginWebId' => $loginWebId,
                                        ]
                                    )
                                );
                            } else {
                                $appendQuery = "";
                                if ($this->equals($userMasterDeviceType, "android")) {
                                    $appendQuery = "UPDATE user_master SET deviceid = '" . $userMasterDeviceId . "', android_device_token = '" . $userMasterDeviceToken . "', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                                } else if ($this->equals($userMasterDeviceType, "ios")) {
                                    $appendQuery = "UPDATE user_master SET deviceid = '" . $userMasterDeviceId . "', android_device_token = '', ios_device_token = '" . $userMasterDeviceToken . "' WHERE id IN (" . $row['id'] . ")";
                                }
                                $queryUpdate = $this::$masterConn->prepare($appendQuery);
                                if ($queryUpdate->execute()) {
                                    $this->successData();
                                    $this::$result = array(
                                        'AT' => $this->generateJwtToken(
                                            [
                                                'companyMasterKey' => $companyMasterKey,
                                                'userMasterId' => $row['id'],
                                                'userMasterDeviceType' => $userMasterDeviceType,
                                                'userMasterDeviceId' => $userMasterDeviceId,
                                                'userMasterDeviceToken' => $userMasterDeviceToken,
                                                'callFrom' => 'system',
                                                'iat' => $issuedAt,
                                                'exp' => $ATExpireToken,
                                            ]
                                        ),
                                        'RT' => $this->generateJwtToken(
                                            [
                                                'companyMasterKey' => $companyMasterKey,
                                                'userMasterId' => $row['id'],
                                                'userMasterDeviceType' => $userMasterDeviceType,
                                                'userMasterDeviceId' => $userMasterDeviceId,
                                                'userMasterDeviceToken' => $userMasterDeviceToken,
                                                'callFrom' => 'system',
                                                'iat' => $refreshIssuedAt,
                                                'exp' => $this->setJwtTokenExpireTime($refreshIssuedAt, $tokenValidityValue, $tokenValidityType),

                                            ]
                                        )
                                    );
                                } else {
                                    $this->failureData();
                                }
                            }
                        } else {
                            $appendQuery = "UPDATE user_master SET web_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            if ($this->equals($userMasterDeviceType, "android")) {
                                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            } else if ($this->equals($userMasterDeviceType, "ios")) {
                                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            }

                            $queryUpdate = $this::$masterConn->prepare($appendQuery);
                            if ($queryUpdate->execute()) {
                                $this->noData("User blocked, Please contact to admin!");
                            } else {
                                $this->failureData();
                            }
                        }
                    }
                } else {
                    $this->noData("Invalid username or password");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function loginAuth()
    {
        try {

            $userMasterDeviceToken = $this->handleSpecialCharacters(($_POST['userMasterDeviceToken']));

            $queryUser = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id IN (" . $this->userMasterId . ") LIMIT 0,1");
            if ($queryUser->execute()) {
                if ($queryUser->rowCount() > 0) {
                    foreach ($queryUser->fetchAll(PDO::FETCH_ASSOC) as $row) {

                        $this->data = array(
                            'uniqueId' => $this->encodeUniqueId($row['id']),
                            'userMasterId' => $row['id'],
                            'userMasterName' => $row['name'],
                            'userMasterEmail' => $row['email'],
                            'userMasterMobile' => $row['mobile'],
                            'userMasterUsername' => $row['username'],
                            'userMasterDOB' => $this->convertNullToEmptyString($row['dob']),
                            'userMasterDisplayDOB' => $this->convertNullToEmptyString($this->formatDateTime('d-m-Y', $row['dob'])),
                            'userMasterDOA' => $this->convertNullToEmptyString($row['anniversary']),
                            'userMasterDisplayDOA' => $this->convertNullToEmptyString($this->formatDateTime('d-m-Y', $row['anniversary'])),
                            'userMasterDesignation' => $row['designation'],
                            'userMasterProfileImageUrl' => $this->generateUserProfileUrl($row['image']),
                            'is2FA' => $this->is2FA($row['is2FA'])
                        );

                        if ($this->equals($row['status'], $this->arrayAllStatus['sessions']['user']['enable'])) {
                            if ($this->equals($this->actionType, $this->arrayAllActionType['sessions']['splash_login'])) {
                                if ($this->equals($row['deviceid'], $this->userMasterDeviceId)) {
                                    $appendQuery = "UPDATE user_master SET web_device_token = '$userMasterDeviceToken' WHERE id IN (" . $row['id'] . ")";
                                    if ($this->equals($this->userMasterDeviceType, "android")) {
                                        $appendQuery = "UPDATE user_master SET deviceid = '" . $this->userMasterDeviceId . "', android_device_token = '$userMasterDeviceToken', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                                    } else if ($this->equals($this->userMasterDeviceType, "ios")) {
                                        $appendQuery = "UPDATE user_master SET deviceid = '" . $this->userMasterDeviceId . "', android_device_token = '', ios_device_token = '$userMasterDeviceToken' WHERE id IN (" . $row['id'] . ")";
                                    }
                                    $queryUpdate = $this::$masterConn->prepare($appendQuery);
                                    if ($queryUpdate->execute()) {
                                        $this->successData();
                                        $this::$result = array('userMaster' => $this->data);
                                    } else {
                                        $this->failureData();
                                    }
                                } else {
                                    $this->forceLogout();
                                }
                            } else {
                                $appendQuery = "UPDATE user_master SET web_device_token = '$userMasterDeviceToken' WHERE id IN (" . $row['id'] . ")";
                                if ($this->equals($this->userMasterDeviceType, "android")) {
                                    $appendQuery = "UPDATE user_master SET deviceid = '" . $this->userMasterDeviceId . "', android_device_token = '$userMasterDeviceToken', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                                } else if ($this->equals($this->userMasterDeviceType, "ios")) {
                                    $appendQuery = "UPDATE user_master SET deviceid = '" . $this->userMasterDeviceId . "', android_device_token = '', ios_device_token = '$userMasterDeviceToken' WHERE id IN (" . $row['id'] . ")";
                                }
                                $queryUpdate = $this::$masterConn->prepare($appendQuery);
                                if ($queryUpdate->execute()) {
                                    $this->successData();
                                    $this::$result = array('userMaster' => $this->data);
                                } else {
                                    $this->failureData();
                                }
                            }
                        } else {
                            $appendQuery = "UPDATE user_master SET web_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            if ($this->equals($this->userMasterDeviceType, "android")) {
                                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            } else if ($this->equals($this->userMasterDeviceType, "ios")) {
                                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $row['id'] . ")";
                            }
                            $queryUpdate = $this::$masterConn->prepare($appendQuery);
                            if ($queryUpdate->execute()) {
                                $this->noData("User blocked, Please contact to admin!");
                            } else {
                                $this->failureData();
                            }
                        }
                    }
                } else {
                    $this->noData("Invalid username or password");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function logout()
    {
        try {
            $appendQuery = "UPDATE user_master SET web_device_token = '' WHERE id IN (" . $this->userMasterId . ")";
            if ($this->equals($this->userMasterDeviceType, "android")) {
                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $this->userMasterId . ")";
            } else if ($this->equals($this->userMasterDeviceType, "ios")) {
                $appendQuery = "UPDATE user_master SET deviceid = '', android_device_token = '', ios_device_token = '' WHERE id IN (" . $this->userMasterId . ")";
            }
            $queryUpdate = $this::$masterConn->prepare($appendQuery);
            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {
                    $this->successData("Logout");
                } else {
                    $this->noData("Invalid, Please try again!");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function forgotPassword()
    {
        try {


            $userMasterEmailMobile = $this->handleSpecialCharacters($_POST['userMasterEmailMobile']);
            $userOTP = strval(mt_rand(100000, 999999));

            $queryCheckUser = $this::$masterConn->prepare("SELECT * FROM user_master WHERE email IN ('$userMasterEmailMobile') OR mobile IN ('$userMasterEmailMobile') LIMIT 0,1");
            if ($queryCheckUser->execute()) {
                if ($queryCheckUser->rowCount() > 0) {
                    foreach ($queryCheckUser->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $userMasterEmailArray = array();
                        if ($this->equals($row['status'], $this->arrayAllStatus['sessions']['user']['enable'])) {
                            $userMasterEmail = $row['email'];
                            $userMasterMobile = $row['mobile'];


                            if ($this->equals($userMasterEmailMobile, $userMasterEmail)) {
                                $subject = "Reset Password";
                                $body = "Dear " . $row['name'] . ",<br><br>This is your HFH OTP: " . $userOTP . " (This OTP is used for only one time.)";
                                $userMasterEmailArray[] = array(
                                    'Id' => $userMasterEmail,
                                    'Name' => ''
                                );

                                $emailArray = array(
                                    'Host' => $this->emailHost,
                                    'SSL' => 1,
                                    'Port' => $this->emailPort,
                                    'Userid' => $this->emailUsername,
                                    'Password' => $this->emailPassword,
                                    'Subject' => $subject,
                                    'Body' => $body,
                                    'FromEmailId' => $this->emailFrom,
                                    'FromEmailName' => $this->emailFromName,
                                    'ReplayEmailId' => '',
                                    'ReplayEmailName' => '',
                                    'ToEmailId' => $userMasterEmailArray,
                                    'CCEmailId' => [],
                                    'BCCEmailId' => [],
                                    'Attachment' => '',
                                );

                                $emailInstance = new Email($emailArray);
                                if ($emailInstance->SendEmail($emailArray)) {
                                    $this->data = array('forgotType' => "EMAIL", 'otp' => $userOTP);
                                    $this->successData("OTP sent!");
                                    $this::$result = array('verification' => $this->data);
                                } else {
                                    $this->noData(Email::$emailErrorMsg);
                                }
                            } else if ($this->equals($userMasterEmailMobile, $userMasterMobile)) {
                                $this->data = array('forgotType' => "PHONE", 'otp' => $userOTP);
                                $this->successData("OTP sent!");
                                $this::$result = array('verification' => $this->data);
                            } else {
                                $this->failureData('Invalid!');
                            }
                        } else {
                            $this->noData("User blocked");
                        }
                    }
                } else {
                    $this->noData('User not found!');
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function resetPassword()
    {
        try {

            $userMasterEmailMobile = $this->handleSpecialCharacters($_POST['userMasterEmailMobile']);
            $userMasterPassword = $this->handleSpecialCharacters(base64_decode($_POST['userMasterPassword']));

            $queryUpdate = $this::$masterConn->prepare("UPDATE user_master SET password = '$userMasterPassword', deviceid='" . $this->userMasterDeviceId . "' WHERE email IN ('$userMasterEmailMobile') OR mobile IN ('$userMasterEmailMobile')");
            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {
                    $this->successData('Your password reset successfully!');
                } else {
                    $this->noData("Password does not reset, Please try again!");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function changePassword()
    {
        try {
            $userMasterCurrentPassword = $this->handleSpecialCharacters(base64_decode($_POST['userMasterCurrentPassword']));
            $userMasterNewPassword = $this->handleSpecialCharacters(base64_decode($_POST['userMasterNewPassword']));

            $query = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id IN (" . $this->userMasterId . ") AND BINARY password IN ('$userMasterCurrentPassword')");
            if ($query->execute()) {
                if ($query->rowCount() > 0) {
                    $queryUpdate = $this::$masterConn->prepare("UPDATE user_master SET password = '$userMasterNewPassword', deviceid = '" . $this->userMasterDeviceId . "' WHERE id IN (" . $this->userMasterId . ")");
                    if ($queryUpdate->execute()) {
                        if ($queryUpdate->rowCount() > 0) {
                            $this->successData("Your password changed successfully!");
                        } else {
                            $this->noData("Current password and New password both are same, Please try another password!");
                        }
                    } else {
                        $this->failureData();
                    }
                } else {
                    $this->noData("Current password does not match, Please try again!");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function changeUserMasterProfileImage()
    {
        try {

            $queryUser = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id IN (" . $this->userMasterId . ")");
            if ($queryUser->execute()) {
                if ($queryUser->rowCount() > 0) {
                    foreach ($queryUser->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $this->deleteAttachment($this->filePathStructure['user_image'], $row['image']);
                        $userMasterId = $row['id'];
                        if ($this->isAttachmentUpdate) {
                            $attachmentData = $this->uploadAttachment($this->filePathStructure['user_image'], $this->filePrefixName['user_profile']);
                            $fileName = '';
                            if ($this->isNotNullOrEmptyOrZero($attachmentData)) {
                                foreach ($attachmentData as $value) {
                                    $fileName = $value['fileName'];
                                }
                            }
                            $queryUpdate = $this::$masterConn->prepare("UPDATE user_master SET image = '$fileName' WHERE id IN ($userMasterId)");
                            $queryUpdate->execute();
                        }

                        $queryUserData = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id IN ($userMasterId)");
                        if ($queryUserData->execute()) {
                            if ($queryUserData->rowCount() > 0) {
                                $this->successData("Profile changed");
                                foreach ($queryUserData->fetchAll(PDO::FETCH_ASSOC) as $rowUserData) {
                                    $this->data = array('userMasterProfileImageUrl' => $this->generateUserProfileUrl($rowUserData['image']));
                                }
                                $this::$result = array('userMaster' => $this->data);
                            }
                        } else {
                            $this->failureData();
                        }
                    }
                } else {
                    $this->noData('User not found!');
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function checkUserMasterEmailMobile()
    {
        try {
            $action = $this->handleSpecialCharacters($_POST['action']);
            $userMasterEmail = $this->handleSpecialCharacters($_POST['userMasterEmail']);
            $userMasterMobile = $this->handleSpecialCharacters($_POST['userMasterMobile']);

            if ($this->equals($action, 'checkEmailMobile')) {
                $queryEmail = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id NOT IN (" . $this->userMasterId . ") AND email IN ('$userMasterEmail')");
                if ($queryEmail->execute()) {
                    if ($queryEmail->rowCount() > 0) {
                        $this->noData("Email already exist, Please try another email");
                    } else {
                        $queryMobile = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id NOT IN (" . $this->userMasterId . ") AND mobile IN ('$userMasterMobile')");
                        if ($queryMobile->execute()) {
                            if ($queryMobile->rowCount() > 0) {
                                $this->noData("Mobile number already exist, Please try another mobile number");
                            } else {
                                $this->successData();
                            }
                        } else {
                            $this->failureData();
                        }
                    }
                } else {
                    $this->failureData();
                }
            } else if ($this->equals($action, 'checkEmail')) {
                $queryEmail = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id NOT IN (" . $this->userMasterId . ") AND email IN ('$userMasterEmail')");
                if ($queryEmail->execute()) {
                    if ($queryEmail->rowCount() > 0) {
                        $this->noData("Email already exist, Please try another email");
                    } else {
                        $this->successData();
                    }
                } else {
                    $this->failureData();
                }
            } else if ($this->equals($action, 'checkMobile')) {
                $queryMobile = $this::$masterConn->prepare("SELECT * FROM user_master WHERE id NOT IN (" . $this->userMasterId . ") AND mobile IN ('$userMasterMobile')");
                if ($queryMobile->execute()) {
                    if ($queryMobile->rowCount() > 0) {
                        $this->noData("Mobile number already exist, Please try another mobile number");
                    } else {
                        $this->successData();
                    }
                } else {
                    $this->failureData();
                }
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function sendOTPToEmailForForgot()
    {
        try {
            $userMasterEmail = $this->handleSpecialCharacters($_POST['userMasterEmail']);
            $otp = strval(mt_rand(100000, 999999));
            $subject = "Reset Password";
            $body = "This is your HFH OTP: " . $otp . " (This OTP is used for only one time.)";
            $emailInstance = new Email(array());
            if ($emailInstance->SendEmail1($userMasterEmail, $body, $subject)) {
                $this->data = array('forgotType' => "EMAIL", 'otp' => $otp);
                $this->successData("OTP sent!");
                $this::$result = array('verification' => $this->data);
            } else {
                $this->noData(Email::$emailErrorMsg);
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function updateUserMasterEmailMobile()
    {
        try {
            $userMasterEmail = $this->handleSpecialCharacters($_POST['userMasterEmail']);
            $userMasterMobile = $this->handleSpecialCharacters($_POST['userMasterMobile']);

            $queryUpdate = $this::$masterConn->prepare("UPDATE user_master SET email = '$userMasterEmail', mobile = '$userMasterMobile' WHERE id IN (" . $this->userMasterId . ")");
            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {
                    $this->successData("Update successfully!");
                } else {
                    $this->noData("Already updated!");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function updateUserMasterData()
    {
        try {
            $userMasterName = $this->handleSpecialCharacters($_POST['userMasterName']);
            $userMasterDOB = $this->handleSpecialCharacters($this->formatDateTime('Y-m-d', $_POST['userMasterDOB']));
            $userMasterDOA = $this->handleSpecialCharacters($this->formatDateTime('Y-m-d', $_POST['userMasterDOA']));
            $userMasterDesignation = $this->handleSpecialCharacters($_POST['userMasterDesignation']);

            $queryUpdate = $this::$masterConn->prepare("UPDATE user_master SET name = '$userMasterName', dob = '$userMasterDOB', anniversary = '$userMasterDOA', designation = '$userMasterDesignation' WHERE id IN (" . $this->userMasterId . ")");
            if ($queryUpdate->execute()) {
                if ($queryUpdate->rowCount() > 0) {
                    $this->successData("Update successfully!");
                } else {
                    $this->noData("Already updated!");
                }
            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }

    public function userRegister()
    {
        try {

            $action = $this->handleSpecialCharacters($_POST['action']);
            $name = $this->handleSpecialCharacters($_POST['name']);
            $mobile = $this->handleSpecialCharacters($_POST['mobile']);
            $email = $this->handleSpecialCharacters($_POST['email']);
            $password = $this->handleSpecialCharacters($_POST['password']);
            $userId = $this->handleSpecialCharacters($_POST['userId']);
            $category = $this->handleSpecialCharacters($_POST['category']);
            $gender = $this->handleSpecialCharacters($_POST['gender']);
            $panNumber = $this->handleSpecialCharacters($_POST['panNumber']);
            $city = $this->handleSpecialCharacters($_POST['city']);
            $state = $this->handleSpecialCharacters($_POST['state']);
            $pincode = $this->handleSpecialCharacters($_POST['pincode']);
            $membershipReason = $this->handleSpecialCharacters($_POST['membershipReason']);
            $membershipWork = $this->handleSpecialCharacters($_POST['membershipWork']);
            $landmark = $this->handleSpecialCharacters($_POST['landmark']);
            $facebook = $this->handleSpecialCharacters($_POST['facebook']);
            $twitter = $this->handleSpecialCharacters($_POST['twitter']);
            $linkdin = $this->handleSpecialCharacters($_POST['linkdin']);
            $aboutSelf = $this->handleSpecialCharacters($_POST['aboutSelf']);
            $dateOfBirth = $this->handleSpecialCharacters($this->formatDateTime('Y-m-d', $_POST['dateOfBirth']));
            $tagIds = json_decode($_POST['tagIds'], true);

            if ($this->equals($action, 'add')) {
                $appendQuery = "INSERT INTO `user_master`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
            } else if ($this->equals($action, 'update')) {
                if ($this->equals($this->actionType, 'membershipCategory')) {
                    $appendQuery = "UPDATE `user_master`  SET `gender`='$gender',`category_id`='$category',dob='$dateOfBirth' WHERE id = '$userId'";
                }

                if ($this->equals($this->actionType, 'membershipContact')) {
                    $appendQuery = "UPDATE `user_master`  SET `pan_card_number`='$panNumber',`city`='$city',landmark='$landmark',pincode='$pincode',state='$state' WHERE id = '$userId'";
                }
                if ($this->equals($this->actionType, 'membershipDetails')) {
                    $appendQuery = "UPDATE `user_master`  SET `membership_reason`='$membershipReason',membership_work='$membershipWork' WHERE id = '$userId'";
                }
                if ($this->equals($this->actionType, 'profileUpdate')) {

                     //$sql = "DELETE FROM `user_tags` WHERE `user_id`  = :id";                    
                    // $stmt = $this->pdo->prepare($sql);
                    // $stmt->bindParam(':id', "55");
                    // $stmt->execute();  
                    

                     $deleteQuery = $this::$masterConn->prepare("DELETE FROM `user_tags` WHERE `user_id` = 55");
                     $deleteQuery->execute(); 
                    foreach ($tagIds AS $tagId) {
                        $appendQuery = $this::$masterConn->prepare("INSERT INTO user_tags (user_id,tag_id) VALUES ('$userId','$tagId')");
                        $appendQuery->execute();
                    }
                    $profileImage = '';
                    if ($this->isAttachmentUpdate) {
                        $attachmentData = $this->uploadAttachment($this->filePathStructure['users'], $this->filePrefixName['users']);
                        $imageName = '';
                        if ($this->isNotNullOrEmptyOrZero($attachmentData)) {
                            foreach ($attachmentData as $value) {
                                $imageName = $this->generateUserProfileAttachmentUrl($value['fileName']);
                            }
                        }

                        $profileImage = " ,image= '$imageName'";
                    }
                    $appendQuery = "UPDATE `user_master`  SET `name` ='$name',`email`='$email',`mobile`='$mobile',facebook_link='$facebook',linkedin_link='$linkdin',twitter_link='$twitter',about_self='$aboutSelf' WHERE id = '$userId'";
                }
            }

            $query = $this::$masterConn->prepare($appendQuery);

            
            if ($query->execute()) {

                if ($this->equals($action, 'add')) {
                    $body = "Name:" . $name. "<br>";
                    $body .= "Email Id:" . $name. "<br>";
                    $body .= "Member category:" . $name. "<br>";
                    $body .= "Link to the member page:" . $name. "<br>";


                    $emailArray = array(
                        'Host' => $this->emailHost,
                        'SSL' => 1,
                        'Port' => $this->emailPort,
                        'Userid' => $this->emailUsername,
                        'Password' => $this->emailPassword,
                        'Subject' => "New Membership Form Received",
                        'Body' => $body,
                        'FromEmailId' => $this->emailFrom,
                        'FromEmailName' => $this->emailFromName,
                        'ReplayEmailId' => '',
                        'ReplayEmailName' => '',
                        'ToEmailId' =>[['Name'=>'Pinank','Id'=>'rs.pinanksoni@gmal.com'],['Name'=>'h','Id'=>'rs.pinanksoni@gmal.com']],
                        'CCEmailId' => [],
                        'BCCEmailId' => [],
                        'Attachment' => '',
                    );

                    $emailInstance = new Email($emailArray);
                    if ($emailInstance->SendEmail($emailArray)) {

                    } else {
                        $this->noData(Email::$emailErrorMsg);
                    }
                }

                $this->successData("Registration $action");

            } else {
                $this->failureData();
            }
        } catch (PDOException $e) {
            $this->exceptionData();
        }
    }
}
