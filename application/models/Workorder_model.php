<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Workorder_model extends CI_Model
{

  public function add($data)
  {
    return  $this->db->insert('workorder', $data);
  }
  public function getall_vehicle()
  {
    return $this->db->select('*')->from('vehicles')->order_by('v_id', 'desc')->get()->result_array();
  }
  public function getDetail($id)
  {
    return $this->db->select('*')->from('workorder')->where('v_id', $id)->get()->row();
  }
  public function getDetailArray($v_id)
  {
    return $this->db->select('*')->from('workorder')->where('v_id', $v_id)->get()->result_array();
  }
  public function getAllBy($data)
  {
    return $this->db->select('*')->from('workorder')->where($data)->get()->result_array();
  }
  public function edit_vehicle()
  {
    $this->db->where('v_id', $this->input->post('v_id'));
    return $this->db->update('vehicles', $this->input->post());
  }
}
