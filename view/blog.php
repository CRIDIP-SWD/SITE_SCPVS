<?php if(!isset($_GET['sub'])): ?>


<?php endif; ?>
<?php if(isset($_GET['sub']) && $_GET['sub'] == 'article'): ?>
    <?php
    $ref = $_GET['ref'];
    $article = $DB->query("SELECT * FROM blog WHERE idarticle = :ref", array("ref" => $ref));
    ?>

<!-- Page Title
    ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>ARTICLE</h1>
        <ol class="breadcrumb">
            <li><a href="#">SCPVS</a></li>
            <li><a href="#">Article</a></li>
            <li class="active"><?= $article[0]->titre_article; ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-post nobottommargin">

                <!-- Single Post
                ============================================= -->
                <div class="entry clearfix">

                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title">
                        <h2><?= $article[0]->titre_article; ?></h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?= $date_format->format($article[0]->date_article); ?></li>
                        <li><a href="#"><i class="icon-user"></i> <?= $article[0]->auteur_article; ?></a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image bottommargin">
                        <a href="#"><img src="assets/images/blog/full/10.jpg" alt="Blog Single"></a>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content notopmargin">

                        <?= html_entity_decode($article[0]->contenue); ?>

                        <!-- Tag Cloud
                        ============================================= -->
                        <div class="tagcloud clearfix bottommargin">
                            <a href="#">general</a>
                            <a href="#">information</a>
                            <a href="#">media</a>
                            <a href="#">press</a>
                            <a href="#">gallery</a>
                            <a href="#">illustration</a>
                        </div><!-- .tagcloud end -->

                        <div class="clear"></div>

                        <!-- Post Single - Share
                        ============================================= -->
                        <div class="si-share noborder clearfix">
                            <span>Share this Post:</span>
                            <div>
                                <a href="#" class="social-icon si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-email3">
                                    <i class="icon-email3"></i>
                                    <i class="icon-email3"></i>
                                </a>
                            </div>
                        </div><!-- Post Single - Share End -->

                    </div>
                </div><!-- .entry end -->

                <!-- Post Navigation
                ============================================= -->
                <div class="post-navigation clearfix">

                    <div class="col_half nobottommargin">
                        <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                    </div>

                    <div class="col_half col_last tright nobottommargin">
                        <a href="#">This is an Embedded Audio Post &rArr;</a>
                    </div>

                </div><!-- .post-navigation end -->
<?php endif; ?>
