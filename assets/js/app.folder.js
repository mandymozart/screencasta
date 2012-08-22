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
        var i = 0;
        var cast = new Object();
        $.each (data, function(key,val){
            //TODO: cast.title, cast.pages, cast.structure
            $('#debugger').append(' > jsonstring ' + val['data']['meta']['titel']);
            //Renaming ?
            $.each (val, function (k,v) {
                cast[k] = v;
            });
            i++;
            $('#castsList').append(template(cast));
            $('#debugger').append(' > attached relese ' + i + '<br/>');
        });

        // enable Links
        $('.casts-table a').click( function(){
            var template = Handlebars.compile($("#detailsTemplate").html());
            Handlebars.registerPartial("header", $("#headerPartial").html());
            Handlebars.registerPartial("miniature", $("#miniaturePartial").html());

            var file = $(this).attr('rel');
            $('#debugger').append(' > showDetails ' + file);
            var file_arr = file.split('/');
            var path = file_arr.join('/');
            var miniature = "cover.png";
            var data = {
                file: {
                    "path": path,
                    "name": file_arr.pop(),
                    "miniature": miniature }
            };

            $('#detailsView').html(template(data));

        });
    });
});
