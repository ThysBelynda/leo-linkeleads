$('#close').on('click', function () {
    $('#overlay, #overlay-back').fadeOut(600);
    $('#form').hide();
    $('#close').hide();
    $('#submit').show();
});

$('#close-m').on('click', function () {
    $('#overlay, #overlay-back').fadeOut(600);
    $('#form-m').hide();
    $('#close').hide();
    $('#submit-m').show();
});

$('.try').on('click', function () {
    $('#overlay, #overlay-back').fadeIn(600);
    $('#form').show('fade');
    $('#close').show('fade');
    $('#valid').remove();
    $('#leopouce').remove();
    $('.input-lg').css("opacity", "1");
});

if ($('#userEmail') == ''){
    $('#submit-m').show();
}

$('.try-m').on('click', function () {
    $('#overlay, #overlay-back').fadeIn(600);
    $('#form-m').show('fade');
    $('#close').show('fade');
    $('#valid-m').remove();
    $('.input-lg').css("opacity", "1");
});