<?php $this->layout('layout', ['title' => 'Evenements']) ?>

<?php $this->start('main_content') ?>
<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
<p class="titre text-center">Evenements à venir</p>

<div class="slider">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- INDICATEURS -->
        <!--
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
<li data-target="#carousel-example-generic" data-slide-to="3"></li>
<li data-target="#carousel-example-generic" data-slide-to="4"></li>
</ol>
-->

        <!-- IMAGES DEROULANTES -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img  src="<?=$this->assetUrl('img/lol-event.jpg') ?>" alt="tournoi league of legend">
                <div class="carousel-caption">
                    <p class="nom">Tournoi Leagues of Legends<br></p>
                </div>
            </div>
            <div class="item">
                <img src="<?=$this->assetUrl('img/callof-event.jpg') ?>" alt="tournoi call of duty">
                <div class="carousel-caption">
                    <p class="nom">Le rendez vous des Call of duty'iens</p>
                </div>
            </div>
            <div class="item">
                <img src="<?=$this->assetUrl('img/dota2-event.jpg') ?>" alt=" tournoi dota2">
                <div class="carousel-caption">
                    <p class="nom">Tournoi dota 2!</p>
                </div>
            </div>
            <div class="item">
                <img src="<?=$this->assetUrl('img/fifa-event.jpg') ?>" alt="tournoi fifa 17">
                <div class="carousel-caption">
                    <p class="nom">Mesure toi au autres joueurs du ballon rond </p>
                </div>
            </div>
            <div class="item">
                <img src="<?=$this->assetUrl('img/battlefield-event.jpg') ?>" alt="tournoi battlefield">
                <div class="carousel-caption">
                    <p class="nom">Tournoi battlefield</p>
                </div>
            </div>

        </div>

        <!-- FLECHES G/D -->
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
<!--
<?php foreach($contenus as $contenu){ ?>
<div class="col-md-8">
<p><?php echo $contenu  ['titre']?></p>
<img src="<?php echo $contenu['image'] ?>">
<p><?php echo $contenu['description']?></p>
</div>

<?php } ?>
-->


<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
