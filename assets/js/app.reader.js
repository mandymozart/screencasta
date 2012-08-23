$(document).ready( function(){

//enable Links for Reader
$('.readerLink').click( function(){
    var containaAlias = $(this).attr('rel');
    $('#debugger').append(' > alias:'+containaAlias+'<br/>');
    $.ajax({
        type: "POST",
        url: 'application/getRelease.php',
        dataType: 'json',
        data: { ajax:containaAlias },
        success: function(data) {
            $('#debugger').append(' > jsonreturned ' + data);
            var template = Handlebars.compile($('#containaTemplate').html());
            Handlebars.registerPartial("header", $("#headerPartial").html());
            Handlebars.registerPartial("meta", $("#metaPartial").html());

            $('.reader-body').html(template(data));
        }
    });
});

});