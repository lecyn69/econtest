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

        if(!isset($_POST['username'])){
            $user = new user;
            $user = $user->find($id);
            $this->show('admin/user/Utilisateur', ['user' => $user]);
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
        $this->redirectToRoute('user_listUser');
    }
    public function listAllUser(){
        $user = new user;
        $listUser = $user->findAll('id');
        $this->show('admin/user/listUser', array('users' => $listUser));
    }
}