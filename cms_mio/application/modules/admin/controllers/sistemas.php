<?php
defined('BASEPATH') OR exit('No direct script access allowed');







class Sistemas extends Admin_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_builder');		
	}

	public function celulares(){
		$crud = $this-<generate_crud('celulares');
	}
}
