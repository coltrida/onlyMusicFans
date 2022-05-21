<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OnlyMusicFans</title>
    <link rel="shortcut icon" type="favicon/png" href="{{asset('assets/img/elements/favicon.png')}}"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/owl-carousel/owl.transitions.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lightGallery/css/lightgallery.css')}}" />
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".nav-container" data-offset="80">

<!-- Preloader -->
<div id="preloaderTL">
    <div class="bars-animation">
        <div class="bar one"></div>
        <div class="bar two"></div>
        <div class="bar three"></div>
        <div class="bar four"></div>
        <div class="bar five"></div>
    </div>
</div>

@include('partials.navBar')

@yield('content')

<!-- Footer -->
<footer>
    <div class="instagram-footer">
        <div id="instagram-carousel" class="owl-carousel clearfix">
        </div>
        <a class="follow" target="_blank" href="https://instagram.com/futurethemes2015/">Follow me on Instragam <br> <span class="user-ins">@futurethemes2015</span></a>
    </div><!-- .instagram-footer -->

    <div class="info-footer">
        <h1>Only <span class="colored">Music Fans</span></h1>

        <ul class="social-footer">
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-soundcloud"></a></li>
            <li><a href="#" class="fa fa-youtube-play"></a></li>
            <li><a href="#" class="fa fa-vimeo"></a></li>
            <li><a href="#" class="fa fa-google-plus"></a></li>
        </ul>
    </div>

    <div class="copyright-footer">
        <p>Copyright © 2022 ColtriCat / <a href="#">@ColtriCat</a></p>
    </div>
</footer>

<!-- Go to top button -->
<div class="back-to-top fa fa-angle-up"></div>


<!-- ======== JavaScript ======== -->
<script type="text/javascript" src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lightGallery/js/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/ajax.gallery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/instafeed.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Custom JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/js.js')}}"></script>
<!-- jPlayer Files & JavaScript -->
<script type="text/javascript" src="{{asset('assets/jplayer/jplayer/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/jplayer/add-on/jplayer.playlist.js')}}"></script>
<!-- MailChimp Subscribe Form Script -->
<script type='text/javascript' src='{{asset('assets/js/mc.validate.js')}}'></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        "use strict";

        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [
            {
                artist: "Artist",
                title:"Lismore",
                mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
                oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg",
                poster: "assets/img/elements/poster-1.jpg"
            },
            {
                artist: "Artist",
                title:"Tempered Song",
                mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
                oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg",
                poster: "assets/img/elements/poster-2.jpg"
            },
            {
                artist: "Artist",
                title:"Cyber Sonnet",
                mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg",
                poster: "assets/img/elements/poster-3.jpg"
            },
            {
                artist: "Artist",
                title:"Free Song",
                mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
                oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg",
                poster: "assets/img/elements/poster-4.jpg"
            },
            {
                artist: "Artist",
                title:"Cro Magnon Man",
                mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
                poster: "assets/img/elements/poster-5.jpg"
            },
            {
                artist: "Artist",
                title:"Your Face",
                mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg",
                poster: "assets/img/elements/poster-1.jpg"
            },
            {
                artist: "Artist",
                title:"Lentement",
                mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
                oga:"http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg",
                poster: "assets/img/elements/poster-2.jpg"
            },
            {
                artist:"Artist",
                title: "The Separation",
                mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
                oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg",
                poster: "assets/img/elements/poster-3.jpg"
            }
        ],{
            playlistOptions: {
                enableRemoveControls: true
            },
            swfPath: "assets/jplayer/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
        });

        // Show The Current Track !!
        $("#jquery_jplayer_1").on(
            $.jPlayer.event.ready + ' ' + $.jPlayer.event.play,
            function(event){
                var current = myPlaylist.current;
                var playlist = myPlaylist.playlist;
                $.each(playlist, function (index, obj) {
                    if (index == current) {
                        $("#nowPlaying .artist-name").html(obj.artist + " - ");
                        $("#nowPlaying .track-name").html(obj.title);
                    }
                });
            }
        );
        // Revolution Slider
        $("#slider1").revolution({
            sliderType:"standard",
            sliderLayout:"fullscreen",
            fullScreenOffset: '45px',
            minHeight: 400,
            delay:5000,
            navigation: {
                arrows:{enable:true}
            },
            responsiveLevels:[1230,1024,778,480],
            gridwidth:[1230,1024,778,480],
            gridheight:[720,600,500,400],
        });
    });//end .ready
</script>
</body>
</html>
