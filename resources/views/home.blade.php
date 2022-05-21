@extends('layouts.theme')

@section('content')
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="zoomout" data-masterspeed="1500" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/img/slider/slide-1.jpg')}}" data-bgposition="center center" alt="Cover" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                         id="slide-16-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="500"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap;">ANDREW BIRD IN L.A.
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                         id="slide-16-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="800"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive="off"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">TELEGRAM BALLROOM 1234
                    </div>
                    <!-- LAYER NR. 3 -->
                    <a href="#events" class="tp-caption rev_slider_button scrollTo"
                       data-x="['center','center','center','center']"
                       data-y="['middle','middle','middle','middle']"
                       data-voffset="['115','110','120','130']"
                       data-responsive_offset="on"
                       data-responsive="off"
                       data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                       data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                       data-mask_in="x:0px;y:0px;"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1200"
                    >View Event <i class="fa fa-money"></i></a>

                </li>

                <li data-transition="fadetotopfadefrombottom" data-masterspeed="1500" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/img/slider/slide-2.jpg')}}" data-bgposition="center center" alt="Cover" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                         id="slide-17-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="500"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05"
                         style="z-index: 5; white-space: nowrap;">KILL THE LIGHTS
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                         id="slide-16-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="800"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive="off"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">LUKE BRYAN
                    </div>
                    <!-- LAYER NR. 3 -->
                    <a href="album-single.html" class="tp-caption rev_slider_button"
                       data-x="['center','center','center','center']"
                       data-y="['middle','middle','middle','middle']"
                       data-voffset="['115','110','120','130']"
                       data-responsive_offset="on"
                       data-responsive="off"
                       data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                       data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                       data-mask_in="x:0px;y:0px;"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1200"
                    >Open Album <i class="fa fa-bullseye"></i></a>
                </li>
            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- END OF SLIDER WRAPPER -->

    <!-- Featured Albums -->
    <div id="albums" class="container section featured-albums-home">
        <div class="category-head">
            <h1>Featured <span class="colored">Albums</span></h1>
            <p>These are just some of our great albums launched in 2015. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="albums row">
            <div class="col-sm-4">
                <div class="album">
                    <img src="{{asset('assets/img/albums/cover-1.jpg')}}" alt="cover" class="img-responsive">
                    <div class="cd-mask">
                        <div class="center"></div>
                    </div>
                    <div class="info">
                        <a class="album-name" href="album-single.html">Kill The Lights <i class="fa fa-arrow-circle-right"></i></a>
                        <br>
                        <p>Luke Bryan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="album">
                    <img src="{{asset('assets/img/albums/cover-2.jpg')}}" alt="cover" class="img-responsive">
                    <div class="cd-mask">
                        <div class="center"></div>
                    </div>
                    <div class="info">
                        <a class="album-name" href="album-single.html">I Changed A Lot <i class="fa fa-arrow-circle-right"></i></a>
                        <br>
                        <p>Dj Khaled</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="album">
                    <img src="{{asset('assets/img/albums/cover-3.jpg')}}" alt="cover" class="img-responsive">
                    <div class="cd-mask">
                        <div class="center"></div>
                    </div>
                    <div class="info">
                        <a class="album-name" href="album-single.html">Tangled Up <i class="fa fa-arrow-circle-right"></i></a>
                        <br>
                        <p>Thomas Rhett</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-container clearfix">
            <a href="albums.html" class="button">View All <i class="fa fa-folder-open"></i></a>
        </div>
    </div>

    <!-- Upcoming Events -->
    <div id="events" class="section events-list-home">
        <div class="container">
            <div class="category-head">
                <h1>Upcoming <span class="colored">Events</span></h1>
                <p>We have some events that you dont want to miss this summer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <!-- Event 1 -->
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">12 OCT <br> 2016</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{asset('assets/img/events/ev-1.jpg')}}" alt="event">
                    <h4>Celebrating <br>Alpha Opening</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">Piata Unirii, <br>Bucuresti</span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a href="#">Buy Ticket</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{asset('assets/img/events/big-ev-1.jpg')}}" alt="Ev" class="img-responsive">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>Rihanna, Jennifer Lopez</span>
                                </li>
                                <li>
                                    <span>Special Guest :</span>
                                    <span>Pitbull</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>08 PM</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum :</span>
                                    <span>Dolor sit amet</span>
                                </li>
                                <li>
                                    <span>Tickets Remaining :</span>
                                    <span>124</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>15$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">27 OCT <br> 2016</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{asset('assets/img/events/ev-2.jpg')}}" alt="event">
                    <h4>Celebrating <br>Alpha Opening</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">Piata Unirii, <br>Bucuresti</span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a class="sold" href="#">Sold Out</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{asset('assets/img/events/big-ev-2.jpg')}}" alt="Ev" class="img-responsive">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>Rihanna, Jennifer Lopez</span>
                                </li>
                                <li>
                                    <span>Special Guest :</span>
                                    <span>Pitbull</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>08 PM</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum :</span>
                                    <span>Dolor sit amet</span>
                                </li>
                                <li>
                                    <span>Tickets Remaining :</span>
                                    <span>124</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>15$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">07 NOV <br> 2016</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{asset('assets/img/events/ev-3.jpg')}}" alt="event">
                    <h4>Celebrating <br>Alpha Opening</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">Piata Unirii, <br>Bucuresti</span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a href="#">Free Entry</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{asset('assets/img/events/big-ev-3.jpg')}}" alt="Ev" class="img-responsive">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>Rihanna, Jennifer Lopez</span>
                                </li>
                                <li>
                                    <span>Special Guest :</span>
                                    <span>Pitbull</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>08 PM</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum :</span>
                                    <span>Dolor sit amet</span>
                                </li>
                                <li>
                                    <span>Tickets Remaining :</span>
                                    <span>124</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>15$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
            <!-- Event 4 -->
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">14 NOV <br> 2016</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{asset('assets/img/events/ev-4.jpg')}}" alt="event">
                    <h4>Celebrating <br>Alpha Opening</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">Piata Unirii, <br>Bucuresti</span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a class="canceled" href="#">Canceled</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{asset('assets/img/events/big-ev-4.jpg')}}" alt="Ev" class="img-responsive">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>Rihanna, Jennifer Lopez</span>
                                </li>
                                <li>
                                    <span>Special Guest :</span>
                                    <span>Pitbull</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>08 PM</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum :</span>
                                    <span>Dolor sit amet</span>
                                </li>
                                <li>
                                    <span>Tickets Remaining :</span>
                                    <span>124</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>15$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
            <!-- Event 5 -->
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">29 NOV <br> 2016</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{asset('assets/img/events/ev-5.jpg')}}" alt="event">
                    <h4>Celebrating <br>Alpha Opening</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">Piata Unirii, <br>Bucuresti</span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a href="#">Buy Ticket</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{asset('assets/img/events/big-ev-5.jpg')}}" alt="Ev" class="img-responsive">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>Rihanna, Jennifer Lopez</span>
                                </li>
                                <li>
                                    <span>Special Guest :</span>
                                    <span>Pitbull</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>08 PM</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum :</span>
                                    <span>Dolor sit amet</span>
                                </li>
                                <li>
                                    <span>Tickets Remaining :</span>
                                    <span>124</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>15$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
            <div class="button-container">
                <a href="events.html" class="button">All Events <i class="fa fa-list"></i></a>
            </div>
        </div>
    </div>

    <!-- Next Event -->
    <div class="countdown-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>Next event will be in</h1>
                </div>
                <div class="col-md-6 counter">
                    <!-- Countdown -->
                    <ul id="countdown-2" class="countdown-2">
                        <li>
                            <span class="days">00</span>
                            <p class="timeRefDays">days</p>
                        </li>
                        <li>
                            <span class="hours">00</span>
                            <p class="timeRefHours">hours</p>
                        </li>
                        <li>
                            <span class="minutes">00</span>
                            <p class="timeRefMinutes">minutes</p>
                        </li>
                        <li>
                            <span class="seconds">00</span>
                            <p class="timeRefSeconds">seconds</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Photo Gallery -->
    <div id="galleryId" class="photo-gallery">
        <div class="container">
            <div class="category-head">
                <h1>Photo <span class="colored">Gallery</span></h1>
                <p>Take a look at this photos gathered from the Paris Tour 2014. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <!-- Gallery -->
        <div id="gallery" class="clearfix"></div>
        <!-- Load more button -->
        <a id="load-more-photos" href="#">Load more photos <i class="fa fa-image"></i> <i class="fa fa-spinner spinner"></i></a>
    </div>

    <!-- Video Gallery -->
    <div class="container section video-gallery">
        <div class="category-head">
            <h1>Video <span class="colored">Gallery</span></h1>
            <p>Watch our awesome performance from these concerts in 2015. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="videos-container row">
            <div class="col-sm-6 embed-video">
                <iframe src="https://player.vimeo.com/video/24042544?color=ed145b&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 embed-video">
                <iframe src="https://player.vimeo.com/video/25017978?color=ed145b&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>
            </div>
        </div>

        <div class="button-container">
            <a href="video-gallery.html" class="button">View Gallery <i class="fa fa-youtube-play"></i></a>
        </div>
    </div>

    <!-- Latest News -->
    <div id="news" class="latest-news section">
        <div class="category-head">
            <h1>Latest <span class="colored">News</span></h1>
            <p>Watch our awesome performance from these concerts in 2015. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="container">
            <div class="posts-row clearfix">
                <div class="post-container">
                    <div class="post">
                        <img src="{{asset('assets/img/blog/home-post-1.jpg')}}" alt="Post img" class="img-responsive">
                        <h3>When music matters</h3>
                        <div class="meta">
                            <a href="#"><i class="fa fa-user"></i> FutureThemes</a>
                            <a href="#"><i class="fa fa-calendar"></i> Oct 12</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-single.html" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="post-container">
                    <div class="post">
                        <img src="{{asset('assets/img/blog/home-post-2.jpg')}}" alt="Post img" class="img-responsive">
                        <h3>The power of music</h3>
                        <div class="meta">
                            <a href="#"><i class="fa fa-user"></i> FutureThemes</a>
                            <a href="#"><i class="fa fa-calendar"></i> Oct 12</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-single.html" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="post-container">
                    <div class="post">
                        <img src="{{asset('assets/img/blog/home-post-3.jpg')}}" alt="Post img" class="img-responsive">
                        <h3>The journey of an Artist</h3>
                        <div class="meta">
                            <a href="#"><i class="fa fa-user"></i> FutureThemes</a>
                            <a href="#"><i class="fa fa-calendar"></i> Oct 12</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-single.html" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe -->
    <div class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text">
                    <h3>Keep updated. Subscribe to our newsletter!</h3>
                </div>
                <div class="col-sm-6 form">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="//gygsdesign.us11.list-manage.com/subscribe/post?u=94c004fbd08face605b799ad9&amp;id=60beb53d8e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <input type="email" value="" name="EMAIL" class="required email emailinput" id="mce-EMAIL" placeholder="Enter Your E-mail Here">
                                    <div class="clear clearfix"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;"><input type="text" name="b_94c004fbd08face605b799ad9_60beb53d8e" tabindex="-1" value=""></div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
    </div>

    <!-- Artists -->
    <div id="artists" class="container section artists">
        <div class="category-head">
            <h1>Our <span class="colored">Artists</span></h1>
            <p>We are the ones that you see bellow. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 artist">
                    <div class="artist-wrapper">
                        <img src="{{asset('assets/img/artists/artist-1.jpg')}}" alt="Artist" class="img-responsive">
                        <div class="mask">
                            <h1>Whitney Houston</h1>
                            <p>Vocal Artist</p>
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li><li>
                                    <a href="#" class="fa fa-instagram"></a></li><li>
                                    <a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 artist">
                    <div class="artist-wrapper">
                        <img src="{{asset('assets/img/artists/artist-3.jpg')}}" alt="Artist" class="img-responsive">
                        <div class="mask">
                            <h1>Kim Thayil</h1>
                            <p>Guitarist</p>
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li><li>
                                    <a href="#" class="fa fa-instagram"></a></li><li>
                                    <a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 artist">
                    <div class="artist-wrapper">
                        <img src="{{asset('assets/img/artists/artist-2.jpg')}}" alt="Artist" class="img-responsive">
                        <div class="mask">
                            <h1>Keith Moon</h1>
                            <p>Drummer</p>
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li><li>
                                    <a href="#" class="fa fa-instagram"></a></li><li>
                                    <a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="contact-home section">
        <div class="category-head">
            <h1>Contact <span class="colored">Us</span></h1>
            <p>Take a moment and share with us your thoughts, using this form. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="container">
            <form action="contact.php" method="post" name="contact" id="contact-form">
                <div class="field">
                    <p>Name <span class="colored">*</span></p>
                    <input name="name" type="text" class="required" title="Please type your name." placeholder="Name...">
                </div>

                <div class="field">
                    <p>Email adress <span class="colored">*</span></p>
                    <input name="email" type="text" placeholder="Email...">
                </div>

                <div class="field">
                    <p>Subject</p>
                    <input name="about" type="text" placeholder="Subject...">
                </div>

                <div class="field">
                    <p>Type a message <span class="colored">*</span></p>
                    <textarea name="message" cols="15" rows="5" class="required" placeholder="Message..." title="Please type a message."></textarea>
                </div>

                <div class="button-container">
                    <button type="submit" name="submit" class="button">Send Message  <i class="fa fa-envelope"></i></button>
                </div>

            </form>
        </div>
    </div>
@stop
