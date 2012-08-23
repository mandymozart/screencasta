/* sizing the single page app */
function sizing(){
    var window_height = $(window).height(),
        window_width = $(window).width(),
        offset = $('#innerFrame').offset(),
        footer = $('footer').outerHeight(true),
        offset_reader = $('.reader > .reader-body').offset(),
        header_reader = $('.reader > .reader-header').outerHeight(true),
        footer_reader = $('.reader > .reader-footer').outerHeight(true);

    //scale Casts
    $('#debugger').append(' > About to scale .casts #innerFrame> resizing w:'+ window_height +' - ( o:' + offset.top + ' - f:' + footer + ' )');
    $('#innerFrame').height(window_height - footer - offset.top - 60);
    $('#debugger').append(' > resized: #mainLayout:'+$('#mainLayout').outerHeight());


    //scale Reader
    $('#debugger').append(' > About to scale .reader #innerFrame> resizing w:'+ window_height +' - ( o:' + offset_reader.top + ' - f:' + footer_reader + ' - h:' + header_reader + ' )');
    $('.reader').width(window_width).height(window_height);
    $('.reader > .reader-body').height(window_height-30 - footer_reader - header_reader);

    //scale Stream
    $('#debugger').append(' > Scaling .stream'+window_height+ '<br />');
    $('#streamView').height(window_height-offset);
}

$(window).resize(function(){
    sizing();
});

$(document).ready(function(){
    sizing();
});
