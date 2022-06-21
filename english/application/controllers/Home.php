<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'email', 'captcha'));		
	}

	public function index()
	{
		$view = array(
			'title' => 'Home',
			'ip' => $_SERVER['REMOTE_ADDR'],
			'main' => $this->load->view("home/home", '', TRUE)
		);

        $this->parser->parse("overall/layout", $view);	
	}

	public function send_budget()
	{
		$config = array(
			array(
			'field' => 'name',
			'label' => 'Nombre',
			'rules' => 'required'
			),

			array(
			'field' => 'email',
			'label' => 'Correo electrónico',
			'rules' => 'required'
			),

			array(
			'field' => 'relatedservice',
			'label' => 'Servicios relacionados',
			'rules' => 'required'
			),

			array(
			'field' => 'phone',
			'label' => 'Número de teléfono',
			'rules' => 'required'
			),

			array(
			'field' => 'company',
			'label' => 'Compañia',
			'rules' => 'required'
			),

			array(
			'field' => 'message',
			'label' => 'Mensaje',
			'rules' => 'required'
			),								
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() === true)
		{

      if(!$this->validar_captcha())
      {
        redirect(base_url());
      }

			# Obtener información del visitante en base a su dirección IP.
			$ip = $_SERVER['REMOTE_ADDR'];
			$geoData = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

			$data = array(
				'uniqid' => uniqid(),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'relatedservice' => $this->input->post('relatedservice'),
				'city' => $geoData->geoplugin_city,
				'state' => $geoData->geoplugin_regionName,
				'country' => $geoData->geoplugin_countryName,
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'message' => $this->input->post('message'),
			);

			$email_content = $this->parser->parse('budgets/template_budget.php', $data, TRUE);

			$this->email->from('info@pcbtroniks.com', 'Soporte - PCBTroniks');
			$this->email->to('hafid.luna@pcbtroniks.com');
			$this->email->subject("Solicitud Cotización #" . $data['uniqid']);
			$this->email->message($email_content);

			if($this->email->send()):

			$view = array(
				'title' => 'Su mensaje se ha enviado correctamente',
				'main' => $this->load->view('budgets/successfull_budget.php', '', TRUE)
			);

			$this->parser->parse('overall/layout', $view);

			else:
				echo 'Ha ocurrido un error al enviar la cotización, por favor comuniquese vía teléfonica o correo electrónico.';
			endif;			
		}
		else
		{
			// Mostrar vista de mensaje fallido.
			echo 'Tienes que llenar todos los campos del formulario.';			
		}
	}

  private function validar_captcha()
  {
    // ReCaptcha V2
    $captcha = $this->input->post('g-recaptcha-response');

    if(!empty($captcha))
    {
      $secretKey = "6LeWm90ZAAAAAD4PKBAFq5xsOlLImj5uIP3NZ9Qc";
      $ip = $_SERVER['REMOTE_ADDR'];
      $ch = curl_init();

      curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
          'secret' => $secretKey,
          'response' => $captcha,
          'remoteip' => $ip
        ],
        CURLOPT_RETURNTRANSFER => true
      ]);

      $output = curl_exec($ch);
      curl_close($ch);

      //Si queremos visualizar la información obtenida de la petición a la api de validación de Google para comprobar el estado de esta lo haremos con la función de PHP var_dump
      //var_dump($output);

      $jsonResponde = json_decode($output);

      return ($jsonResponde->success) ? true : false;
    }
    else
    {
      return false;
    }
    // End ReCaptcha V2
  }
}