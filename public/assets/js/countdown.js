(function ($) {
    $(document).ready(function () {
        $.fn.countdown = function (options, callback) {
            var thisEl = $(this);
            var settings = {"date": null, "format": null};
            if (options) $.extend(settings, options);

            function countdown_proc() {
                var eventDate = Date.parse(settings["date"]) / 1E3;
                var currentDate = Math.floor($.now() / 1E3);
                if (eventDate <= currentDate) {
                    callback.call(this);
                    clearInterval(interval)
                }
                var seconds = eventDate - currentDate;
                var days = Math.floor(seconds / (60 * 60 * 24));
                seconds -= days * 60 * 60 * 24;
                var hours = Math.floor(seconds / (60 * 60));
                seconds -= hours * 60 * 60;
                var minutes = Math.floor(seconds / 60);
                seconds -= minutes * 60;
                if (days == 1) thisEl.find(".timeRefDays").text("day"); else thisEl.find(".timeRefDays").text("days");
                if (hours == 1) thisEl.find(".timeRefHours").text("hour"); else thisEl.find(".timeRefHours").text("hours");
                if (minutes == 1) thisEl.find(".timeRefMinutes").text("minute"); else thisEl.find(".timeRefMinutes").text("minutes");
                if (seconds == 1) thisEl.find(".timeRefSeconds").text("second"); else thisEl.find(".timeRefSeconds").text("seconds");
                if (settings["format"] ==
                    "on") {
                    days = String(days).length >= 2 ? days : "0" + days;
                    hours = String(hours).length >= 2 ? hours : "0" + hours;
                    minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
                    seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
                }
                if (!isNaN(eventDate)) {
                    thisEl.find(".days").text(days);
                    thisEl.find(".hours").text(hours);
                    thisEl.find(".minutes").text(minutes);
                    thisEl.find(".seconds").text(seconds)
                } else {
                    alert("Invalid date. Here's an example: 12 Tuesday 2012 17:30:00");
                    clearInterval(interval)
                }
            }

            countdown_proc();
            var interval = setInterval(countdown_proc,
                1E3)
        }
    })
})(jQuery);
