<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 17.07.2018
 * Time: 11:11
 */

require 'connect.php';
require 'session.php';

$query = $db->prepare('SELECT * FROM event_categories');
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);


$query = $db->prepare('SELECT * FROM location');
$query->execute();
$locations = $query->fetchAll(PDO::FETCH_ASSOC);

function getLocationIdByLocationName($locations, $location_name) {
    foreach ($locations as $location) {
        if ($location['location_name'] == $location_name) {
            return $location['location_id'];
        }
    }
}

if(isset($_POST['save_location'])){
    $location_name = $_POST['location_name'];
    $location_capacity = $_POST['location_capacity'];
    $location_address = $_POST['location_address'];

    $query = $db->prepare('INSERT INTO location SET location_name = ? , location_address = ?, location_capacity = ?');

    $add = $query ->execute([
            $location_name,$location_address,$location_capacity
    ]);


    if ($add) {
        $query = $db->prepare('SELECT * FROM location');
        $query->execute();
        $locations = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "success";
    } else {
        print_r($query->errorInfo());
    }
}

if (isset($_POST['next'])) {
    $event_title = $_POST['event_title'];
    $event_description = $_POST['event_description'];
    $event_category = $_POST['event_category'];
    $event_hashtag = $_POST['event_hashtag'];
    $event_capacity = $_POST['event_capacity'];
    $event_location_id = getLocationIdByLocationName($locations, $_POST['event_location']);
    $event_event_reg_start_date = $_POST['event_reg_start_date'];
    $event_event_reg_end_date = $_POST['event_reg_end_date'];
    $event_start_date = $_POST['event_start_date'];
    $event_end_date = $_POST['event_end_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $is_private = $_POST['is_private'];


    $target = "img/event-photos/";

    $temp = explode(".", $_FILES["image"]["name"]);
    $event_photo = $event_title.".".$temp[1];

    move_uploaded_file($_FILES['image']['tmp_name'], $target.$event_photo);


    $query = $db->prepare('INSERT INTO event SET event_location_id = 8, event_category = ?, event_title = ?, event_description = ?,
event_photo = ?, event_hashtag = ?, event_is_private = ?, event_capacity = ?, event_firm_id = 1, event_start_date = ?,
event_end_date = ?, event_reg_start_date = ?,event_reg_end_date = ?, event_start_time = ?, event_end_time = ?');


    $add = $query->execute([
            $event_category, $event_title, $event_description, $event_photo, $event_hashtag, $is_private, $event_capacity,
        $event_start_date, $event_end_date, $event_event_reg_start_date, $event_event_reg_end_date, $start_time, $end_time
    ]);

    $event_id = $db->lastInsertId();

    $earlier = new DateTime($event_start_date);
    $later = new DateTime($event_end_date);

    $total_event_day = $later->diff($earlier)->format("%a");
    $total_event_day += 1;

    if ($add) {
        for ($i = 0; $i < $total_event_day; $i++) {
            $current_day = $i + 1;
            $query = $db->prepare('INSERT INTO event_day SET event_id = ?, event_day_topic = ?, event_day = ?, event_day_hall_count = ?');
            $query->execute([
                $event_id, "Temp Topic", $current_day, 3
            ]);
            $event_day_id = $db->lastInsertId();
        }


        header('Location: create-event-day.php?event-id=' . $event_id . '&day-count='. $total_event_day .'&event-remaining-day='.$total_event_day);
    } else {
        print_r($query->errorInfo());
    }



}


?>


<?php if ($_SESSION['user_role'] == 2): ?>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/conff.ico" />
    <form method="post" enctype="multipart/form-data">
        <br>
        <input type="text" class="" name="event_title" placeholder="Event Başlığı" required>
        <br>
        <textarea name="event_description" placeholder="Event Açıklaması" required></textarea>
        <br>
        <select name="event_category">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="text" class="" name="event_hashtag" placeholder="Hashtag" required>
        <br>
        <input type="text" class="" name="event_capacity" placeholder="Kapasite" required>
        <br>
        <input id="myInput" type="text" name="event_location" placeholder="Lokasyon">

        <button type="button" id="save_button" data-toggle="modal" data-target="#myModal">Oluştur </button>
        <br>
        <input type="text" class="tarih" name="event_start_date" placeholder="Başlangıç Tarihi" required>
        <br>
        <input type="text" class="tarih" name="event_end_date" placeholder="Bitiş Tarihi" required>
        <br>
        <input type="text" class="tarih" name="event_reg_start_date" placeholder="Kayıt Başlangıç Tarihi" required>
        <br>
        <input type="text" class="tarih" name="event_reg_end_date" placeholder="Kayıt Bitiş Tarihi" required>
        <br>
        <input type="text" class="timepicker" name="start_time" placeholder="Başlangıç Saati" required>
        <br>
        <input type="text" class="timepicker" name="end_time" placeholder="Bitiş Saati" required>
        <br>
        <input type="radio" name="is_private" value="1">Private
        <input type="radio" name="is_private" value="0">Public<br>

        <input type="file" name="image">
        <br>


        <input type="submit" name="next" value="Next">

    </form>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <p><input type = "text" name="location_name" placeholder="Location name">  </p>
                            <p><input type = "text" name="location_address" placeholder="Location address">  </p>
                            <p><input type = "text" name="location_capacity" placeholder="Location capacity">  </p>
                            <input type="hidden" name="save_location" value="1">
                            <p><button type="submit" class="btn" id="save_button" >Save</button></p>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script >
        $("#save_button").on("click", function(e) {
            e.preventDefault();

            // the rest of your code ...
        });
    </script>

    <script>
        $('.tarih').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    </script>

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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
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
                        b.addEventListener("click", function(e) {
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
            inp.addEventListener("keydown", function(e) {
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
        <?php foreach ($locations as $location): ?>
        array.push("<?php echo $location['location_name']?>");
        <?php endforeach; ?>


        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("myInput"), array);
    </script>

<?php else: ?>

<?php header('Location: index.php'); ?>

<?php endif; ?>