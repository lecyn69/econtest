<?php
	
	$w_routes = array(
        
        //****************************Partie page generale*********************************//
        
        
		['GET', '/', 'Default#home', 'default_home'],
        // création de la route de la page contact en indiquant les parametres suivant:
        //   - la methode de la requete
        //   - la partie de l'url
        //   - le controller et la methode à utiliser 
        //   - le nom de la vue qui nous permettra d'afficher 
		['GET', '/contact/', 'Default#contact', 'default_contact'],
		['GET', '/about/', 'Default#about', 'default_about'],
		['GET', '/jeux/CallOfDuty/', 'Games#cod', 'games_Cod'],
		['GET', '/jeux/Dota2/', 'Games#dota', 'games_Dota'],
		['GET', '/jeux/Fifa17/', 'Games#fifa', 'games_Fifa'],
		['GET', '/jeux/LeagueOfLegends/', 'Games#lol', 'games_Lol'],
		['GET', '/stream/', 'Default#stream', 'default_stream'],
		['GET', '/events/', 'Default#events', 'default_Events'],
		['GET', '/actu/', 'Default#actu', 'default_Actu'],
        
        
        
        
        
        
        //*************************Partie administration*****************************//
        
        ['GET', '/admin/', 'admin#index', 'admin_index'],
        ['GET|POST', '/inscription/', 'admin#inscription', 'admin_inscription'],
        ['GET|POST', '/connexion/', 'admin#connexion', $w_config['security_login_route_name']],
        ['GET|POST', '/deconnexion/', 'admin#deconnexion', 'admin_deconnexion'],
        // route avec paramètres dynamiques:
        //          - i , attend un entier
        //          - a , attend une chaine de caractère alphanumérique
        
        
	);