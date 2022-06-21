<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database('default');
  }

  public function authentication(string $customer_username)
  {
    # Preparar los datos que llevará la consulta.
    $data = array(
      'customer_username' => $customer_username
    );

    # Preparar la consulta con los datos proporcionados y limitar el resultado 1 una fila.
    $this->db->where($data);
    $this->db->limit(1);

    # Ejecutar la consuta.
    $query = $this->db->get('customers');

    # Verificar si hubo resultados.
    if($query->num_rows() == 1)
    {
      return $query->row();
    }

    return false;
  }
}