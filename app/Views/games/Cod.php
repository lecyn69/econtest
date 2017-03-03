<?php $this->layout('layout', ['title' => 'Call Of Duty: Black Ops 3']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <div id="description">

        <img  id="gamelogo" src="<?= $this->assetUrl('img/bo3logo.jpg') ;?>">

        <p id="gamedesc">Call of Duty: Black Ops III est un jeu vidéo de tir à la première personne développé par le studio Treyarch et édité par Activision, sorti le 6 novembre 2015 sur Microsoft Windows, Xbox One, PlayStation 4, PlayStation 3 et Xbox 360. Il s'agit du 12e épisode de la franchise Call of Duty et le 3e opus "principal" de la saga Black Ops. La campagne, le mode multijoueur et le mode Zombies de Black Ops III ont été entièrement remaniés. La campagne prend en charge jusqu'à quatre joueurs en coopératif, un soldat entièrement personnalisable, et prend en charge la rejouabilité pour trouver tous les moyens possibles pour passer un niveau à l'autre. Le multijoueur introduit un nouveau système de mouvement, un nouveau système de classes appelé « Spécialistes », et une nouvelle fonction de « Gunsmith » qui permet de créer des combinaisons d'armes et aussi un design de Camo. Enfin, les zombies reviennent avec un tout nouveau récit séparé de la campagne.</p>

    </div>

    <div class="tournaments">

        <div id="tournament1" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/codWL.jpg') ;?>">

        </div>

    </div>

    <div class="tournaments">

        <div id="tournament2" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/codWL.jpg') ;?>">

        </div>

    </div>

</div>


<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
