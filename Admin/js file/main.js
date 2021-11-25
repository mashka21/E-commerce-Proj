$(document).ready(function() {
    $('.menu-btn').click(function(){
        $('.sidebar').css({
            'width': '60px',
            'font-size': '25px'
        });
        $('.text-link').hide();
        // $('.close-btn').show(); ---didn't use b/s some problem on my css file
        $('.close-btn').css({
            'visibility': 'visible',
        });
        $('.menu-btn').hide();
        
    });

    $('.close-btn').click(function(){
        $('.sidebar').css({
            'width': '300px',
            'font-size': '16px'
        });

        $('.text-link').show();
        $('.menu-btn').show();
        $('.close-btn').css({
            'visibility': 'hidden',
        });
    });

    $('.add_category').click(function() {
        $('#catModel').modal('show');
        $('.modal-title').text("Add categories");
    });
});