<?php

    session_start();

    require 'config.php';
    require 'core.php';
    require 'connect.php';
    // require 'session.php';
    require 'event-operations.php';

    $core=new core;
    $core->db_connect();



    $limit = 10;
    $page = isset($_GET['pageNumber']) && is_numeric($_GET['pageNumber']) ? $_GET['pageNumber'] : 1;
    $category = isset($_GET['category']) ? $_GET['category'] : 'All';

    $query = $db->prepare('SELECT * FROM event_categories WHERE category = ?');
    $query->execute([
        $category
    ]);
    $categoryFromDb = $query->fetch(PDO::FETCH_ASSOC);

    if ($category == 'All') {
        $eventCount = $db->query('SELECT COUNT(*) as eventCount FROM event')->fetch(PDO::FETCH_ASSOC)['eventCount'];
    } else {
        $eventCount = $db->query('SELECT COUNT(*) as eventCount FROM event WHERE event_category= "' . $categoryFromDb['category_id'] .'"')->fetch(PDO::FETCH_ASSOC)['eventCount'];
    }
    //all category id
    $event_categories = $db -> query('Select * From event_categories') -> fetchAll(PDO::FETCH_ASSOC);

    $pageCount = ceil($eventCount / $limit);
    $firstEventOfPage = ($page * $limit) - $limit;


	$core->db_connect();
	$core->http_get_default=array("");

	$core->http_header_add_css(HTTP_SERVER.'css/bootstrap.min.css');
	$core->http_header_add_css(HTTP_SERVER.'css/font-awesome.min.css');
	$core->http_header_add_css(HTTP_SERVER.'css/owl.carousel.css');
	$core->http_header_add_css(HTTP_SERVER.'css/jquery-ui.css');
	$core->http_header_add_css(HTTP_SERVER.'css/meanmenu.min.css');
	$core->http_header_add_css(HTTP_SERVER.'css/animate.css');
	$core->http_header_add_css(HTTP_SERVER.'lib/nivo-slider/css/nivo-slider.css');
	$core->http_header_add_css(HTTP_SERVER.'lib/nivo-slider/css/preview.css');
	$core->http_header_add_css(HTTP_SERVER.'style.css');
	$core->http_header_add_css(HTTP_SERVER.'css/responsive.css');
    $core->http_header_add_js(HTTP_SERVER.'js/vendor/modernizr-2.8.3.min.js');
    
    echo $core->http_header();
    
	echo '<body>';
		require 'com/subpage.php';			
    echo '</body>';
    
    echo '
    <script>
    var logged = "<?php echo $_SESSION[\'logged\']; ?>";
    var user_name = "<?php echo $_SESSION[\'user_name\']; ?>";
    var user_role = "<?php echo $_SESSION[\'user_role\']; ?>";
    if (logged) {
        var element = document.getElementById("test");
        element.innerHTML = "<nav>\n" +
            "                                        <ul id=\"nav\" class=\"header-nav\">\n" +
            "                                            <li><a onclick=\"dropfunc()\" class=\"dropbtn\"><i  class=\"fa fa-user\"></i> PROFİLİM</a>\n" +
            "                                                <div id=\"profileDropdown\" class=\"dropdown-content\">\n" +
            "                                                    <a href=\"#\">" + user_name +  "</a>\n" +
            "                                                    <a href=\"create-event.php\">Event Oluştur</a>\n" +
            "                                                    <a href=\"logout.php\">Logout</a>\n" +
            "                                                </div></li>\n" +
            "                                            <li><a href=\"login.php\"><i class=\"fa fa-mail-reply\"></i> MESAJLAR</a></li>\n" +
            "                                            <li><i class=\"fa fa-bell\" style=\"padding-left: 50px;font-size: 25px;\"></i></li>\n" +
            "                                        </ul>\n" +
            "                                    </nav>"
    } else {
        var element = document.getElementById("test");
        element.innerHTML = "<nav>\n" +
            "                                        <ul id=\"nav\" class=\"header-nav\">\n" +
            "                                            <li><a href=\"login.php\"><i class=\"fa fa-mail-reply\"></i>Giriş/Kayıt</a></li>\n" +
            "                                            <li><i class=\"fa fa-bell\" style=\"padding-left: 50px;font-size: 25px;\"></i></li>\n" +
            "                                        </ul>\n" +
            "                                    </nav>"
    }
</script>
    ';

	echo '</html>';

?>



