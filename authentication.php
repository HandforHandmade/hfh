<?php
session_start();
include("DB/connection.php");

if (isset($_POST['signin']) && $_POST['signin'] == "Submit" && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['userName']);
    $password = trim($_POST['userPassword']);

    $re1 = mysqli_query($master_conn, "select * from user_master where email='$username' AND password='$password'");
    $rt1 = mysqli_fetch_assoc($re1);
    $total = mysqli_num_rows($re1);

    if ($rt1['status'] == 'active') {
        if ($total > 0) {

            $_SESSION['userId'] = $rt1['id'];
            $_SESSION['loginFlag'] = 'FlagTrue';
            $_SESSION['name'] = $rt1['name'];
            $_SESSION['ALLOWPROFILEACCESS'] = '1';
            $query = " update user_master set loginstatus ='1' where id ='" . $_SESSION['crm_userid'] . "'";
            $re = mysqli_query($master_conn, $query);

            $params = session_get_cookie_params();
            setcookie('AT', $_POST['webAT'], time() + (86400 * 30), "/", "", true, true);
            setcookie('RT', $_POST['webRT'], time() + (86400 * 30), "/", "", true, true);
            header("Location: index.php");
            exit;

        } else {
            header("Location: index.php?error=true");
            exit;

        }

    } else {
        header("Location: index.php?error_msgstatus=true");
        exit;
    }
}

if ($_REQUEST['actions'] == "InsertTokenIDByUserid") {

    $userid = $_REQUEST['userid'];
    $web_tokenid = $_REQUEST['web_tokenid'];
    if (!$userid && !$web_tokenid) {
        return false;
    }

    $query = "UPDATE user_master SET web_device_token='$web_tokenid' WHERE id=" . $userid;


    $re = mysqli_query($conn, $query);

    return true;
}
?>