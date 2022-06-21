<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('authentication_model');
	}

	public function auth()
	{
		# Datos que recibimos del formulario
		$customer_username = $this->input->post('usuario');
		$customer_password = $this->input->post('password');

		# Consultar usuario en la base de datos.
		$customer_data = $this->authentication_model->authentication($customer_username);

		if($this->check_pass($customer_data, $customer_password))
		{
			$this->set_customer_data($customer_data);
		}

		redirect(base_url() . 'clientes/','refresh');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'clientes/','refresh');
	}

	private function set_customer_data(object $customer){
		$data = array(
			'customer_id' => $customer->customer_id,
			'customer' => $customer->customer,
			'customer_username' => $customer->customer_username,
			'email' => $customer->email,
			'logged_in' => TRUE
		);

		$this->session->set_userdata($data);		
	}

	public function check_auth()
	{
		$auth = array(
			'logged_in' => ($this->session->userdata('logged_in') === true) ? true : false
		);

		echo json_encode($auth);
	}

	private function check_pass($customer_data, string $customer_password)
	{
		if(gettype($customer_data) === 'object'):
			if(password_verify($customer_password, $customer_data->customer_password)):
				return true;
			else:
				# Mostrar mensaje al usuario de que el inicio de sesión no fue éxitoso.
				$this->session->set_flashdata('error_type', 'danger');
				$this->session->set_flashdata('error_message', 'El usuario y/o contraseña proporcionados no coinciden.');
				return false;				
			endif;
		else:
			# Retonar falso si la variable $customer_data no es un objeto.
			$this->session->set_flashdata('error_type', 'danger');
			$this->session->set_flashdata('error_message', 'El usuario y/o contraseña proporcionados no coinciden.');
			return false;
		endif;		
	}
}