<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 9.07.2018
 * Time: 14:56
 */


define("DB_NAME", "conffco1_test");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");


global $db;
try{
    $db = new PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
}
