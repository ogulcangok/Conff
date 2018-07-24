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
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/conff.ico"/>
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
                                    <a href="index-2.html"><img src="img/logo/conff-color.png" alt="ADVENTURES"></a>
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
                                            <li>
                                                <a onclick="dropfunc()" class="dropbtn"><i class="fa fa-user"></i>
                                                    PROFİLİM</a>
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
        <div class="col-md-8 mt10">
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="continue-button btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                SMS AKTİVASYONU
            </button>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 style="z-index: 9999999;" display:block;>
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">SMS AKTİVASYONU</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container" style="text-align:center;">
                                <div class="row" style="margin-top: 40px;">
                                    <div class="col-md-8">
                                        <p>
                                            Telefonunuza gelen kodu giriniz.
                                            <br>
                                            <br>
                                            <!--<label><span class="normal">Doğrulama </span>kodunuz</label><br><br>-->
                                        </p>
                                    </div>
                                </div>
                                <style>
                                    .phone-number input {
                                        padding: 20px;
                                        font-size: 20px;
                                        font-weight: bold;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-1 col-sm-9  col-xs-12">
                                        <div class="form-group phone-number">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" required="required" title="">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" required="required" title="">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" required="required" title="">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" required="required" title="">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" required="required" title="">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <input type="tel" name="phone" class="form-control" value=""
                                                       size="1" maxlength="1" requ ondragover="" ired="required"
                                                       title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 40px;">
                                    <div class="col-md-8">
                                        <a href="#" style="width: 250px; margin: 0 auto;"
                                           class="product-header-container">
                                    <span style="font-size: 60px;" class="fa fa-edit product-header-icon"
                                          aria-hidden="true"></span>
                                            <span class="fnt-arial product-header-text" style="font-weight: normal;">
                                      +90 (545) 212 05 37</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center; padding: 40px;">
                            <button type="button" class="continue-button" data-dismiss="modal"
                                    style="margin-right: 30px;">KODU TEKRAR GÖNDER
                            </button>
                            <button type="button" class="continue-button">DEVAM ET</button>
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
            <ul class="event-list" style="margin:10px;">
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
            <ul class="event-list" style="margin:10px;">
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
