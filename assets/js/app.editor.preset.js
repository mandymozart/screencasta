$(document).ready(function(){
    /* Load Document via Ajax */
    $("#presetDropdown li a").click(function() {
        var source = $(this).attr('data-preset');
        var name = $(this).text();
        console.log(this);
        renderPreset(source);
        $('#presetName').text(name);
    });
});
