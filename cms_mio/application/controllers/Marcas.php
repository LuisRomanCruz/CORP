<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Marcas extends MY_Controller {

	public function index()
	{
		$this->render('Almacen/marcas','defaultEli'); 
	}
}
 