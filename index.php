<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <title>ScreenCasta&trade; by Containa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pre-Alpha screencast publication and collection tool">
        <meta name="author" content="Containa">

        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/bootstrap-reader.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.releases.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.details.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.icons.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.header.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.casts.css" rel="stylesheet" type="text/css" media="screen" />

    </head>
	
	<body>

        <!-- Layouts -->
            <!-- mainLayout
            =========================================================================================================-->
        <div class="container-fluid" id="mainLayout">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Max Muster <small>Mircosite</small></h1>
                    <p>I am Max Muster and this is my Oeuvre.</p>

                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <div id="detailsView">
                        Click on the thumbnails on the right to select containa details.
                    </div>
                    <!-- <hr />
                    <div class="alert alert-warning" id="demoRemarksView">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Demo Remarks!</strong>
                        <ul id="demoRemarksList">
                            <li>Miniature will use placeholder instead of canvas Screenshots </li>
                        </ul>
                    </div> -->
                </div><!--/span-->
                <div class="span6">
                    <div class="casts" id="innerFrame">
                        <div class="row-fluid">
                            <div class="span12">
                                <ul class="thumbnails releases" id="folderView">
                                    Loading Releases ...
                                </ul>
                            </div>
                        </div><!--/.well -->
                </div><!--/span-->
            </div><!--/row-->

            <footer>
                <p>
                    Copyright &copy; <span class="icon-adjust"></span> Containa 2012 / <a data-toggle="modal" href="#modalAbout">About</a> / <a data-toggle="modal" href="#modalAboutScreenCasta">About ScreenCasta&trade;</a>
                </p>
                <hr/>
                <div>
                    <span class="label label-info"> Developer Tools</span> -
                    <a data-toggle="modal" href="#modalDebugger">Debugging Console</a>
                </div>
            </footer>

        </div><!--/mainLayout-->

            <!-- readerLayout
            =========================================================================================================-->
        <div class="container-fluid reader hide fade" id="readerView">
            <div class="reader-header">
                <button type="button" class="close" data-dismiss="reader">×</button>
                <h3><span class="icon-eye-open"></span> Reader</h3>
            </div>
            <div class="reader-body">
                <!-- The following is a manual interpretation of tmpl/xhtml demo screencasta containa -->
                <div class="row-fluid">
                    <div class="span12">
                        Loading Containa ...
                    </div>
                </div>
            </div>
            <div class="reader-footer">
                <a href="#" class="btn" data-dismiss="reader">Close</a>
            </div>

        </div>
            <!-- /readerLayout -->


        <!-- Modals - come bundled with Bootstrap -->

            <!-- About
            =========================================================================================================-->
        <div class="modal hide fade" id="modalAbout">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3><span class="icon-adjust"></span> Containa</h3>
            </div>
            <div class="modal-body">
                <h4>What's this?</h4>
                <p>
                    This application is a development of Containa as part of Social Self-Publishing GbR.
                    You have been granted limited access, and are obligated to the none-disclosure agreement.
                </p>
                <h4>Current Demand</h4>
                <p>If you anticipate with our development, we highly encourage you to contact our team at this early stage.
                    <a href="mailto:kanbandmc@gmail.com"><span class="icon-envelope"></span> kanbandmc@gmail.com</a></p>

            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
        </div>

            <!-- AboutScreenCasta
            =========================================================================================================-->
        <div class="modal hide fade" id="modalAboutScreenCasta">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>About Containa&trade; <span class="label label-notice"> pre-alpha! </span></h3>
            </div>
            <div class="modal-body">
                <h4>Functionality:</h4>
                <p>
                    Purpose of this application is to show basic templating capabilities of future Containa apps/seleases.
                </p>
                <h4>Requirements:</h4>
                <p>
                    Tests are on Google Chrome only.<br />
                    We experienced problems with Safari.
                </p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
        </div>

            <!-- Debugger
            =========================================================================================================-->
        <div class="modal hide fade" id="modalDebugger">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Debugging Console</h3>
            </div>
            <div class="modal-body">
                <span class="label label-inverse"> Debugger </span>
                <br>
                <pre class="prettyprint linenums" id="debugger"></pre>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
        </div>



        <!-- Templates/Handlebars/Mustache -->
            <!-- list
            =========================================================================================================-->
        <script id="listTemplate" type="text/x-handlebars-template">
            <div class="row-fluid casts-table" id="castsList">
            </div>
        </script>

            <!-- item
            =========================================================================================================-->
        <script id="itemTemplate" type="text/x-handlebars-template">
            <li class="span3 thumbnail">
                <a href="#detailsView" data-toggle="details" rel="{{containaURI}}" data-source="{{containaAlias}}" class="detailsLink">
                    <img src="{{containaURI}}{{data.assets.thumbnail}}" /></a>
                <div class="caption"><a href="#readerView" data-toggle="reader" rel="{{containaAlias}}" data-source="{{containaAlias}}" class="readerLink"><span class="icon-eye-close"></span></a> {{data.meta.titel}}</div>

            </li>
        </script>

        <!-- containa
        =========================================================================================================-->
        <script id="containaTemplate" type="text/x-handlebars-template">
            <div class="row-fluid">
                <div class="span12">
                    <h1>{{data.meta.titel}}</h1>
                    <div class="meta">
                    {{> meta}}
                    </div>
                    {{#each data.body.chapter}}
                        <h2 class="chapter">Chapter: {{ this.chapterName }}</h2>
                        <p>{{ this.chapterValue }}</p>
                    {{/each}}
                </div>
            </div>
        </script>

            <!-- meta -->
        <script id="metaPartial" type="text/x-handlebars-template">
            <p>
                <h2> {{data.meta.titel}}</h2>
                <span class="icon-user"></span> {{data.meta.author}} /
                <span class="icon-barcode"></span> {{data.meta.id.idValue}} ({{data.meta.id.idType}})</p>
        </script>

            <!-- details
            =========================================================================================================-->
        <script id="detailsTemplate" type="text/x-handlebars-template">

            {{> miniature}}
            {{> meta}}

            {{> social}}
            <h3>Abstract</h3>
            <p>{{data.body.prolog}}</p>
            <small>Someone famous <cite title="Source Title">Source Title</cite></small>

        </script>

            <!-- headerPartial
            =========================================================================================================-->
        <script id="headerPartial" type="text/x-handlebars-template">
            <h4><span class="icon-adjust"></span> {{file.name}} {{file.path}}</h4>
        </script>

            <!-- socialPartial
            =========================================================================================================-->
            <script id="socialPartial" type="text/x-handlebars-template">
                <div class="btn-toolbar" style="margin: 0;">
                    <div class="btn-group">
                        <a class="btn" href="#">Open</a>
                        <a class="btn" href="#">Share!</a>
                        <a class="btn" href="#">Buy!</a>
                    </div><!-- /btn-group -->
                </div>
            </script>

            <!-- miniaturePartial
            =========================================================================================================-->
        <script id="miniaturePartial" type="text/x-handlebars-template">
            <a href="#readerView" data-toggle="reader" rel="{{containaAlias}}" data-source="{{containaAlias}}" class="readerLink  thumbnail span6"><img src="root/{{containaAlias}}/{{data.assets.thumbnail}}" alt="miniature" id="miniature"></a>
        </script>


        <!-- Loading Scripts -->
        <script src="assets/js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui.min.js" type="text/javascript" ></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js" type="text/javascript" ></script>

        <!-- Scrollbehavior/Style -->
        <script src="assets/js/jquery.scrollTo.js" type="text/javascript"></script>
        <script src="assets/js/jquery.localScroll.js" type="text/javascript"></script>
        <script src="assets/js/jquery.serialScroll.js" type="text/javascript"></script>
        <script src="assets/js/facescroll.js" type="text/javascript"></script>

        <!-- Scaffolding -->
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/handlebars-1.0.0.js" type="text/javascript"></script>

        <!-- App // TODO: replace most app components with containa Jquery plugins  -->
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script src="assets/js/app.resize.js" type="text/javascript"></script>
        <script src="assets/js/app.scroll.js" type="text/javascript"></script>
        <script src="assets/js/app.hasher.js" type="text/javascript"></script>
        <script src="assets/js/app.folder.js" type="text/javascript"></script>
        <script src="assets/js/app.reader.js" type="text/javascript"></script>

        <!-- Containa Jquery Plugins -->
        <script src="assets/js/containa-reader.js" type="text/javascript"></script>
    </body>
	
</html>

