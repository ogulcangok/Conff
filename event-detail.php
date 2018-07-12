<?php
require 'connect.php';
require 'event-operations.php';

$get_event_id = isset($_GET['event-id']) && is_numeric($_GET['event-id']) ? $_GET['event-id'] : header('Location:index.php');
$get_event_day = isset($_GET['event-day']) && is_numeric($_GET['event-day']) ? $_GET['event-day'] : header('Location:index.php');
$get_hall_number = isset($_GET['hall-number']) && is_numeric($_GET['hall-number']) ? $_GET['hall-number'] : header('Location:index.php');

$query = $db->prepare('SELECT * FROM event WHERE event_id = ?');
$query->execute([
    $get_event_id
]);
$event = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM sponsor Where event_id = ? AND sponsor_type = "Ana"');
$query->execute([
    $get_event_id
]);
$anaSponsor = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM sponsor WHERE event_id = ? AND sponsor_type = "iletisim"');
$query->execute([
    $get_event_id
]);
$iletisimSponsors = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM event_day WHERE event_id = ?');
$query->execute([
    $get_event_id
]);
$event_days = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM event_day WHERE event_id = ? AND event_day = ?');
$query->execute([
    $get_event_id, $get_event_day
]);
$current_event_day = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM summit WHERE event_day_id = ?');
$query->execute([
    $current_event_day['event_day_id']
]);
$summit_list = $query->fetchAll(PDO::FETCH_ASSOC);


$hall_list = array();
foreach ($summit_list as $summit) {
    $query = $db->prepare('SELECT * FROM hall WHERE hall_id = ?');
    $query->execute([
        $summit['hall_id']
    ]);
    array_push($hall_list, $query->fetch(PDO::FETCH_ASSOC));
}
array_unique($hall_list);

?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Conff | Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
       ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
       ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet'
          type='text/css'>
    <!-- Bootstrap CSS
       ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawsome CSS
       ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
       ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- jquery-ui CSS
       ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- meanmenu CSS
       ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate CSS
       ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- nivo slider CSS
       ============================================ -->
    <link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css"/>
    <link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen"/>
    <!-- style CSS
       ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
       ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
       ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.
</p>
<![endif]-->
<!--Header Area Start-->
<header class="header-three list">
    <div class="header-top">
    </div>
    <style>
        #nav li {
            float: left;
        }

        .header-nav {
            float: right !important;
        }
    </style>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/conff-color.png" alt="ADVENTURES"></a>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li><a href="index.php">Menu</a></li>
                                            <li><a href="#">Menu</a></li>
                                            <li><a href="#">Menu</a></li>
                                            <li><a href="#">Menu</a></li>
                                            <li><a href="#">Menu</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm hidden-xs">
                                <div class="profilemenu">
                                    <nav>
                                        <ul id="nav" class="header-nav">
                                            <li><a onclick="dropfunc()" class="dropbtn">
                                                    <i class="fa fa-user"></i> PROFİLİM</a>
                                                <div id="profileDropdown" class="dropdown-content">
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                            </li>
                                            <li><a href="#"><i class="fa fa-mail-reply"></i> MESAJLAR</a></li>
                                            <li><i class="fa fa-bell" style="padding-left: 50px;font-size: 25px;"></i>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <script>
                                    function dropfunc() {
                                        document.getElementById("profileDropdown").classList.toggle("show");
                                    }

                                    window.onclick = function (event) {
                                        if (!event.target.matches('.dropbtn')) {

                                            var dropdowns = document.getElementsByClassName("dropdown-content");
                                            var i;
                                            for (i = 0; i < dropdowns.length; i++) {
                                                var openDropdown = dropdowns[i];
                                                if (openDropdown.classList.contains('show')) {
                                                    openDropdown.classList.remove('show');
                                                }
                                            }
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">Menu</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Menu</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>
<!--End of Header Area-->
<!--Banner Area Start-->
<div class="banner-area list " style=" height: 650px; padding-bottom: 0px;">
    <div class="container-fluid">
        <div class="row " style="position:absolute; bottom:0; height: 100px; width:100%; background: #FFFa">
            <div class="container">
                <div class="row" style="margin: 0px; padding: 0px;">
                    <div class="col-md-8 col-sm-8 hidden-xs"
                         style="display: flex;  margin: 0px; height: 100px; padding: 0px; flex-direction: row; justify-items: center; justify-content: center">
                        <h1 style="color: #dd153c; font-weight: 900; flex: 1; margin: 0px; line-height: 100px;">
                            TED CONFERENCE
                        </h1>
                    </div>

                    <div class="col-md-2.6 col-sm-4 col-xs-12"
                         style="display: flex;  margin: 0px; height: 100px; padding: 0px; flex-direction: row; justify-items: center; justify-content: center">
                        <a href="#" class="red-button"
                           style="height: 60px; margin-top: 20px; line-height: 60px; padding: 0px 45px;">8-10 Mayıs
                            2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Banner Area-->

<div class="container">
    <div class="row" style="margin-top:40px;">
        <div class="col-md-2 mt10" style="padding-left: 0; padding-right: 0;">
            <ul class="side-menu-container">
                <li class="side-menu-header-item"><a href="#">KAYIT</a></li>
                <li class="side-menu-item"><a href="#">Schedule</a></li>
                <li class="side-menu-item"><a href="#">Topics</a></li>
                <li class="side-menu-item"><a href="#">Board</a></li>
                <li class="side-menu-item"><a href="#">Important Dates</a></li>
                <li class="side-menu-item"><a href="#">Location</a></li>
                <li class="side-menu-item"><a href="#">Board</a></li>
                <li class="side-menu-item"><a href="#">Planery Speakers</a></li>
                <li class="side-menu-item"><a href="#">Supporters</a></li>
                <li class="side-menu-item"><a href="#">Registration</a></li>
                <li class="side-menu-item"><a href="#">Template</a></li>
                <li class="side-menu-item"><a href="#">Summits</a></li>
                <li class="side-menu-item"><a href="#" style="border: 0!important;">Names</a></li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="width: 100%; height: 350px; border: 1px solid #707070; text-align: center">Reklam Alanı</div>
        </div>
        <br>
        ---------------------------------------------------------------------------------------------------------------------------------------
        <div class="col-md-7 mt10">
            <h3 style="font-weight: bold; color: #444"><?php
                echo $event['event_title'];
                ?></h3>

            <p>
                <?php echo $event['event_description']; ?>
            </p>

            <div>
                <!-- Nav tabs -->
                <div class="col hidden-xs">
                    <ul class="event-details-nav" role="tablist">
                        <?php
                        foreach ($event_days as $event_day) {
                            echo '
                                    <li role="presentation" class="' . ($event_day['event_day'] == $get_event_day ? 'active' : '') . '">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <a href="event-detail.php?event-id=' . $get_event_id . '&event-day=' . $event_day['event_day'] . '" aria-controls="home" role="tab">Event Day ' . $event_day['event_day'] . '</a>
                                    </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>

                <div class="col hidden-lg hidden-md hidden-sm">
                    <ul class="event-details-nav" role="tablist" style="display:block;">
                        <li role="presentation" class="active">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="#home" aria-controls="home" role="tab"
                               data-toggle="tab">Event Day 1</a>
                        </li>
                        <li role="presentation">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="#profile" aria-controls="profile" role="tab"
                               data-toggle="tab">Event Day 2</a>
                        </li>
                        <li role="presentation">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="#messages" aria-controls="messages" role="tab"
                               data-toggle="tab">Event Day 3</a>
                        </li>
                        <li role="presentation">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="#settings" aria-controls="settings" role="tab"
                               data-toggle="tab">Event Day 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content" style="border: 1px solid #bbb;">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div>
                            <!-- Inner Nav tabs -->
                            <ul class="event-details-inner-nav" role="tablist">
                                <?php
                                for ($i = 1; $i <= count($hall_list); $i++) {
                                    echo '
                                    <li role="presentation" class="' . ($get_hall_number == $i ? 'active' : '') . '">
                                        <a href="event-detail.php?event-id=' . $get_event_id . '&event-day=' . $get_event_day . '&hall-number=' . $i . '" aria-controls="hal1" role="tab">' . $hall_list[$i - 1]['hall_name'] . '</a>
                                    </li>
                                ';
                                }
                                ?>
                            </ul>
                            <!-- Inner Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" style="padding: 16px;" id="hal1">
                                    <div class="row"
                                         style="color:#444!important; border-bottom: 1px solid #ddd; margin-bottom: 40px; padding: 10px 10px 20px;">
                                        <div class="col-md-6">
                                            <i class="fa fa-calendar pull-left" style="font-size: 65px;"></i><br><b
                                                    style="font-size: 17px;">JANUARY</b><br>EVENT
                                            DAY <?php echo $get_event_day . ' / ' . $hall_list[$get_hall_number - 1]['hall_name'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <b
                                                    style="font-size: 17px;"><?php echo $current_event_day['event_day_topic'] ?>
                                            </b>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center">
                                            <img alt="User Pic" src="img/sell/1.jpg"
                                                 class="img-circle" style="border: 2px solid #444;">
                                            <br>

                                            <h4 style="font-weight: bold; color: #444; margin-top: 10px;">JENRY DOE</h4>
                                            <h5 style="color: #666">BitCoin History</h5>
                                        </div>
                                        <div class=" col-md-9 col-lg-9 ">
                                            <div class="btm-mrg-60 property-listing">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="container-fluid brdr bgc-fff ">
                                                            <div class="row">
                                                                <div class="col-md-12 product-details-container"
                                                                     style="height: 55px;">
                                                         <span class="glyphicon glyphicon-time product-details-icon"
                                                               aria-hidden="true" style="font-size: 35px;"></span>
                                                                    <span class="fnt-arial product-details-text"
                                                                          style="font-size: 25px;">13:00 - 15:00</span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="border-top: 1px solid #bbb ;">
                                                                <div class="media">
                                                                    <div class="clearfix visible-sm"></div>
                                                                    <div class="media-body fnt-smaller">
                                                                        <p class="hidden-xs" style="padding: 16px;">
                                                                            Lorem ipsum
                                                                            dolor
                                                                            sit amet,
                                                                            consectetur
                                                                            adipiscing elit. Pellentesque gravida
                                                                            euismod
                                                                            eleifend. Nullam eget placerat nisl. Sed vel
                                                                            massa eget justo facilisis luctus.
                                                                            Vestibulum at
                                                                            consequat est, quis interdum massa.
                                                                            Pellentesque convallis, ligula ac laoreet
                                                                            semper, nibh dui luctus arcu, at interdum
                                                                            mauris tortor a arcu. Curabitur quis nisl
                                                                            nec
                                                                            ligula facilisis elementum. In
                                                                            consectetur
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row"
                                                                 style="border-top: 1px solid #bbb; padding: 16px;">
                                                                <b>Speakers: </b> Onur Ekşi, Emre Kalemtaş, John Doe
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center">
                                            <img alt="User Pic" src="img/sell/1.jpg"
                                                 class="img-circle" style="border: 2px solid #444;">
                                            <br>
                                            <h4 style="font-weight: bold; color: #444; margin-top: 10px;">JENRY DOE</h4>
                                            <h5 style="color: #666">PHP DEVELOPMENT</h5>
                                        </div>
                                        <div class=" col-md-9 col-lg-9 ">
                                            <div class="btm-mrg-60 property-listing">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="container-fluid brdr bgc-fff ">
                                                            <div class="row">
                                                                <div class="col-md-12 product-details-container"
                                                                     style="height: 55px;">
                                                         <span class="glyphicon glyphicon-time product-details-icon"
                                                               aria-hidden="true" style="font-size: 35px;"></span>
                                                                    <span class="fnt-arial product-details-text"
                                                                          style="font-size: 25px;">13:00 - 15:00</span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="border-top: 1px solid #bbb ;">
                                                                <div class="media">
                                                                    <div class="clearfix visible-sm"></div>
                                                                    <div class="media-body fnt-smaller">
                                                                        <p class="hidden-xs" style="padding: 16px;">
                                                                            Lorem ipsum
                                                                            dolor
                                                                            sit amet,
                                                                            consectetur
                                                                            adipiscing elit. Pellentesque gravida
                                                                            euismod
                                                                            eleifend. Nullam eget placerat nisl. Sed vel
                                                                            massa eget justo facilisis luctus.
                                                                            Vestibulum at
                                                                            consequat est, quis interdum massa.
                                                                            Pellentesque convallis, ligula ac laoreet
                                                                            semper, nibh dui luctus arcu, at interdum
                                                                            mauris tortor a arcu. Curabitur quis nisl
                                                                            nec
                                                                            ligula facilisis elementum. In
                                                                            consectetur
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row"
                                                                 style="border-top: 1px solid #bbb; padding: 16px;">
                                                                <b>Speakers: </b> Onur Ekşi, Emre Kalemtaş, John Doe
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="hal2">2</div>
                                <div role="tabpanel" class="tab-pane" id="hal3">3</div>
                                <div role="tabpanel" class="tab-pane" id="hal4">4</div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">2</div>
                    <div role="tabpanel" class="tab-pane" id="messages">3</div>
                    <div role="tabpanel" class="tab-pane" id="settings">4</div>
                </div>
            </div>
            -------------------------------------------------------------------------------------------------------------------------------------------------
            <h3 style="font-weight: bold; color: #444; margin-top: 60px; border-bottom: 1px solid #dd153c; padding-bottom: 15px;">
                ZİRVE SOSYAL MEDYA
            </h3>
            <div class="single-footer-widget" style="margin-bottom: 50px; margin-top: 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-link-small">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right" style="font-size: 16px; margin-top: 10px; color: #444">
                            <b>Tags: </b>
                            #ted
                            #konferans
                            #vizyon
                        </div>
                    </div>
                </div>
            </div>
            <h3 style="font-weight: bold; color: #444; margin-top: 60px; border-bottom: 1px solid #dd153c; padding-bottom: 15px;">
                ZİRVE SPONSORLARI
            </h3>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                    <h4>ANA SPONSOR</h4>

                    <img class="img-responsive" width="90%" src="./img/<?php echo $anaSponsor['sponsor_photo']; ?>.png">

                </div>
                <div class="col-md-6">
                    <h4>İLETİŞİM SPONSORLARI</h4>
                    <?php
                    foreach ($iletisimSponsors as $sponsor) {
                        echo '<img class="img-responsive" width="100%" src="img/' . $sponsor['sponsor_photo'] . '.png"> ';
                    }
                    ?>


                </div>


            </div>

            <h3 style="font-weight: bold; color: #444; margin-top: 60px; margin-bottom:20px; border-bottom: 1px solid #dd153c; padding-bottom: 15px;">
                S.S.S
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group" id="accordion" role="tablist"
                         aria-multiselectable="true">
                        <div class="panel panel-default brdr">
                            <div class="panel-heading" style="background: #0000" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-11 col-xs-10">
                                                Yeni zirve nasıl oluşturabilirim?
                                            </div>
                                            <div class="col-md-2 col-sm-1 col-xs-2"
                                                 style="height:100%; border-left: 1px solid #ddd; ">
                                                <i class="fa fa-plus" style="font-size: 20px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                    put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion2" role="tablist"
                         aria-multiselectable="true">
                        <div class="panel panel-default brdr">
                            <div class="panel-heading" style="background: #0000" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseTwo" aria-expanded="true"
                                       aria-controls="collapseTwo">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-11 col-xs-10">
                                                Yeni zirve nasıl oluşturabilirim?
                                            </div>
                                            <div class="col-md-2 col-sm-1 col-xs-2"
                                                 style="height:100%; border-left: 1px solid #ddd;">
                                                <i class="fa fa-plus" style="font-size: 20px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                    put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion3" role="tablist"
                         aria-multiselectable="true">
                        <div class="panel panel-default brdr">
                            <div class="panel-heading" style="background: #0000" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion3"
                                       href="#collapseThree" aria-expanded="true"
                                       aria-controls="collapseThree">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-11 col-xs-10">
                                                Yeni zirve nasıl oluşturabilirim?
                                            </div>
                                            <div class="col-md-2 col-sm-1 col-xs-2"
                                                 style="height:100%; border-left: 1px solid #ddd;">
                                                <i class="fa fa-plus" style="font-size: 20px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                    put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt10" style="padding-left: 0; padding-right: 0;">
            <div class="btm-mrg-40">
                <img src="img/maps.png" width="100%"/>
                <h3 style="padding: 15px; font-weight: bold; color: #FFF; font-size: 16px; background: #dd153c; border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;">
                    NEREDE ?
                </h3>
            </div>
            <div class="brdr btm-mrg-40">
                <h5 style="padding: 10px; text-align: center; font-weight: bold; font-size: 14px; color: #444; border-bottom: 1px solid #ddd;">
                    NEREDE & NE ZAMAN ?
                </h5>
                <ul class="event-list" style="margin: 10px;">
                    <li><a href="#"> NYC - Financial Freedom Investor</a></li>
                    <li><a href="#">Madison Ave New York, NY 10010</a></li>
                    <li><a href="#">Thursday, January 8, 2015</a></li>
                    <li><a href="#">from 6:30 PM to 8:30 PM (EST)</a></li>
                    <li><a class="add-button" href="#">+ TAKVİME EKLE</a></li>
                </ul>
            </div>
            <div class="brdr btm-mrg-40">
                <h5 style="padding: 10px; text-align: center; font-weight: bold; font-size: 14px; color: #444; border-bottom: 1px solid #ddd;">
                    ÖNEMLİ TARİHLER
                </h5>
                <ul class="event-list" style="margin: 10px;">
                    <li><a href="#"><span class="pull-right"
                                          style="font-weight: bold; font-size: 24px;">+</span>Son
                            Bildiri Tarihi<br>14.08.2018</a>
                    </li>
                    <li><a href="#"><span class="pull-right" style="font-weight: bold; font-size: 24px;">+</span>Yemek
                            Kayıt Tarihi<br>09.08.2018
                        </a>
                    </li>
                    <li><a href="#"><span class="pull-right" style="font-weight: bold; font-size: 24px;">+</span>Tur
                            Kayıt Tarihi<br>11.09.2018
                        </a>
                    </li>
                    <li><a class="info" href="#">“<span style="font-size: 20px;">+</span>” Butonu ile önemli tarihleri
                            takviminize ekleyebilirsiniz.</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-danger btn-lg btn-block">Sponsor Ol</button>
            <br>
            <button type="button" class="btn btn-danger btn-lg btn-block">Stand Kirala</button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="width: 100%; height: 350px; border: 1px solid #707070; text-align: center">Reklam Alanı</div>
        </div>
    </div>
</div>
<div class="red-divider" style="margin-top: 60px;"></div>

<!--Footer Widget Area Start-->
<div class="footer-widget-area footer-widget-three">
    <div class="container">
        <div class="row" style="margin-bottom: 60px;">
            <div class="col-md-12"
                 style="display: flex; flex-direction: row; align-items: center; justify-items: center">
                <h4 style="  color: #444;
                     font-size: 20px;
                     margin-right: 25px;
                     font-weight: 700;
                     line-height: 16px;
                     ">Bizden Haberdar Olmak İçin: </h4>
                <input type="email" class="brdr search-input"
                       placeholder="E-Mail Adresiniz">
                <a class="red-button"
                   style="font-size: 30px; display: inline-block"
                   aria-hidden="true">Abone Ol!</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="single-footer-widget">
                    <h4>About Conff</h4>
                    <div class="footer-widget-list">
                        <ul class="widget-lists">
                            <li><a href="#">About SXSW</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Newsletters</a></li>
                            <li><a href="#">Merch</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3">
                <div class="single-footer-widget">
                    <h4>Social Media</h4>
                    <div class="col-md-6">
                        <div class="footer-link-small">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 hidden-sm">
                <div class="single-footer-widget">
                    <h4>Sales & Sponsorship</h4>
                    <div class="footer-widget-list">
                        <ul class="widget-lists">
                            <li><a href="#">Marketing at SXSW</a></li>
                            <li><a href="#">Sponsorship Opportunities</a></li>
                            <li><a href="#">Exhibitions Opportunities</a></li>
                            <li><a href="#">Advertising Opportunities</a></li>
                            <li><a href="#">Custom Opportunities</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 hidden-md hidden-sm">
                <div class="single-footer-widget">
                    <h4>Press</h4>
                    <div class="footer-widget-list">
                        <ul class="widget-lists">
                            <li><a href="#">Press Center</a></li>
                            <li><a href="#">Accreditation</a></li>
                            <li><a href="#">Press Releases</a></li>
                            <li><a href="#">Photo & Video Policies</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3">
                <div class="single-footer-widget">
                    <h4>Attending Conff</h4>
                    <div class="footer-widget-list">
                        <ul class="widget-lists">
                            <li><a href="#">Registration Info</a></li>
                            <li><a href="#">Hotel Info</a></li>
                            <li><a href="#">Attendee Services Hub</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Registration Terms</a></li>
                            <li><a href="#">RFID Policy</a></li>
                            <li><a href="#">Code of Conduct</a></li>
                            <li><a href="#">Registration FAQ</a></li>
                            <li><a href="#">Housing & Travel FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px; margin-bottom: 60px;">
            <div class="col-md-8 col-md-offset-2" style="text-align: center">
                ©2017-2018 SXSW, LLC. SXSW®, SXSW EDU®, SXSW Eco®, and South by Southwest® are trademarks owned by SXSW,
                LLC. Any unauthorized use of these names, or variations of these names, is a violation of state,
                federal, and international trademark laws.
                <br>
                <br>
                Privacy Policy | Trademark Guidelines | Terms of Use | Copyright Notice
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!-- jquery
   ============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
   ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- nivo slider js
   ============================================ -->
<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
<!-- wow JS
   ============================================ -->
<script src="js/wow.min.js"></script>
<!-- meanmenu JS
   ============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
   ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- price-slider JS
   ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- scrollUp JS
   ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Waypoints JS
   ============================================ -->
<script src="js/waypoints.min.js"></script>
<!-- Counter Up JS
   ============================================ -->
<script src="js/jquery.counterup.min.js"></script>
<!-- plugins JS
   ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
   ============================================ -->
<script src="js/main.js"></script>
</body>
</html>
