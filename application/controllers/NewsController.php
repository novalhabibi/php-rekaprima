<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('newsmodel');
        
        
        
    }

    public function index()
    {
        // echo "ini";
        $data['setting'] = $this->db->get('setting')->row();
        $data['news']= $this->newsmodel->getAllJoin();
        $this->load->view('admin/news/index',$data);

    }

    public function show()
    {
        $slug=$this->uri->segment(2);

        $data['berita']=$this->newsmodel->getBySlug($slug);
        $data['news']=$this->newsmodel->getAll();
        $this->load->view('single-news',$data);

    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[5]|max_length[12]');
        
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/news/tambah',$data);

        }
        else
        {
            $this->newsmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard/news');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_newss']= $this->newsmodel->getAll();
        $data['news']= $this->newsmodel->getById($id);
        $this->load->view('admin/news/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->newsmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/news');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->newsmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
