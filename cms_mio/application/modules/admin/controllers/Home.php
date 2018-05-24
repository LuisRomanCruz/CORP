<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index()
	{		
			// echo "<script>alert('entre al adminaaaaaaaaaaaa controller');</script>";
		$this->load->model('user_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		
		$this->render('home');
	}
}
