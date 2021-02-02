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
}

public function index()
{
    if ($this->ion_auth->is_admin()) {
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }else if ($this->ion_auth->in_group('manager')) {
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }else{
        $data['header_name'] = "Laporan Pengiriman";
        $this->template->template_render('laporan/index', $data);
    }
}

}


/* End of file Laporan.php */
/* Location: ./modules/controllers/Laporan.php */