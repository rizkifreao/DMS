<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Laporan
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Rizki Pebrianto <rizkipebrianto96@gmail.com>
 * @param     ...
 * @return    ...
 *
 */

class Laporan extends CI_Controller
{
    
public function __construct()
{
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model(['dashboard_model', 'trips_model', 'drivers_model']);
    chek_session();
}

public function index()
{
    $uid = $this->session->get_userdata()['user_id'];
    if ($this->ion_auth->is_admin()) {
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }else if ($this->ion_auth->in_group('manager')) {
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }else{
        // $data['triplist'] = $this->trips_model->getAllBy(['t_driver' => $uid]);
        $data['triplist'] = $this->trips_model->getall_trips_by(['t_driver' => $uid]);
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }
}

}


/* End of file Laporan.php */
/* Location: ./modules/controllers/Laporan.php */