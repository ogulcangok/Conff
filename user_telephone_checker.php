<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 30.07.2018
 * Time: 17:47
 */

require 'connect.php';

if (isset($_POST["user_telephone"])) {
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $query = $db->prepare('SELECT * FROM member WHERE member_telephone = ?');
    $query->execute([
        $_POST["user_telephone"]
    ]);
    $members = $query->fetchAll(PDO::FETCH_ASSOC);
    $count = $query->rowCount();

    echo $count;
}

if (isset($_POST["user_email"])) {
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $query = $db->prepare('SELECT * FROM member WHERE member_email = ?');
    $query->execute([
        $_POST["user_email"]
    ]);
    $members = $query->fetchAll(PDO::FETCH_ASSOC);
    $count = $query->rowCount();

    echo $count;
}