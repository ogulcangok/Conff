<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 9.07.2018
 * Time: 16:45
 */
require 'session.php';

session_destroy();
$logged = false;

header('Location: index.php');