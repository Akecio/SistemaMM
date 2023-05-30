$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#btn-topo').fadeIn();
        } else {
            $('#btn-topo').fadeOut();
        }
    });

    $('#btn-topo').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
});