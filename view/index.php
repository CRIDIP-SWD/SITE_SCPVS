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
                <h3>Faite un dons à l'association et aider 7 millions de français à ce sentir<br>mieux dans leur corps.</h3>
                <a href="index.php?view=don" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Faire un don</span></a>
            </div>
        </div>

        <div class="container clearfix">
            <h2>A la Une</h2>
            <div id="posts" class="small-thumbs">
                <div class="entry clearfix">
                    <div class="entry-image">
                        <a data-lightbox="image" href="<?= $constante->getUrl(array(), false, true); ?>article/obesite_monde.jpg"><img alt="16% d'obèse en france" src="<?= $constante->getUrl(array(), false, true); ?>article/obesite_monde.jpg" class="image_fade" style="opacity: 1;"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="index.php?view=blog&sub=article&ref=1">16% d'obèse en france</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 04 Janvier 2016</li>
                            <li><a href="#"><i class="icon-user"></i> SCPVS</a></li>
                            <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Obésité</a></li>
                            <!--<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>-->
                            <!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
                        </ul>
                        <div class="entry-content">
                            <p>Le constat est alarmant, lors des derniers recensements de 2015, le pourcentage de la population française atteint d'obésité est de 16%...</p>
                            <a class="more-link" href="index.php?view=blog&sub=article&ref=1">En savoir plus...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- #content end -->