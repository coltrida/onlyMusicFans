// This is the custom javascript file

$(window).on("load", function() {
    "use strict";
    // === Page Load Animation ===
    $("#preloaderTL").delay(400).fadeOut("slow");

});// END LOAD

jQuery(document).ready(function($) {
    "use strict";

    // === Header Menu Button ===
    $('#menu-button').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('close-icon');
        $('#main-nav').toggleClass('fade');
        // player toggle
        $('#player-button').removeClass('close-icon');
        $('.jp-audio').removeClass('fade');
        $('.jp-jplayer').removeClass('img-fade');
        // search toggle
        $('#search-button').removeClass('close-icon');
        $('#search-nav').removeClass('fade');
    });
    $('#main-nav').on('click',function(){
        $('#menu-button').removeClass('close-icon');
        $('#main-nav').removeClass('fade');
    });

    // === Header Player Button ===
    $('#player-button').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('close-icon');
        $('.jp-audio').toggleClass('fade');
        $('.jp-jplayer').toggleClass('img-fade');
        // search toggle
        $('#search-button').removeClass('close-icon');
        $('#search-nav').removeClass('fade');
        // menu toggle
        $('#menu-button').removeClass('close-icon');
        $('#main-nav').removeClass('fade');
    });

    // === Header Search Button ===
    $('#search-button').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('close-icon');
        $('#search-nav').toggleClass('fade');
        // menu toggle
        $('#menu-button').removeClass('close-icon');
        $('#main-nav').removeClass('fade');
        // player toggle
        $('#player-button').removeClass('close-icon');
        $('.jp-audio').removeClass('fade');
        $('.jp-jplayer').removeClass('img-fade');
    });
    $('#search-nav button').on('click',function(){
        $('#search-button').removeClass('close-icon');
        $('#search-nav').removeClass('fade');
    });

   // Open Close PlayList
    $('#playlist-toggle').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('close-icon');
        $('#jp_container_1').find(".jp-playlist").fadeToggle(100);
    });

   // === Sidebar Instagram Widget ===
    var feedSidebar = new Instafeed({
        get: 'user',
        userId: 2270734710, // your user id
        accessToken: '2270734710.38c1284.f5b72cce5cc54bbc8dbacb7d3436e1ce', // your access token
        sortBy: 'most-liked',
        template: '<li><a href="{{link}}" target="_blank"><img class="img-responsive" src="{{image}}" /></a></li>',
        target: 'instagram-sidebar-widget',
        limit: 9,
        resolution: 'low_resolution'
    });
    if ($('#instagram-sidebar-widget').length>0) {
        feedSidebar.run();
    }

    // === Footer Instagram Slider ===
    var feedFooter = new Instafeed({
        get: 'user',
        userId: 2270734710, // your user id
        accessToken: '2270734710.38c1284.f5b72cce5cc54bbc8dbacb7d3436e1ce', // your access token
        sortBy: 'most-liked',
        template: '<div><a href="{{link}}" target="_blank"><img class="img-responsive" src="{{image}}" /></a></div>',
        target: 'instagram-carousel',
        limit: 9,
        resolution: 'low_resolution',
        after: function () {
            $('#instagram-carousel').owlCarousel({
                items: 6,
                navigation: false,
                pagination: false,
                autoPlay: 4000
            });
        }
    });
    feedFooter.run();

    // === Home Slider ===
    $('#home-slider').owlCarousel({
        addClassActive: true,
        items: 1,
        navigation: false,
        dots: false,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        autoPlay: 4000, // time each slide is displayed
        transitionStyle: "fadeUp",
        //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        dragBeforeAnimFinish: false,
        mouseDrag: false,

        beforeMove: function(){
        // BEFORE going to the next slide (hide captions)
        $('.owl-item').find('.text-container').removeClass('activated');
        },
        afterMove: function(){
            // AFTER going to next slide (show captions)
            setTimeout(function(){
               $('.owl-item.active').find('.text-container').addClass('activated');
            }, 600);
        }
    });

    // === Countdown track.html config ===
    if ($('#countdown-2').length>0) {
        $("#countdown-2").countdown({
            date: "12 november 2016 12:00:00", // Edit this line
            format: "on"
        },
        function() {
          // This will run when the countdown ends
        });
    }

    // === Responsive Videos ===
    $(".embed-video").fitVids();

    // ScrollTo annimation
    if ($('.scrollTo').length>0) {
        $('.scrollTo').on('click',function (e) {
            e.preventDefault();
            var target = this.hash,
            $target = $(target);
            $('body, html').stop().animate({
                'scrollTop': $(target).offset().top-0
            }, 1000, 'swing',
            function() {
                window.location.hash = target;
            });
        }); // End Click
    }

    // Extend Event Info
    $(".event").find(".open-icon").on('click', function() {
        var $thisPrev = $(this).prev();
        $(".event").find(".info-wrapper").not($thisPrev).slideUp("fast");
        $(".event").find(".open-icon").not(this).removeClass("close-icon");
        $(this).prev().slideToggle("slow");
        $(this).toggleClass("close-icon");
    });//End Click

    // == Back to top Button ===
    $(window).scroll(function(){
        if($(document).scrollTop() > 600) {
            $('.back-to-top').css({bottom:"-1px"});
        }
        else {
           $('.back-to-top').css({bottom:"-40px"});
        }
    });
    $('.back-to-top').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

    // === Form Validation ===
    // Single Post Form
    $('#comment-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        }, //end rules
        messages: {
            email: {
                required: "Please type a e-mail address.",
                email: "This is not a valid email address."
            }
        }
    });
    // Contact Homepage Form
    $('#contact-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        }, //end rules
        messages: {
            email: {
                required: "Please type a e-mail address.",
                email: "This is not a valid email address."
            }
        }
    });// end validate

});// END READY



// ===========================================================
// ======================== Switcher =========================
// ===========================================================

/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * Create a cookie with the given name and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String name The name of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given name.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String name The name of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

// === Custom settings ===
$(document).ready(function() {
    $('head').append('<link id="link" rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">');
    $('body').prepend('<div id="style-switcher-container"><ul id="style-switcher"><li><a href="#" id="assets/css/style.css" style="background: #ed145b"></a></li><li><a href="#" id="assets/css/style-yellow.css" style="background: #ffb400"></a></li><li><a href="#" id="assets/css/style-green.css" style="background: #15aca3"></a></li><li class="dark-style"><a href="#" id="assets/css/style-dark.css">Dark Style</a></li></ul><ul class="switcher-pages"><li>PAGES</li><li><a href="header-2.html">Header Bar 2</a></li><li><a href="albums.html">Albums</a></li><li><a href="album-single.html">Album Single</a></li><li><a href="blog-single.html">Blog Single</a></li><li><a href="blog.html">Blog</a></li><li><a href="events.html">Events</a></li><li><a href="video-gallery.html">Video Gallery</a></li></ul></div>');
    // ========== CSS ==========
    $('#style-switcher-container').css({
        "position": "fixed",
        "width": "120px",
        "height": "150px",
        "z-index": "15000",
        "left": "-120px",
        "top": "95px",
        "padding": "0",
        "background": "none"
    });
    $('#style-switcher').css({
        "display": "block",
        "position": "relative",
        "list-style": "none",
        "list-style-type": "none",
        "width": "120px",
        "height": "70px",
        "background": "#333333",
        "padding": "10px 10px 5px 10px",
        "margin": "0"
    });
    $('#style-switcher li').css({
        "display": "block",
        "float": "left",
        "padding": "2px",
        "width": "33px",
        "height": "33px"
    });
    $('#style-switcher li.dark-style').css({
        "display": "block",
        "float": "left",
        "padding": "5px 0 0",
        "width": "99px",
        "height": "22px"
    });
    $('#style-switcher li a').css({
        "display": "block",
        "width": "29px",
        "height": "29px"
    });
    $('#style-switcher li.dark-style a').css({
        "display": "block",
        "height": "22px",
        "width": "99px",
        "font-family": "Open Sans",
        "font-weight": "300",
        "font-size": "12px",
        "line-height": "22px",
        "color": "#fff",
        "padding": "0",
        "text-decoration": "none",
        "text-align": "center",
        "background": "#474747"

    });
    $("#style-switcher li.dark-style a").on('mouseenter', function() {
        $(this).css({"background": "#666666"});
    });
    $("#style-switcher li.dark-style a").on('mouseleave', function() {
        $(this).css({"background": "#474747"});
    });
    $('#style-switcher-container .switcher-toggle').css({
        "position": "absolute",
        "top": "0",
        "right": "-29",
        "display": "block",
        "width": "29px",
        "height": "29px",
        "background": "#333333",
        "margin-left": "120px",
        "margin-top": "12px",
        "border-bottom-right-radius": "3px",
        "border-top-right-radius": "3px"
    });
    $('#style-switcher-container .switcher-toggle i').css({
        "color": "#fff",
        "font-size": "15px",
        "line-height": "30px",
        "width": "30px",
        "cursor": "pointer",
        "text-align": "center"
    });

    $('.switcher-pages').css({
        "display": "block",
        "position": "relative",
        "list-style": "none",
        "list-style-type": "none",
        "width": "120px",
        "background": "#333333",
        "padding": "1px 10px 10px 10px",
        "margin": "0",
        "border-bottom-right-radius": "3px"
    });
    $('.switcher-pages li').css({
        "display": "block",
        "width": "100%",
        "float": "none",
        "font-family": "Open Sans",
        "font-weight": "400",
        "font-size": "16px",
        "line-height": "16px",
        "color": "#fff",
        "margin-top": "5px",
        "text-align": "center"
    });
    $('.switcher-pages li a').css({
        "display": "block",
        "font-family": "Open Sans",
        "font-weight": "300",
        "display": "block",
        "font-size": "12px",
        "line-height": "12px",
        "color": "#fff",
        "padding": "5px 0",
        "text-decoration": "none",
        "background": "#474747"
    });
    $(".switcher-pages li a").on('mouseenter', function() {
        $(this).css({"background": "#666666"});
    });
    $(".switcher-pages li a").on('mouseleave', function() {
        $(this).css({"background": "#474747"});
    });
});


$(document).ready(function() {
    "use strict";
    if($.cookie("theartist1.2.2")) {
        $("link#link").attr("href",$.cookie("theartist1.2.2"));
    }
    $("#style-switcher li a").click(function() {
        $("link#link").attr("href",$(this).attr('id'));
        $.cookie("theartist1.2.2",$(this).attr('id'), { path: '/'});
        return false;
    });
    // show-hide color pallete
    $('#style-switcher-container span.switcher-toggle').click(function(e){
        e.preventDefault();
        var div = $('#style-switcher-container');
        console.log(div.css('left'));
        if (div.css('left') === '-120px') {
            $('#style-switcher-container').animate({
                left: '0px'
            });
        } else {
            $('#style-switcher-container').animate({
                left: '-120px'
            });
        }
    })
});
