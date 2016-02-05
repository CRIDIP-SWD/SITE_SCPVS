<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('')); ?>style.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?= $constante->getUrl(array('js/')); ?>jquery.js"></script>
    <script type="text/javascript" src="<?= $constante->getUrl(array('js/')); ?>plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title><?= \App\constante::NOM_SITE; ?></title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header floating-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php?view=index" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?= $constante->getUrl(array(), false, true); ?>logo/scpvs.png" alt="Canvas Logo"></a>
                    <a href="index.php?view=index" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?= $constante->getUrl(array(), false, true); ?>logo/scpvs.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li><a href="index.php?view=index"><div>Accueil</div></a></li>
                        <li><a href="index.php?view=blog"><div>Articles</div></a></li>
                        <li><a href="index.php?view=mission"><div>Nos Missions</div></a></li>
                        <li><a href="index.php?view=partenaire"><div>Nos Partenaires</div></a></li>
                        <li><a href="index.php?view=contact"><div>Contactez-nous !</div></a></li>
                    </ul>


                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <?= $content; ?>

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <div style="background: url('assets/images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Siège de l'association:</strong><br>
                                    15 Rue Lacépède<br>
                                    75005 PARIS<br>
                                </address>
                                <abbr title="Phone Number"><strong>Tél:</strong></abbr> 07 83 14 41<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> contact@scpvs.org
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Sitemap</h4>

                            <ul>
                                <li><a href="index.php?view=index">Accueil</a></li>
                                <li><a href="index.php?view=blog">Articles</a></li>
                                <li><a href="index.php?view=mission">Missions</a></li>
                                <li><a href="index.php?view=partenaire">Partenaires</a></li>
                                <li><a href="index.php?view=contact">Nous Contactez</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Articles récents</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">16% d'obèse en France</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>04 Janvier 2016</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $("#widget-subscribe-form").validate({
                                submitHandler: function(form) {
                                    $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                    $(form).ajaxSubmit({
                                        target: '#widget-subscribe-form-result',
                                        success: function() {
                                            $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                            $('#widget-subscribe-form').find('.form-control').val('');
                                            $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Suivez nous</strong><br>sur Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Souscrivez </strong><br>au flux RSS</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2016. SCPVS Tout Droit Reservé suivant les termes des législation en vigueurs .<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> contact@scpvs.org <span class="middot">&middot;</span> <i class="icon-headphones"></i> +33 7 83 78 14 41
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?= $constante->getUrl(array('js/')); ?>functions.js"></script>

</body>
</html>