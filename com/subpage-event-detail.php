<?php

require 'session.php';
require 'connect.php';
require 'event-operations.php';


$get_event_id = isset($_GET['event-id']) && is_numeric($_GET['event-id']) ? $_GET['event-id'] : header('Location:index.php');
$get_event_day = isset($_GET['event-day']) && is_numeric($_GET['event-day']) ? $_GET['event-day'] : header('Location:index.php');

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
    $temp = $query->fetch(PDO::FETCH_ASSOC);
    if (!isHallInList($hall_list, $temp['hall_id'])) {
        array_push($hall_list, $temp);
    }
}
array_unique($hall_list);

function getHallNameByHallId($hall_list, $hall_id) {
    foreach ($hall_list as $hall) {
        if ($hall['hall_id'] == $hall_id) {
            return $hall['hall_name'];
        }
    }
}

function isHallInList($hall_list, $hall_id): bool {
    $contain = false;
    foreach ($hall_list as $item) {
        if ($item['hall_id'] == $hall_id) {
            $contain = true;
        }
    }
    return $contain;
}

$query = $db->prepare('SELECT hall_id FROM summit WHERE event_day_id = ? AND event_day =? ');
$query->execute([
    $current_event_day['event_day_id'],$get_event_day
]);
$summitTemp = $query->fetchAll(PDO::FETCH_ASSOC);

$get_hall_number = isset($_GET['hall-number']) && is_numeric($_GET['hall-number']) ? $_GET['hall-number'] : $summitTemp[0]['hall_id'];
print_r($get_hall_number);

?>

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
                                    <li role="presentation" class="' . ($get_hall_number == $hall_list[$i-1]['hall_id'] ? 'active' : '') . '">
                                        <a href="event-detail.php?event-id=' . $get_event_id . '&event-day=' . $get_event_day . '&hall-number=' . $hall_list[$i-1]['hall_id'] . '" aria-controls="hal1" role="tab">' . $hall_list[$i - 1]['hall_name'] . '</a>
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
                                            DAY <?php echo $get_event_day . ' / ' . getHallNameByHallId($hall_list, $get_hall_number)?>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <b
                                                    style="font-size: 17px;"><?php echo $current_event_day['event_day_topic'] ?>
                                            </b>
                                            <br>
                                        </div>
                                    </div>
                                    <?php foreach ($summit_list as $summit):?>
                                        <?php
                                        if($summit['hall_id'] == $get_hall_number):
                                            $startTime = $summit['summit_start_time'];
                                            $endTime = $summit['summit_end_time'];

                                            $query = $db->prepare('SELECT * FROM speaker_speaks_at_summit WHERE summit_id = ?');
                                            $query->execute([
                                                    $summit['summit_id']
                                            ]);
                                            $speakers_ids = $query->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center">
                                                <img alt="User Pic"
                                                     src="img/<?php echo $summit['summit_moderator_photo'] ?>.jpeg"
                                                     class="img-circle" style="border: 2px solid #444;">
                                                <br>
                                                <h4 style="font-weight: bold; color: #444; margin-top: 10px;"> <?php echo $summit['summit_moderator'] ?></h4>
                                                <h5 style="color: #666"> <?php echo $summit['summit_topic'] ?></h5>
                                            </div>
                                            <div class=" col-md-9 col-lg-9 ">
                                                <div class="btm-mrg-60 property-listing">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="container-fluid brdr bgc-fff ">
                                                                <div class="row">
                                                                    <div class="col-md-12 product-details-container" style="height: 55px;">
                                                                        <span class="glyphicon glyphicon-time product-details-icon" aria-hidden="true" style="font-size: 35px;"></span>
                                                                        <span class="fnt-arial product-details-text" style="font-size: 25px;"><?php echo $startTime . '-' . $endTime ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="border-top: 1px solid #bbb ;">
                                                                    <div class="media">
                                                                        <div class="clearfix visible-sm"></div>
                                                                        <div class="media-body fnt-smaller">
                                                                            <p class="hidden-xs" style="padding: 16px;">
                                                                                <?php echo $summit['summit_info'] ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row"
                                                                     style="border-top: 1px solid #bbb; padding: 16px;">
                                                                    <b>Speakers: </b>
                                                                    <?php for ($i = 0; $i < count($speakers_ids); $i++) {
                                                                        $query = $db->prepare('SELECT * FROM speaker WHERE speaker_id = ?');
                                                                        $query->execute([
                                                                            $speakers_ids[$i]['speaker_id']
                                                                        ]);
                                                                        $speaker = $query->fetch(PDO::FETCH_ASSOC);
                                                                        if ($i + 1 == count($speakers_ids))
                                                                            echo $speaker['speaker_name'];
                                                                        else
                                                                            echo $speaker['speaker_name'] . ',';
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>


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

<!--     S.S.S       -->
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