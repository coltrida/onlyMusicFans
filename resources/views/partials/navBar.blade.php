<!-- Header Bar 2 -->
<div id="home" class="header-bar-2">
    <div class="logo-container">
        <a href="{{route('index')}}"><span>Only</span> Music Fans</a>
    </div>
    <div class="player-nav-container">
        <!-- Audio Player -->
        <div class="player-container">
            <i id="player-button" class="fa fa-music"></i>
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                    <div class="jp-gui jp-interface">
                        <div class="jp-controls">
                            <button id="playlist-toggle"><i class="fa fa-bars"></i></button>
                            <button class="jp-previous" tabindex="0"><i class="fa fa-step-backward"></i></button>
                            <button class="jp-play" tabindex="0"><i class="fa fa-play"></i></button>
                            <button class="jp-next" tabindex="0"><i class="fa fa-step-forward"></i></button>
                            <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>
                            <!-- <button class="jp-volume-max" role="button" tabindex="0"><i class="fa fa-volume-up"></i></button> -->
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                        </div>
                        <!-- Display the track inside player -->
                        <div id="nowPlaying">
                            <span class="artist-name"></span>
                            <span class="track-name"></span>
                        </div><!-- #nowPlaying -->
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <!-- Playlist -->
                        <div class="jp-playlist">
                            <ul>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your
                        <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Container -->
        <div class="nav-container">
            <ul id="main-nav" class="main-nav nav">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a class="scrollTo" href="#albums">Albums</a></li>
                <li><a class="scrollTo" href="#events">Events</a></li>
                <li><a class="scrollTo" href="#galleryId">Gallery</a></li>
                <li><a class="scrollTo" href="#news">News</a></li>
                <li><a class="scrollTo" href="#contact">Contact</a></li>
                @auth
                <li class="has-submenu">
                    <a href="#">{{auth()->user()->name}} <i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                        @if(auth()->user()->isAdmin())
                            <li><a href="{{route('admin.index')}}">Dashboard</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{route('logout')}}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                    <li><a href="{{route('register')}}">register</a></li>
                    <li><a href="{{route('login')}}">login</a></li>
                @endauth
            </ul>
            <i id="menu-button" class="fa fa-bars"></i>
        </div>
    </div>
</div>
