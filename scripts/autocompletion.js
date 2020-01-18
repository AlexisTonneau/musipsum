/*$(document).ready(function () {
    //"use strict";
    $('.account').click(function () {
        console.log($(this).html());
        $('#bar').val($(this).html());
    });

    $('#bar').change(function () {
        var input_content = $.trim($(this).val());
        if (!input_content) {
            $('ul>li').show();
        } else {
            $('ul>li').show().not(':contains(' + input_content  + ')').hide();
        }
    });
});*/

$(document).one('submit', $("#form-search"), function (el) {

    const regEx = new RegExp("^[a-zA-Z]+$", "g");
    var bar = document.getElementById('bar');
    if(regEx.test(bar.value)){
        $(this).submit();

    }
    else {
        el.preventDefault();
        $('.id_user').css("color",'red');
        $('.id_user').css("border",'2px solid red');

    }

});

function regex() {
    /*const regEx = new RegExp("^[a-zA-Z]+$", "g");
    console.log(regEx.test($("#form-search".target).val()));
    console.log($(this).val());*/

}