$(document).ready(function(){
    var timerSetInterval;
    var count   = 0;
    var second  = 0;
    var minute  = 0;
    var rightCount = 0;
    var errorCount = 0;
    const signLetter = letterToUpperCase($('#letter-settings span:eq(0)').text());
    console.log(signLetter);
    const letter_count = $('#letter-settings span').length;

    startandStopRestartLetterBackgroundColor();

    $('#letter-input').keyup(function(event){
        
        
        // 20 CapsLock
        // 16 Shift
        if(event.keyCode == 20 || event.keyCode == 16){ 
            return false; 
        }

        if(count == 0){
            startTimer();
        }

        $("table#keyboard td").removeClass('bg-info text-white');
        const signLetter = letterToUpperCase($('#letter-settings span:eq('+(count+1)+')').text());
        $("table#keyboard td:contains('"+signLetter+"')").addClass('bg-info text-white');
        $('#letter-settings span:eq('+(count+1)+')').addClass('bg-info text-white');
        
        
        var current_letter = $('#letter-settings span:eq('+count+')').text();
        if(current_letter == event.key){
            $('#letter-settings span:eq('+count+')').removeClass('bg-info text-white').addClass('badge badge-success');
            rightCount++;
            $('span#right-count').text(rightCount);
        }else{
            $('#letter-settings span:eq('+count+')').removeClass('bg-info text-white').addClass('badge badge-danger');
            errorCount++;
            $('span#error-count').text(errorCount);
        }
        
        trustRate(errorCount);
        
        
        count++;

        if(letter_count == count){
            startandStopRestartLetterBackgroundColor();
            clearInterval(timerSetInterval);
            count = 0; // starttimer restart
        }
    });

    function trustRate(errorCount){
        errorRate = 100-(100*errorCount)/letter_count;
        errorRate = Math.ceil(errorRate);
        $('#trust-rate').text(errorRate + "%");
    }

    function startandStopRestartLetterBackgroundColor(){
        $("table#keyboard td").removeClass('bg-info text-white');
        $("table#keyboard td:contains('"+signLetter+"')").addClass('bg-info text-white');
        $('#letter-settings span:eq(0)').addClass('bg-info text-white');
        
        //$('#timer').text('0:00');
    }

    function letterToUpperCase(letter){
        return letter.replace('i', 'İ').replace('ı', 'I').toUpperCase();
    }

    /*
     *
     *  timer descriment
     * 
     */
    function startTimer(){
        var resultTimer = "0:00";
        timerSetInterval = setInterval(function(){
            second++;
            if (second > 59){
                minute++;
                second = 0;
            }
            resultTimer = second < 10 ? minute +':0' + second : minute + ':' +second
            $('#timer').text(resultTimer);
        },1000); //1000 ms
    }
});