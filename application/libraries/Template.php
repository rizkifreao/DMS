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
  public function render($content, $data = NULL)
  {
    if (!$content) {
      return NULL;
    } else {
      $this->template['_header']  = $this->CI->load->view('template/header', $data, TRUE);
     
        $this->template['_content'] = $this->CI->load->view('auth/' . $content, $data, TRUE);
      

      if ($this->CI->ion_auth->in_group('admin')) {
        $this->template['_sidebar']  = $this->CI->load->view('template/sidebar_admin', $data, TRUE);
      } else {
        $this->template['_sidebar']  = $this->CI->load->view('template/sidebar_driver', $data, TRUE);
      }
      return $this->CI->load->view('template/template', $this->template);
    }
  }

  public function template_render($content, $data = NULL)
  {
    if (!$content) {
      return NULL;
    } else {
      $this->template['_header']  = $this->CI->load->view('template/header', $data, TRUE);
      if ($this->CI->ion_auth->in_group('admin')) {
        $this->template['_content'] = $this->CI->load->view('admin/'.$content, $data, TRUE);
      } else if ($this->CI->ion_auth->in_group('manager')) {
        $this->template['_content'] = $this->CI->load->view('manager/' . $content, $data, TRUE);
      }else {
        $this->template['_content'] = $this->CI->load->view('driver/'.$content, $data, TRUE);
      }
      
      if ($this->CI->ion_auth->in_group('admin')) {
        $this->template['_sidebar']  = $this->CI->load->view('template/sidebar_admin', $data, TRUE);
      } else if ($this->CI->ion_auth->in_group('manager')) {
        $this->template['_content'] = $this->CI->load->view('template/sidebar_manager' . $content, $data, TRUE);
      }else{
        $this->template['_sidebar']  = $this->CI->load->view('template/sidebar_driver', $data, TRUE);
      }
      return $this->CI->load->view('template/template', $this->template);
    }
  }
}
