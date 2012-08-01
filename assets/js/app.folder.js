/*
*
* Is adding the folder View
*
* depdencies: app.hasher.js
* */
$(document).ready( function() {
    $.ajax({
        type: 'POST',
        url: 'application/helper.folderxml.json.php',
        data: {ajax:hasher},
        dataType: 'json',
        success: function(data) {
            // TODO: call for error message from json
            // TODO: Proper JSON Array
            $('#debugger').append(' > received json [ <i>'+data+'</i> ]');
            var template = Handlebars.compile($("#listTemplate").html());
            $('#folderView').html(template());

            $('#debugger').append(' > attached list');
            // interate through returns
            var template = Handlebars.compile($("#itemTemplate").html());
            var i = 0;
            var cast = new Object();
            $.each (data, function(key,val){
                //TODO: cast.title, cast.pages, cast.structure
                $('#debugger').append(' > each data ' + val );
                $.each (val, function (k,v) {
                    cast[k] = v;
                });
                i++;
                $('#castsList').append(template(cast));
                $('#debugger').append(' > attached cast ' + i);
            });
            $('#debugger').append(' > converted ' + i + ' json casts');

            // enable Links
            $('.track > a').click( function(){
                var template = Handlebars.compile($("#detailsTemplate").html());
                Handlebars.registerPartial("header", $("#headerPartial").html());
                Handlebars.registerPartial("miniature", $("#miniaturePartial").html());

                var file = $(this).attr('rel');
                $('#debugger').append(' > showDetails ' + file);
                var file_arr = file.split('/');
                var path = file_arr.join('/');
                var output = path.substr(0, path.lastIndexOf('.')) || path;
                var miniature = output + ".png";
                var data = {
                    file: {
                        "path": path,
                        "name": file_arr.pop(),
                        "miniature": miniature }
                };

                $('#detailsView').html(template(data));

            });
        }
    });
});
