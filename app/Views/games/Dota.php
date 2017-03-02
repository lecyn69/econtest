<?php $this->layout('layout', ['title' => 'Dota 2']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <div id="description">

        <img id="gamelogo" src="<?= $this->assetUrl('img/dotalogo.jpeg') ;?>">

        <p id="gamedesc">Dota 2 est un jeu vidéo de type arène de bataille en ligne multijoueur développé et édité par Valve Corporation avec l'aide de certains des créateurs du jeu d'origine : Defense of the Ancients, un mod de carte personnalisée pour le jeu de stratégie en temps réel Warcraft III: Reign of Chaos et son extension Warcraft III: The Frozen Throne. Le jeu est sorti en juillet 2013 sur Microsoft Windows, OS X et Linux mettant fin à une phase bêta commencée en 2011, il est disponible exclusivement sur la plateforme de jeu en ligne Steam.

        Dota 2 se joue en matchs indépendants opposant deux équipes de cinq joueurs, chacune possédant une base située en coin de carte contenant un bâtiment appelé l'« Ancient », dont la destruction mène à la victoire de l'équipe ennemie. Chaque joueur contrôle un « Héros » et est amené à accumuler de l’expérience, gagner de l'or, s'équiper d'objets et combattre l'équipe ennemie pour parvenir à la victoire..</p>

    </div>

    <div class="tournaments">

        <div id="tournament1" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/kievmajor.png') ;?>">

        </div>

    </div>

    <div class="tournaments">

        <div id="tournament2" class="clearfix">

            <p id="tourndesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo enim, feugiat non felis blandit, gravida pharetra augue. Phasellus ultrices arcu id diam ultrices pellentesque finibus sit amet neque. Nulla pellentesque lacinia neque sed dapibus. Quisque aliquet ante sit amet mauris consequat imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum arcu sed tortor rutrum interdum. Aenean mattis odio eget eros gravida, non facilisis lacus lacinia. Aenean elit enim, varius ut arcu eu, cursus rutrum nunc. Fusce in magna justo. Donec porttitor vulputate lorem eget dapibus. Etiam condimentum nec lorem at sagittis.</p>

            <img id="tournlogo" src="<?= $this->assetUrl('img/DAC2017.jpg') ;?>">

        </div>

    </div>

</div>


<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
