<?php if(!isset($_GET['sub'])): ?>


<?php endif; ?>
<?php if(isset($_GET['sub']) && $_GET['sub'] == 'article'): ?>

<!-- Page Title
    ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>ARTICLE</h1>
        <ol class="breadcrumb">
            <li><a href="#">SCPVS</a></li>
            <li><a href="#">Article</a></li>
            <li class="active">16% d'obèse en france</li>
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
                        <h2>16% d'obèse en france</h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> 21 Janvier 2016 à 00:56</li>
                        <li><a href="#"><i class="icon-user"></i> SCPVS</a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image bottommargin">
                        <a href="#"><img src="<?= $constante->getUrl(array(), false, true); ?>article/obesite_monde.jpg" alt="Blog Single"></a>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content notopmargin">

                        <p><i>En France 30% des personnes sont en surpoids et 16% obèses. Rythme de vie et mauvaises habitudes alimentaires, une spirale que l'on veut enrayer. Une fois par an, enfants, pédiatres et diététiciens se réunissent pour mieux comprendre les causes du problème. Souvent cela commence par des recettes simples. Les parents peuvent ainsi comparer leurs expériences. Enfin, il faut éviter la sédentarité. 10 000 pas par jour sont recommandés, soit environ 1h 30 de marche à une vitesse normale.</i></p>
                        <p>Réalisé pour le compte de la Mutuelle Générale de l'Education nationale (MGEN), l'étude s'est efforcée de cerner les habitudes de vie des Français et leurs liens avec l'obésité. Il en ressort que 76% des Français se considèrent en bonne santé, alors que 30% sont en surpoids et 16% obèses. Le pourcentage d'obèses est plus élevé chez les inactifs (20%) et chez les 50-64 ans (21%), les jeunes étant en revanche plus épargnés (seulement 9% d'obèses).On parle de surpoids pour un indice de masse corporelle (IMC calculé par un ratio entre le poids et la taille) situé entre 25 et 30 et d'obésité au dessus de 30.</p>
                        <small>Source: francetvinfo.fr et huffingtonpost.fr</small>


                        <div class="clear"></div>


                    </div>
                </div><!-- .entry end -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
