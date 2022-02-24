//@prepros-prepend plugin/jquery.twzipcode.min.js
$(".selections-wrap").twzipcode({
    onCountySelect: function () {
        if ($(this).val() == "") {
            $("select[name=county]").addClass('chsel');
        } else {
            $("select[name=county]").addClass('chsel');
        }
    },
    onDistrictSelect: function () {
        if ($(this).val() == "") {
            $("select[name=district]").removeClass('chsel');
        } else {
            $("select[name=district]").addClass('chsel');
        }
    },
    zipcodeIntoDistrict: true,
});