<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template
{

  protected $CI;

  //To initialize variables, functions and libraries
  public function __construct()
  {
    $this->CI = &get_instance();
  }

  //To render admin contents
  public function template_render($content, $data = NULL)
  {
    if (!$content) {
      return NULL;
    } else {
      $this->template['_header']  = $this->CI->load->view('template/header', $data, TRUE);
      $this->template['_content'] = $this->CI->load->view($content, $data, TRUE);
      $this->template['_sidebar']  = $this->CI->load->view('template/sidebar', $data, TRUE);
      return $this->CI->load->view('template/template', $this->template);
    }
  }
}
