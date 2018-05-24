<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Productos extends MY_Controller {

	public function index()
	{		
		$this->render('Almacen/productos', 'defaultEli');  
	}
}
 