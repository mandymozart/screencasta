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

// render preset to editorView
function renderPreset(preset){

    var template = Handlebars.compile($('#'+preset+'PresetTemplate').html());
    Handlebars.registerPartial("assetEditor", $('#assetEditorTemplate').html());

    data = new Object();
    data['assetId'] = "1";
    data['else'] = "something";

    $('#editorView').html(template(data));

}

$(document).ready(function(){
    $('footer').hide();

    renderPreset('newspaper');



    $('#myTab1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    $('#myTab2 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    $('#myTab3 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    $('#myTab4 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })

});
