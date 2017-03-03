<?php $this->layout('layout', ['title' => 'Stream']) ?>

<?php $this->start('main_content') ?>
<p class="col-md-12 titre">STREAM</p>
<!-- Leagues of legend -->
<div class="col-md-6 text-center">
    <p class="col-md-12">LOL</p>

    <iframe
            src = "http://player.twitch.tv/?channel=eclypsiatvlol&muted=true&autoplay=false"
            height = "275"
            width = "100%"
            frameborder = "0"
            scrolling = "no"
            allowfullscreen = "true"
            >
    </iframe>
</div>

<!-- FIFA 17  -->
<div class="col-md-6 text-center">
    <p class="col-md-12">FIFA 17</p>

    <iframe
            src = "http://player.twitch.tv/?channel=eclypsiatvfifa&muted=true&autoplay=false"
            height = "275"
            width = "100%"
            frameborder = "0"
            scrolling = "no"
            allowfullscreen = "true"
            >
    </iframe>
</div>
<!-- DOTA 2   -->
<div class="col-md-6 text-center" >
    <p class="col-md-12">DOTA 2</p>

    <iframe
            src = "http://player.twitch.tv/?channel=moonduckTV&muted=true&autoplay=false"
            height = "275"
            width = "100%"
            frameborder = "0"
            scrolling = "no"
            allowfullscreen = "true">
    </iframe>
</div>
<!-- CS GO  -->
<div class="col-md-6 text-center">
    <p class="col-md-12">CS GO</p>

    <iframe
            src = "http://player.twitch.tv/?channel=ESL_CSGO&muted=true&autoplay=false"
            height = "275"
            width = "100%"
            frameborder = "0"
            scrolling = "no"
            allowfullscreen = "true">
    </iframe>
</div>
<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<Script src = "http://player.twitch.tv/js/embed/v1.js"> </ script>
        <Div id = "<lecteur div ID>"> </ div>
            <Script type = "text / javascript">
                var options = {
                    largeur: <largeur>,
                    hauteur: <hauteur>,
                    <Channel>: "<channel>,"
                };
    lecteur var = new Twitch.Player ( "<lecteur div ID>", options);
    player.setVolume (0,5);
</Script>

<?php $this->stop('script') ?>

