<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\security\AuthentificationModel;

class AdminController extends Controller {

    protected $currentUser;
    protected $auth;

    public function __construct(){
        $this->currentUser = new UsersModel;
        $this->auth = new AuthentificationModel;
    } 
    /**
	 * Page d'accueil admin
	 */
    public function index()
    {
        $this->show('admin/index');
    }
    public function inscription(){

        if(!isset($_POST['pseudo'])){
            $this->show('default/inscription');
        }else{
            $isAjaxRequest = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') ? true : false;
            try{
                $_POST['password'] = $this->auth->hashpassword($_POST['password']);
                $_POST['role'] = 'admin';
                $newUser = $this->currentUser->insert($_POST);
                if($newUser){
                    $this->auth->logUserIn($newUser);
                }
                
            }catch(\PDOException $e){
                if($isAjaxRequest){
                    http_response_code(500) ;
                    $this->showJson(['erreur'=> true, 'message'=> $e->getMessage()]);
                }else{
                    $_SESSION['erreur'] = $e->getMessage();
                    $this->redirectToRoute('admin_inscription');
                }
            }

            if($isAjaxRequest){
                $this->showJson(['erreur'=> false, 'message'=>'Inscription réussie !']);
            }else{
                $this->redirectToRoute('default_home');
            }
        }
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