<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('maintenancemodel');
        
        
        
    }

    public function index()
    {

        $data['setting'] = $this->db->get('setting')->row();
        $data['maintenances']= $this->maintenancemodel->getAllJoin();
        $this->load->view('admin/maintenances/index',$data);

    }

    public function show(){
        $link = $this->uri->segment(2);
        $data['maintenance'] = $this->maintenancemodel->getBylink($link);
        $this->load->view('singlepage',$data);
    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_maintenance', 'Nama maintenance', 'trim|required|min_length[5]|max_length[12]');
        
        $this->form_validation->set_rules('deskripsi_maintenance', 'Deskripsi maintenance', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/maintenances/tambah',$data);

        }
        else
        {
            $this->maintenancemodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/maintenance');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_maintenances']= $this->maintenancemodel->getAll();
        $data['maintenance']= $this->maintenancemodel->getById($id);
        $this->load->view('admin/maintenances/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->maintenancemodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/maintenance');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->maintenancemodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
