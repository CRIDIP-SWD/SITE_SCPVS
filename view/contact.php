<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Nous Contactez</h1>
        <ol class="breadcrumb">
            <li><a href="#"><?= \App\constante::NOM_SITE; ?></a></li>
            <li class="active">Contact</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Contact Form & Map Overlay Section
============================================= -->
<section id="map-overlay">

    <div class="container clearfix">

        <!-- Contact Form Overlay
        ============================================= -->
        <div id="contact-form-overlay-mini" class="clearfix">

            <div class="fancy-title title-dotted-border">
                <h3>Envoyer nous un message</h3>
            </div>

            <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

            <!-- Contact Form
            ============================================= -->
            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="assets/include/sendemail.php" method="post">

                <div class="col_full">
                    <label for="template-contactform-name">Votre Nom <small>*</small></label>
                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                </div>

                <div class="col_full">
                    <label for="template-contactform-email">Votre Adresse Mail <small>*</small></label>
                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-contactform-phone">Numéro de Téléphone</label>
                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                </div>


                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-contactform-subject">Sujet <small>*</small></label>
                    <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                </div>

                <div class="col_full">
                    <label for="template-contactform-message">Votre Message <small>*</small></label>
                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full hidden">
                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>

                <div class="col_full">
                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Envoyer le Message</button>
                </div>

            </form>

            <script type="text/javascript">
                $("#template-contactform").validate({
                    submitHandler: function(form) {
                        $('.form-process').fadeIn();
                        $(form).ajaxSubmit({
                            target: '#contact-form-result',
                            success: function() {
                                $('.form-process').fadeOut();
                                $('#template-contactform').find('.sm-form-control').val('');
                                $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                SEMICOLON.widget.notifications($('#contact-form-result'));
                            }
                        });
                    }
                });
            </script>

        </div><!-- Contact Form Overlay End -->

    </div>

    <!-- Google Map
    ============================================= -->
    <section id="google-map" class="gmap"></section>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="assets/js/jquery.gmap.js"></script>

    <script type="text/javascript">

        $('#google-map').gMap({

            address: 'rue Lacépède, 75005 Paris',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "rue Lacépède, 75005 Paris",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                    icon: {
                        image: "images/icons/map-icon-red.png",
                        iconsize: [32, 39],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

    </script><!-- Google Map End -->

</section><!-- Contact Form & Map Overlay Section End -->