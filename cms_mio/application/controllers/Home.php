<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{		
		//$this->render('home', 'default');  
		$this->render('homeEli', 'defaultEli'); 
	}
}
