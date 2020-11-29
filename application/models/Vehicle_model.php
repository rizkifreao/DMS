<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class vehicle_model extends CI_Model
{

  public function add_vehicle($data)
  {
    return  $this->db->insert('vehicles', $data);
  }
  public function getall_vehicle()
  {
    return $this->db->select('*')->from('vehicles')->order_by('v_id', 'desc')->get()->result_array();
  }
  public function get_vehicledetails($v_id)
  {
    return $this->db->select('*')->from('vehicles')->where('v_id', $v_id)->get()->result_array();
  }
  public function edit_vehicle()
  {
    $this->db->where('v_id', $this->input->post('v_id'));
    return $this->db->update('vehicles', $this->input->post());
  }
}
