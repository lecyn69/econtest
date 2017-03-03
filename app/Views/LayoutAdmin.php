<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= $this->e($title) ?></title>

        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/metisMenu/metisMenu.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('dist/css/sb-admin-2.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/morrisjs/morris.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/datatables-plugins/dataTables.bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/datatables-responsive/dataTables.responsive.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/style2.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Monoton" rel="stylesheet">

    </head>
    <body>
        <header>
            <div id="cube">
                <div id="site_name">
                    <p id="econtest"><a href="<?php echo $this->url('default_home'); ?>">E-Contest</a></p>
                    <p id="slogan"><span>The Place to be for Gamers</span></p>
                </div>
                <div class="stage centered">
                    <div class="cube">
                        <img class="cubeface" id="face1" src="<?=$this->assetUrl('img/ps4-cube.png') ?>" />
                        <img class="cubeface" id="face2" src="<?= $this->assetUrl('img/gamecube.jpg')?>" />
                        <img class="cubeface" id="face3" src="<?= $this->assetUrl('img/xbox.jpg')?>" />
                        <img class="cubeface" id="face4" src="<?= $this->assetUrl('img/nitendocube.png')?>" />
                        <img class="cubeface" id="face5" src="<?= $this->assetUrl('img/segacub.jpg')?>" />
                        <img class="cubeface" id="face6" src="<?= $this->assetUrl('img/dota.jpg')?>" />
                    </div>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mon-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <a class="navbar-brand" href="<?php echo $this->url('admin_index'); ?>">E-Contest</a>

                </div>
                <div class="collapse navbar-collapse" id="mon-menu">
                    <ul class="nav navbar-nav">
                        <li class="nav-admin">
                            <a href="<?php echo $this->url('admin_index'); ?>">Home</a>
                        </li>
                        <li class="nav-admin">
                            <a href="<?php echo $this->url('default_home'); ?>">Accès au site</a>
                        </li>

                        <li class="nav-admin">
                            <a href="<?= $this->url('admin_listUser') ?>">Tous les utilisateurs</a>
                        </li>
                        <li class="nav-admin">
                            <a href="<?= $this->url('admin_addUser') ?>">Ajouter un administrateur</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-admin"><a href="<?= $this->url('admin_deconnexion') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h1 class="page-header"><?= $this->e($title) ?></h1>
            </div>
        </div>
        <div class="row">
            <?= $this->section('main_content') ?>
        </div>




        <footer>


        </footer>




        <script src="<?= $this->assetUrl('vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('vendor/metisMenu/metisMenu.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>
        <script src="<?= $this->assetUrl('dist/js/sb-admin-2.js') ?>"></script>
        <script type="text/javascript">
        </script>
        <?= $this->section('script') ?>

    </body>
</html>