<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 10.07.2018
 * Time: 14:02
 */


function countEvents() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=conffdb1', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $query = $db->prepare('SELECT COUNT(*) FROM event;');
    $query->execute();
    $a = $query->fetchAll(PDO::FETCH_ASSOC);
    $eventCount = count($a);

    return $eventCount;
}

function readEvent($direction, $firstEventOfPage, $limit, $category) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=conffdb1', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $query = $db->prepare('SELECT * FROM event_categories WHERE category = ?');
    $query->execute([
        $category
    ]);
    $categoryFromDb = $query->fetch(PDO::FETCH_ASSOC);

    if ($category == 'All') {
        $events = $db->query('SELECT * FROM event ORDER BY event_start_date DESC LIMIT ' . $firstEventOfPage . ', '. $limit) ->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $events = $db->query('SELECT * FROM event WHERE event_category= "' . $categoryFromDb['category_id'] . '" ORDER BY event_start_date DESC LIMIT ' . $firstEventOfPage . ', '. $limit) ->fetchAll(PDO::FETCH_ASSOC);
    }



    for ($i = 0; $i < count($events); $i++) {
        $event = $events[$i];
        $query = $db->prepare('SELECT * FROM location WHERE location_id = ?');
        $query->execute([
            $event['event_location_id']
        ]);
        $location = $query->fetch(PDO::FETCH_ASSOC);



        $startDate = explode(" ", $event['event_start_date']);
        $startTime = explode(" ", $event['event_start_time']);
        $endTime = explode(" ", $event['event_end_time']);

        $div = '<div class="btm-mrg-60 property-listing">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="container-fluid brdr bgc-fff ">
                           <div class="row">
                              <div class="col-md-12 product-header-container">
                                 <span class="fnt-arial product-header-text">' . $event['event_title'] . '</span>
                                 <span class="fa fa-share-alt product-header-icon"
                                    aria-hidden="true"></span>
                              </div>
                           </div>
                           <div class="row" style="border-top: 1px solid #bbb ;">
                              <div class="media">
                                 <a class="pull-left" href="#" target="_parent">
                                 <img style="width: 200px; height: 225px" alt="image" class="img-responsive" src="./img/event-photos/' . $event['event_photo'] . '.jpeg"></a>
                                 <div class="clearfix visible-sm"></div>
                                 <div class="media-body fnt-smaller">
                                    <a href="#" target="_parent"></a>
                                    <p class="hidden-xs" style="padding: 8px;"> ' . $event['event_description'] . '
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="border-top: 1px solid #bbb ; background: #FFF;">
                              <div class="col-md-9 product-details-container">
                                 <span class="fa fa-map-marker product-details-icon"
                                    aria-hidden="true"></span>
                                 <span class="fnt-arial product-details-text">' . $location['location_name'] . '</span>
                                 <a href="#" class="pull-right product-details-hashtag">' . $event['event_hashtag'] . '</a>
                              </div>
                              <div class="col-md-3" style="padding: 0; position: relative">
                                 <a href="event-detail.php?event-id='.$event['event_id'].'" class="product-inspect-button">İncele</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="position: relative">
                        <div class="col-md-9"
                           style="position: relative; top: -5px; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; border-bottom: 1px solid #bbb; border-right: 1px solid #bbb; border-left: 1px solid #bbb">
                           <div class="row">
                              <div class="col-md-6 product-details-container">
                                 <span class="fa fa-calendar product-details-icon"
                                    aria-hidden="true"></span>
                                 <span class="fnt-arial product-details-text">' . $startDate[0] . '</span>
                              </div>
                              <div class="col-md-6 product-details-container">
                                 <span class="glyphicon glyphicon-time product-details-icon"
                                    aria-hidden="true"></span>
                                 <span class="fnt-arial product-details-text">' . $startTime[1] . '-' . $endTime[1] . '</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>';

        if ($i == 6) {
            echo '<div class="row">
            <div class="col-md-12">
               <div style="height: 450px; background: #a0a0a0;" class="btm-mrg-60">
                  Reklam
               </div>
            </div>
         </div>';
        }
        if ($direction == 'left') {
            if ($i % 2 == 0) {
                echo $div;
            }
        } elseif ($direction == 'right') {
            if ($i % 2 == 1) {
                echo $div;
            }
        }
    }
}






