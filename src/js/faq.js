$('.footer-other .lists li').eq(2).addClass('active')

$('.questionList .question').on('click', function () {
    $(this).parent().toggleClass('active')
    $(this).parent().siblings().removeClass('active').children('.answer').slideUp()
    $(this).siblings().stop().slideToggle()
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

//切換
$('.menulistPc li').on('click', function () {
    const index = $(this).index()
    $(this).addClass('active').siblings().removeClass('active')
    if (index == 0) {
        $('.questionList >div').css('display', 'block')
    } else {
        $('.questionList >div').eq(index).css('display', 'block').siblings().css('display', 'none')
    }
})
$('.select-options li').on('click', function () {
    const index = $(this).index()
    console.log(index)
    if (index == 0) {
        $('.questionList >div').css('display', 'block')
    } else {
        $('.questionList >div').eq(index).css('display', 'block').siblings().css('display', 'none')
    }
})

