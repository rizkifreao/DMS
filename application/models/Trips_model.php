<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trips_model extends CI_Model
{

  public function add_trips($data)
  {
    $newtriparray = array_diff_key($data, ['e_expense_type' => "e_expense_type", 'e_expense_amount' => "e_expense_amount", "e_expense_desc" => "e_expense_desc"]);
    $this->db->insert('trips', $newtriparray);
    return $this->db->insert_id();
  }
  public function getall_customer()
  {
    return $this->db->select('*')->from('customers')->order_by('c_name', 'asc')->get()->result_array();
  }
  public function getall_vechicle()
  {
    return $this->db->select('*')->from('vehicles')->get()->result_array();
  }
  public function getall_driverlist()
  {
    return $this->db->select('*')->from('drivers')->get()->result_array();
  }
  public function getall_trips_expense($t_id)
  {
    return $this->db->select('*')->from('trips_expense')->where('e_trip_id', $t_id)->get()->result_array();
  }
  public function add_trip_expense($data)
  {
    $this->db->delete('trips_expense', array('e_trip_id' => $data[0]['e_trip_id']));
    return  $this->db->insert_batch('trips_expense', $data);
  }
  public function getall_trips()
  {
    $newtripdata = array();
    $tripdata = $this->db->select('*')->from('trips')->order_by('t_id', 'desc')->get()->result_array();
    if (!empty($tripdata)) {
      foreach ($tripdata as $key => $tripdataval) {
        $newtripdata[$key] = $tripdataval;
        $newtripdata[$key]['t_customer_details'] =  $this->db->select('*')->from('customers')->where('c_id', $tripdataval['t_customer_id'])->get()->row();
        $newtripdata[$key]['t_vechicle_details'] =  $this->db->select('*')->from('vehicles')->where('v_id', $tripdataval['t_vechicle'])->get()->row();
        $newtripdata[$key]['t_driver_details'] =   $this->db->select('*')->from('drivers')->where('d_id', $tripdataval['t_driver'])->get()->row();
        $getlocation = $this->db->select('latitude,longitude')->from('positions')->where('v_id', $tripdataval['t_vechicle'])->order_by('id', 'desc')->get()->row();
        if (!empty($getlocation)) {
          $newtripdata[$key]['t_current_location'] = $this->getaddress($getlocation->latitude, $getlocation->longitude);
        }
      }
      return $newtripdata;
    } else {
      return false;
    }
  }

  public function getall_trips_by($data)
  {
    $newtripdata = array();
    $tripdata = $this->db->select('*')->from('trips')->where($data)->order_by('t_id', 'desc')->get()->result_array();
    if (!empty($tripdata)) {
      foreach ($tripdata as $key => $tripdataval) {
        $newtripdata[$key] = $tripdataval;
        $newtripdata[$key]['t_customer_details'] =  $this->db->select('*')->from('customers')->where('c_id', $tripdataval['t_customer_id'])->get()->row();
        $newtripdata[$key]['t_vechicle_details'] =  $this->db->select('*')->from('vehicles')->where('v_id', $tripdataval['t_vechicle'])->get()->row();
        $newtripdata[$key]['t_driver_details'] =   $this->db->select('*')->from('drivers')->where('d_id', $tripdataval['t_driver'])->get()->row();
        $getlocation = $this->db->select('latitude,longitude')->from('positions')->where('v_id', $tripdataval['t_vechicle'])->order_by('id', 'desc')->get()->row();
        if (!empty($getlocation)) {
          $newtripdata[$key]['t_current_location'] = $this->getaddress($getlocation->latitude, $getlocation->longitude);
        }
      }
      return $newtripdata;
    } else {
      return false;
    }
  }

  public function getaddress($lat, $lng)
  {
    $google_api_key = $this->config->item('google_api_key');
    $url = 'https://maps.googleapis.com/maps/api/geocode/json?key=' . $google_api_key . '&latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    if (!empty($data)) {
      $status = $data->status;
      if ($status == "OK") {
        return $data->results[1]->formatted_address;
      } else {
        return false;
      }
    } else {
      return '';
    }
  }
  public function get_tripdetails($t_id)
  {
    return $this->db->select('*')->from('trips')->where('t_id', $t_id)->get()->result_array();
  }
  public function update_trips($data)
  {
    $newtriparray = array_diff_key($data, ['e_expense_type' => "e_expense_type", 'e_expense_amount' => "e_expense_amount", "e_expense_desc" => "e_expense_desc"]);

    $this->db->where('t_id', $this->input->post('t_id'));
    $this->db->update('trips', $newtriparray);
    return $this->input->post('t_id');
  }

  public function getAllBy($data)
  {
    return $this->db->select('*')->from('trips')->where($data)->get()->result_array();
  }

  public function getDetail($id)
  {
    return $this->db->select('*')->from('trips')->where('t_id',$id)->get()->row();
  }

  public function getTripAllBy($data)
  {
    return $this->db->select('*')->from('trips')->where($data)->get()->result();
  }

  public function update($id,$data)
  {
    $this->db->where('t_id', $id);
    return $this->db->update('trips', $data);
  }
}
