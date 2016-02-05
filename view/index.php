<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('<?= $constante->getUrl(array(), false, true); ?>slide/slide_1.jpg');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2 data-caption-animate="fadeInUp" style="color: #0b0b0b;">Bienvenue sur le site de <strong>SCPVS</strong></h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="200" style="color:#0b0b0b;"><strong>S</strong>olutions <strong>C</strong>hirurgies <strong>P</strong>athologies <strong>V</strong>itale <strong>S</strong>anté</p>
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
                <h3>Faite un dons à l'association et aider 7 millions de français à ce sentir<br> mieux dans leur corps.</h3>
                <a href="index.php?view=don" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Faire un dons</span></a>
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