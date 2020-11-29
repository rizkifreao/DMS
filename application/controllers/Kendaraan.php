<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('vehicle_model');
    $this->load->helper(array('form', 'url', 'string'));
    $this->load->library('form_validation');
    $this->load->library('session');
    chek_session();
    chek_administrator();
  }

  public function index()
  {
    $data['vehiclelist'] = $this->vehicle_model->getall_vehicle();
    // echo json_encode($data);
    $this->template->template_render('kendaraan/index', $data);
  }
  public function create()
  {
    $this->template->template_render('vehicle_add');
  }
  public function insertvehicle()
  {
    $this->form_validation->set_rules('v_registration_no', 'Registration Number', 'required|trim|is_unique[vehicles.v_registration_no]');
    $this->form_validation->set_message('is_unique', '%s is already exist');
    $this->form_validation->set_rules('v_model', 'Model', 'required|trim');
    $this->form_validation->set_rules('v_chassis_no', 'Chassis No', 'required|trim');
    $this->form_validation->set_rules('v_engine_no', 'Engine No', 'required|trim');
    $this->form_validation->set_rules('v_manufactured_by', 'Manufactured By', 'required|trim');
    $testxss = xssclean($_POST);
    if ($this->form_validation->run() == TRUE && $testxss) {
      $response = $this->vehicle_model->add_vehicle($this->input->post());
      if ($response) {
        $this->session->set_flashdata('successmessage', 'New vehicle added successfully..');
        redirect('vehicle');
      }
    } else {
      $errormsg = validation_errors();
      if (!$testxss) {
        $errormsg = 'Error! Your input are not allowed.Please try again';
      }
      $this->session->set_flashdata('warningmessage', $errormsg);
      redirect('kendaraan/create');
    }
  }
  public function editvehicle()
  {
    $v_id = $this->uri->segment(3);
    $data['vehicledetails'] = $this->vehicle_model->get_vehicledetails($v_id);
    $this->template->template_render('vehicle_add', $data);
  }

  public function updatevehicle()
  {
    $testxss = xssclean($_POST);
    if ($testxss) {
      $response = $this->vehicle_model->edit_vehicle($this->input->post());
      if ($response) {
        $this->session->set_flashdata('successmessage', 'Vehicle updated successfully..');
        redirect('vehicle');
      } else {
        $this->session->set_flashdata('warningmessage', 'Something went wrong..Try again');
        redirect('vehicle');
      }
    } else {
      $this->session->set_flashdata('warningmessage', 'Error! Your input are not allowed.Please try again');
      redirect('vehicle');
    }
  }
}
