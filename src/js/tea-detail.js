$(document).ready(function () {
    //@prepros-prepend plugin/slick.min.js
    $('#product').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 1000,
        arrows: false,
        responsive: [{
            breakpoint: 1201,
            settings: {
                slidesToShow: 3,
                arrows: true,
                centerMode: true,
            }
        },
        {
            breakpoint: 992,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        ]
    });
})
