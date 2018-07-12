<?php
    include 'main-register.php';
    require 'event-operations.php';

    $limit = 5;
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
?>


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Conff | Homepage</title>
      <meta name="description" content="">
      <meta name="viewport" c
      woontent="width=device-width, initial-scale=1">
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
            float: right!important;
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
                                <div class="profilemenu" id="test">
                                    <nav>
                                        <ul id="nav" class="header-nav">
                                            <li><a href="login.php"><i class="fa fa-mail-reply"></i> GİRİŞ YAP </a></li>
                                            <li><a href="login.php"><i class="fa fa-mail-reply"></i> KAYIT OL </a></li>
                                            <li><i class="fa fa-bell" style="padding-left: 50px;font-size: 25px;"></i></li>
                                        </ul>
                                    </nav>
                                </div>
                                <script>
                                    function dropfunc() {
                                        document.getElementById("profileDropdown").classList.toggle("show");
                                    }
                                    window.onclick = function(event) {
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
                      <div class="col-md-2.6 col-sm-4 col-xs-12"  style="display: flex;  margin: 0px; height: 100px; padding: 0px; flex-direction: row; justify-items: center; justify-content: center">
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
      <div class="container hidden-sm hidden-xs">
         <div class="row row-md-6">
            <div class="header-menu-item-container">
                <a href="index.php?pageNumber=1&category=All" class="header-menu-item the-most-left <?php echo $category == 'All' ? 'active' : '' ?>">All</a>
                <?php
                //echo '<a ' . ($i == $page ? 'class="active"' : '') . ' href="index.php?pageNumber='. $i .'&category='. $category .'">'. $i . '</a>';
                foreach($event_categories as $event_category){
                    echo '<a  href="index.php?pageNumber=1&category='. $event_category['category'].'" 
                    class="header-menu-item '.($event_category['category'] == $category ? 'active' : '').' ">'. $event_category['category'] . '</a>';
                }
                ?>

            </div>
         </div>
         <div class="row row-sm-6" style="border-top: 1px solid #bbb; border-bottom: 1px solid #bbb;">

         </div>
       </div>
       <br>
       <br>
       <div class="container hidden-lg hidden-md">
          <div class="row row-sm-12 row-sx-12">
             <div class="mobile-header-menu-item-container">
               <select  id="mobile-select">
                 <ul>
                   <span class="fa fa-dropdown product-details-icon"
                       aria-hidden="true"></span>
                  <option value"">BUSINESS</option>
                  <option value"">FOOD</option>
                  <option value"">NETWORKING</option>
                  <option value"">HEALTH</a></li>
                  <option value"">COMMUNICATION</a></li>
                  <option value"">DESIGN</a></li>
                  <option value"">INTERIOR ART</a></li>
                  <option value"">FOOD</a></li>
                  <option value"">BUSINESS</a></li>
                  <option value"">COMMUNICATION</a></li>
                  <option value"" selected>TECHNOLOGY</a></li>
                  <option value"">HEALTH</a></li>
                  <option value"">INTERIOR ART</a></li>
                  <option value"">DESIGN</a></li>
                </ul>
              </select>
            </div>
          </div>
        </div>

      <div class="container container-pad" style="margin-bottom: 0px; padding-bottom: 0px; margin-top: 40px;">
         <div class="row">
            <div class="col-sm-6">
               <h2 style="color: #444"><b>CATEGORY:</b> <?php echo $category ?></h2>
            </div>
            <div class="col-sm-6" style="display: flex; flex-direction: row; justify-items: center; align-items: center">
               <input type="text" class="brdr search-input"
                  placeholder="Aramak istediğiniz kelimeyi giriniz.">
               <span class="glyphicon glyphicon-search"
                  style="margin-left:20px;font-size: 30px;"
                  aria-hidden="true"></span>
            </div>
         </div>
      </div>
      <div class="container container-pad" id="property-listings">
         <div class="row">
            <div class="col-sm-6">
               <!-- Left Div-->
                <?php readEvent('left', $firstEventOfPage, $limit, $category); ?>
            </div>
            <div class="col-sm-6">
               <!-- Right Div-->
                <?php readEvent('right', $firstEventOfPage, $limit, $category); ?>
            </div>
            <!-- End Col -->
         </div>
         <!-- End row -->


         <!-- End row -->
      </div>

      <div class="pagination" style="text-align:center;">
          <a href="#">&laquo;</a>
          <?php for ($i = 1; $i<=$pageCount; $i++) {
              echo '<a ' . ($i == $page ? 'class="active"' : '') . ' href="index.php?pageNumber='. $i .'&category='. $category .'">'. $i . '</a>';
          }
          ?>
          <a href="#">&raquo;</a>
      </div>
      <br>
      <br>
      <div class="red-divider"></div>
      <!--Partner Area Start-->
      <div class="partner-area partner-three-area section-padding" style="padding-top: 30px;">
         <div class="container">
            <div class="row" style=" margin-bottom: 40px;">
               <div class="col-md-12">
                  <h3 style="text-align: center; font-weight: bold; color: #444">PARTNERLER</h3>
               </div>
            </div>
            <div class="row">
               <div class="partner-carousel carousel-style-two">
                  <div class="col-md-3">
                     <a href="#"><img src="img/brand/1.jpg" alt=""></a>
                  </div>
                  <div class="col-md-3">
                     <a href="#"><img src="img/brand/2.jpg" alt=""></a>
                  </div>
                  <div class="col-md-3">
                     <a href="#"><img src="img/brand/3.jpg" alt=""></a>
                  </div>
                  <div class="col-md-3">
                     <a href="#"><img src="img/brand/4.jpg" alt=""></a>
                  </div>
                  <div class="col-md-3">
                     <a href="#"><img src="img/brand/1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End of Partner Area-->
      <div class="red-divider"></div>
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


<script>
    var logged = "<?php echo $_SESSION['logged']; ?>";
    var user_name = "<?php echo $_SESSION['user_name']; ?>";
    if (logged) {
        var element = document.getElementById("test");
        element.innerHTML = "<nav>\n" +
            "                                        <ul id=\"nav\" class=\"header-nav\">\n" +
            "                                            <li><a onclick=\"dropfunc()\" class=\"dropbtn\"><i  class=\"fa fa-user\"></i> PROFİLİM</a>\n" +
            "                                                <div id=\"profileDropdown\" class=\"dropdown-content\">\n" +
            "                                                    <a href=\"#\">" + user_name +  "  </a>\n" +
            "                                                    <a href=\"#\">Link 2</a>\n" +
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
            "                                            <li><a href=\"login.php\"><i class=\"fa fa-mail-reply\"></i> KAYIT OL</a></li>\n" +
            "                                            <li><i class=\"fa fa-bell\" style=\"padding-left: 50px;font-size: 25px;\"></i></li>\n" +
            "                                        </ul>\n" +
            "                                    </nav>"
    }
</script>
</html>
