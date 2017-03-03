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
        $this->allowTo('admin');
        $this->show('admin/index');
    }
    public function accueil()
    {
        $this->allowTo('admin');
        $this->show('admin/accueil');
    }
    public function inscription(){

        if(!isset($_POST['pseudo'])){
            $this->show('default/inscription');
        }else{
            $isAjaxRequest = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') ? true : false;
            try{
                $_POST['password'] = $this->auth->hashpassword($_POST['password']);
                $_POST['role'] = 'visitor';
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

  
}