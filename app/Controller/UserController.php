<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UsersModel as user;
use \W\security\AuthentificationModel;

class UserController extends Controller {

    
    protected $auth;

    public function __construct(){
        $this->auth = new AuthentificationModel;
    } 

    public function modifUser($id){

        if(!isset($_POST['pseudo'])){
            $user = new user;
            $user = $user->find($id);
            $this->show('admin/user/modifUser', ['user' => $user]);
        }
        else{
            $user = new user;
            $user->update($_POST, $id);
            $_SESSION['message'] = "l'utilisateur à été modifié";
            $this->redirectToRoute('user_listUser'); }
    }
    public function deleteUser($id){
        $user = new user;
        $user->delete($_POST['id']);
        $_SESSION['message'] = "l'utilisateur à été supprimé";
        $this->redirectToRoute('admin_listUser');
    }
    public function listAllUser(){
        $user = new user;
        $listUser = $user->findAll('id');
        $this->show('admin/user/listUser', array('users' => $listUser));
    }
    public function addUser(){
        $this->allowTo('admin');


        if(!isset($_POST['pseudo'])){
            $this->show('admin/user/Utilisateur');
        }else{
            $user = new user;
            $_POST['password'] = $this->auth->hashpassword($_POST['password']);
            $_POST['role'] = 'admin';
            $user->insert($_POST);
            $this->redirectToRoute('user_listUser');  
        }
    }
}