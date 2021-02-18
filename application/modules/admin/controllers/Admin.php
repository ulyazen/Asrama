<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		is_logged_in();
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data = [];
		$this->template->load('master_admin', 'index', $data);
	}
	public function uploadFileArtikel()
	{
		$config['upload_path'] = './file/artikel/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			return "default.jpg";
		} else {
			$result = $this->upload->data();
			return $result['file_name'];
		}
	}
	public function uploadFileGaleri()
	{
		$config['upload_path'] = './file/galeri/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			return "default.jpg";
		} else {
			$result = $this->upload->data();
			return $result['file_name'];
		}
	}
	public function uploadFileSite()
	{
		$config['upload_path'] = './file/site/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			return "default.jpg";
		} else {
			$result = $this->upload->data();
			return $result['file_name'];
		}
	}
	public function artikel()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['dataArtikel'] = $this->Admin_model->readArtikel();
		$this->template->load('master_admin', 'artikel', $data);
	}
	public function artikelCreate()
	{
		$slug = url_title($this->input->post('judul'), 'dash', TRUE) . "-" . date('Y-m-d-H-i-s');
		$data = [
			"id_artikel" => 'NULL',
			"judul" => $this->input->post('judul'),
			"file" => $this->uploadFileArtikel(),
			"isi" => $this->input->post('isi'),
			"slug" => $slug,
			"tgl_post" => date('Y-m-d H:i:s')
		];
		$this->Admin_model->createArtikel($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data telah ditambahkan. </div>');
		redirect('admin/artikel');
	}

	public function artikelUpdate()
	{

		$id = $this->input->post('id_artikel');
		$slug = url_title($this->input->post('judul'), 'dash', TRUE) . "-" . date('Y-m-d-H-i-s');
		if (!empty($_FILES["file"]["name"])) {
			$data = [
				"judul" => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
				"slug" => $slug,
				"file" => $this->uploadFileArtikel(),
				"tgl_post" => date('Y-m-d H:i:s')
			];
		} else {
			$data = [
				"judul" => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
				"slug" => $slug,
				"file" => $this->input->post('old_file'),
				"tgl_post" => date('Y-m-d H:i:s')
			];
		}
		$this->Admin_model->updateArtikel($id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Data telah diperbarui. </div>');
		redirect('admin/artikel');
	}
	public function artikelDelete()
	{
		$id = $this->input->post('id_artikel');
		$this->Admin_model->deleteArtikel($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data telah terhapus. </div>');
		redirect('admin/artikel');
	}
	public function galeri()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['dataGaleri'] = $this->Admin_model->readGaleri();
		$this->template->load('master_admin', 'galeri', $data);
	}
	public function galeriUpdate()
	{
		$id = $this->input->post('id_galeri');
		if (!empty($_FILES["file"]["name"])) {
			$data = [
				"judul_foto" => $this->input->post('judul_foto'),
				"file" => $this->uploadFileGaleri()
			];
		} else {
			$data = [
				"judul_foto" => $this->input->post('judul_foto'),
				"file" => $this->input->post('old_file')
			];
		}
		$this->Admin_model->updateGaleri($id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Data telah diperbarui. </div>');
		redirect('admin/galeri');
	}
	public function pesan()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['dataPesan'] = $this->Admin_model->readPesan();
		$this->template->load('master_admin', 'pesan', $data);
	}
	public function pesanCreate()
	{
		$data = [
			"id_pesan" => 'NULL',
			"nama" => $this->input->post('nama'),
			"email" => $this->input->post('email'),
			"subjek" => $this->input->post('subjek'),
			"pesan" => $this->input->post('pesan'),
			"tgl_pesan" => date('Y-m-d H:i:s')
		];
		$this->Admin_model->createPesan($data);
		redirect('web/kontak');
	}
	public function pesanDelete()
	{
		$id = $this->input->post('id_pesan');
		$this->Admin_model->deletePesan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data telah terhapus. </div>');
		redirect('admin/pesan');
	}
	public function site()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['dataSite'] = $this->Admin_model->readSite();
		$this->template->load('master_admin', 'site', $data);
	}
	public function siteUpdate()
	{
		$id = $this->input->post('id_site');
		if (!empty($_FILES["file"]["name"])) {
			$data = [
				"file" => $this->uploadFileSite(),
				"judul" => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
			];
		} else {
			$data = [
				"file" => NULL,
				"judul" => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
			];
		}
		$this->Admin_model->updateSite($id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Data telah diperbarui. </div>');
		redirect('admin/site');
	}
	public function preview($slug = NULL)
	{
		$data['artikel'] = $this->Admin_model->readArtikel($slug);
		if (empty($data['artikel'])) {
			show_404();
		}
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$this->template->load('master_admin', 'preview', $data);
	}
	public function user()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['dataUser'] = $this->Admin_model->readUser();
		$this->template->load('master_admin', 'user', $data);
	}
	public function userUpdate()
	{
		$id = $this->input->post('id_user');
		$data = [
			"status" => $this->input->post('status'),
		];
		$this->Admin_model->updateUser($id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data telah diubah. </div>');
		redirect('admin/user');
	}
	public function userDelete()
	{
		$id = $this->input->post('id_user');
		$this->Admin_model->deleteUser($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data telah terhapus. </div>');
		redirect('admin/user');
	}
}
