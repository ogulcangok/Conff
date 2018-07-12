(function ($) {
 "use strict";
    
/*----------------------------
    wow js active
------------------------------ */
    new WOW().init();
    
/*----------------------------
    jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
    Best Sell Owl Carousel
------------------------------ */  
    $(".best-sell-slider").owlCarousel({
        autoPlay: false, 
        slideSpeed:2000,
        pagination:false,
        navigation:true,	  
        items : 2,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1],
    });
/*----------------------------
    Partner Owl Carousel
------------------------------ */  
    $(".partner-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:2000,
        pagination:false,
        navigation:true,	  
        items : 4,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1],
    });
    
/*----------------------------
    Price Slider Activate
------------------------------ */  
    $( "#slider-range" ).slider({
        range: true,
        min: 110,
        max: 300,
        values: [ 120, 240 ],
        slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) );  
    
/*--------------------------
    ScrollUp
---------------------------- */	
    $.scrollUp({
        scrollName: 'scrollUp',
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade',
        animationInSpeed: 2000
    });	   
 
/*--------------------------
    Counter Up
---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });
    
/*------------------------------------
    Tooltip
-------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip(); 
    
})(jQuery); 




/* ###########################  */ 


+ function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    };

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault();

        startUpload(uploadFiles)
    });

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    };

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    };

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

}(jQuery);