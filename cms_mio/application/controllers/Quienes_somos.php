<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class quienes_somos extends MY_Controller {

	public function index()
	{
		$this->render('Almacen/quienes_somos', 'defaultEli'); 
		

	}
}
 