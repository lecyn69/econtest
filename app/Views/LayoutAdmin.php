<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= $this->e($title) ?></title>

        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/metisMenu/metisMenu.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('dist/css/sb-admin-2.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/morrisjs/morris.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/datatables-plugins/dataTables.bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/datatables-responsive/dataTables.responsive.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/style2.css') ?>">

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
                        <img class="cubeface" id="face1" src="<?=$this->assetUrl('img/ps4.jpg') ?>" />
                        <img class="cubeface" id="face2" src="<?= $this->assetUrl('img/csgo.jpg')?>" />
                        <img class="cubeface" id="face3" src="<?= $this->assetUrl('img/xbox.jpg')?>" />
                        <img class="cubeface" id="face4" src="<?= $this->assetUrl('img/pc.jpg')?>" />
                        <img class="cubeface" id="face5" src="<?= $this->assetUrl('img/lol.jpg')?>" />
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
                    <a class="navbar-brand" href="<?php echo $this->url('default_home'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </div>
                <div class="collapse navbar-collapse" id="mon-menu">

                    <ul class="nav navbar-nav navbar-right">


                        <li class="logout"><a href="<?= $this->url('admin_deconnexion') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                    <!-- /.dropdown -->

                    <!-- Fin de DIV id mon menu -->
                </div>
                <!-- Fin de container fluid -->
            </div>
        </nav>


        <div id="wrapper" class="active">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul id="sidebar_menu" class="sidebar-nav">
                    <li class="sidebar-brand sidebar-admin"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                </ul>
                <ul class="sidebar-nav" id="sidebar">     
                    <li class="sidebar-admin">
                        <a href="<?php echo $this->url('admin_index'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="sidebar-admin">
                        <a href="<?php echo $this->url('default_home'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Accès au site</a>
                    </li>

                    <li class="sidebar-admin">
                        <a href="<?= $this->url('admin_listUser') ?>"><i class="fa fa-list" aria-hidden="true"></i> Tous les utilisateurs</a>
                    </li>
                    <li class="sidebar-admin">
                        <a href=""><i class="fa fa-list" aria-hidden="true"></i> Ajouter un utilisateur</a>
                    </li>
                </ul>
            </div>

            <!-- Page content -->
            <div id="page-content-wrapper">
                <!-- Keep all page content within the page-content inset div! -->
                <div class="page-content inset">
                    <div class="row">
                        <?= $this->section('main_content') ?>
                    </div>
                </div>
            </div>



        </div>
        <!-- /#wrapper -->


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
            $(document).ready(function(){
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("active");
                });
            });
        </script>
        <?= $this->section('script') ?>

    </body>
</html>