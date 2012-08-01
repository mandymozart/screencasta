Containa - Screencasts

Concept:

Easy Demonstration of Static Screen Presentations for internal promotion, showcases, demos.
These documents serve the purpose to promote the concept of the platform as well as show possible looks and feel of the platform.

Requirements:

Dependencies:

Features:


ToDo:
- rewrite basic app controller with backbone (replace app.hasher.js) after proof of concept
- Miniature creation with html2canvas.js canvas2image
- listView will include Bootstrap ul.thumbnails and canvas

Notes:
- Cross Domain Redirects
    Snippet:
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )

- Scrolling Issues
    Snippet:
        $(function() {
            $('#topbar').scrollSpy()

            $('#topbar ul li a').bind('click', function(e) {
                e.preventDefault();
                target = this.hash;
                console.log(target);
                $.scrollTo(target, 1000);
           });
        });​