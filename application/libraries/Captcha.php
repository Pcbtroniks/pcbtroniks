<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller{

  protected $CI;

  public function __construct()
  {
    // Assign the CodeIgniter super-object
    $this->CI =& get_instance();
    $this->CI->load->helper('captcha', 'url');
  }

  public function setCaptcha()
  {
      $config = array(
        'img_path'      => 'captcha_images/',
        'img_url'       => base_url().'captcha_images/',
        'font_path'     => base_url().'captcha_images/fonts/LibreFranklin-Regular.ttf',
        'img_width'     => '150',
        'img_height'    => 50,
        'word_length'   => 8,
        'font_size'     => 30
      );

      $captcha = create_captcha($config);
        
      // Unset previous captcha and store new captcha word
      $this->CI->session->unset_userdata('captchaCode');
      $this->CI->session->set_userdata('captchaCode', $captcha['word']);
        
      // Send captcha image to view
      return $captcha['image'];
  }

  public function refreshCaptcha()
  {
    //echo $this->CI->config->item('base_url');
  }

}