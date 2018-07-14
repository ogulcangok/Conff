<?php
require_once 'connect.php';
$logged = false;
session_start();

$loginErrors = array();
$registerErrors = array();

if (isset($_POST['user_register'])) {

    $user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_company = $_POST['user_company'];
    $user_telephone = $_POST['user_telephone'];
    $user_address = $_POST['user_address'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password*'];

    if (empty($user_name)) {
        array_push($registerErrors, 'Name is required');
    }
    if (empty($user_surname)) {
        array_push($registerErrors, 'Surname is required');
    }
    if (empty($user_company)) {
        array_push($registerErrors, 'Company is required');
    }
    if (empty($user_telephone)) {
        array_push($registerErrors, 'Telephone is required');
    }
    if (empty($user_address)) {
        array_push($registerErrors, 'Address is required');
    }
    if (empty($user_email)) {
        array_push($registerErrors, 'Email is required');
    }
    if (empty($user_password)) {
        array_push($registerErrors, 'Password is required');
    }
    if (empty($user_re_password)) {
        array_push($registerErrors, 'Confirm Password is required');
    }
    if ($user_password != $user_re_password) {
        array_push($registerErrors, 'Passwords are not matching');
    }

    if (count($registerErrors) == 0) {

        $encyrpted_password = md5($user_password);
        $query = $db->prepare('INSERT INTO user SET user_name = ?, user_surname = ?, user_email = ?, user_title = ?, user_address = ?,user_firm  = ?, user_telephone = ?, user_password = ?');

        $add = $query->execute([
            $user_name, $user_surname, $user_email, $user_title, $user_address, $user_company,$user_telephone, $encyrpted_password
        ]);
        print_r($add);
        if ($add) {
            header('Location:index.php');

            $logged = true;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['logged'] = $logged;

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
        $query = $db->prepare("SELECT * FROM user WHERE user_email = ? AND user_password = ?");
        $query->execute([
            $user_login_email, $encyrpted_login_password
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            header('Location:index.php');

            $logged = true;
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['logged'] = $logged;
        } else {
            array_push($loginErrors, 'Wrong username/password combination');
        }
    }
}
