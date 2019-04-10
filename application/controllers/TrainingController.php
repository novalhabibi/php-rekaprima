<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('trainingmodel');
        
        
        
    }

    public function index()
    {
        // echo "ini";
        $data['setting'] = $this->db->get('setting')->row();
        $data['trainings']= $this->trainingmodel->getAllJoin();
        $this->load->view('admin/trainings/index',$data);

        // $data['setting'] = $this->db->get('setting')->row();

        // $data['_training']= $this->trainingmodel->getById($id);
        // $this->load->view('admin/trainings/s/index',$data);
    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_training', 'Nama training', 'trim|required|min_length[5]|max_length[12]');
        
        $this->form_validation->set_rules('deskripsi_training', 'Deskripsi training', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/trainings/tambah',$data);

        }
        else
        {
            $this->trainingmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/training');
        }
        
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_trainings']= $this->trainingmodel->getAll();
        $data['training']= $this->trainingmodel->getById($id);
        $this->load->view('admin/trainings/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->trainingmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/training');
        
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->trainingmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
