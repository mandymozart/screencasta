/*
*
* Is adding the folder View
*
* depdencies: app.hasher.js
* */
$(document).ready( function() {
    $.getJSON('application/getReleases.php', function(data) {

        var template = Handlebars.compile($("#listTemplate").html());
        $('#folderView').html(template());

        var template = Handlebars.compile($("#itemTemplate").html());
        var cast = new Object();
        $.each (data, function(key,val){
            //TODO: cast.title, cast.pages, cast.structure
            $('#debugger').append(' > jsonstring ' + val['data']['meta']['titel'] + '<br/>');
            //Renaming ?
            $.each (val, function (k,v) {
                cast[k] = v;
            });
            $('#castsList').append(template(cast));
        });

        // enable Links for Details
        $('.casts-table a.detailsLink').click( function(){
            var containaAlias = $(this).attr('data-source');
            $('#debugger').append(' > alias:'+containaAlias+'<br/>');
            $.ajax({
                type: "POST",
                url: 'application/getRelease.php',
                dataType: 'json',
                data: { ajax:containaAlias },
                success: function(data) {
                    $.each (data, function(k,v){
                        $('#debugger').append(" > data: "+k+" : "+v);
                    });
                    $('#debugger').append(' > jsonreturned ' + data['data']['meta']['titel']);
                    var template = Handlebars.compile($('#detailsTemplate').html());
                    Handlebars.registerPartial("miniature", $("#miniaturePartial").html());
                    Handlebars.registerPartial("social", $("#socialPartial").html());
                    Handlebars.registerPartial("meta", $("#metaPartial").html());


                $('#detailsView').html(template(data));
                }
            });
        });

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
});
