<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'email'));
	}

	public function customers()
	{
		$view = array(
			'title' => 'Área del Cliente',
			'main' => $this->load->view('customers/login', '', TRUE)
		);

	    $this->parser->parse('overall/layout', $view);		
	}
}