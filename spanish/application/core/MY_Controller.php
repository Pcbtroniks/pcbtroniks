<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public function __construct(array $config = array ('access' => 'public'))
	{
		parent::__construct();

		# Comprobar quienes tendrán acceso, valores posibles: public | is_logged
		if($config['access'] === 'is_logged')
		{
			if($this->verify_access() === FALSE)
			{
				$this->deny_access();
			}
		}
	}

	protected function deny_access()
	{
		redirect(base_url() . 'clientes/login');
	}

	protected function verify_access()
	{
		return ($this->session->userdata('logged_in') === TRUE) ? TRUE : FALSE;
	}
}