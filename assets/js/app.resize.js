/* sizing the single page app */
function sizing(){
    var window_height = $(window).height(),
        offset = $('#innerFrame').offset(),
        footer = $('footer').outerHeight(true);

    $('#debugger').append(' > resizing w:'+ window_height +' - ( o:' + offset.top + ' - f:' + footer + ' )')

    //scale
    $('#innerFrame').height(window_height - footer - offset.top - 60);

    $('#debugger').append(' > resized: #mainLayout:'+$('#mainLayout').outerHeight());
}

$(window).resize(function(){
    sizing();
});

$(document).ready(function(){
    sizing();
});
