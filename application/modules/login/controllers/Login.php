<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
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
			$this->loginAct();
		}
	}

	public function loginAct()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$userLogin = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

		if ($userLogin) {
			if ($userLogin['status'] == 1) {
				if (password_verify($password, $userLogin['password'])) {
					$data = [
						'username' => $userLogin['username'],
						'is_logged_in' => true
					];
					$this->session->set_userdata($data);
					redirect('admin');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Password yang anda inputkan salah. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button> </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Akun belum diaktifkan sebagai admin. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> </div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Akun tidak terdaftar. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> </div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		redirect('login');
	}
}
