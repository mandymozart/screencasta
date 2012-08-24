$(document).ready(function(){
    var template = Handlebars.compile($('#pageTemplate').html());

    // test array
    data = new Object();
    data['pagenumbers'] = ["1","2","3","4","5"];

    $('#pagesView').html(template(data));
    console.log(data);
});