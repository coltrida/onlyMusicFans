<!-- Next Event -->
@if($nextConcert)
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
                            <span class="days" id="nextConcert">{{$nextConcert}}</span>
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
@endif
