$(document).ready(function(){
    $('.button').click(function(){
        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter');

        if(filter == 'all'){
            $('.video .image').show(400);
            $('#video-text').text('');
        }
        else{
            $('.video .image').not('.' + filter).hide(200);
            $('.video .image').filter('.' + filter).show(200);
            $('#video-text').text('');
        }
    });

    $('.video video').click(function(){
        var text = $(this).attr('data-text');
        $('#video-text').text(text);
    });
});

