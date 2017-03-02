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


        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo $this->url('admin_index'); ?>">E-Contest</a>

                </div>
                <!-- /.navbar-header -->
                <?php if(isset($_SESSION['user'])): ?>
                <ul class="nav navbar-top-links navbar-right">


                    <li>
                        <a href="<?= $this->url('admin_deconnexion') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                    <!-- /.dropdown -->
                </ul>


                
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="<?php echo $this->url('admin_accueil'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url('default_home'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Accès au site</a>
                            </li>

                            <!--
<li>
<a href="<?php echo $this->url('user_listUser'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Tous les utilisateurs</a>
</li>
<li>
<a href="<?php echo $this->url('user_addUser'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Ajouter un utilisateur</a>
</li>
-->

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <?php endif; ?>
                <!-- /.navbar-static-side -->
            </nav>
            <?php endif; ?>
            <div id="page-wrapper">
                <div class="row">
                    <?= $this->section('main_content') ?>
                </div>
                <!-- /.row -->
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
        <?= $this->section('script') ?>

    </body>
</html>