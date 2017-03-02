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
        <!--        <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">-->

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
                    <a class="navbar-brand" href="<?php echo $this->url('default_home'); ?>">Micron</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <?php if(isset($_SESSION['user'])): ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="<?= $this->url('admin_index') ?>"><i class="fa fa-gear fa-fw"></i> Administration</a>
                            </li>
                            <li class="divider"></li>

                            <li><a href="<?= $this->url('admin_deconnexion') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>

                        </ul>

                    </li>
                    <?php else : ?>
                    <!-- Button trigger modal -->
                    
                    <li><a href="<?= $this->url('admin_inscription') ?>"><i class="fa fa-sign-in fa-fw"></i> Inscription</a></li>
                    <li><a href="<?= $this->url('login') ?>"><i class="fa fa-sign-in fa-fw"></i> Connexion</a></li>
                    <!-- /.dropdown-user -->
                    <?php endif; ?>
                    <!-- /.dropdown -->
                </ul>

                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?php echo $this->url('default_home'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url('default_about'); ?>"><i class="fa fa-list" aria-hidden="true"></i> A propos</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url('user_listUser'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Tous les utilisateurs</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url('user_addUser'); ?>"><i class="fa fa-list" aria-hidden="true"></i> Ajouter un utilisateur</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url('default_contact'); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Contact</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?= $this->e($title) ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?= $this->section('main_content') ?>
                    <div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= $this->url('admin_inscription'); ?>">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" 
                                       value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" 
                                       value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" 
                                       value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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