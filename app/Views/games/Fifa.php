<?php $this->layout('layout', ['title' => 'Fifa 17']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <div id="description">

        <img id="gamelogo" src="<?= $this->assetUrl('img/fifalogo.jpg') ;?>">

        <p id="gamedesc">FIFA 17 est un jeu vidéo de football développé par EA Canada et édité par Electronic Arts, sorti le 29 septembre 2016 sur PC, PlayStation 3, PlayStation 4, Xbox 360 et Xbox One. C'est le 23eme jeu de la franchise FIFA Football et le successeur de FIFA 16.

            À l'image de la série de jeux NBA 2K des développeurs Visual Concepts, FIFA 17 propose pour la première fois un mode scénario. Basé sur le gameplay du mode Deviens Pro, "L'Aventure" (The Journey en VO) propose de vivre l'histoire d'Alex Hunter (interprété par l'acteur anglais Adetomiwa Edun), un jeune joueur de 17 ans, originaire de Clapham, dans la banlieue de Londres, prometteur de Premier League, qui cherche à évoluer dans les clubs du championnat anglais et qui est promu à un grand avenir. Ce nouveau mode propose aux joueurs de contrôler Alex Hunter en match mais également en dehors, grâce aux décisions prises tout au long de sa vie de joueur.</p>

    </div>

    <div class="tournaments">

        <div id="tournament1" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/fifaeligue.png') ;?>">

        </div>

    </div>

    <div class="tournaments">

        <div id="tournament2" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/fifa2.jpg') ;?>">

        </div>

    </div>

</div>


<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
