<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller {
    
       
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
    /**
	 * Page de contact
	 */
    public function contact()
	{
		$this->show('default/contact');   
	}
     /**
	 * Page A propos
	 */
    public function about()
	{
		$this->show('default/about'); 
	} 
     /**
	 * Page A propos
	 */
    public function stream()
	{
		$this->show('default/stream'); 
	} 
     /**
	 * Page A propos
	 */
    public function events()
	{
		$this->show('default/Events'); 
	} 
     /**
	 * Page A propos
	 */
    public function actu()
	{
		$this->show('default/Actu'); 
	} 
        public function connexion(){

        $app = getApp();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $isAjaxRequest = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') ? true : false;
            if($isAjaxRequest){
                $user = $this->auth->isValidLoginInfo($_POST['pseudoOrEmail'], $_POST['pwd']);
                if($user){
                    $this->auth->logUserIn($this->currentUser->find($user));
                    $this->showJson(['erreur'=> false, 'message'=>'Connexion réussie !']);
                }else{
                    $this->showJson(['erreur'=> true, 'message'=>'Mot de passe ou email incorrect']);
                }

            }else{

                $user = $this->auth->isValidLoginInfo($_POST['pseudoOrEmail'], $_POST['pwd']);
                if($user){
                    $this->auth->logUserIn($this->currentUser->find($user));
                    $this->redirectToRoute('default_home');
                }else{
                    $_SESSION['error'] = 'Mot de passe ou email incorrect';
                    $this->redirectToRoute($app->getConfig('security_login_route_name'));
                }
            }
        }

        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $loginRoute = $app->getConfig('security_login_route_name');
            $this->show('default/connexion',['loginRoute'=> $loginRoute]);
        }
    }

    public function deconnexion(){
        $this->auth->logUserOut();
        $this->redirectToRoute('default_home');
    }
   
   
}