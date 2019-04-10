<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('slidermodel');
        
        
        
    }

    public function index()
    {

        $data['setting'] = $this->db->get('setting')->row();
        $data['sliders']= $this->slidermodel->getAll();
        $this->load->view('admin/sliders/index',$data);


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
            $this->load->view('admin/sliders/tambah',$data);

        }
        else
        {
            $this->slidermodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard/slider');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_sliders']= $this->slidermodel->getAll();
        $data['slider']= $this->slidermodel->getById($id);
        $this->load->view('admin/sliders/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->slidermodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/slider');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->slidermodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
