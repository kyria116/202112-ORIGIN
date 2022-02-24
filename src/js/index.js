//@prepros-prepend plugin/slick.min.js
$('#kv').slick({
    waitForAnimate: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    swipe: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 4000,
    dotsClass: 'number-dots',
    customPaging: function (slider, i) {
        return `<div class="slick-page">
        <div class="page">0${i + 1}</div>
        <div class="circle-wrap">
            <svg height="84" width="84" class="pc">
                <circle class="circle" cx="42" cy="42" r="21"  stroke-width="1" fill-opacity="0" />
            </svg>
            <svg height="70" width="70" class="mo">
                <circle class="circle" cx="35" cy="35" r="18"  stroke-width="1" fill-opacity="0" />
            </svg>
        </div>
    </div>`;
    },
});

$('#newslists').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    variableWidth: true,
    speed: 1000,
    arrows: false,
    prevArrow: $('.newsarrow .prev-slide'),
    nextArrow: $('.newsarrow .next-slide'),
    responsive: [{
        breakpoint: 1367,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 4,
            variableWidth: false,
        }
    },
    {
        breakpoint: 1201,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3,
            variableWidth: false,
        }
    },
    {
        breakpoint: 992,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2,
            variableWidth: false,
        }
    }, {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1,
            variableWidth: false,
        }
    }
    ]
});
$('.newsarrow .prev-slide').on('click', function () {
    $('#newslists').slick("slickPrev");
});
$('.newsarrow .next-slide').on('click', function () {
    $('#newslists').slick("slickNext");
});
//找高度
function maxHeight() {
    const heights = $("#newslists .content").map(function () {
        return $(this).outerHeight();
    }).get();

    maxHeight = Math.max.apply(null, heights);
    $("#newslists .content").css('min-height', maxHeight + 'px')
}
maxHeight()
$(window).resize(function () {
    maxHeight()
});

$('#productslick').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: true,
    speed: 1000,
    arrows: false,
    prevArrow: $('.productarrow .prev-slide'),
    nextArrow: $('.productarrow .next-slide'),
    responsive: [{
        breakpoint: 1201,
        settings: {

            slidesToShow: 3,
        }
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
        }
    }, {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1,
            variableWidth: false,
        }
    }
    ]
})
$('.productarrow .prev-slide').on('click', function () {
    $('#productslick').slick("slickPrev");
});
$('.productarrow .next-slide').on('click', function () {
    $('#productslick').slick("slickNext");
});


$(window).on('scroll', function () {
    const bottom_of_window = $(window).scrollTop() + $(window).height();
    const line1 = document.getElementById("line1");
    const line2 = document.getElementById("line2");
    const line3 = document.getElementById("line3");
    const line4 = document.getElementById("line4");
    const line5 = document.getElementById("line5");
    const line6 = document.getElementById("line6");

    const line1Top = $('#line1').offset().top
    const line2Top = $('#line2').offset().top
    const line3Top = $('#line3').offset().top
    const line4Top = $('#line4').offset().top
    const line5Top = $('#line5').offset().top
    const line6Top = $('#line6').offset().top

    if (bottom_of_window > line1Top) {
        if (!line1.classList.contains('animate')) {
            line1.classList.add("animate")
        }
    }
    if (bottom_of_window > line2Top) {
        if (!line2.classList.contains('animate')) {
            line2.classList.add("animate")
        }
    }
    if (bottom_of_window > line3Top) {
        if (!line3.classList.contains('animate')) {
            line3.classList.add("animate")
        }
    }
    if (bottom_of_window > line4Top) {
        if (!line4.classList.contains('animate')) {
            line4.classList.add("animate")
        }
    }
    if (bottom_of_window > line5Top) {
        if (!line5.classList.contains('animate')) {
            line5.classList.add("animate")
        }
    }
    if (bottom_of_window > line6Top) {
        if (!line6.classList.contains('animate')) {
            line6.classList.add("animate")
        }
    }
})

$('select').each(function () {
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function (e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function () {
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        // window.location = $this.val();
    });

    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

$('.select-styled').text($('#select-box option:selected').html())
