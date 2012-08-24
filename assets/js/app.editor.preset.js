$(document).ready(function(){
    /* Load Document via Ajax */
    $("#presetDropdown li a").click(function() {
        var source = $(this).attr('data-preset');
        console.log(this);
        renderPreset(source);
    });
});
