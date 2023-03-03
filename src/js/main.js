//@prepros-prepend plugin/jquery_min.js
//@prepros-prepend plugin/aos.js

$(document).ready(function () {

    //字體偵測
    if ($(window).width() > 767) {
        $('textarea, input').on('change', function () {
            _jf.flush()
        })
    }

    // $('textarea').one('input propertychange', function () {
    //     if (this.value.length) {
    //         setTimeout(() => {
    //             _jf.flush()
    //         }, 5000)
    //     }
    // });
    $('select').on('change', function () {
        setTimeout(() => {
            _jf.flush()
        }, 100)
    })
    //nav active位置(後端補充了)
    // const page = $('main').data('page')
    // $('.container-menu .menu li.main').eq(page).addClass('active')

    AOS.init({
        offset: 20,
        duration: 1000,
        once: true,
    });

    $('body').addClass('loading')

    //----------------------header scroll------------------//
    $('.container-burger').on('click', function () {
        $('header').toggleClass('open')
        if ($('header').hasClass('open')) {
            $('body,html').css('overflow-y', 'hidden')
        } else {
            $('body,html').css('overflow-y', 'auto')
        }
    })
    $(window).on('resize', function () {
        $('header').removeClass('open')
    })

    // menu

    if ($(window).width() < 992) {
        $('.container-icon .member').on('click', function () {
            $(this).toggleClass('open')
        })
    } else {
        $('.container-icon .member').hover(function () {
            $(this).addClass('open')
        }, function () {
            $(this).removeClass('open')
        })
    }

    // submenu
    $('.member .submenu').hover(function () {
        $(this).parent().addClass('open')
    }, function () {
        $(this).parent().removeClass('open')
    })



    // dropmenu
    if ($(window).width() < 992) {
        if ($('.container-menu .main').hasClass('active')) {
            $('.container-menu .main.active').find('.dropmenu').css('display', 'flex')
        }
        $('.main-title').on('click', function () {
            if ($(this).parent().hasClass('active')) {
                $('.main-title').parent().removeClass('active')

                // $('.dropmenu').slideUp()
                $('.dropmenu').css('display', 'none')
            } else {
                $('.main-title').parent().removeClass('active')
                $(this).parent().addClass('active')

                // $('.dropmenu').slideUp()
                $('.dropmenu').css('display', 'none')
                // $(this).siblings('.dropmenu').slideDown()
                $(this).siblings('.dropmenu').css('display', 'flex')
            }
        })
    } else {
        $('.main').hover(function () {
            $(this).children('.dropmenu').addClass('open')
        }, function () {
            $(this).children('.dropmenu').removeClass('open')
        })

        $('.dropmenu').each((i, el) => {
            let floor
            let liHeight = 0
            for (let j = 0; j < el.children.length; j++) {
                liHeight += el.children[j].offsetHeight
                console.log('liHeight', liHeight)
                //原先是195，但有小數點問題改為200
                if (liHeight < 200) {
                    floor = 1
                    $(el).find(`li`).removeClass('line')
                    $(el).find(`li`).addClass('onerow')
                } else {
                    floor = Math.floor(el.children.length / 4) + 1
                    const rest = el.children.length % 4
                    $(el).find(`li:not(:nth-last-child(-n+${rest + 1}))`).addClass('line')
                    $(el).find(`li`).removeClass('onerow')
                    console.log('liHeight', liHeight)
                }
                console.log($(el).find(`li`).eq(1).html(), floor)
                const width = floor * 85
                el.style.width = `${width}px`
            }
        })

        $('.main-title').each((i, el) => {
            const length = $(el).width() / 2 - 42.5
            $(el).siblings('.dropmenu').css('left', `${length}px`)
        })
    }


    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 10) {
            $('header').addClass('scroll')
        } else {
            $('header').removeClass('scroll')
        }
    })

    //----------------------footer slide------------------//
    $('.footer-slide').on('click', function () {
        $('.footer-info').slideToggle();
    })

    //--------------------------minHeight----------------//
    var windowHeight = $(window).height();
    var miniHeight = windowHeight - $('footer').outerHeight() - $('header').outerHeight();
    $('main').css({
        "min-height": miniHeight + "px"
    });

    $(window).on('resize', function (event) {
        var windowHeight = $(this).height();
        var miniHeight = windowHeight - $('footer').outerHeight() - $('header').outerHeight();

        $('main').css({
            "min-height": miniHeight + "px"
        });

    });

    //----------------------top_btn------------------//
    $(window).on('scroll', function () {
        var footerscrolltop = $('footer').outerHeight()
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        if ($(this).scrollTop() > 170) {
            // $(".top_btn").css('display', 'block')
            $(".top_btn").addClass('show')
        } else {
            // $(".top_btn").css('display', 'none')
            $(".top_btn").removeClass('show')
        }
        if (scrollBottom < footerscrolltop) {
            $(".top_btn").addClass('nonfixed')
            $('#pig').addClass('nonfixed')
        } else {
            $(".top_btn").removeClass('nonfixed')
            $('#pig').removeClass('nonfixed')
        }
    })
    $(".top_btn").on('click', function () {
        $("html,body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
    //----------------------TopMenu------------------//
    // if ($('#top-menu-ul').length > 0) {
    //     var menu_ul = $('#top-menu-ul ul').width();
    //     var menu_box = $('#top-menu-ul .item_menu_Box').width();

    //     $('#top-menu-ul').removeClass('open_flexslider');
    //     $('#top-menu-ul .slides').removeAttr('style');
    //     $('#top-menu-ul .item_menu_Box').removeAttr('style');
    //     if (menu_ul > menu_box) {
    //         $('#top-menu-ul').addClass('open_flexslider');
    //     }
    //     slider_ul_list();
    // }
    // var TopMenu = function () {
    //     $(window).on('resize', function () {
    //         //top menu
    //         if ($('#top-menu-ul').length > 0) {
    //             var menu_ul = $('#top-menu-ul ul').width();
    //             var menu_box = $('#top-menu-ul .item_menu_Box').width()

    //             $('#top-menu-ul').removeClass('open_flexslider');
    //             $('#top-menu-ul .slides').removeAttr('style');
    //             $('#top-menu-ul .item_menu_Box').removeAttr('style');

    //             if (menu_ul > menu_box) {
    //                 $('#top-menu-ul').addClass('open_flexslider');
    //             }
    //             slider_ul_list();
    //         }
    //     }).resize();
    // }
    // function slider_ul_list() {
    //     var newscroll = 0;
    //     var move = new Array();
    //     var total_width = 0;
    //     var i = 0;
    //     var sum = 0;
    //     var sumArray = new Array();
    //     var total = $("#top-menu-ul li");
    //     var active = $("#top-menu-ul .slides .active").index();
    //     total_width = $("#top-menu-ul ul").width();//1043.4
    //     total.each(function () {
    //         move[i] = $(this).width();
    //         sum += move[i];//move[i]紀錄每個按鈕的【寬度】(累加)
    //         sumArray[i] = sum;
    //         i++;
    //     });

    //     sum = Math.round((total_width - sum) / i);
    //     for (var j = 0; j < i; j++) move[j] += sum; //move[j]紀錄每個按鈕的【位置】
    //     sum = 0;

    //     for (var ac = 0; ac < active; ac++) sum += move[ac];//move[ac]當前按鈕的【位置】
    //     if ($('#top-menu-ul').hasClass('open_flexslider')) {
    //         var item_w = $("#top-menu-ul ul").width();//ul 所有寬度
    //         var list_width = $('#top-menu-ul .item_menu_Box').width(); //按鈕外層       
    //         sum = sum > (total_width - list_width) ? (total_width - list_width) : sum;  //判斷是否已經移動到最右邊   
    //         if (active > 0) { $('#top-menu-ul .item_menu_Box').scrollLeft(sum); }
    //         else { newscroll = 0; }
    //         //click用
    //         var j = 0;
    //         var move_total = 0;
    //         for (var ac = 0; ac <= active; ac++) {
    //             move_total = ac > 0 ? (move_total + move[ac - 1]) : 0;
    //             if (move_total > (total_width - list_width)) move_total = (total_width - list_width);
    //             else j = ac;
    //         }
    //         (ac - j) > 1 ? j++ : "";
    //         move_total = Math.floor(move_total);
    //         $(".item_menu_Box").on('scroll', function () {
    //             newscroll = $('#top-menu-ul .item_menu_Box').scrollLeft();
    //             // 左右霧霧的區域
    //             if (newscroll > 0) {
    //                 $('#top-menu-ul').addClass('scrleft');
    //                 console.log(1)
    //             } else {
    //                 $('#top-menu-ul').removeClass('scrleft');
    //             }
    //             if (newscroll >= (total_width - list_width)) {
    //                 $('#top-menu-ul').removeClass('scrright');

    //             } else {
    //                 $('#top-menu-ul').addClass('scrright');
    //                 console.log(2)
    //             }
    //         });
    //         $("#top-menu-ul .flex-next").on('click', function () {
    //             if (newscroll == move_total) {
    //                 if (move_total < (total_width - list_width) && j < i) {
    //                     j++;
    //                     move_total = 0;
    //                     for (var k = 0; k < j; k++) move_total += move[k];
    //                     move_total = move_total > (total_width - list_width) ? (total_width - list_width) : move_total;
    //                     move_total = Math.floor(move_total);
    //                     $('#top-menu-ul .item_menu_Box').stop().animate({ scrollLeft: move_total }, 600, '');
    //                 }
    //             } else {
    //                 var m_switch = 0;
    //                 for (var k = 0; k < i; k++) {
    //                     if (m_switch == 0 && newscroll < sumArray[k]) {
    //                         m_switch = 1;
    //                         move_total = Math.floor(sumArray[k]);
    //                         $('#top-menu-ul .item_menu_Box').stop().animate({ scrollLeft: move_total }, 600, '');
    //                         j = k + 1;
    //                     }
    //                 }
    //             }
    //             return false;
    //         });
    //         $("#top-menu-ul .flex-prev").on('click', function () {
    //             if (newscroll == move_total) {
    //                 if (move_total > 0 && j > 0) {
    //                     j--;
    //                     move_total = 0;
    //                     for (var k = 0; k < j; k++) move_total += move[k];
    //                     move_total = move_total > (total_width - list_width) ? (total_width - list_width) : move_total;
    //                     move_total = Math.floor(move_total);
    //                     $('#top-menu-ul .item_menu_Box').stop().animate({ scrollLeft: move_total }, 600, '');
    //                 }
    //             } else {
    //                 var m_switch = 0;
    //                 for (var k = j; k >= 0; k--) {
    //                     if (m_switch == 0 && newscroll > sumArray[k]) {
    //                         m_switch = 1;
    //                         move_total = Math.floor(sumArray[k]);
    //                         $('#top-menu-ul .item_menu_Box').stop().animate({ scrollLeft: move_total }, 600, '');
    //                         j = k + 1;
    //                     }
    //                 }
    //             }
    //             return false;
    //         });
    //     }
    // }
    // TopMenu()
    // slider_ul_list()
})

