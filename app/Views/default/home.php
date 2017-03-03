<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container slider_home">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators 
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active reglage_imagehome">
                        <img src="<?=$this->assetUrl('img/sliderhome1.jpg') ?>" alt="league of legend" class="img-responsive">
                        <div class="carousel-caption nom">

                        </div>
                    </div>
                    <div class="item reglage_imagehome">
                        <img src="<?=$this->assetUrl('img/sliderhome2.jpg') ?>" alt="..." class="img-responsive">
                        <div class="carousel-caption nom">

                        </div>
                    </div>
                    <div class="item reglage_imagehome">
                        <img src="<?=$this->assetUrl('img/sliderhome3.jpg') ?>" alt="..." class="img-responsive">
                        <div class="carousel-caption nom">

                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Au dessus de 425px-->
<div class="container" id="container1">
    <div class="row">
        <div class="col-md-4 onglet ">
            <div class="text-center div_align div_align_actif" data-onglet="onglet1">onglet1</div>
            <div class="text-center div_align" data-onglet="onglet2">onglet2</div><!--le data correspond à l'id de ma balise article (data-onglet="onglet1->id="onglet1) etc...-->
            <div class="text-center div_align" data-onglet="onglet3">onglet3</div>
            <div class="text-center div_align" data-onglet="onglet4">onglet4</div>
        </div>

    </div>
    <section class="row">
        <article class="col-md-8 article article-actif" id="onglet1"><p>"<b>Onglet1</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></article>

        <article class="col-md-8 article" id="onglet2"><p>"<b>Onglet2</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></article>

        <article class="col-md-8 article" id="onglet3"><p>"<b>Onglet3</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></article>

        <article class="col-md-8 article" id="onglet4"><p>"<b>Onglet4.</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></article>
    </section>
</div>
<!---------------------------PARTIE RESPONSIVE---------------------------------->
<div class="container" id="container2">
    <section class="row">
        <article class="col-md-12">
            <h2 class="mon_article">Article 1</h2>
            <p id="lire_la_suite">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lire la suite :</p><p id="affichage_suite">"<b>Onglet1</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </article>
    </section>
    <section class="row">
        <article class="col-md-12">
            <h2 class="mon_article">Article 2</h2>
            <p id="lire_la_suite1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lire la suite :</p><p id="affichage_suite1">"<b>Onglet2</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </article>
    </section>

    <section class="row">
        <article class="col-md-12">
            <h2 class="mon_article">Article 3</h2>
            <p id="lire_la_suite2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lire la suite :</p><p id="affichage_suite2">"<b>Onglet2</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </article>
    </section>

    <section class="row">
        <article class="col-md-12">
            <h2 class="mon_article">Article 4</h2>
            <p id="lire_la_suite3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lire la suite :</p><p id="affichage_suite3">"<b>Onglet2</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </article>
    </section>
</div>


<?php $this->stop('main_content') ?>
<?php $this->start('script') ?>
<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
<?php $this->stop('script') ?>
