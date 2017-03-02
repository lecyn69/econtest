<?php

namespace Controller;

use \W\Controller\Controller;

class GamesController extends Controller {
    
       
	/**
	 * Page Cod
	 */
	public function cod()
	{
		$this->show('games/Cod');
	}
    /**
	 * Page Dota2
	 */
    public function dota()
	{
		$this->show('games/Dota');   
	}
     /**
	 * Page Fifa
	 */
    public function fifa()
	{
		$this->show('games/Fifa'); 
	} 
     /**
	 * Page Lol
	 */
    public function lol()
	{
		$this->show('games/Lol'); 
	} 
   
   
}