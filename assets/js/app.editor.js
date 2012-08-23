$('.append').click(function(){
    // fetch content from textfield
    var renderedContent = $("#contentView").text();

    data = new Object ();
    data["assetType"] = "text";
    data["content"] = renderedContent;

    $('#debugger').append(' > content' +data['content']);
    var template = Handlebars.compile($("#assetTemplate").html());
    $('#streamView').prepend(template(data));

    $('.asset').click(function(){
        $('.asset').attr('contenteditable',true);
    })

});



$(document).ready(function(){
    $('footer').hide();
});