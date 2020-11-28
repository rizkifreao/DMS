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
    $this->load->model('dashboard_model');
    chek_session();
  }

  public function index()
  {
    $data['iechart'] = $this->dashboard_model->get_iechartdata();
    $data['dashboard'] = $this->dashboard_model->getdashboard_info();
    $data['vechicle_currentlocation'] = $this->dashboard_model->get_vechicle_currentlocation();
    $data['vechicle_status'] = $this->dashboard_model->getvechicle_status();
    $this->template->template_render('admin/dashboard', $data);
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
