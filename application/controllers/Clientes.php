<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends MY_Controller {

	public function __construct()
	{
		parent::__construct($config = array ('access' => 'is_logged'));
		$this->load->library(array('form_validation', 'email'));
	}

	public function index()
	{
		redirect(base_url() . 'clientes/soporte');	
	}

	public function soporte()
	{
		$view = array(
			'title' => 'Solicitar Asistencia - Clientes',
			'main' => $this->load->view('customers/soporte', '', TRUE)
		);

	    $this->parser->parse('overall/layout', $view);			
	}

	public function enviar_ticket()
	{
		$config = array(
			array(
		    'field' => 'name',
		    'label' => 'Nombre',
		    'rules' => 'required'
			),
			array(
		    'field' => 'puestoTrabajo',
		    'label' => 'Puesto de Trabajo',
		    'rules' => 'required'
			),
			array(
		    'field' => 'email',
		    'label' => 'Correo electrónico',
		    'rules' => 'required'
			),
			array(
		    'field' => 'subject',
		    'label' => 'Asunto',
		    'rules' => 'required'
			),
			array(
			'field' => 'urgency',
			'label' => 'Prioridad',
			'rules' => 'required'
			),
			array(
			'field' => 'message',
			'label' => 'Mensaje',
			'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() === true)
		{
			$data = array(
				'uniqid' => uniqid(),
				'name' => $this->input->post('name'),
				'puestoTrabajo' => $this->input->post('puestoTrabajo'),
				'customer' => $this->session->userdata('customer'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'urgency' => $this->input->post('urgency'),
				'message' => $this->input->post('message'),
			);

			$email_content = $this->parser->parse('customers/template_ticket.php', $data, TRUE);

			$this->email->from('info@pcbtroniks.com', 'Soporte - PCBTroniks');
			$this->email->to('info@pcbtroniks.com');
			$this->email->cc('hafid.luna@pcbtroniks.com');
			$this->email->subject("Ticket #" . $data['uniqid']);
			$this->email->message($email_content);

			if($this->email->send()):

			$view = array(
				'title' => 'Su mensaje se ha enviado correctamente',
				'main' => $this->load->view('customers/successfull_ticket.php', '', TRUE)
			);

			$this->parser->parse('overall/layout', $view);

			else:
				echo 'Ha ocurrido un error al enviar el ticket, por favor comuniquese vía teléfonica.';
			endif;
		}
		else
		{
			// Mostrar vista de mensaje fallido.
			echo 'Tienes que llenar todos los campos del formulario.';
		}
	}
}