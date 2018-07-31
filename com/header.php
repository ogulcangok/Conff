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