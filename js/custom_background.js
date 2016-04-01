jQuery(document).ready(function($) {
    'use strict';
        $('.hero-carousel').css('height', $(window).height()*0.35); //set height 30% of the window
        $('.main-hero').css('height', $(window).height()*0.35); //set height 30% of the window      
        $('#advertise-back-stretch').css('height', 'auto'); //advertise page should be auto
        $("#hero-carousel-korea").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2015/12/korea-banner.jpg'
        ]); 
        $("#hero-carousel-singapore").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/singapore-banner.jpg'
        ]); 
        $("#hero-carousel-europe").backstretch([
            'http://magdev.tripzilla.com/wp-content/uploads/2016/01/europe-banner.jpg'
        ]);
        $("#hero-carousel-thailand").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/thailand-banner.jpg'
        ]); 
        $("#hero-carousel-australia").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/australia-banner.jpg'
        ]); 
        $("#hero-carousel-malaysia").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/malaysia-banner.jpg'
        ]);
        $("#hero-carousel-japan").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/japan-banner.jpg'
        ]);
        $("#hero-carousel-indonesia").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/indonesia-banner-1.jpg'
        ]); 
        $("#hero-carousel-cruise").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/cruises_and_land_journeys.jpg'
        ]);
        $("#hero-carousel-family").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/family_and_kids.jpg'
        ]);
        $("#hero-carousel-island").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2015/12/island_and_beaches.jpg'
        ]);  
        $("#hero-carousel-luxury").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/01/luxury_and_high_end.jpg'
        ]); 
        $("#hero-carousel-shopping").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2015/12/shopping_and_eating.jpg'
        ]);
        $("#hero-carousel-sports").backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2016/03/sports_new_banner.jpg'
        ]);
        $('#advertise-back-stretch').backstretch([
            'http://magazine.tripzilla.com/wp-content/uploads/2015/12/Pic2.jpg'
        ]);                     
    });