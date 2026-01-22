$(document).ready(function() {
    const slideWidth = 300;
    const $slides = $('#slides');

    $('#next').click(function() {
        $slides.animate({ left: '-=' + slideWidth + 'px' });
    });

    $('#prev').click(function() {
        $slides.animate({ left: '+=' + slideWidth + 'px' });
    });
});
