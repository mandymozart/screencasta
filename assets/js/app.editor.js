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

    $('#contentView').freshereditor({toolbar_selector: "#toolbar", excludes: ['removeFormat', 'insertheading4','backcolor','fontname','FontSize','strikethrough','forecolor','justifyleft','justifyright','justifycenter','justifyfull','createlink','insertimage','insertorderedlist','insertunorderedlist','insertparagraph','insertheading1','insertheading2','insertheading3','blockquote','code','superscript','subscript']});
    $("#contentView").freshereditor("edit", true);
    $('#contentView').focus( function(){

    });
    $("#contentView").on('change', function() {
    console.log("content changed");
    });

    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })

});
