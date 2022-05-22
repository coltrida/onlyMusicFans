<!-- Upcoming Events -->
<div id="events" class="section events-list-home">
    <div class="container">
        <div class="category-head">
            <h1>Upcoming <span class="colored">Events</span></h1>
            <p>We have some events that you dont want to miss this summer. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <!-- Event 1 -->
        @foreach($concerts as $item)
            <div class="row event">
                <div class="col-xs-6 col-sm-2 date-container">
                    <i class="fa fa-calendar"></i>
                    <span class="date">{{$item->day_month}} <br> {{$item->year}}</span>
                </div>
                <div class="col-xs-6 col-sm-4 name-container">
                    <img src="{{$item->path}}" alt="event" style="height: 50px">
                    <h4>{{$item->title}}</h4>
                </div>
                <div class="col-xs-6 col-sm-3 location-container">
                    <i class="fa fa-map-marker"></i>
                    <span class="location">{{$item->address}} <br><b>{{$item->city}}</b></span>
                </div>
                <div class="col-xs-6 col-sm-3 button-div">
                    <a href="{{route('payment', $item->id)}}">Buy Ticket</a>
                </div>

                <div class="col-xs-12 info-extended">
                    <div class="info-wrapper row">
                        <div class="col-sm-3">
                            <img src="{{$item->path}}" alt="Ev" style="height: 200px">
                        </div>
                        <div class="col-sm-9 info">
                            <ul class="clearfix">
                                <li>
                                    <span>Artists :</span>
                                    <span>{{$item->artist}}</span>
                                </li>
                                <li>
                                    <span>Starting at :</span>
                                    <span>{{$item->concert_houre}}</span>
                                </li>
                                <li>
                                    <span>Price :</span>
                                    <span>{{$item->cost}}$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-angle-double-down open-icon"></i>
                </div>
            </div>
        @endforeach

        <div class="button-container">
            <a href="events.html" class="button">All Events <i class="fa fa-list"></i></a>
        </div>
    </div>
</div>
