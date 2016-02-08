<?php if(!isset($_GET['sub'])): ?>
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
        <div class="promo promo-full promo-border header-stick bottommargin-lg">
            <div class="container clearfix">
                <h3>Faite un dons à l'association et aider 7 millions de français à ce sentir<br>mieux dans leur corps.</h3>
                <a href="index.php?view=don" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Faire un don</span></a>
            </div>
        </div>

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
                        <p>Un tiers des personnes interrogées se plaignent d'insomnies et un quart se déclarent fréquemment stressées, les femmes s'estimant plus souvent affectées (un tiers déclarent être fréquemment stressées). Interrogés sur leur alimentation, les Français l'évaluent comme étant "très bonne" ou "plutôt bonne" à 86%, variée et équilibrée (73%) et composée de produits frais (43%). Ils déclarent manger en moyenne 3,4 fruits et légumes par jour, alors que les recommandations des autorités sanitaires en préconisent 5.</p>
                        <p>La tradition des trois repas par jour est encore respectée par 60% des sondés et seulement 11% affirment manger au moins une fois par semaine dans un restaurant fast-food. 16% indiquent qu'ils suivent un régime alimentaire particulier et 23% qu'ils ont déjà consulté un diététicien. Un tiers reconnait grignoter entre les repas.</p>
                        <p>Autre élément encourageant, 69% affirment pratiquer une activité physique ou sportive au moins une fois par semaine, dont 26% deux à trois fois par semaine et 13% plus de trois fois par semaine. Parmi les activités les plus prisées figurent la marche à pied (37%), le vélo (16%) et la natation (13%). Les obèses sont toutefois un peu moins assidus, seulement 49% affirmant s'adonner à une activité physique ou sportive. Les principaux freins à la pratique sportive sont le manque de temps (36%), de motivation (33%) et d'argent (14%).</p>
                        <small>Source: francetvinfo.fr et huffingtonpost.fr</small>


                        <div class="clear"></div>


                    </div>
                </div><!-- .entry end -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
