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


                        <div class="clear"></div>


                    </div>
                </div><!-- .entry end -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
