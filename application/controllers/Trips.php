<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trips extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('trips_model','workorder_model','vehicle_model');
    $this->load->helper(array('form', 'url', 'string'));
    $this->load->library('form_validation');
    $this->load->library('session');
    chek_session();
    chek_administrator();

    // MAP
    // https://stackoverflow.com/questions/51702406/leaflet-translate-coordinates-into-street-addresses/51702649
  }

  public function index()
  {
    $data['triplist'] = $this->trips_model->getall_trips();
    $this->template->template_render('trips/index', $data);
    // echo json_encode($data['triplist']);
  }
  public function addtrips()
  {
    $data['customerlist'] = $this->trips_model->getall_customer();
    $data['vechiclelist'] = $this->trips_model->getall_vechicle();
    $data['driverlist'] = $this->ion_auth->users(2)->result();
    $this->template->template_render('trips/trip-form', $data);
  }
  public function inserttrips()
  {
    $testxss = xssclean($_POST);
    if ($testxss) {
      $response = $this->trips_model->add_trips($this->input->post());
      if ($response) {
        $this->session->set_flashdata('successmessage', 'New trip added successfully..');
      } else {
        $this->session->set_flashdata('warningmessage', 'Unexpected error..Try again');
      }
      redirect('trips');
    } else {
      $this->session->set_flashdata('warningmessage', 'Error! Your input are not allowed.Please try again');
      redirect('trips');
    }
  }
  public function edittrip()
  {
    $data['customerlist'] = $this->trips_model->getall_customer();
    $data['vechiclelist'] = $this->trips_model->getall_vechicle();
    $data['driverlist'] = $this->ion_auth->users('drivers')->result();
    $t_id = $this->uri->segment(3);
    $data['trip_expense'] = $this->trips_model->getall_trips_expense($t_id);
    $data['tripdetails'] = $this->trips_model->get_tripdetails($t_id);

    // echo json_encode($data);
    $this->template->template_render('trips/trip-form', $data);
  }

  public function updatetrips()
  {
    // $testxss = xssclean($this->input->post());
    // echo json_encode($this->input->post());
    // exit;
    // if ($testxss) {
      $response = $this->trips_model->update_trips($this->input->post());
      if ($response) {
        if (!empty($this->input->post('e_expense_type'))) {
          foreach ($this->input->post('e_expense_type') as $key => $e_expense_type) {
            $arrangeexp[$key]['e_trip_id'] = $response;
            $arrangeexp[$key]['e_customer_id'] = $this->input->post('t_customer_id');
            $arrangeexp[$key]['e_expense_type'] = $e_expense_type;
            $arrangeexp[$key]['e_expense_desc'] = $this->input->post('e_expense_desc')[$key];
            $arrangeexp[$key]['e_expense_amount'] = $this->input->post('e_expense_amount')[$key];
            $arrangeexp[$key]['e_created_date'] = date('Y-m-d h:i:s');
          }
          $inserttripexp = $this->trips_model->add_trip_expense($arrangeexp);
        }
        $this->session->set_flashdata('successmessage', 'New trip added successfully..');
      } else {
        $this->session->set_flashdata('warningmessage', 'Unexpected error..Try again');
      }
      redirect('trips');
    // } else {
    //   $this->session->set_flashdata('warningmessage', 'Error! Your input are not allowed.Please try again');
    //   redirect('trips');
    // }
  }

  public function viewDetail($id)
  {
    $trip = $this->trips_model->getDetail($id);
    if ($trip) {
      $data = ['trip' => $trip, 
      'det_trip' => $this->workorder_model->getDetailBy(['t_id' => $trip->t_id]),
      'vechicle'=>$this->vehicle_model->getDetail($trip->t_vechicle)];
      // echo json_encode($data);
      $this->template->template_render('trips/trip_detail',$data);
    }else{
      $this->session->set_flashdata('warningmessage', 'Data tidak ditemukan');
      redirect('trips');
    }
  }
}
