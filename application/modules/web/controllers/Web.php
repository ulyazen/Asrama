<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }
    public function index()
    {
        $data['dataArtikelLimit2'] = $this->Web_model->readArtikelLimit2();
        $data['dataArtikelLimit4'] = $this->Web_model->readArtikelLimit4();

        $config['base_url'] = site_url('web/index'); //site url
        $config['total_rows'] = $this->db->count_all('tbl_artikel'); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['dataArtikel'] = $this->Web_model->readArtikelAll($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $this->template->load('master_web', 'index', $data);
    }

    public function galeri()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $data['dataGaleri'] = $this->Web_model->readGaleri();
        $this->template->load('master_web', 'galeri', $data);
    }
    public function kontak()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $this->template->load('master_web', 'kontak', $data);
    }
    public function tentang()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $data['dataSite'] = $this->Web_model->readSite(1);
        $this->template->load('master_web', 'tentang', $data);
    }
    public function struktur()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $data['dataSite'] = $this->Web_model->readSite(2);
        $this->template->load('master_web', 'struktur', $data);
    }
    public function proker()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $data['dataSite'] = $this->Web_model->readSite(3);
        $this->template->load('master_web', 'proker', $data);
    }
    public function artikel($slug = NULL)
    {
        $data['artikel'] = $this->Web_model->readArtikel($slug);
        if (empty($data['artikel'])) {
            show_404();
        }
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $this->template->load('master_web', 'artikel', $data);
    }
}
