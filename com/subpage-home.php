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