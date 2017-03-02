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
   
   
}