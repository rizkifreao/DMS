<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Users
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

class Users extends CI_Controller
{
    
public function __construct()
{
    parent::__construct();
}

public function index()
{
    $testxss = xssclean($_POST);
    if ($testxss) {
        // echo json_encode($this->input->post());
        // exit;
        $response = $this->drivers_model->edit_driver($this->input->post());
        if ($response) {
            $this->session->set_flashdata('successmessage', 'Profil berhasil di perbaharui..');
            redirect('dashboard','refresh');
        } else {
            $this->session->set_flashdata('warningmessage', 'Something went wrong..Try again');
            redirect('dashboard','refresh');
        }
    } else {
        $this->session->set_flashdata('warningmessage', 'Error! Your input are not allowed.Please try again');
        redirect('dashboard','refresh');
    }
}

}


/* End of file Users.php */
/* Location: ./modules/controllers/Users.php */