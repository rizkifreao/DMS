<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Login
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    rizkipebrianto <rizkipebrianto96@gmail.com>
 * @link      https://github.com/rizkifreao
 * @param     ...
 * @return    ...
 *
 */

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library(['ion_auth', 'form_validation']);
    $this->lang->load('auth', 'indonesian');
    $this->load->helper(['url', 'language']);
    $this->load->model('drivers_model');

    // chek_session();

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

    if ($this->ion_auth->logged_in()) {
      redirect('dashboard');
    }
  }

  /**
   * Index Page for this controller.
   *
   * map to /index.php/welcome/<method_name>
   * @return Views
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    if ($this->ion_auth->logged_in()) {
      redirect('dashboard', 'refresh');
    }
    
    $this->data['title'] = $this->lang->line('login_heading');

    // validate form input
    $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required', array('required' => '* Email tidak boleh kosong',));
    $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required', array('required' => '* Password tidak boleh kosong',));

    if ($this->form_validation->run() === TRUE) {
      // check to see if the user is logging in
      // check for "remember me"
      $remember = (bool)$this->input->post('remember');

      if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
        //if the login is successful
        //redirect them back to the home page
        // $user = $this->ion_auth_model->getDetail(['email' => $this->input->post('identity')]);
        // if (!$this->ion_auth->in_group('admin')) {
        
        //   if ($this->drivers_model->getDetail($user->company)->d_is_active == 0) {
        //     echo json_encode($user);
        //   }else{
        //     // $this->session->set_flashdata('message', $this->ion_auth->messages());
        //     // redirect('dashboard', 'refresh');
        //   }
        // }else{
        //   // $this->session->set_flashdata('message', $this->ion_auth->messages());
        //   // redirect('dashboard', 'refresh');
        // }
        // exit;
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('dashboard', 'refresh');
      } else {
        // if the login was un-successful
        // redirect them back to the login page
        $this->session->set_flashdata('message', $this->ion_auth->errors());
        // echo json_encode($this->input->post());
        redirect('/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
      }
    } else {
      // the user is not logging in so display the login page
      // set the flash data error message if there is one
      $this->data['message'] = $this->session->flashdata('message');

      $this->data['identity'] = [
        'name' => 'identity',
        'placeholder' => 'Email...',
        'type' => 'email',
        'class' => 'form-control',
        'value' => $this->form_validation->set_value('identity'),
      ];

      $this->data['password'] = [
        'name' => 'password',
        'placeholder' => 'Password...',
        'type' => 'password',
        'class' => 'form-control',
      ];

      $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'login', $this->data);
    }
  }

  public function register()
  {
    $tables = $this->config->item('tables', 'ion_auth');
    $identity_column = $this->config->item('identity', 'ion_auth');
    $this->data['identity_column'] = $identity_column;

    // validate form input
    $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
    $this->form_validation->set_rules('phone', 'Nomor telepon', 'trim|required');
    // $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');
    if ($identity_column !== 'email') {
      $this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email', ['valid_email' => 'Email sudah digunakan !']);
    } else {
      $this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
      $this->form_validation->set_rules('email', '', 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]',['is_unique'=>'Email %s sudah digunakan !']);
    }
    // $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
    // $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
    $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]', ['min_length'=>'Kata sandi minimal harus 8 karatker']);
    $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required|matches[password]', ['matches' => 'Kata sandi tidak sama']);

    if ($this->form_validation->run() === TRUE) {
      $email = strtolower($this->input->post('email'));
      $identity = $this->input->post('identity');
      // $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
      $password = $this->input->post('password');

      $response = $this->drivers_model->add_drivers(['d_is_active'=>0]);
      $insert_id = $this->db->insert_id();

      $additional_data = [
        'first_name' => $this->input->post('first_name'),
        'company' => $insert_id,
        'phone' => $this->input->post('phone'),
      ];
      // echo $identity;
      // exit;

    }
    if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data)) {
      // check to see if we are creating the user
      // redirect them back to the admin page
      sendWA([
        'notelp'=> $this->input->post('phone'),
        'msg' => "Akun anda berhasil dibuat !\n\n
        Nama : ".$this->input->post('first_name')."\n
        Email : ".$this->input->post('email')."\n\nSilahkan buka link ini untuk login :\n".base_url()
      ]);

      sendWA([
        'notelp'=> $this->ion_auth->user(1)->row()->phone,
        'msg' => "Seseorang telah membuat akun !\n\n
        Nama : ".$this->input->post('first_name')."\n
        Email : ".$this->input->post('email')."\n\nSilahkan buka link ini jika ingin mengaktifkan akun :\n".base_url('drivers')."/akun"
      ]);
      $this->session->set_flashdata('successmessage', $this->ion_auth->messages());
      redirect("login", 'refresh');
    } else {
      // display the create user form
      // set the flash data error message if there is one
      $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
      $data['header_name'] = "User Driver";
      $this->data['first_name'] = [
        'name' => 'first_name',
        'id' => 'first_name',
        'type' => 'text',
        'class' => 'form-control',
        'placeholder' => 'Masukan nama lengkap',
        'value' => $this->form_validation->set_value('first_name'),
      ];
      $this->data['last_name'] = [
        'name' => 'last_name',
        'id' => 'last_name',
        'type' => 'text',
        'class' => 'form-control',
        'value' => $this->form_validation->set_value('last_name'),
      ];
      $this->data['identity'] = [
        'name' => 'identity',
        'id' => 'identity',
        'type' => 'text',
        'class' => 'form-control',
        'placeholder' => 'Masukan username',
        'value' => $this->form_validation->set_value('identity'),
      ];
      $this->data['email'] = [
        'name' => 'email',
        'id' => 'email',
        'type' => 'text',
        'class' => 'form-control',
        'placeholder' => 'Masukan email',
        'value' => $this->form_validation->set_value('email'),
      ];
      $this->data['company'] = [
        'name' => 'company',
        'id' => 'company',
        'type' => 'text',
        'class' => 'form-control',
        'value' => $this->form_validation->set_value('company'),
      ];
      $this->data['phone'] = [
        'name' => 'phone',
        'id' => 'phone',
        'type' => 'number',
        'class' => 'form-control',
        'placeholder' => 'Masukan nomor telepon (WA)',
        'value' => $this->form_validation->set_value('phone'),
      ];
      $this->data['password'] = [
        'name' => 'password',
        'id' => 'password',
        'type' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Buat password',
        'value' => $this->form_validation->set_value('password'),
      ];
      $this->data['password_confirm'] = [
        'name' => 'password_confirm',
        'id' => 'password_confirm',
        'type' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Ulangi password',
        'value' => $this->form_validation->set_value('password_confirm'),
      ];

      // $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'create_user', $this->data);
      $this->load->view('auth/create_user',$this->data);
      // $this->template->render('create_user', $this->data);
    }
  }

  /**
   * @param string     $view
   * @param array|null $data
   * @param bool       $returnhtml
   *
   * @return mixed
   */
  public function _render_page($view, $data = NULL, $returnhtml = FALSE) //I think this makes more sense
  {

    $viewdata = (empty($data)) ? $this->data : $data;

    $view_html = $this->load->view($view, $viewdata, $returnhtml);

    // This will return html on 3rd argument being true
    if ($returnhtml) {
      return $view_html;
    }
  }

  public function test()
  {
    // $ip = $this->input->ip_address();
    // echo "your IP : ".$ip;
  }
}
