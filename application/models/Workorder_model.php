<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Workorder_model extends CI_Model
{

  public function add($data)
  {
    return  $this->db->insert('workorder', $data);
  }
  public function getall_vehicle()
  {
    return $this->db->select('*')->from('vehicles')->order_by('wo_id', 'desc')->get()->result_array();
  }
  public function getDetail($id)
  {
    return $this->db->select('*')->from('workorder')->where('wo_id', $id)->get()->row();
  }

  public function getDetailBy($data)
  {
    return $this->db->select('*')->from('workorder')->where($data)->get()->row();
  }
  public function getDetailArray($wo_id)
  {
    return $this->db->select('*')->from('workorder')->where('wo_id', $wo_id)->get()->result_array();
  }
  public function getAllBy($data)
  {
    return $this->db->select('*')->from('workorder')->where($data)->get()->result_array();
  }
  public function edit_vehicle()
  {
    $this->db->where('wo_id', $this->input->post('wo_id'));
    return $this->db->update('vehicles', $this->input->post());
  }
}
