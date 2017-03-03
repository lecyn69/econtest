<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
        <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Monoton" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="cube">
                <div id="site_name">
                    <p id="econtest"><a href="<?php echo $this->url('default_home'); ?>">E-Contest</a></p>
                    <p id="slogan" class="text-center"><span>The Place to be for Gamers</span></p>
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
        <div id="wrapper">
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
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?= $this->url('default_Actu') ?>" class="btn" >Actu</a>

                            </li>
                            <li>
                                <a href="<?= $this->url('games_Cod') ?>" class="btn" >COD</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>      
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $this->url('games_Dota') ?>" class="btn" >DOTA</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>       
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $this->url('default_Events') ?>" class="btn" >EVENTS</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>       
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $this->url('games_Fifa') ?>" class="btn" >FIFA</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>       
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $this->url('games_Lol') ?>" class="btn" >LOL</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>       
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $this->url('default_stream') ?>" class="btn">STREAM</a>
                                <ul class="drop-menu menu_4 text-center">
                                    <li>Un</li>
                                    <li>Deux</li>
                                    <li>Trois</li>      
                                </ul>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
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
                            <li class="log_reg">
                                <a href="#" class="btn" data-toggle="modal" data-target="#myModal_inscription">Inscription</a>
                                <noscript>
                                    <a href="<?= $this->url('admin_inscription') ?>"><i class="fa fa-sign-in fa-fw"></i> Inscription</a>        
                                </noscript>
                            </li>
                            <li class="log_reg">
                                <a href="#" class="btn" data-toggle="modal" data-target="#myModal_connexion">Connexion</a>
                                <noscript><a href="<?= $this->url('login') ?>"><i class="fa fa-sign-in fa-fw"></i> Connexion</a></noscript>
                            </li>
                            <!-- /.dropdown-user -->
                            <?php endif; ?>
                            <!-- /.dropdown -->
                        </ul>
                        <!-- Fin de DIV id mon menu -->
                    </div>
                    <!-- Fin de container fluid -->
                </div>
            </nav>
            <!-- /.navbar-header -->
            <div>
                <div id="widget_g" class="navbar-left " role="navigation">
                    <div  class="sidebar-nav navbar-collapse text-center">
                        <iframe name="date du jour" id="date-du-jour" style="width:105px;height:75px;" src="http://www.mathieuweb.fr/calendrier/date-jour-rouge-noir.html" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                        <input class="recherche" type="search" placeholder="Rechercher un évenement" name="the_search"><link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
                    </div>
                </div>

                <!--  COLONNE DROITE LISTE DES MATCHS & CLASSEMENT      -->

                <div id="widget_d" class="navbar-right " role="navigation">
                    <div class="sidebar-nav navbar-collapse text-center">
                        <p class="titre-widget-droit">Match du jour</p>
                        <div>CONTENU MATCH DU JOUR A METTRE</div>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <div class="container">
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
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="nom">Nom :</label>
                                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="prenom">Prénom :</label>
                                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="pseudo">Pseudo :</label>
                                                        <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="email">Email :</label>
                                                        <input type="email" class="form-control" name="email" id="email"
                                                               placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="password">Password :</label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-success btn-lg">S'inscrire</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="row">

                                                    <div id="danger"></div>
                                                    <div class="form-group">
                                                        <label for="pseudoOrEmail">Pseudo ou Email :</label>
                                                        <input type="text" class="form-control" name="pseudoOrEmail" id="pseudoOrEmail" placeholder="Pseudo Ou Email" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="pwd">Password :</label>
                                                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-primary">Se connecter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
            });
        </script>
        <?= $this->section('script') ?>

    </body>
</html>