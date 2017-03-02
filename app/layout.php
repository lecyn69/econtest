<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= $this->e($title) ?></title>
        <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
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
                <p><a href="https://en.wikipedia.org/wiki/Red">
                    E-Contest
                    </a></p>
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
                    <li>
                        <a href="#" class="btn btn-modal" data-toggle="modal" data-target="#myModal_inscription">Inscription</a>
                        <noscript>
                            <a href="<?= $this->url('admin_inscription') ?>"><i class="fa fa-sign-in fa-fw"></i> Inscription</a>        
                        </noscript>
                    </li>
                    <li>
                        <a href="#" class="btn btn-modal" data-toggle="modal" data-target="#myModal_connexion">Connexion</a>
                        <noscript><a href="<?= $this->url('login') ?>"><i class="fa fa-sign-in fa-fw"></i> Connexion</a></noscript>
                    </li>
                    <!-- /.dropdown-user -->
                    <?php endif; ?>
                    <!-- /.dropdown -->
                </ul>

                <!-- /.navbar-top-links -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?= $this->e($title) ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?= $this->section('main_content') ?>
                </div>



                <div class="modal fade" id="myModal_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_inscription">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel_inscription">Inscription</h4>
                            </div>
                            <div class="modal-body">
                                <form id="inscription" method="post" action="<?= $this->url('admin_inscription'); ?>">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="username">Username :</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
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
                                <!--                          <button type="button" class="btn btn-primary">Se connecter</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal_connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Connexion</h4>
                            </div>
                            <div class="modal-body">
                                <form id="form3" method="post" action="<?= $this->url('login'); ?>">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="row">

                                            <div id="danger"></div>
                                            <div class="form-group">
                                                <label for="usernameOrEmail">Username or Email :</label>
                                                <input type="text" class="form-control" name="usernameOrEmail" id="usernameOrEmail" placeholder="Username Or Email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="pwd">Password :</label>
                                                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Se connecter</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!--                                <button type="button" class="btn btn-primary">Se connecter</button>-->
                            </div>
                        </div>
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


                $('#form3').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        dataType: 'json',

                        success: function(data){ // Si le status code est 200
                            console.log(data);
                            $('.modal-header').append('<p class="alert-success">'+data.message+'</p>');
                            window.location.href = '<?= $this->url('admin_index'); ?>';
                        },
                        error: function(data){ // Si le status code n'est pas 200
                            //console.log(jqXhr);
                            //console.log(text);
                            //console.log(error);
                            $('.modal-header').append('<p class="alert-danger">'+data.responseJSON.message+'</p>');
                        },
                        complete: function(){ // complete est executé quel que soit le status code
                        }
                    });
                });

                $('#inscription').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST", // type d'envoi de la requete ajax
                        url: $(this).attr('action'), // chemin de la requete a recuperer dans l'attribut action du formulaire en question
                        data: $(this).serialize(), // grace au submit on serialize nos donnees directement en selectionnant $this
                        // si on capture l'envoi du formulaire en click alors on serialize en selectionnant avec l'id 
                        dataType: 'json', // format de données dans le quel on veut recevoir la reponse

                        success: function(data){ // Si le status code est 200
                            console.log(data);
                            //affichage de la connexion reussie sur la page
                            $('.modal-header').append('<p class="alert-success">'+data.message+'</p>');
                            window.location.href = '<?= $this->url('default_home'); ?>';
                        },
                        error: function(data){ // Si le status code n'est pas 200
                            //console.log(data);
                            //console.log(text);
                            //console.log(error);
                            // on ajoute les class necessaire et on fait afficher le message
                            $('.modal-header').append('<p class="alert-danger">'+data.responseJSON.message+'</p>'); 
                        },
                        complete: function(){ // complete est executé quel que soit le status code
                        }
                    });
                });


                //$('#send').click()
            });
        </script>
        <?= $this->section('script') ?>

    </body>
</html>