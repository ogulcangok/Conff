<?php
	include 'com/header.php';
	
    switch($url[0]){
        case "":
            include 'com/subpage-home.php';
            break;
        case "event-detail":
            include 'com/subpage-event-detail.php';
            break;
    }

	include 'com/footer.php';
?>