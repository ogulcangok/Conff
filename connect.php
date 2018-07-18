<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 9.07.2018
 * Time: 14:56
 */

global $db;
try{
    $db = new PDO('mysql:host=localhost;dbname=conffco1_test', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}
