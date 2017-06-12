<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sailor - Bootstrap 3 corporate template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/cubeportfolio.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />


        <!-- Theme skin -->
        <link id="t-colors" href="skins/default.css" rel="stylesheet" />


        <!-- boxed bg -->
        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />


    </head>
    <body>



        <div id="wrapper">

            <!-- start header -->
            <?php require_once './header.php'; ?>
            <!-- end header -->
            <section id="inner-headline">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb">
                                <li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                                <li class="active">Domotique</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="heading">Nos Activit&eacute;s</h4>

                          

                            <div id="grid-container" class="cbp-l-grid-projects">
                                <ul>
                                    <li class="cbp-item graphic">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="img/domo/alarme.jpg" alt="" />
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">
                                                        <a href="details.php" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">D&eacute;tails</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-projects-titl"><a href="details.php">Alarme maison</a></div>
                                        <div class="cbp-l-grid-projects-desc">yhdre eryreyre ery ery er rey rr rey ery y eryer yeryeryery eyery</div>
                                    </li>
                                    <li class="cbp-item graphic">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="img/domo/gache.jpg" alt="" />
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">
                                                        <a href="#" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">D&eacute;tails</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-projects-title"><a href="#">Installation gâche</a></div>
                                        <div class="cbp-l-grid-projects-desc">yhdre eryreyre ery ery er rey rr rey ery y eryer yeryeryery eyery</div>
                                    </li>
                                    
                                </ul>
                            </div>

                            <!--div class="cbp-l-loadMore-button">
                                <a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">VOIR PLUS</a>
                            </div-->

                        </div>
                    </div>
                </div>
            </section>

            <?php require_once './footer.php'; ?>
        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/uisearch.js"></script>
        <script src="js/jquery.cubeportfolio.min.js"></script>
        <script src="js/google-code-prettify/prettify.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/custom.js"></script>


    </body>
</html>