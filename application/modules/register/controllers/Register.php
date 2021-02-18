<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password tidak cocok.',
            'min_length' => 'Password setidaknya memiliki 8 karakter.',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $style = $this->load->view('style', '', true);
            $script = $this->load->view('script', '', true);
            $is_logged_in = $this->session->userdata('is_logged_in');
            $data = [];
            $this->template->load('master_auth', 'index', compact('style', 'script', 'data'));
            if (isset($is_logged_in) || $is_logged_in == true) {
                redirect('admin');
            }
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
                'status' => 0
            ];
            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Akun anda telah dibuat. </div>');
            redirect('register');
        }
    }
}
