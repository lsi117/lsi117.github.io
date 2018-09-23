// unhide page
$(document).ready(function () {
    $('div.hidden').fadeIn(6000).removeClass('hidden');
});
// end hidden page fade in script


// for scroll button
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 700);
        return false;
    });
});
// end scroll script

