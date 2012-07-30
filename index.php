<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <title>ScreenCasta&trade; by Containa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pre-Alpha screencast publication and collection tool">
        <meta name="author" content="Containa">

        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.icons.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="assets/css/containa.screencasta.header.css" rel="stylesheet" type="text/css" media="screen" />

    </head>
	
	<body>

        <!-- Layouts -->
            <!-- mainLayout
            =========================================================================================================-->
        <div class="container-fluid" id="mainLayout">
            <div class="row-fluid">
                <div class="span6">
                    <div class="well casts">
                        <div id="folderView"></div>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span6">
                    <div id="headerView">
                        <h1>ScreenCasta&trade; <small>Share, Sell & Collect presentations!</small></h1>
                        <p>Select casts from menu and load file info's here.</p>
                    </div>
                    <div id="detailsView"></div>
                    <hr />
                    <div class="alert alert-warning" id="demoRemarksView">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Demo Remarks!</strong>
                        <ul id="demoRemarksList">
                            <li>Miniature will use placeholder instead of canvas Screenshots </li>
                        </ul>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <hr>
            <footer>
                <p>
                    Copyright &copy; <span class="icon-labs"></span> Containa 2012 / <a data-toggle="modal" href="#modalAbout">About</a> / <a data-toggle="modal" href="#modalAboutScreenCasta">About ScreenCasta&trade;</a>
                </p>
                <hr/>
                <div>
                    <span class="label label-info"> Developer Tools</span> -
                    <a data-toggle="modal" href="#modalUpload">Upload</a> /
                    <a data-toggle="modal" href="#modalDebugger">Debugging Console</a>
                </div>
            </footer>

        </div><!--/mainLayout-->

            <!-- readerLayout
            =========================================================================================================-->
        <div class="container-fluid" id="readerLayout">
            <div class="row-fluid">

            </div>
        </div>
            <!-- /readerLayout -->


        <!-- Modals - come bundled with Bootstrap -->
            <!-- Upload
            =========================================================================================================-->
        <div class="modal hide fade" id="modalUpload">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Upload</h3>
            </div>
            <div class="modal-body">
                <p>The uploader let's you share you project and all the individual tracks to your cloud. Select up to 8 files for upload. <span class="label label-warning"> WAV format only </span> </p>
                <div id="walkThrough" class="alert alert-info">
                    <strong>Walk-Through</strong>
                    <span id="walkThroughBody">
                        Runtime error!
                    </span>
                </div>
                <div id="uploadView">
                    <div id="uploadList" class="well">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a id="pickfiles" class="btn btn-info" href="javascript:;">Select Files</a>
                <a id="uploadfiles" class="btn btn-primary" href="javascript:;">Start Upload</a>
            </div>
        </div>

            <!-- About
            =========================================================================================================-->
        <div class="modal hide fade" id="modalAbout">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3><span class="icon-labs"></span> Containa</h3>
            </div>
            <div class="modal-body">
                <h4>What's the intend of the Labs?</h4>
                <p>
                    This application is a development of Containa as part of Social Self-Publishing GbR.
                    You have been granted limited access, and are obligated to the none-disclosure agreement.
                </p>
                <h4>Current Demand</h4>
                <p>If you anticipate with our development, we highly motive you to contact our team at this early stage.
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
                <h3>About ScreenCasta&trade; <span class="label label-notice"> pre-alpha! </span></h3>
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
            <table class="table casts-table" id="castsList">
            </table>
        </script>

            <!-- item
            =========================================================================================================-->
        <script id="itemTemplate" type="text/x-handlebars-template">
            <tr>
                <td>
                    {{cast.title}} <span class="badge">{{cast.pages}}</span>
                </td>
            </tr>
        </script>

            <!-- details
            =========================================================================================================-->
        <script id="detailsTemplate" type="text/x-handlebars-template">
            {{> header}}
            {{> miniatur}}
        </script>

            <!-- headerPartial
            =========================================================================================================-->
        <script id="headerPartial" type="text/x-handlebars-template">
            <h4><span class="icon-music"></span> {{file.name}}</h4>
        </script>

            <!-- miniaturePartial
            =========================================================================================================-->
        <script id="miniaturePartial" type="text/x-handlebars-template">
            <img src="http://placehold.it/300x200" alt="miniatur" id="miniature">
        </script>


        <!-- Loading Scripts -->
        <script src="assets/js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>


        <!-- Scaffolding -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/handlebars-1.0.0.js" type="text/javascript"></script>

        <!-- App -->
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script src="assets/js/app.resize.js" tape="text/javascript"></script>
        <script src="assets/js/app.hasher.js" type="text/javascript"></script>
        <script src="assets/js/app.folder.js" type="text/javascript"></script>

    </body>
	
</html>

