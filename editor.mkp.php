<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
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
    <link href="assets/css/containa.editor.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/containa.screencasta.icons.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/containa.screencasta.header.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/containa.screencasta.casts.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/containa.editor.assetsView.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<body>

<!-- Layouts -->
<!-- mainLayout
=========================================================================================================-->
<div class="container-fluid" id="mainLayout">
    <div class="row-fluid">
        <div class="span6">
            <div class="well casts" id="innerFrame">

                <div id="assetsView">
                    <h6>New Asset</h6>
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button class="btn"><i class="icon-tag"></i> Chapter</button>
                                <button class="btn"><i class="icon-align-justify"></i> Paragraph</button>
                                <button class="btn"><i class="icon-picture"></i> Picture</button>
                                <button class="btn"><i class="icon-film"></i> Video</button>
                                <button class="btn"><i class="icon-music"></i> Music</button>
                                <button class="btn"><i class="icon-ok-circle disabled"></i> Advanced</button>
                            </div>
                        </div>
                    <h6>Import existing Containa as Asset</h6>
                    <ul class="thumbnails">
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/asset-containa/cover.png" alt="" />
                            </a>
                        </li>
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/text/cover.png" alt="" />
                            </a>
                        </li>
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/containa-user/cover.png" alt="" />
                            </a>
                        </li>
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/portal/cover.png" alt="" />
                            </a>
                        </li>
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/editor/cover.png" alt="" />
                            </a>
                        </li>
                        <li class="span2">
                            <a href="#" class="thumbnail">
                                <img src="root/containa-server/cover.png" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
                <h6>Edit your new Asset </h6>
                <div class="tools">
                    <div class="btn-toolbar tools">
                        <div class="btn-group">
                            <button class="btn"><i class="icon-align-left"></i></button>
                            <button class="btn"><i class="icon-align-center"></i></button>
                            <button class="btn"><i class="icon-align-right"></i></button>
                        </div>
                        <div class="btn-group">
                            <button class="btn"><span class="icon-font"></span></button>
                            <button class="btn" onclick="javascript:document.execCommand(‘bold’,null,null);"><i class="icon-bold"></i></button>
                            <button class="btn"><span class="icon-italic"></span></button>
                        </div>
                        <div class="btn-group">
                            <button class="btn"><span class="icon-gift"></span></button>
                            <a class="btn" href="#">Presets</a>
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Pull Preset from your File</a></li>
                                <li><a href="">Generic Presets</a></li>
                                <li><a href="">Premium Presets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="contentView well well-small" contenteditable="true"">
                    <h1>This Asset Box Creator Is the Beauty</h1>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat. </p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.

                </div>
                <button class="btn edit btn-large" style="width:100%"><span></span> <span class="btn-text">Append</span></button>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span6">
            <div id="headerView">
                <h1>Your Containa Stream</h1>
                <p>Create, browse content on the left and Append it to the right.</p>
            </div>
            <div id="detailsView">
                <div class="asset" contenteditable="true">
                    <p>Code or Special Quote Asset here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.</p>
                </div>
                <div class="asset" contenteditable="true">
                    <h1>This Asset Box Creator Is the Beauty</h1>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat. </p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.
                </div>
                <div class="asset" contenteditable="true">
                        <h2>
                            <img src="root/asset-containa/cover.png" width="311" style="float:left; margin-right:20px;
  margin-bottom:10px" alt="Text?">Oder denkt er an ...?
                        </h2>

                    <p>
                        Manche Texte erschlie&szlig;en sich nur aus der n&ouml;tigen Distanz. <!-- usw. -->
                        Aber das hier, das ist richtiger Text. Und er flie&szlig;t sogar,
                        n&auml;mlich um die Grafik.<br style="clear:both">
                    </p>
                </div>
            </div>
            <hr />
            <div class="alert alert-warning" id="demoRemarksView">
                <button class="close" data-dismiss="alert">×</button>
                <strong>Demo Remarks!</strong>
                <ul id="demoRemarksList">
                    <li>static Demo</li>
                </ul>
            </div>
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
            <div class="span12"><img src="/.../" id="imageMaster"/></div>
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
    <div class="row-fluid casts-table" id="castsList">
    </div>
</script>

<!-- item
=========================================================================================================-->
<script id="itemTemplate" type="text/x-handlebars-template">
    <li class="span4">
        <a href="#readerView" data-toggle="reader" rel="{{containaAlias}}" data-source="{{containaAlias}}" class="readerLink"><span class="icon-eye-close"></span></a> {{data.meta.titel}}
        <a href="#detailsView" data-toggle="details" rel="{{containaURI}}" class="thumbnail detailsLink">
            <img src="{{containaURI}}cover.png" /></a>


    </li>
</script>

<!-- containa
=========================================================================================================-->
<script id="containaTemplate" type="text/x-handlebars-template">
    <div class="row-fluid">
        <div class="span12">
            <h1>{{meta.titel}}</h1>
            {{> meta}}
        </div>
    </div>
</script>

<!-- meta -->
<script id="metaPartial" type="text/x-handlebars-template">
    <p>
        <span class="icon-adjust"></span> {{meta.titel}}<br/>
        <span class="icon-user"></span> {{meta.author}}<br/>
        <span class="icon-barcode"></span> {{meta.id.idValue}} ({{meta.id.idType}})</p>
</script>

<!-- details
=========================================================================================================-->
<script id="detailsTemplate" type="text/x-handlebars-template">
    {{> header}}
    {{> miniature}}
</script>

<!-- headerPartial
=========================================================================================================-->
<script id="headerPartial" type="text/x-handlebars-template">
    <h4><span class="icon-adjust"></span> {{file.name}} {{file.path}}</h4>
</script>

<!-- miniaturePartial
=========================================================================================================-->
<script id="miniaturePartial" type="text/x-handlebars-template">
    <img src="{{file.path}}{{file.miniature}}" alt="miniatur" id="miniature">
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

<!-- Containa Jquery Plugins -->
<script src="assets/js/containa-reader.js" type="text/javascript"></script>
</body>

</html>
