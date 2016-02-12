(function($){


    $(function(){

        $('.captain-countdown-timer').each(function(){
           captainCountdownTimer($(this), 0);
        });

        $('#captain-countdown-settings-submit').click(function(e){
            e.preventDefault();
            var over_under = $('#captain_countdown_over_under').val();
            var sign = (over_under == 'under') ? '-' : '';
            var years = $('#captain_countdown_years').val();
            var days = $('#captain_countdown_days').val();
            var hours = $('#captain_countdown_hours').val();
            var minutes = $('#captain_countdown_minutes').val();
            var seconds = $('#captain_countdown_seconds').val();
            var offsets =
                sign + years.toString() + '|' +
                sign + days.toString() + '|' +
                sign + hours.toString() + '|' +
                sign + minutes.toString() + '|' +
                sign + seconds.toString();
            $('#captain-countdown-offset').val(offsets);
            $('#captain-countdown-settings-form').submit();
        });

    });

})(jQuery);

function captainCountdownTimer(element, increment){

    var datetime = element.data('datetime');
    var direction = element.data('direction');
    var title = element.data('title');
    var seconds = element.data('seconds');

    datetime = moment(datetime).add(increment, 'seconds');

    if (direction == 'down') {

    } else {

        element.text(datetime.format('MMMM D, YYYY h:mm:ss a'));
        element.data('datetime', datetime.format('YYYY-MM-DD HH:mm:ss'));
        setTimeout(function(){
            captainCountdownTimer(element, 1);
        }, 1000);

    }
}