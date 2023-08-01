<div class="open-floating-button">
    <?php if(ip_info("Visitor", "Country") == 'Philippines'): ?>
        <a href="/career" class="book-an-appointment">
            <div class="d-icon-part"><i class="fa-solid fa-headset"></i></div>
            <div class="d-text-part">Join our Team</div>
        </a>
    <?php else: ?>
        <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="book-an-appointment">
            <div class="d-icon-part"><i class="fa-solid fa-headset"></i></div>
            <div class="d-text-part">Schedule a Call</div>
        </a>
    <?php endif; ?>
    
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>

<script src="../js/counter.js"></script>

<script>

    window.addEventListener('scroll', function() {
        var element = document.querySelector('.header');
        var position = element.getBoundingClientRect();

        // console.log('top : '+position.top);
        // console.log('bottom : '+position.bottom);
        // console.log('window.innerHeight : '+window.innerHeight);

        // // checking whether fully visible
        // if(position.top >= 0 && position.bottom <= window.innerHeight) {
        //     console.log('Element is fully visible in screen');
        // }

        // // checking for partial visibility
        // if(position.top < window.innerHeight && position.bottom >= 0) {
        //     console.log('Element is partially visible in screen');
        // }

        if(position.bottom <= 0){
            console.log('shit is hidden');
            $(".open-floating-button").show();
        } else {
            $(".open-floating-button").hide();
        }
        
        
    });

    (function ($) {
        // writes the string
        //
        // @param jQuery $target
        // @param String str
        // @param Numeric cursor
        // @param Numeric delay
        // @param Function cb
        // @return void
        function typeString($target, str, cursor, delay, cb) {
            $target.html(function (_, html) {
            return html + str[cursor];
            });
            
            if (cursor < str.length - 1) {
            setTimeout(function () {
                typeString($target, str, cursor + 1, delay, cb);
            }, delay);
            }
            else {
            cb();
            }
        }
        
        // clears the string
        //
        // @param jQuery $target
        // @param Numeric delay
        // @param Function cb
        // @return void
        function deleteString($target, delay, cb) {
            var length;
            
            $target.html(function (_, html) {
            length = html.length;
            return html.substr(0, length - 1);
            });
            
            if (length > 1) {
            setTimeout(function () {
                deleteString($target, delay, cb);
            }, delay);
            }
            else {
            cb();
            }
        }

        // jQuery hook
        $.fn.extend({
            teletype: function (opts) {
            var settings = $.extend({}, $.teletype.defaults, opts);
            
            return $(this).each(function () {
                (function loop($tar, idx) {
                // type
                typeString($tar, settings.text[idx], 0, settings.delay, function () {
                    // delete
                    setTimeout(function () {
                    deleteString($tar, settings.delay, function () {
                        loop($tar, (idx + 1) % settings.text.length);
                    });
                    }, settings.pause);
                });
                
                }($(this), 0));
            });
            }
        });

        // plugin defaults  
        $.extend({
            teletype: {
            defaults: {
                delay: 100,
                pause: 2000,
                text: []
            }
            }
        });
        }(jQuery));

    $( document ).ready(function() {
        /**
         * set interval for counter
         */

        function parseDate(str) {
            
            var mdy = str.split('/');
            return new Date(mdy[2], mdy[0] - 1, mdy[1]);
        }

        function datediff(first, second) {        
            return Math.round((second - first) / (1000 * 60 * 60 * 24));
        }
        setInterval(function() {
            var date1 = new Date("03/01/2023");
            var date2 = new Date();


            // var timeDiff = Math.abs(date2.getTime() - date1.getTime());
            // var diffdays = Math.ceil(timeDiff / 1000 * 60 * 60 * 24);
            var daydiffs = datediff(date1, date2);
            //

            console.log(daydiffs);

            var timespan = countdown(new Date("03/01/2023"), new Date());
            // console.log(timespan);
            var cmonths = document.getElementById('counter_months');
            var cdays = document.getElementById('counter_days');
            var chours = document.getElementById('counter_hours');
            var cminutes = document.getElementById('counter_minute');
            var cseconds = document.getElementById('counter_seconds');
            // div.innerHTML = "Time difference with 08/24/2012 is " + timespan.years + " years, " + timespan.months + " months, " + timespan.days + " days, " + timespan.hours + " hours, " + timespan.minutes + " minutes, " + timespan.seconds + " seconds."
            // cmonths.innerHTML = timespan.months;
            cdays.innerHTML = daydiffs;
            chours.innerHTML = timespan.hours;
            cminutes.innerHTML = timespan.minutes;
            cseconds.innerHTML = timespan.seconds;
        }, 1000);

        $('#target').teletype({
        text: [
            'Is Never Sick',
            'Is Never Absent',
            'Never Resigns',
        ]
        });

        $('#cursor').teletype({
        text: ['|', ' '],
        delay: 0,
        pause: 500
        });
    
        // change text 
        // $(function () {
        //     count = 0;
        //     wordsArray = ["Is Never Sick", "Is Never Absent", "Never Resigns"];
        //     setInterval(function () {
        //         count++;
        //         $(".d-new-names").fadeOut(400, function () {
        //         $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
        //         });
        //     }, 3000);
        // });

        $(".career-item.va_staff").click(function(e){
            if($(this).hasClass('has-selected')){
                $(this).removeClass('has-selected');
                $(".carrer_desc_info.va_staff").hide('slow');
            } else {
                $('.career-item').removeClass('has-selected');
                $('.carrer_desc_info').hide('slow');

                $(this).addClass('has-selected');
                $(".carrer_desc_info.va_staff").show('slow');
            }
            
        });

        $(".career-item.legal_assisstant").click(function(e){
            if($(this).hasClass('has-selected')){
                $(this).removeClass('has-selected');
                $(".carrer_desc_info.legal_assisstant").hide('slow');
            } else {
                $('.career-item').removeClass('has-selected');
                $('.carrer_desc_info').hide('slow');

                $(this).addClass('has-selected');
                $(".carrer_desc_info.legal_assisstant").show('slow');
            }
            
        });

        $(".career-item.lawyer").click(function(e){
            if($(this).hasClass('has-selected')){
                $(this).removeClass('has-selected');
                $(".carrer_desc_info.lawyer").hide('slow');
            } else {
                $('.career-item').removeClass('has-selected');
                $('.carrer_desc_info').hide('slow');
                
                $(this).addClass('has-selected');
                $(".carrer_desc_info.lawyer").show('slow');
            }
            
        });

        $(".d-faq-content .d-faq-item .d-faq-header").click(function(e){
            $(this).parent(".d-faq-item").find(".d-faq-desc").show('slow');
        });
        
    });
</script>