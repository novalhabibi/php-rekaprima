<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManajemenController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('manajemenmodel');
        
        
        
    }

    public function index()
    {

        $data['setting'] = $this->db->get('setting')->row();
        $data['manajemens']= $this->manajemenmodel->getAll();
        $this->load->view('admin/manajemens/index',$data);


    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_manajemen', 'Nama Manajemen', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('posisi_manajemen', 'Posisi Manajemen', 'required');
        
        $this->form_validation->set_rules('profile_manajemen', 'Profile Manajemen', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/manajemens/tambah',$data);

        }
        else
        {
            $this->manajemenmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard/manajemen');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_manajemens']= $this->manajemenmodel->getAll();
        $data['manajemen']= $this->manajemenmodel->getById($id);
        $this->load->view('admin/manajemens/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->manajemenmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/manajemen');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->manajemenmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
