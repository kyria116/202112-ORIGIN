//@prepros-prepend plugin/jquery.twzipcode.min.js
$(".selections-wrap").twzipcode({
    onCountySelect: function () {
        if ($(this).val() == "") {
            $("select[name=county],select[name=invoice_county]").addClass('chsel');
        } else {
            $("select[name=county],select[name=invoice_county]").addClass('chsel');
        }
    },
    onDistrictSelect: function () {
        if ($(this).val() == "") {
            $("select[name=district],select[name=invoice_district]").removeClass('chsel');
        } else {
            $("select[name=district],select[name=invoice_district]").addClass('chsel');
        }
    },
    zipcodeIntoDistrict: true,
});
$('input[type=radio][name=paid]').on('change', function () {
    if ($('#transfer').is(':checked')) {
        $('.payType-detail').stop().slideDown();
    } else {
        $('.payType-detail').stop().slideUp();
    }
})


$('input[name=invoice]').on('click', function () {
    const checked = $("input[name=invoice]:checked").val()
    if (checked == 'duplicate') {
        $('.invoice-d').css('display', 'none')
    } else {
        $('.invoice-d').css('display', 'flex')
    }
})