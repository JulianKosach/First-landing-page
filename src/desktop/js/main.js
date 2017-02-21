// jQuery
(function($, undefined) {

    // ======================== FUNCTION DECLARATION ==============================================================================

    // fullpage stabilization
    function stabilize() {
        $('section:not(:hidden)').each(function(index, el) {
            var eTop = $(this).offset().top;
            var posTop = eTop - $(window).scrollTop();
            if (posTop > -$(window).height() / 2 && posTop < $(window).height() / 2) {
                $("html, body").animate({
                    scrollTop: $(this).offset().top
                }, 250);
            }
        });
    }

    // add/remove class "checked" for ".form-label"
    function checkFormLabel(input, type) {
        var label = $(input).parent('label');
        if (type == "checkbox") {
            if ($(label).attr("class") == "form-label checked") $(label).removeClass("checked");
            else $(label).addClass("checked");
        } else {
            var id = $(label).parent("form").attr("id");
            var selector = '#' + id + ' input[name="' + $(input).attr("name") + '"]';
            $(selector).each(function() {
                $(this).parent("label").removeClass("checked");
            });
            $(label).addClass("checked");
        }
    };

    // add form thanks on success
    function addFormThanks(id) {
        if (id == "form1") {
            $("#form1").append('<div class="thanks"><h4>Заявка принята</h4><p>Мы свяжемся с Вами в ближайшее время!</p></div>');
            showThanks("form1");
        } else if (id == "form2") {
            $("#sec3>div>div").append('<div class="thanks"><h2>Заявка принята</h2><h3>Мы вышлем вам КП в течение 24 часов</h3></div>');
            showThanks("sec3");
        } else if (id == "form3") {
            $("#sec10>div>div").append('<div class="thanks"><h2>Заявка принята</h2><h3>Наш менеджер сориентирует вас <br> по цене в течение 25 минут</h3></div>');
            showThanks("sec10");
        } else if (id == "form4") {
            $("#form4").append('<div class="thanks"><h4>Заявка принята</h4><p>Мы свяжемся с Вами в ближайшее время!</p></div>');
            showThanks("form4");
        };

        function showThanks(sel) {
            $('#' + sel + " .thanks").fadeIn(1000);
            setTimeout(function() {
                $('#' + sel + " .thanks").fadeOut(1000);
            }, 5000);
        };
    };

    // check fields
    function checkFields(id, type, name) {
        var formSelector = "#" + id;
        var selector = 'input[type="' + type + '"][name="' + name + '"]';
        var selectorChecked = selector + ':checked';
        if ($(formSelector).find(selector).length > 0) {
            if ($(formSelector).find(selectorChecked).length == 0) return false;
        };
        return true;
    };

    // Numeric only control handler
    jQuery.fn.ForceNumericOnly = function() {
        return this.each(function() {
            $(this).keydown(function(e) {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };

    // UTM_geo
    function getURLParameter(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
    };

    function run_geo(geo_url) {
        $.ajax({
            type: 'GET',
            url: geo_url,
            dataType: 'xml',
            success: function(xml) {
                $(xml).find('ip').each(function() {
                    var city = $(this).find('city').text();
                    var region = $(this).find('region').text();
                    if (city != region) {
                        var ipg = city + ', ' + region;
                    } else {
                        var ipg = city;
                    }
                    $('<input type="hidden" />').attr({
                        name: 'location',
                        class: 'location',
                        value: ipg
                    }).appendTo("form");
                });
            }
        });
    };


    // Slider object
    function Slider(p) {
        this.$nextBtn = $(p.nextBtn);
        this.$prevBtn = $(p.prevBtn);
        this.$elements = $(p.elements);
        this.amount = this.$elements.length;
        for (var i = 0; i < this.amount; i++) {
            $(this.$elements[i]).attr("data-num", i);
        };
        this.currentSelector = p.currentElem;
        this.current = $(p.currentElem).attr("data-num");
        this.previous = this.current;
        this.classesToRemove = p.classesToRemove;
        this.classesToAdd = p.classesToAdd;
        this.timeBreak = +p.timeBreak || 5000;
        this.timer;
        var slider = this;
        this.$elements.click(function() {
            slider.current = +$(this).attr("data-num");
            clearTimeout(slider.timer);
            slider.setCurrent();
        });
        this.$nextBtn.click(function() {
            slider.setNext();
            slider.setCurrent();
        });
        this.$prevBtn.click(function() {
            slider.setPrev();
            slider.setCurrent();
        });
    };
    // Slider object methods
    Slider.prototype.addClassNum = function(arr) {
        var elNum = this.current + arr[0];
        if (elNum > this.amount - 1) {
            elNum = elNum - this.amount;
        } else if (elNum < 0) {
            elNum = this.amount + elNum;
        };
        $(this.$elements[elNum]).addClass(arr[1]);
    };
    Slider.prototype.setPrev = function() {
        this.current--;
        clearTimeout(this.timer);
        if (this.current < 0) {
            this.current = this.amount - 1;
        };
    };
    Slider.prototype.setNext = function() {
        this.current++;
        clearTimeout(this.timer);
        if (this.current > this.amount - 1) {
            this.current = 0;
        };
    };
    Slider.prototype.setCurrent = function() {
        if (this.current == this.previous) return;
        $(this.$elements).removeClass(this.classesToRemove);
        for (var i = 0; i < this.classesToAdd.length; i++) {
            this.addClassNum(this.classesToAdd[i]);
        };
        $(".lazy").lazyload();
        this.previous = this.current;
    };
    Slider.prototype.autoPlay = function() {
        var slider = this;
        this.timer = setTimeout(function run() {
            slider.$nextBtn.click();
            slider.timer = setTimeout(run, slider.timeBreak);
        }, slider.timeBreak);
    };

    // VideoSlider object with Slider class
    function VideoSlider(p) {
        Slider.apply(this, arguments);
    };
    VideoSlider.prototype = Object.create(Slider.prototype);
    VideoSlider.prototype.constructor = VideoSlider;
    // VideoSlider object methods
    VideoSlider.prototype.setCurrent = function() {
        if (this.current == this.previous) return;
        if ($(this.currentSelector).find("iframe").length != 0) $(this.currentSelector).find("iframe").remove();
        $("#sec2 .btn-play").css("display", "none");
        Slider.prototype.setCurrent.apply(this);
        $(this.currentSelector).find(".btn-play").css("display", "block");
    };

    // LeaderSlider object with Slider class
    function LeaderSlider(p) {
        Slider.apply(this, arguments);
    };
    LeaderSlider.prototype = Object.create(Slider.prototype);
    LeaderSlider.prototype.constructor = LeaderSlider;
    // LeaderSlider object methods
    LeaderSlider.prototype.setCurrent = function() {
        if (this.current == this.previous) return;
        Slider.prototype.setCurrent.apply(this);
        this.$elements.css({
            "opacity": "0"
        });
        this.$elements.animate({
            "opacity": "1"
        }, 500);
    };




    // ============================ DOCUMENT.READY ================================================================================

    $(document).ready(function() {

        // img lazy load
        $(".lazy").lazyload({
            threshold: 600,
        });

        // fullpage stabilization
        $("html, body").on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function() {
            $("html, body").stop();
        });
        if (isMobile != true) {
            $(window).scroll(function() {
                clearTimeout($.data(this, 'scrollTimer'));
                $.data(this, 'scrollTimer', setTimeout(stabilize, 1500));
            });
        };

        //onclick add/remove class "checked" for ".form-label"
        $("input").click(function(e) {
            var type = $(this).attr("type");
            if (type == "radio" || type == "checkbox") checkFormLabel(this, type);
        });

        // Numeric only control handler
        $('input[name="phone"]').ForceNumericOnly();
        // mask phone input
        $('input[name="phone"]').mask('+7 (999) 999-99-99');
        // UTM_geo
        $.get("http://ipinfo.io", function(response) {
            geo_url = 'http://ipgeobase.ru:7020/geo?ip=' + response.ip;
            run_geo(geo_url);
        }, "jsonp");
        utm = [];
        $.each(["utm_source", "utm_medium", "utm_campaign", "utm_term", 'source_type', 'source', 'position_type', 'position', 'added', 'creative', 'matchtype'], function(i, v) {
            $('<input type="hidden" />').attr({
                name: v,
                class: v,
                value: function() {
                    if (getURLParameter(v) == undefined) return '-';
                    else return getURLParameter(v)
                }
            }).appendTo("form")
        });
        $('<input type="hidden" />').attr({
            name: 'url',
            value: document.location.href
        }).appendTo("form");
        $('<input type="hidden" />').attr({
            name: 'title',
            value: document.title
        }).appendTo("form");
        // valid name
        $('input[name="name"]').blur(function() {
            if ($(this).val().length < 2) {
                $(this).addClass('error-input');
            }
        });
        $('input[name="name"]').focus(function() {
            $(this).removeClass('error-input');
        });
        // valid phone
        $('input[name="phone"]').blur(function() {
            if ($(this).val().length != 18) {
                $(this).addClass('error-input');
            }
        });
        $('input[name="phone"]').focus(function() {
            $(this).removeClass('error-input');
        });
        // valid textarea
        $('textarea').blur(function() {
            if ($(this).val().length < 5) {
                $(this).addClass('error-input');
            }
        });
        $('textarea').focus(function() {
            $(this).removeClass('error-input');
        });
        // ajaxsubmit
        $('form').submit(function(e) {
            e.preventDefault();
            var formID = $(this).attr("id");
            // add #hidden-box 
            if ($("#hidden-box").length == 0) {
                $("body").append('<div id="hidden-box"><div id="form-error-pop"><div id="form-error-text"></div></div></div>');
            };
            // blur all inputs
            $(this).find('input[type="text"]').trigger('blur');
            $(this).find('textarea').trigger('blur');
            // check all fields
            if (!$(this).find('input[type="text"]').hasClass('error-input') &&
                !$(this).find('textarea').hasClass('error-input') &&
                checkFields(formID, "radio", "object-done") &&
                checkFields(formID, "radio", "object-type") &&
                checkFields(formID, "checkbox", "services") &&
                checkFields(formID, "checkbox", "products")) {
                var type = $(this).attr('method');
                var url = $(this).attr('action');
                var data = $(this).serialize();
                var track_event = $(this).find('input[name="event"]').val();
                $.ajax({
                    type: type,
                    url: url,
                    data: data,
                    success: function() {
                        addFormThanks(formID);
                        $.arcticmodal('close');
                        // $('#okgo').arcticmodal();
                        // submit_track_event(track_event);
                    }
                });
                addFormThanks(formID); // для php видалити!!!!!!
            } else {
                var eror_pop_text = '';
                if ($(this).find('input[name="name"]').hasClass('error-input') && !$(this).find('input[name="phone"]').hasClass('error-input')) {
                    eror_pop_text = 'Пожалуйста введите имя';
                } else
                if ($(this).find('input[name="phone"]').hasClass('error-input') && !$(this).find('input[name="name"]').hasClass('error-input')) {
                    eror_pop_text = 'Пожалуйста введите телефон';
                } else
                if ($(this).find('input[name="phone"]').hasClass('error-input') && $(this).find('input[name="name"]').hasClass('error-input')) {
                    eror_pop_text = 'Пожалуйста введите имя и телефон';
                }
                // for form with textarea
                if ($(this).find('textarea').hasClass('error-input')) {
                    eror_pop_text = 'Пожалуйста введите вопрос (не менше 5 символов)';
                }
                // for form with inputs radio or checkbox
                if (!(checkFields(formID, "radio", "object-type"))) eror_pop_text = 'Пожалуйста выберите один из перечисленных вариантов в поле "Выберите тип вашего объекта"';
                if (!(checkFields(formID, "checkbox", "services"))) eror_pop_text = 'Пожалуйста выберите хотя бы один из перечисленных вариантов в поле "Какие услуги вас интересуют?"';
                if (!(checkFields(formID, "radio", "object-done"))) eror_pop_text = 'Пожалуйста выберите один из перечисленных вариантов в поле "Объект уже построен?"';
                if (!(checkFields(formID, "checkbox", "products"))) eror_pop_text = 'Пожалуйста выберите хотя бы один из перечисленных вариантов в поле "Какие изделия будут входить в комплекс?"';
                // arcticmodal
                $('#form-error-text').html(eror_pop_text);
                $('#form-error-pop').arcticmodal();
            }
        });

        // prevent default for a[href="#"]
        $('a[href="#"]').click(function(e) {
            e.preventDefault();
        });

        //onclick add/display #menu
        $('a.menu').click(function(e) {
            // add #menu
            var $menu = $("#menu");
            if ($menu.css("display") == "none") {
                $menu.css({
                    'display': 'block',
                    'left': '-480px'
                });
                $menu.animate({
                    'left': '0'
                }, 500);
            }
        });

        //onclick a scroll or close #menu
        $('#menu a').click(function(e) {
            e.preventDefault();
            if ($(this).attr("href") != "#") $("html, body").animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 2000);
            $('#menu').animate({
                'left': '-480px'
            }, 500, function() {
                $(this).css("display", "none");
            });
        });

        //onclick add video
        $('a.btn-play').click(function(e) {
            e.preventDefault();
            $(this).css("display", "none");
            var $div;
            if ($(this).parent('.video-content').length == 1) $div = $(this).parent('.video-content');
            else if ($(this).parent('.sld-video').length == 1) {
                $div = $(this).parent(".sld-video");
                if ($div.find("iframe").length == 1) return;
            }
            var vidsrc = $div.attr("data-vidsrc");
            var iframe = '<iframe width="100%" height="100%" src="' + vidsrc + '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
            $div.append(iframe);
        });

        // #sec2 video slider create
        var slider1 = new VideoSlider({
            nextBtn: "#sld-btn-right",
            prevBtn: "#sld-btn-left",
            elements: "#sec2 li",
            currentElem: ".sld-3",
            classesToRemove: "sld-1 sld-2 sld-3 sld-4 sld-5",
            classesToAdd: [
                [-2, "sld-1"],
                [-1, "sld-2"],
                [0, "sld-3"],
                [1, "sld-4"],
                [2, "sld-5"]
            ]
        });

        // #sec11 company slider create
        var slider2 = $('#sec11 .ul-wrap ul').bxSlider({
            infiniteLoop: true,
            nextSelector: '#comp-btn-right',
            prevSelector: '#comp-btn-left',
            nextText: '',
            prevText: '',
            controls: true,
            pager: false,
            speed: 500,
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 1,
            slideWidth: 300,
            auto: true,
            pause: 3000,
            onSlideBefore: function($slideElement, oldIndex, newIndex) {
                $(".lazy").lazyload();
            },
            onSlideAfter: function($slideElement, oldIndex, newIndex) {
                $(".lazy").lazyload();
            }
        });

        // #sec12 leader slider create
        var slider3 = new LeaderSlider({
            nextBtn: "#lead-btn-right",
            prevBtn: "#lead-btn-left",
            elements: "#sec12 li",
            currentElem: ".lead-center",
            classesToRemove: "lead-left lead-center lead-right",
            classesToAdd: [
                [-1, "lead-left"],
                [0, "lead-center"],
                [1, "lead-right"]
            ]
        });

    });



    // ============================= WINDOW.LOAD ===========================================================================

    $(window).on('load', function() {


    });

})(jQuery);
