<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('clientmodel');
        
        
        
    }

    public function index()
    {
        // echo "ini";
        $data['setting'] = $this->db->get('setting')->row();
        $data['clients']= $this->clientmodel->getAll();
        $this->load->view('admin/clients/index',$data);

        // $data['setting'] = $this->db->get('setting')->row();

        // $data['_client']= $this->clientmodel->getById($id);
        // $this->load->view('admin/clients/s/index',$data);
    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_client', 'Nama Client', 'trim|required|min_length[1]|max_length[12]');
        
        $this->form_validation->set_rules('link_client', 'Link Client', 'trim|required|min_length[1]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/clients/tambah',$data);

        }
        else
        {
            $this->clientmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard/client');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_clients']= $this->clientmodel->getAll();
        $data['client']= $this->clientmodel->getById($id);
        $this->load->view('admin/clients/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->clientmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/client');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->clientmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
