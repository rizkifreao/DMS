<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model(['dashboard_model', 'trips_model']);
    chek_session();
  }

  public function index()
  {
    $uid = $this->session->get_userdata()['user_id'];
    if($this->ion_auth->in_group('admin')){
      $data['iechart'] = $this->dashboard_model->get_iechartdata();
      $data['dashboard'] = $this->dashboard_model->getdashboard_info();
      $data['vechicle_currentlocation'] = $this->dashboard_model->get_vechicle_currentlocation();
      $data['vechicle_status'] = $this->dashboard_model->getvechicle_status();
    }else{
      $data['triplist'] = $this->trips_model->getAllBy(['t_driver' => $uid]);
      $data['tot_trips'] = count($this->trips_model->getAllBy(['t_driver' => $uid]));
      $data['trip_complete'] = count($this->trips_model->getAllBy(['t_driver' => $uid,'t_trip_status' => 'Completed']));
      $data['trip_ongoing'] = count($this->trips_model->getAllBy(['t_driver' => $uid,'t_trip_status' => 'OnGoing']));
      $data['trip_pending'] = count($this->trips_model->getAllBy(['t_driver' => $uid,'t_trip_status' => 'Pending']));
      $data['triplist'] = $this->trips_model->getall_trips_by(['t_driver' => $uid, 't_trip_status'=>'Pending']);
    }
    $data['header_name'] = "Dashboard Driver";
    // echo var_dump($data);
    // echo json_encode($this->trips_model->getAllBy(['t_driver' => $uid]));
    $this->template->template_render('dashboard', $data);
  }
  public function iechart()
  {
    $data = $this->dashboard_model->get_iechartdata();
    $res = "['" . implode("', '", array_keys($data)) . "']";
    $income = "['" . implode("', '", array_column($data, 'income')) . "']";
    $expense = "['" . implode("', '", array_column($data, 'expense')) . "']";
    echo json_encode(array('res' => $res, 'income' => $income, 'expense' => $expense));
  }
}
