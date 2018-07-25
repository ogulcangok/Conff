<?php
require_once 'connect.php';
$logged = false;
session_start();

$loginErrors = array();
$registerErrors = array();

if (isset($_POST['user_register'])) {

    $user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_date_of_birth = $_POST['user_date_of_birth'];
    $user_surname = $_POST['user_surname'];
    $user_telephone = $_POST['user_telephone'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password*'];

    if (empty($user_name)) {
        array_push($registerErrors, 'Name is required');
    }
    if (empty($user_surname)) {
        array_push($registerErrors, 'Surname is required');
    }
    if (empty($user_telephone)) {
        array_push($registerErrors, 'Telephone is required');
    }
    if (empty($user_email)) {
        array_push($registerErrors, 'Email is required');
    }
    if (empty($user_password)) {
        array_push($registerErrors, 'Password is required');
    }
    if (empty($user_date_of_birth)) {
        array_push($registerErrors, 'Birth day is required');
    }
    if (empty($user_re_password)) {
        array_push($registerErrors, 'Confirm Password is required');
    }
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

        } else {
            print_r($query->errorInfo());
        }
    }
}

if (isset($_REQUEST['login'])) {
    $user_login_email = $_POST['login_username'];
    $user_login_password = $_POST['login_password'];

    if (empty($user_login_email)) {
        array_push($loginErrors, 'Email is required');
    }
    if (empty($user_login_password)) {
        array_push($loginErrors, 'Password is required');
    }
    if (count($loginErrors) == 0) {
        $encyrpted_login_password = md5($user_login_password);
        $query = $db->prepare("SELECT * FROM member WHERE member_email = ? AND member_password = ?");
        $query->execute([
            $user_login_email, $encyrpted_login_password
        ]);

        $member = $query->fetch(PDO::FETCH_ASSOC);
        if ($member) {
            //header('Location:index.php');

            $logged = true;
            $_SESSION['user_name'] = $member['member_name'];
            $_SESSION['logged'] = $logged;
            $_SESSION['user_role'] = $member['member_role_id'];
            print_r($member);
        } else {
            array_push($loginErrors, 'Wrong username/password combination');
        }
    }
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