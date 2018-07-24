<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 17.07.2018
 * Time: 13:26
 */
require 'connect.php';

$event_id = $_GET['event-id'];
$event_remaining_day = $_GET['event-remaining-day'];
$event_day_count = $_GET['day-count'];
$current_day = $event_day_count - $event_remaining_day + 1;
$next_day = $event_remaining_day - 1;

$query = $db->prepare('SELECT * FROM event WHERE event_id = ?');
$query->execute([
    $event_id
]);
$event = $query->fetch(PDO::FETCH_ASSOC);


$query = $db->prepare('SELECT * FROM event_day WHERE event_id = ? AND event_day = ?');
$query->execute([
    $event_id, $current_day
]);
$event_day = $query->fetch(PDO::FETCH_ASSOC);
print_r($event_day);


$query = $db->prepare('SELECT * FROM location WHERE location_id = ?');
$query->execute([
    $event['event_location_id']
]);
$locations = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM hall Where location_id = ?');
$query->execute([
    $event['event_location_id']
]);
$hall_list = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM speaker');
$query->execute();
$speaker_list = $query->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['save_speaker'])) {
    $speaker_name = $_POST['speaker_name'];
    $speaker_interest = $_POST['speaker_interest'];
    $speaker_summary = $_POST['speaker_summary'];

    $query = $db->prepare('INSERT INTO speaker SET speaker_name = ? , speaker_interest = ?, speaker_summary = ?');

    $add = $query->execute([
        $speaker_name, $speaker_interest, $speaker_summary
    ]);


    if ($add) {
        $query = $db->prepare('SELECT * FROM speaker');
        $query->execute();
        $speaker_list = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "success";
    } else {
        print_r($query->errorInfo());
    }
}

if (isset($_POST['save_hall'])) {
    $hall_name = $_POST['hall_name'];
    $hall_capacity = $_POST['hall_capacity'];


    $query = $db->prepare('INSERT INTO hall SET hall_name = ?, hall_capacity = ?, location_id = ?');

    $add = $query->execute([
        $hall_name, $hall_capacity, $locations['location_id']
    ]);


    if ($add) {
        $query = $db->prepare('SELECT * FROM hall');
        $query->execute();
        $hall_list = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "success";
    } else {
        print_r($query->errorInfo());
    }
}

if (isset($_POST['add_summit'])) {
    $summit_moderator_name = $_POST['summit_moderator'];
    $summit_speaker_id = getSpeakerIdBySpeakerName($speaker_list, $_POST['speaker_name']);
    $summit_topic = $_POST['summit_topic'];
    $summit_info = $_POST['summit_info'];
    $hall_id = getHallIdByHallName($hall_list, $_POST['summit_hall']);
    $summit_start_time = $_POST['summit_start_time'];
    $summit_end_time = $_POST['summit_end_time'];

    $target = "img/moderator-photos/";

    $temp = explode(".", $_FILES["image"]["name"]);
    $summit_moderator_photo = $summit_moderator_name.".".$temp[1];

    move_uploaded_file($_FILES['image']['tmp_name'], $target.$summit_moderator_photo);

    $query = $db->prepare('INSERT INTO summit SET event_day_id = ?, event_day = ?, summit_moderator = ?, summit_topic = ?,
summit_info = ?, summit_moderator_photo = ?, hall_id = ?, summit_start_time = ?, summit_end_time = ?');
    $add = $query->execute([
            $event_day['event_day_id'], $current_day, $summit_moderator_name, $summit_topic, $summit_info, $summit_moderator_photo, $hall_id, $summit_start_time, $summit_end_time
    ]);

    $summit_id = $db->lastInsertId();

    if ($add) {
        $query = $db->prepare('INSERT INTO speaker_speaks_at_summit SET summit_id = ?, speaker_id = ?');
        $query->execute([
                $summit_id, $summit_speaker_id
        ]);
        header('Location: create-event-day.php?event-id='.$event_id.'&day-count='.$event_day_count.'&event-remaining-day='.$event_remaining_day);
    } else {
        print_r($query->errorInfo());
    }
}

function getHallIdByHallName($hall_list, $hall_name) {
    foreach ($hall_list as $hall) {
        if ($hall['hall_name'] == $hall_name) {
            return $hall['hall_id'];
        }
    }
}

function getSpeakerIdBySpeakerName($speaker_list, $speaker_name) {
    foreach ($speaker_list as $speaker) {
        if ($speaker['speaker_name'] == $speaker_name) {
            return $speaker['speaker_id'];
        }
    }
}


?>

<link rel="shortcut icon" type="image/x-icon" href="img/logo/conff.ico" />

<!--Make sure the form has the autocomplete function switched off:-->
<form method="post" autocomplete="off">
    <br>
    <input type="text" name="summit_moderator" placeholder="Moderator Name: " required>
    <br>
    <input type="file" name="image">
    <br>
    <input id="speaker_input" type="text" name="speaker_name" placeholder="Speaker Name: " required>
    <button type="button" id="save_button" data-toggle="modal" data-target="#speaker_modal">Oluştur</button>
    <br>
    <input type="text" name="summit_topic" placeholder="Summit Topic: " required>
    <br>
    <input type="text" name="summit_info" placeholder="Summit Information: " required>
    <br>
    <input type="text" class="timepicker" name="summit_start_time" placeholder="Başlangıç Saati" required>
    <br>
    <input type="text" class="timepicker" name="summit_end_time" placeholder="Bitiş Saati" required>
    <br>
    <input id="hall_input" type="text" name="summit_hall" placeholder="Halls">
    <button type="button" id="save_button" data-toggle="modal" data-target="#hall_modal">Oluştur</button>
    <br>
    <br>
    <input type="submit" name="add_summit">
</form>

    <?php if ($event_remaining_day - 1 == 0): ?>
        <a href="event-detail.php?event-id=<?php echo $event_id ?>">Bitir</a>
    <?php else: ?>
        <a href="create-event-day.php?<?php echo 'event-id='.$event_id.'&day-count='.$event_day_count.'&event-remaining-day='.$next_day?>">Sonraki Günü Doldur</a>
    <?php endif; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!---------------- HALL EKLENEN MODAL    ---------------->
<div class="container">
    <div class="modal fade" id="hall_modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <p><input type="text" name="hall_name" placeholder="Hall name"></p>
                        <p><input type="text" name="hall_capacity" placeholder="Hall capacity"></p>
                        <input type="hidden" name="save_hall" value="1">
                        <p>
                            <button type="submit" class="btn" id="save_hall_button">Save</button>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------- SPEAKER EKLENEN MODAL --------------->
<div class="container">
    <div class="modal fade" id="speaker_modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <p><input type="text" name="speaker_name" placeholder="Speaker name"></p>
                        <p><input type="text" name="speaker_interest" placeholder="Speaker Interest"></p>
                        <p><input type="text" name="speaker_summary" placeholder="Speaker Summary"></p>
                        <input type="hidden" name="save_speaker" value="1">
                        <p>
                            <button type="submit" class="btn" id="save_speaker_button">Save</button>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!----------------- TIMEPICKER CODE --------------->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $('.timepicker').timepicker({
        timeFormat: 'H:mm',
        interval: 60,
        minTime: '9',
        maxTime: '18',
        defaultTime: '9',
        startTime: '9:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
</script>

<!----------------- AUTO COMPLETE TEXT --------------->
<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function (e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var array = [];
    <?php foreach ($hall_list as $hall): ?>
    array.push("<?php echo $hall['hall_name']?>");
    <?php endforeach; ?>

    /*An array containing all the country names in the world:*/
    var speaker_list = [];
    <?php foreach ($speaker_list as $speaker): ?>
    speaker_list.push("<?php echo $speaker['speaker_name']?>");
    <?php endforeach; ?>


    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("hall_input"), array);
    autocomplete(document.getElementById("speaker_input"), speaker_list);
</script>