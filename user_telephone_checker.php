<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 30.07.2018
 * Time: 17:47
 */

if(isset($_POST["user_telephone"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    try{
        $db = new PDO('mysql:host=localhost;dbname='. DB_NAME, DB_USERNAME, DB_PASSWORD);
        $query = $db->prepare('SELECT * FROM member WHERE member_telephone = ?');
        $query->execute([
            $_POST["user_telephone"]
        ]);
        $members = $query->fetchAll(PDO::FETCH_ASSOC);
        $count = $query->rowCount();

        echo $count;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}