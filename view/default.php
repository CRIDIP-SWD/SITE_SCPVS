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
    <title>Header - Floating Style | Canvas</title>

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
                    <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li><a href="index.php?view=index"><div>Accueil</div></a></li>
                        <li><a href="index.php?view=mission"><div>Nos Missions</div></a></li>
                        <li><a href="index.php?view=partenaire"><div>Nos Partenaires</div></a></li>
                        <li><a href="index.php?view=contact"><div>Contactez-nous !</div></a></li>
                    </ul>


                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('<?= $constante->getUrl(array(), false, true); ?>slide/slide_1.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Bienvenue sur le site de <strong>SCPVS</strong></h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200"><strong>S</strong>olutions <strong>C</strong>hirurgies <strong>P</strong>athologies <strong>V</strong>itale <strong>S</strong>anté</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
        </div>

        <script>
            jQuery(document).ready(function($){
                var swiperSlider = new Swiper('.swiper-parent',{
                    paginationClickable: false,
                    slidesPerView: 1,
                    grabCursor: true,
                    onSwiperCreated: function(swiper){
                        $('[data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var toAnimateDelay = $(this).attr('data-caption-delay');
                            var toAnimateDelayTime = 0;
                            if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                            if( !$toAnimateElement.hasClass('animated') ) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                setTimeout(function() {
                                    $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                    },
                    onSlideChangeStart: function(swiper){
                        $('#slide-number-current').html(swiper.activeIndex + 1);
                        $('[data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                        });
                    },
                    onSlideChangeEnd: function(swiper){
                        $('#slider .swiper-slide').each(function(){
                            if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                        });
                        $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                            if($(this).find('video').length > 0) {
                                if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                            }
                        });
                        if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                        $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var toAnimateDelay = $(this).attr('data-caption-delay');
                            var toAnimateDelayTime = 0;
                            if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                            if( !$toAnimateElement.hasClass('animated') ) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                setTimeout(function() {
                                    $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                    }
                });

                $('#slider-arrow-left').on('click', function(e){
                    e.preventDefault();
                    swiperSlider.swipePrev();
                });

                $('#slider-arrow-right').on('click', function(e){
                    e.preventDefault();
                    swiperSlider.swipeNext();
                });

                $('#slide-number-current').html(swiperSlider.activeIndex + 1);
                $('#slide-number-total').html(swiperSlider.slides.length);
            });
        </script>

    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="promo promo-full promo-border header-stick bottommargin-lg">
                <div class="container clearfix">
                    <h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
                    <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
                    <a href="#" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Browse Now</span></a>
                </div>
            </div>

            <div class="container clearfix">

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-screen i-alt"></i></a>
                        </div>
                        <h3>Responsive Layout</h3>
                        <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-eye i-alt"></i></a>
                        </div>
                        <h3>Retina Ready Graphics</h3>
                        <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-beaker i-alt"></i></a>
                        </div>
                        <h3>Powerful Performance</h3>
                        <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-stack i-alt"></i></a>
                        </div>
                        <h3>Premium Sliders Included</h3>
                        <p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-tint i-alt"></i></a>
                        </div>
                        <h3>Unlimited Color Options</h3>
                        <p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-text-width i-alt"></i></a>
                        </div>
                        <h3>CUSTOMIZABLE FONTS</h3>
                        <p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
                    </div>
                </div>

                <div class="clear"></div><div class="line"></div>

                <div id="oc-clients-full" class="owl-carousel image-carousel">

                    <a href="#"><img src="images/clients/1.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/2.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/3.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/4.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/5.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/6.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/7.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/8.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/9.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/10.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/11.png" alt="Clients"></a>
                    <a href="#"><img src="images/clients/12.png" alt="Clients"></a>

                </div>

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        var ocClients = $("#oc-clients-full");

                        ocClients.owlCarousel({
                            items: 6,
                            margin: 30,
                            loop: true,
                            nav: false,
                            autoplay: true,
                            dots: false,
                            autoplayHoverPause: true,
                            responsive:{
                                0:{ items:2 },
                                480:{ items:3 },
                                768:{ items:4 },
                                992:{ items:5 },
                                1200:{ items:6 }
                            }
                        });

                    });

                </script>

            </div>

        </div>

    </section><!-- #content end -->

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

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

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
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
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

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
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

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
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