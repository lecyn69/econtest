<?php $this->layout('layout', ['title' => 'League of Legends']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <div id="description">

        <img id="gamelogo" src="<?= $this->assetUrl('img/leaguelogo.jpg') ;?>">

        <p id="gamedesc">League of Legends est un jeu vidéo massivement multijoueur (MMO) sur ordinateur exclusivement, de type arène de bataille en ligne (MOBA) gratuit développé et édité par Riot Games sur Windows, Linux et Mac OS X . Fin janvier 2013, un nouveau client bêta pour Mac a été distribué par Riot Games. Le jeu a été évoqué pour la première fois le 8 octobre 2008 et est entré en phase bêta le 10 avril 2009.

        League of Legends devient rapidement un véritable phénomène. C'est en 2013 qu'il devient l'un des jeux les plus joués au monde. Il séduit aussi le monde du sport électronique en devenant l'événement eSport le plus regardé de l'histoire, avec plus de 32 millions de spectateurs en ligne et plus de 8,5 millions de vues simultanées lors de la finale de la saison 3 du championnat du monde en 2013. Le record est de nouveau battu en 2015, lors de la saison 5, avec un total de 36 millions de spectateurs et un pic d'audience de 14 millions de spectateurs.</p>

    </div>

    <div class="tournaments">

        <div id="tournament1" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/IEM2017.jpg') ;?>">

        </div>

    </div>

    <div class="tournaments">

        <div id="tournament2" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/lcsspring2017.jpg') ;?>">

        </div>

    </div>

</div>

<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
