<?php
require 'session.php';
require'connect.php';
$logged = false;


$loginErrors = array();
$registerErrors = array();


if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_date_of_birth = $_POST['user_date_of_birth'];
    $user_surname = $_POST['user_surname'];
    $user_telephone = $_POST['user_telephone'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    require('FacebookAccountKitApiResponse.php');

    $obj = new FacebookAccountKitApiResponse($code);

    $get_authorize_token = $obj->getUserAccessTokenByAuthorizationCode();

    if($get_authorize_token['status']== true) {
        $obj->makeAppSecretProof();

        $user_info = $obj->getAccountKitAccountInfo();

        if(isset($user_info->phone)) {
            if ($user_password != $user_re_password) {
                array_push($registerErrors, 'Passwords are not matching');
            }

            if (count($registerErrors) == 0) {
                $encyrpted_password = md5($user_password);
                $query = $db->prepare('INSERT INTO member SET member_name = ?, member_surname = ?, member_email = ? , member_title = ?, member_telephone = ?, member_password = ?, member_date_of_birth = ?,member_role_id=?');

                $add = $query->execute([
                    $user_name, $user_surname, $user_email, $user_title, $user_telephone, $encyrpted_password, $user_date_of_birth, 4
                ]);

                $member_id = $db->lastInsertId();

                print_r($add);
                if ($add) {
                    //  header('Location:index.php');

                    $logged = true;
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['logged'] = $logged;
                    $_SESSION['user_role'] = 4;

                    $query = $db->prepare('INSERT INTO user SET user_id = ?');

                    $add = $query->execute([
                        $member_id
                    ]);
                    header("Location: index.php");
                } else {
                    header("Location: login.php");
                }
            }
            header("Location: index.php");
            exit;
        } else {

        }
        //print_r($_SESSION);
    } else {
        //print_r($get_authorize_token);

        $_SESSION['error']['status'] = true;
        $_SESSION['error']['message'] = $get_authorize_token['curl_result']->error->message;

        header("Location: login.php", true, 301);
        exit();

        //echo $get_authorize_token['curl_result']->error->message;
    }
} else {
    $_SESSION['error']['status'] = true;
    $_SESSION['error']['message'] = "Illegal Access this page!!!!";

    header("Location: login.php", true, 301);
    exit();
}

if(isset($_REQUEST['company_register'])){
    $firm_name = $_POST['firm_name'];
    $firm_user_name = $_POST['firm_user_name'];
    $firm_user_surname = $_POST['firm_user_surname'];
    $firm_tel_no = $_POST['firm_tel_no'];
    $firm_email = $_POST['firm_email'];
    $firm_password = $_POST['firm_password'];
    $firm_re_password = $_POST['firm_re_password'];

    if ($firm_password != $firm_re_password) {
        array_push($registerErrors, 'Passwords are not matching');
    }

    if(count($registerErrors) == 0){

        $encyrpted_password = md5($firm_password);

        $query = $db->prepare('INSERT INTO member SET member_name = ?, member_surname = ?, member_email = ? , member_telephone = ?, member_password = ?,member_role_id=?');

        $add = $query->execute([
            $firm_user_name, $firm_user_surname, $firm_email,$firm_tel_no, $encyrpted_password,2
        ]);

        $member_id = $db->lastInsertId();

        print_r($add);
        if ($add) {
            //header('Location:index.php');

            $logged = true;
            $_SESSION['user_name'] = $firm_user_name;
            $_SESSION['logged'] = $logged;
            $_SESSION['user_role'] = 2;

            $query = $db->prepare('INSERT INTO firm SET firm_id = ?, firm_title = ?');

            $add = $query->execute([
                $member_id,$firm_name
            ]);

        } else {
            print_r($query->errorInfo());
        }
    }



}