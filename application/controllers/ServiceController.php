<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('servicemodel');
        
        
        
    }

    public function index()
    {
        // echo "ini";
        $data['setting'] = $this->db->get('setting')->row();
        $data['services']= $this->servicemodel->getAllJoin();
        $this->load->view('admin/services/index',$data);

    }
    public function show(){
        $link = $this->uri->segment(2);
        $data['service'] = $this->servicemodel->getBylink($link);
        $this->load->view('singlepage-service',$data);
    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_service', 'Nama service', 'trim|required|min_length[5]|max_length[100]');
        
        $this->form_validation->set_rules('deskripsi_service', 'Deskripsi service', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/services/tambah',$data);

        }
        else
        {
            $this->servicemodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/service');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_services']= $this->servicemodel->getAll();
        $data['service']= $this->servicemodel->getById($id);
        $this->load->view('admin/services/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->servicemodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/service');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->servicemodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
