jQuery(document).ready(function ($) {

    //mouseover e mouseout dos bts da home
    $('.botao-home').mouseover(function () {
        $(this).html($(this).data('desc'));
        $(this).toggleClass('btn-ativo');
    });
    $('.botao-home').mouseout(function () {
        $(this).html($(this).data('tit'));
        $(this).toggleClass('btn-ativo');
    });

});
