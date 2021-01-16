<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wo extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('trips_model');
    $this->load->model('vehicle_model');
    $this->load->model('drivers_model');
    $this->load->model('workorder_model');
    $this->load->helper(array('form', 'url', 'string'));
    $this->load->library('form_validation');
    $this->load->library('session');
    chek_session();

    // MAP
    // https://stackoverflow.com/questions/51702406/leaflet-translate-coordinates-into-street-addresses/51702649
  }

  public function index()
  {
    $uid = $this->session->get_userdata()['user_id'];
    $res['triplist'] = $this->trips_model->getall_trips_by(['t_driver' => $uid, 't_trip_status' => 'OnGoing']);
    $res['header_name'] = "Work Order";
    $this->template->template_render('workorder/index', $res);
  }

  public function proses_trip($id)
  {
    $data = $this->trips_model->getAllBy(['t_id'=> $id]);
    $res['tripdetails'] = $this->trips_model->get_tripdetails($id);
    $res['vechicle'] = $this->vehicle_model->getDetail($data[0]['t_vechicle']);
    $res['wo'] = $this->workorder_model->getAllBy(['t_id' => $id]);
    $res['header_name'] = "Proses Trip";
    // echo json_encode($res);
    // echo var_dump($res);
    // echo json_encode($this->vehicle_model->getDetail(1)->v_name);
    $this->template->template_render('workorder/proses', $res);
  }

  public function savewo()
  {
    $post = $this->input->post();
    $p_km = $_FILES['p_km']['name'];
    $p_fuel = $_FILES['p_fuel']['name'];
    $s_fuel = $_FILES['s_fuel']['name'];
    $this->load->library('upload');

    if (!file_exists('./public/img/trips_' . $post['t_id'] . '/')) {
      mkdir('./public/img/trips_' . $post['t_id'] . '/', 0777, true);
    }
    $config['upload_path'] = './public/img/trips_'. $post['t_id'].'/';
    $config['file_types'] = array('image/jpeg', 'image/png', 'image/jpeg', 'application/x-download');
    $config['allowed_types'] = array("png", "jpg", "jpeg");
    $config['file_ext_tolower'] = TRUE;
    $config['overwrite'] = TRUE;
    
    if (!empty($p_km)) {
      $x = explode(".", $p_km);
      $ext = strtolower(end($x));
      $config['file_name'] = $post['t_id'] . "-kilometer." . $ext;
      $kilometer = $config['file_name'];
      $this->upload->initialize($config);
      $this->upload->do_upload('p_km');
    }

    if (!empty($p_fuel)) {
      $x = explode(".", $p_fuel);
      $ext = strtolower(end($x));
      $config['file_name'] = $post['t_id'] . "-Bukti Bensin." . $ext;
      $bensin = $config['file_name'];
      $this->upload->initialize($config);
      $this->upload->do_upload('p_fuel');
    }

    if (!empty($s_fuel)) {
      $x = explode(".", $s_fuel);
      $ext = strtolower(end($x));
      $config['file_name'] = $post['t_id'] . "-Struk Bensin." . $ext;
      $struk_bensin = $config['file_name'];
      $this->upload->initialize($config);
      $this->upload->do_upload('s_fuel');
    }

    if (!empty($p_km) && !$this->upload->do_upload('p_km')) {
      $errormsg = $this->upload->display_errors();
      // echo json_encode($errormsg);
      $this->session->set_flashdata('warningmessage', $errormsg);
      redirect('dashboard');
    } else if (!empty($p_fuel) && !$this->upload->do_upload('p_fuel')) {
      $errormsg = $this->upload->display_errors();
      $this->session->set_flashdata('warningmessage', $errormsg);
      redirect('dashboard');
    } else if (!empty($s_fuel) && !$this->upload->do_upload('s_fuel')) {
      $errormsg = $this->upload->display_errors();
      $this->session->set_flashdata('warningmessage', $errormsg);
            redirect('dashboard');
    }else{
      $data['t_id'] = $post['t_id'];
      $data['p_km'] = $kilometer;
      $data['p_fuel'] = $bensin;
      $data['s_fuel'] = $struk_bensin;
      $data['b_fuel'] = $post['b_fuel'];
      $data['location'] = $post['location'];
      $data['pengeluaran'] = $post['pengeluaran'];
      $this->trips_model->update($post['t_id'],['t_trip_status' => "OnGoing"]);
      $this->workorder_model->add($data);
      $this->session->set_flashdata('successmessage', "Sukses menyimpan data");
      redirect('dashboard','refresh');
    }
  }
}