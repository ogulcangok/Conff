<!doctype html>
<html class="no-js" lang="tr">
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet"
          type="text/css">
    <!-- Bootstrap CSS
       ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <br>
        <div class="col-md-7 mt10">
            <div class="brdr">
                <!-- Nav tabs -->
                <div class="col-md-12 hidden-sm hidden-xs">
                    <ul class="event-details-inner-nav " role="tablist">
                        <li role="presentation" class="active"><a href="#personal" aria-controls="personal"
                                                                  onclick="setMainActiveTab('personal')"
                                                                  role="tab" data-toggle="tab">Kişisel Bilgiler</a>
                        </li>
                        <li role="presentation"><a href="#event" onclick="setMainActiveTab('event')"
                                                   aria-controls="event" role="tab"
                                                   data-toggle="tab">Etkinlik Seç</a>
                        </li>
                        <li role="presentation"><a href="#transfer" onclick="setMainActiveTab('transfer')"
                                                   aria-controls="transfer" role="tab"
                                                   data-toggle="tab">Transfer|Konaklama|Yemek</a>
                        </li>
                        <li role="presentation"><a href="#payment" onclick="setMainActiveTab('payment')"
                                                   aria-controls="payment" role="tab"
                                                   data-toggle="tab">Ödeme</a>
                        </li>
                    </ul>
                </div>
                <div class="hidden-lg hidden-md col-sm-12">
                    <ul class="mobile-event-details-inner-nav " role="tablist"
                        style="display:block; text-align:center;">
                        <li role="presentation" class="active" style="margin:10px;">
                            <a href="#personal" aria-controls="personal" onclick="setMainActiveTab('personal')"
                               role="tab" data-toggle="tab" style="color:#444;font-weight: bold;">Kişisel Bilgiler</a>
                        </li>
                        <li role="presentation" style="margin:10px;">
                            <a href="#event" onclick="setMainActiveTab('event')" aria-controls="event" role="tab"
                               data-toggle="tab" style="color:#444;font-weight: bold;">Etkinlik Seç</a></li>
                        <li role="presentation" style="margin:10px;">
                            <a href="#transfer" onclick="setMainActiveTab('transfer')" aria-controls="transfer"
                               role="tab"
                               data-toggle="tab" style="color:#444;font-weight: bold;">Transfer|Konaklama|Yemek</a></li>
                        <li role="presentation" style="margin:10px;">
                            <a href="#payment" onclick="setMainActiveTab('payment')" aria-controls="payment" role="tab"
                               data-toggle="tab" style="color:#444;font-weight: bold;">Ödeme</a></li>
                    </ul>
                </div>
                <br><br>
                <!-- Tab panes -->
                <div class="tab-content" style="padding: 20px;">
                    <div role="tabpanel" class="tab-pane active" id="personal">
                        <form>
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Surname">
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Email">
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Phone">
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Password">
                            <br>
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12" style="display: flex">
                                    <label class="checkbox-container" style="font-size:14px;">TERMS AND CONDITIONAL
                                        <input type="checkbox">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12" style="display: flex">
                                    <button type="submit" class="continue-button  btn-lg btn-block">Devam Et</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="event">
                        <h5 style="text-align: center; font-weight: bold; margin-top: 20px;">ANA ETKİNLİK</h5>
                        <br>
                        <p style="text-align: center">
                            Kayıt tipinizi belirledikten sonra, aşağıdaki etkinliklerden istediğinizi seçebilirsiniz.
                        </p>
                        <br><br>
                        <div class="row pad-bottom-20 brdr-bottom">
                            <div class="col-md-7">
                                <div class="dropdown" style="width: 100%; min-width: 100%;!important;">
                                    <a id="dLabel" role="button" data-toggle="dropdown" class="dropdown-button"
                                       style="color: #444; min-width: 100% !important; width: 100%;"
                                       data-target="#" href="#">
                                        Kayıt Tipi <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a href="#">Some action</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div style="display: flex; flex-direction: row">
                                    <input type="text"
                                           style="flex: 1; margin-right: 0!important; border-top-right-radius: 0!important; border-bottom-right-radius: 0!important; padding-right: 0;"/>
                                    <a href="#" class="red-button"
                                       style="height:43px; display: inline;float: right; margin-left: 0; border-bottom-left-radius: 0; border-top-left-radius: 0;">Ekle</a>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row brdr"
                             style="margin-right: 10px; margin-left: 10px; margin-bottom: 20px; color: #444!important;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <b class="flex-1 text-center brdr-right" style="line-height: 50px;">WORKSHOP
                                            1</b>
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-xs-12 brdr-right"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-2"
                                              style="font-size: 18px;margin-top:10px; margin-bottom:10px;">12.07.2018 |13.00-15.00 <i
                                                    class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-1" style="font-size: 20px; margin-top:10px;">2000 TL</span>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <a href="#" class="red-button  btn-lg btn-block"
                                           style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-20">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Pellentesque gravida euismod eleifend.
                                        Nullam eget placerat nisl. Sed vel massa eget justo facilisis luctus.
                                        Vestibulum at consequat est,
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr"
                             style="margin-right: 10px; margin-left: 10px; margin-bottom: 20px; color: #444!important;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <b class="flex-1 text-center brdr-right" style="line-height: 50px;">WORKSHOP
                                            1</b>
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-xs-12 brdr-right"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-2"
                                              style="font-size: 18px;margin-top:10px; margin-bottom:10px;">12.07.2018 |13.00-15.00 <i
                                                    class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-1" style="font-size: 20px; margin-top:10px;">2000 TL</span>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <a href="#" class="red-button  btn-lg btn-block"
                                           style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-20">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Pellentesque gravida euismod eleifend.
                                        Nullam eget placerat nisl. Sed vel massa eget justo facilisis luctus.
                                        Vestibulum at consequat est,
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr"
                             style="margin-right: 10px; margin-left: 10px; margin-bottom: 20px; color: #444!important;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <b class="flex-1 text-center brdr-right" style="line-height: 50px;">WORKSHOP
                                            1</b>
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-xs-12 brdr-right"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-2"
                                              style="font-size: 18px;margin-top:10px; margin-bottom:10px;">12.07.2018 |13.00-15.00 <i
                                                    class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 5px;">
                                        <span class="text-center flex-1" style="font-size: 20px; margin-top:10px;">2000 TL</span>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-xs-12"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <a href="#" class="red-button  btn-lg btn-block"
                                           style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-20">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Pellentesque gravida euismod eleifend.
                                        Nullam eget placerat nisl. Sed vel massa eget justo facilisis luctus.
                                        Vestibulum at consequat est,
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h5 style="text-align: center; font-weight: bold">**YUKARIDA BELIRTİLEN TÜM FİYATLARA KDV
                            EKLENMELİDİR.
                        </h5>
                        <br><br><br><br>
                        <strong>KAYIT ve KONAKLAMA İPTAL KOŞULLARI</strong> <br>
                        Kongre kayıt ve konaklama iptal talepleri Invictus Turizm ve Organizasyon’a yazılı
                        olarak
                        bildirilmelidir.
                        31 Mayıs 2018 tarihine kadar yapılan iptal taleplerinde banka masrafları ve iptal edilen
                        her oda
                        için 1 gece ödemesi kesildikten sonra iade gerçekleştirilecektir.
                        31 Mayıs 2018’den sonra yapılacak iptallerde herhangi bir iade yapılmayacaktır. En geç
                        28 Eylül
                        2018 tarihine kadar isim değişikliği yapılabilecektir. Bu tarihten sonra yapılacak
                        değişiklikler ile
                        ilgili Türk Kardiyoloji Derneği ve Invictus Turizm sorumluluk kabul etmemektedir.
                        Tüm iadeler kongre sonrasında gerçekleştirilecektir.
                    </div>
                    <div role="tabpanel" class="tab-pane" id="transfer">
                        <br>
                        <br>
                        <span style="text-align: center">
                        Aşağıdaki seçeneklerden transfer, konaklama, yemek ve tur seçeneklerini tercih edebilisiniz.
                        </span>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="row brdr" data-toggle="pinned" style="margin: 10px; color: #444!important;">
                                <div class="col-lg-4 col-md-4 col-sm-4"
                                     style="display: flex; line-height: 50px; padding:0;">
                                    <b style="flex: 2; text-align:center;">DOUBLE TREE HOTEL</b>
                                </div>
                                <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                                    <i style="display: flex; line-height: 50px; font-size: 20px; margin-right: 15px;"
                                       class="fa fa-map-marker pull-right "></i>
                                    <i style="display: flex; line-height: 50px; font-size: 20px; padding-left: 20px; padding-right:20px;"
                                       class="fa fa-file pull-right brdr-left"></i>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-8" style="text-align:center;">
                                 <span style="line-height: 50px; font-size: 20px; color: #fee133">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 </span>
                                </div>
                                <div class="col-lg-2 col-md-3 col-xs-12"
                                     style="display: flex; flex-direction: row; padding: 0;">
                                    <a href="#" class="red-button btn-lg btn-block" data-toggle="dropdown-hotel"
                                       style="margin: 0; height: 50px;">DETAY</a>
                                </div>
                            </div>
                            <div class="row no-display" style="margin:10px;">
                                <div class="col-md-12" style="padding: 0">
                                    <div class="w3-content w3-display-container">
                                        <img class="mySlides" style="width:100%" src="img/otell.png">
                                        <img class="mySlides" style="width:100%" src="img/vodafone.png">
                                        <img class="mySlides" style="width:100%" src="img/turkcell.png">
                                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">
                                            &#10094;
                                        </button>
                                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">
                                            &#10095;
                                        </button>
                                    </div>
                                    <script>
                                        var slideIndex = 1;
                                        showDivs(slideIndex);

                                        function plusDivs(n) {
                                            showDivs(slideIndex += n);
                                        }

                                        function showDivs(n) {
                                            var i;
                                            var x = document.getElementsByClassName("mySlides");
                                            if (n > x.length) {
                                                slideIndex = 1
                                            }
                                            if (n < 1) {
                                                slideIndex = x.length
                                            }
                                            for (i = 0; i < x.length; i++) {
                                                x[i].style.display = "none";
                                            }
                                            x[slideIndex - 1].style.display = "block";
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="row no-display" style="margin:10px;">
                                <div class="col-md-12" style="padding: 25px; color: #707070;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque gravida
                                    euismod
                                    eleifend. Nullam eget placerat nisl. Sed vel massa eget justo facilisis luctus.
                                    Vestibulum at
                                    consequat est, quis interdum massa. Pellentesque convallis, ligula ac laoreet
                                    semper, nibh dui
                                    luctus arcu, at interdum mauris tortor a arcu. Curabitur quis nisl nec ligula
                                    facilisis elementum.
                                    In consectetur tempor mauris, et eleifend turpis cursus ac. Integer consectetur
                                    eros enim,
                                    vitae tristique mi eleifend non.
                                </div>
                            </div>

                            <div class="row no-display" style="padding: 20px; margin:10px; color: #444!important;">
                                <div class="row brdr" style="background-color: #FFF; margin-bottom: 10px;">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="dropdown flex-1" style="font-size: 14px; line-height: 30px;">
                                            <a id="dLabel4" role="button" data-toggle="dropdown" style="color: #444;"
                                               data-target="#" href="#">
                                                Geliş Tarihi ve Saati <br> 13.05.2018 15:00 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <li><a href="#">Some action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="dropdown flex-1" style="font-size: 14px; line-height: 30px;">
                                            <a id="dLabel5" role="button" data-toggle="dropdown" style="color: #444;"
                                               data-target="#" href="#">
                                                Gidiş Tarihi ve Saati<br>13.05.2018 15:00<span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <li><a href="#">Some action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row brdr " style="background-color: #FFF;">
                                    <div class="col-md-4">
                                        <div class="dropdown flex-1 text-left"
                                             style="font-size: 14px; line-height: 45px; width: 120px;">
                                            <a id="dLabel7" role="button" data-toggle="dropdown" class="color-dark"
                                               data-target="#" href="#">
                                                Oda Tipi<span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <li><a href="#">Some action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-6"
                                         style="display: flex; flex-direction: row; padding:0;">
                                        <input type="number" class="search-inputflex-1" placeholder="2000 TL"
                                               style=" margin:0; border: 0; border-radius: 0!important;"/>
                                    </div>
                                    <div class="col-md-3 col-xs-6"
                                         style="display: flex; flex-direction: row; padding: 0;">
                                        <a href="#" class="red-button  btn-lg btn-block"
                                           style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="payment">
                        <div class="row" style="margin: 10px;">
                            <div class="col-md-12">
                                <div class="row brdr-bottom" style="padding: 10px 0px;">
                                    <div class="col-md-10 col-sm-10 col-xs-9">
                                        <b style=" text-align: left;">OE TECHNOLOGY KONFERANSI</b>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <b class="text-center">2000 TL</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pad-20 color-light">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-10  col-sm-10 col-xs-9">
                                                <b style=" text-align: left;">KONAKLAMA: </b> COOL OTEL 1 Kişilik Oda
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-3">
                                                <b style=" text-align: center;">500 TL</b>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-10 c col-sm-10 col-xs-9">
                                                <b style=" text-align: left;">YEMEK: </b> VAR - Gala Yemeği
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-3">
                                                <b style=" text-align: center;">150 TL</b>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-10 col-sm-10 col-xs-9">
                                                <b style=" text-align: left;">TRANSFER: </b> VAR
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-3">
                                                <b style=" text-align: center;">75 TL</b>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-10 col-sm-10 col-xs-9">
                                                <b style=" text-align: left;">TRANSFER: </b> TUR - Abant Turu
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-3">
                                                <b style=" text-align: center;">400 TL</b>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-10 col-sm-10 col-xs-9">
                                                <b style=" text-align: left;">TRANSFER: </b> TUR - Tarih Sanat Turu
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-3">
                                                <b style=" text-align: center;">500 TL</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row " style="padding: 10px 0px;">
                                    <div class="col-md-4 col-sm-4 col-xs-2"></div>
                                    <div class="col-md-2 col-sm-2 col-xs-2" style="text-align: right">
                                        KDV:
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <b style=" text-align: center;">450 TL</b>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2" style="text-align: right">
                                        TOTAL:
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <b style=" text-align: center;">2000 TL</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin:10px;">
                            <div class="col-md-12">
                                <form action="/" class="require-validation" id="payment-form" method="post">
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group required">
                                            <div class="error form-group hide">
                                                <div class="alert-danger alert">
                                                    Please correct the errors and try again.
                                                </div>
                                            </div>
                                            <label class="control-label" style="color: #dd163d; margin: 10px 0px; ">FATURA
                                                BİLGİLERİ</label>
                                            <input class="form-control" size="4" type="text"
                                                   placeholder="İSİM / SOYİSİM">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group card required">
                                            <input autocomplete="off" class="form-control card-number"
                                                   size="20" type="text"
                                                   placeholder="TC KİMLİK NO / PASSAPORT NO">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group card required">
                                            <input autocomplete="off" class="form-control" size="20"
                                                   type="text" placeholder="ADRES">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="ŞEHİR">
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="İLÇE">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="POSTA KODU">
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="ÜLKE">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="KURUM İSMİ">
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding: 0;">
                                            <div class="form-group card required">
                                                <input autocomplete="off"
                                                       class="form-control brdr-right brdr-clear-right " size="20"
                                                       type="text" placeholder="KURUM Vergi No">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row" style="padding: 20px 20px 10px;">
                                            <label class="control-label color-primary"
                                                   style="margin: 10px 0px 0px;">
                                                KREDİ KARTI</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 hidden-xs">
                                                <!-- Nav tabs -->
                                                <ul class="payment-nav-tabs" role="tablist">
                                                    <li role="presentation">
                                                        <a href="active" href="#creditcard" aria-controls="creditcard"
                                                           onclick="setActiveTab('creditcard')" role="tab"
                                                           data-toggle="tab"
                                                           style="padding:15px;">Kredi Kartı </a></li>
                                                    <li role="presentation">
                                                        <a href="#havale" onclick="setActiveTab('havale')"
                                                           aria-controls="havale" role="tab"
                                                           data-toggle="tab" style="padding:15px;">Havale</a></li>
                                                    <li role="presentation">
                                                        <a href="#promosyon" onclick="setActiveTab('promosyon')"
                                                           aria-controls="promosyon" role="tab"
                                                           data-toggle="tab" style="padding:15px;">Promosyon Kodu</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="hidden-lg hidden-md hidden-sm">
                                                <ul class="payment-nav-tabs" role="tablist" style="display:block;">
                                                    <li role="presentation">
                                                        <a href="active" href="#creditcard" aria-controls="creditcard"
                                                           onclick="setActiveTab('creditcard')" role="tab"
                                                           data-toggle="tab"
                                                           style="padding:15px;">Kredi Kartı </a></li>
                                                    <li role="presentation">
                                                        <a href="#havale" onclick="setActiveTab('havale')"
                                                           aria-controls="havale" role="tab"
                                                           data-toggle="tab" style="padding:15px;">Havale</a></li>
                                                    <li role="presentation">
                                                        <a href="#promosyon" onclick="setActiveTab('promosyon')"
                                                           aria-controls="promosyon" role="tab"
                                                           data-toggle="tab" style="padding:15px;">Promosyon Kodu</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="creditcard">
                                                <div class="row" style="padding: 20px; padding-bottom: 10px;">
                                                    <label class="control-label"
                                                           style="color: #dd163d; margin: 10px 0px; margin-bottom: 0px; ">
                                                        ÖDEME BİLGİLERİ</label>
                                                </div>
                                                <div class="form-row">
                                                    <br>
                                                    <div class="col-md-6 " style="padding: 0">
                                                        <div class="form-group expiration required">
                                                            <input class="form-control brdr-right brdr-clear-right "
                                                                   placeholder="KART SAHİBİNİN İSMİ" size="2"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="padding: 0">
                                                        <div class="dropdown brdr text-center brdr-clear-left"
                                                             style="line-height: 43px; height: 43px; font-size: 18px;">
                                                            <a id="dLabel8" role="button" data-toggle="dropdown"
                                                               style="color: #707070;"
                                                               data-target="#" href="#">
                                                                KART TÜRÜ <span class="caret"></span>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu"
                                                                aria-labelledby="dropdownMenu">
                                                                <li><a href="#">Some action</a></li>
                                                                <li><a href="#">Some action</a></li>
                                                                <li><a href="#">Some action</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-group expiration required">
                                                        <input class="form-control " placeholder="KART NUMARASI"
                                                               size="2"
                                                               type="text">
                                                    </div>
                                                    <div class="col-md-6" style="padding: 0;">
                                                        <div class="form-group expiration required">
                                                            <input class="form-control card-expiry-month brdr-right brdr-clear-right "
                                                                   placeholder="SON KULLANMA TARİHİ:" size="2"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="padding: 0;">
                                                        <div class="form-group cvc required">
                                                            <input autocomplete="off"
                                                                   class="form-control card-cvc brdr-clear-left"
                                                                   placeholder="CVC"
                                                                   size="4" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="havale">
                                                <br><br>
                                                <div class="row"
                                                     style="padding: 20px; color: #dd163d;font-weight: bold; text-align: center; padding-bottom: 10px;">
                                                    HAVALE BİLGİLERİ
                                                </div>
                                                <!-- Standar Form -->
                                                <form action="" method="post" enctype="multipart/form-data"
                                                      id="js-upload-form">
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    <div class="upload-btn-wrapper">
                                                                        <div class="upload-btn">
                                                                            Lütfen Dekontunuzu “Artı” ikonuna
                                                                            tıklayarak JPEG yada PNG
                                                                            formatında yükleyiniz. <br>
                                                                            <span style="font-weight: bold; font-size: 60px; line-height: 60px;">+</span>
                                                                        </div>
                                                                        <input type="file" name="files[]"
                                                                               id="js-upload-files" multiple/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row" style="text-align: center">
                                                            Yüklendi: Screenshot 12382
                                                        </div>
                                                        <br>
                                                        <div class="row aligncenter">
                                                            <button type="submit" class="red-button"
                                                                    style="margin: auto 0;"
                                                                    id="js-upload-submit">GÖNDER
                                                            </button>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </form>
                                                <!--&lt;!&ndash; Upload Finished &ndash;&gt;-->
                                                <!--<div class="js-upload-finished">-->
                                                <!--<br><br>-->
                                                <!--<h3>Yüklendi</h3>-->
                                                <!--<div class="list-group">-->
                                                <!--<a href="#"-->
                                                <!--class="list-group-item list-group-item-success"><span-->
                                                <!--class="badge alert-success pull-right">Başarılı</span>image-01.jpg</a>-->
                                                <!--</div>-->
                                                <!--</div>-->
                                                <div class="row" style="text-align: center">
                                                    <strong>CONFF KURUM IBAN</strong> <br>
                                                    <strong>TR 9297 83927 08238 038208 9389</strong>
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="promosyon"
                                                 style="text-align: center">
                                                <br><br>
                                                <div class="row"
                                                     style="padding: 20px; color: #dd163d; font-weight: bold; text-align: center; padding-bottom: 10px;">
                                                    PROMOSYON KODU
                                                </div>
                                                <div class="form-group expiration required"
                                                     style="width: 60%; margin-left: 20%;">
                                                    <input class="form-control card-expiry-month"
                                                           placeholder="" size="2" type="text"><br>
                                                    <button class="btn btn-danger  btn-lg btn-block"> EKLE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-12" style="display: flex">
                                            <label class="checkbox-container" style="font-size:13px;">TERMS AND
                                                CONDITIONAL
                                                <input type="checkbox">
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="display: flex">
                                            <button type="submit" class="continue-button  btn-lg btn-block">TAMAMLA
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!--TRANSFER-->
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 20px;">
                            <h3 style="color: #444; font-weight: bold; font-size: 16px;">TRANSFER</h3>
                        </div>
                    </div>
                    <div class="row brdr"
                         style="background-color: #fafafa; padding: 20px; margin:10px; color: #444!important;">
                        <div class="row brdr" style="background-color: #FFF; margin-bottom: 10px;">
                            <div class="col-md-6 col-xs-12">
                                <div class="dropdown flex-1" style="font-size: 14px; line-height: 30px;">
                                    <a id="dLabel4" role="button" data-toggle="dropdown" style="color: #444;"
                                       data-target="#" href="#">
                                        Geliş Tarihi ve Saati <br> 13.05.2018 15:00 <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a href="#">Some action</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="dropdown flex-1" style="font-size: 14px; line-height: 30px;">
                                    <a id="dLabel5" role="button" data-toggle="dropdown" style="color: #444;"
                                       data-target="#" href="#">
                                        Gidiş Tarihi ve Saati<br>13.05.2018 15:00<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a href="#">Some action</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr " style="background-color: #FFF;">
                            <div class="col-md-4">
                                <div class="dropdown flex-1 text-left" style="font-size: 14px; line-height: 20px; ">
                                    <a id="dLabel7" role="button" data-toggle="dropdown" class="color-dark"
                                       data-target="#" href="#">
                                        ARAÇ TİPİ<br>Mercedes Vito <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a href="#">Some action</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-6" style="display: flex; flex-direction: row; padding:0;">
                                <input type="number" class="search-inputflex-1" placeholder="2000 TL"
                                       style=" margin:0; border: 0; border-radius: 0!important;"/>
                            </div>
                            <div class="col-md-3 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <a href="#" class="red-button  btn-lg btn-block"
                                   style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!--YEMEKLER-->
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 20px;">
                            <h3 style="color: #444; font-weight: bold; font-size: 16px;">YEMEKLER</h3>
                        </div>
                    </div>
                    <div class="row brdr"
                         style="background-color: #fafafa; padding: 20px; margin:10px; color: #444!important;">
                        <div class="row brdr" style="background-color: #FFF;">
                            <div class="col-md-6 col-xs-12" style="display: flex; flex-direction: row; padding: 0;">
                                <span style="flex: 2; line-height: 30px; color: #707070; padding: 5px; padding-left: 10px;">AÇILIŞ KOKTEYLİ</span>
                            </div>
                            <div class="col-md-4 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <input type="number" class="search-input brdr-left flex-1" placeholder="2000 TL"
                                       style="margin:0; border: 0; border-radius: 0!important;"/>
                            </div>
                            <div class="col-md-2 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <a href="#" class="red-button  btn-lg btn-block"
                                   style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row brdr" style="background-color: #FFF;">
                            <div class="col-md-6 col-xs-12" style="display: flex; flex-direction: row; padding: 0;">
                                <span style="flex: 2; line-height: 30px; color: #707070; padding: 5px; padding-left: 10px;">AÇILIŞ KOKTEYLİ</span>
                            </div>
                            <div class="col-md-4 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <input type="number" class=" brdr-left search-input flex-1" placeholder="2000 TL"
                                       style="margin:0; border: 0; border-radius: 0!important;"/>
                            </div>
                            <div class="col-md-2 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <a href="#" class="red-button  btn-lg btn-block"
                                   style="margin: 0; line-height: 20px; height: 43px;">EKLE </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!--TURLAR-->
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 20px;">
                            <h3 style="color: #444; font-weight: bold; font-size: 16px;">TURLAR</h3>
                        </div>
                    </div>
                    <div class="row brdr" style="margin: 10px; color: #444!important;">
                        <div class="row" data-toggle="pinned">
                            <div class="col-md-4 col-xs-12" style="display: flex; flex-direction: row; padding: 0;">
                                <b class="flex-1 text-center" style="line-height: 50px;">ABANT TURU</b>
                            </div>
                            <div class="col-md-2 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <b class="flex-1 text-center" style="line-height: 50px;">13.05.2018</b>
                            </div>
                            <div class="col-md-3 col-xs-6" style="display: flex; flex-direction: row; padding: 0;">
                                <b class="flex-1 text-center brdr-left" style="line-height: 50px;">08.00 - 17.00</b>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <a href="#" class="red-button btn-lg btn-block"
                                   data-toggle="dropdown-hotel"
                                   style="margin: 0; line-height: 30px;">DETAY </a>
                            </div>
                        </div>
                        <div class="row no-display" style="margin:10px;">
                            <div class="col-md-12">
                                <img class="img-responsive" src="img/otell.png" width="%100">
                            </div>
                        </div>
                        <div class="row no-display">
                            <div class="col-md-12" style="padding: 25px; color: #707070;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque gravida
                                euismod
                                eleifend. Nullam eget placerat nisl. Sed vel massa eget justo facilisis luctus.
                                Vestibulum at
                                consequat est, quis interdum massa. Pellentesque convallis, ligula ac laoreet
                                semper, nibh dui
                                luctus arcu, at interdum mauris tortor a arcu. Curabitur quis nisl nec ligula
                                facilisis elementum.
                                In consectetur tempor mauris, et eleifend turpis cursus ac. Integer consectetur
                                eros enim,
                                vitae tristique mi eleifend non.
                            </div>
                        </div>
                        <div class="row no-display" style="margin: 0px;">

                            <div class="col-md-12 col-sm-12 "
                                 style="display: flex; height: 50px; line-height: 50px; padding:0; flex-direction: row; align-items: stretch; justify-items: center">
                                <span style="flex: 1; text-align: center; font-size: 20px;">2000 TL</span>
                                <a href="#" class="red-button" style="line-height: 30px; ">EKLE </a>

                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="row brdr" style="margin: 10px; color: #444!important;">
                        <div class="row" data-toggle="pinned">
                            <div class="col-md-4 col-sm-6 col-xs-12"
                                 style="display: flex; flex-direction: row; padding: 0;">
                                <b class="flex-1 text-center" style="line-height: 50px;">OLİMPOS TURU</b>
                            </div>
                            <div class="col-md-5 col-sm-5 hidden-xs"
                                 style="display: flex; height: 50px; line-height: 50px; padding:0; flex-direction: row; align-items: stretch; justify-items: center">
                                 <span style="flex: 1; text-align: right; font-size: 20px; color: #fee133">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 </span>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <a href="#" class="red-button btn-lg btn-block"
                                   data-toggle="dropdown-hotel"
                                   style="margin: 0; line-height: 30px;">DETAY </a>
                            </div>
                        </div>
                        <div class="row no-display ">
                            <div class="col-md-12"
                                 style="display: flex; padding:20px; flex-direction: row; align-items: stretch; justify-items: center">
                                <p style="color: #707070">Otele not bırakmak için metni buraya
                                    yazabilirsiniz.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h5 style="text-align: center; font-weight: bold">**YUKARIDA BELIRTİLEN TÜM FİYATLARA KDV
                        EKLENMELİDİR.
                    </h5>
                    <br><br><br>
                    <strong style="margin:10px;">KAYIT ve KONAKLAMA İPTAL KOŞULLARI</strong> <br>
                    Kongre kayıt ve konaklama iptal talepleri Invictus Turizm ve Organizasyon’a yazılı
                    olarak
                    bildirilmelidir.
                    31 Mayıs 2018 tarihine kadar yapılan iptal taleplerinde banka masrafları ve iptal edilen
                    her oda
                    için 1 gece ödemesi kesildikten sonra iade gerçekleştirilecektir.
                    31 Mayıs 2018’den sonra yapılacak iptallerde herhangi bir iade yapılmayacaktır. En geç
                    28 Eylül
                    2018 tarihine kadar isim değişikliği yapılabilecektir. Bu tarihten sonra yapılacak
                    değişiklikler ile
                    ilgili Türk Kardiyoloji Derneği ve Invictus Turizm sorumluluk kabul etmemektedir.
                    Tüm iadeler kongre sonrasında gerçekleştirilecektir.


                </div>
            </div>
        </div>
        <div class="col-md-2 mt10" style="padding-left: 0; padding-right: 0;">
            <div class="btm-mrg-40" style="margin:10px;">
                <img src="img/maps.png" width="100%"/>
                <h3 style="padding: 15px; font-weight: bold; color: #FFF; font-size: 16px; background: #dd153c; border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;">
                    NEREDE ?
                </h3>
            </div>
            <div class="brdr btm-mrg-40" style="margin:10px;">
                <h5 style="padding: 10px; text-align: center; font-weight: bold; font-size: 14px; color: #444; border-bottom: 1px solid #ddd;">
                    NEREDE & NE ZAMAN ?
                </h5>
                <ul class="event-list" style="padding: 10px;">
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
                <ul class="event-list" style="padding: 10px">
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
            <div class="brdr btm-mrg-40">
                <h5 style="padding: 10px; text-align: center; font-weight: bold; font-size: 14px; color: #444; border-bottom: 1px solid #ddd;">
                    SEPET
                </h5>
                <ul class="event-list" style="padding: 10px">
                    <li><a href="#"><span class="pull-right"
                                          style="font-weight: bold; font-size: 24px;">-</span>OE Tech Inovation
                            Fair</a>
                    </li>
                    <li><a href="#"><span class="pull-right" style="font-weight: bold; font-size: 24px;">-</span>Workshop
                            1
                        </a>
                    </li>
                    <li><a href="#"><span class="pull-right" style="font-weight: bold; font-size: 24px;">-</span>Workshop
                            1
                        </a>
                    </li>
                    <li><a class="info" href="#" style="text-align: center">Toplam: <span style="font-weight: normal;"> 2500 TL</span></a>
                    </li>
                    <br>
                    <br>
                    <li><a href="#" class="red-button  btn-lg btn-block" style="color: #FFF; font-weight: bold;">SEPETE
                            GİT</a></li>
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
</div>
<div class="red-divider" style="margin-top: 60px;"></div>
<!--Footer Widget Area Start-->
<div class="footer-widget-area footer-widget-three">
    <div class="container">
        <div class="row" style="margin-bottom: 60px;">
            <div class="col-md-12"
                 style="display: flex; flex-direction: row; align-items: center; justify-items: center">
                <h4 style="color:#444; font-size:20px; margin-right: 25px;font-weight: 700;line-height: 16px;">
                    Bizden Haberdar Olmak İçin:
                </h4>
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
<script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
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
<script type="text/javascript">
    function setActiveTab(tab) {
        let attrsArray = [];
        const getChild = $("ul.payment-nav-tabs").children();
        getChild.each(function (i, v) {
            attrsArray.push([($(v).children(0).attr('aria-controls'))])
        });

        attrsArray.forEach(attr => {
            $("a[aria-controls=" + attr + "]").removeClass('active');
        });
        $("a[aria-controls=" + tab + "]").addClass('active');
    }

    function setMainActiveTab(tab) {
        let attrsArray = [];
        const getChild = $("ul.event-details-inner-nav").children();
        getChild.each(function (i, v) {
            attrsArray.push([($(v).children(0).attr('aria-controls'))])
        });

        attrsArray.forEach(attr => {
            $("a[aria-controls=" + attr + "]").removeClass('active');
        });
        $("a[aria-controls=" + tab + "]").addClass('active');
    }

    $(document).ready(function () {
        $("a[data-toggle = 'dropdown-hotel']").click(function (event) {
            event.preventDefault();
            $(this).parent().parent().parent().children().not("div[data-toggle = 'pinned']").toggleClass('no-display');
        });
    });


</script>
</body>
</html>
