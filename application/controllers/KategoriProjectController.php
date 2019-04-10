<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriProjectController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('kategoriprojectmodel');
    }

    public function index()
    {

        $data['setting'] = $this->db->get('setting')->row();
        $data['kategori_projects']= $this->kategoriprojectmodel->getAll();
        $this->load->view('admin/projects/kategoris/index',$data);

        // $data['setting'] = $this->db->get('setting')->row();

        // $data['kategori_project']= $this->kategoriprojectmodel->getById($id);
        // $this->load->view('admin/projects/kategoris/index',$data);
    }

    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }



        $id = $this->uri->segment(5);
        $data['setting'] = $this->db->get('setting')->row();
        $data['kategori_projects']= $this->kategoriprojectmodel->getAll();
        $data['kategori_project']= $this->kategoriprojectmodel->getById($id);
        $this->load->view('admin/projects/kategoris/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }


        $this->form_validation->set_rules('nama_kategori_project', 'Nama kategori project', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            

        }
        else
        {
            $this->kategoriprojectmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/projek/kategori');
        }
        
    }
    public function simpan()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }

        $_POST['nama_kategori_project'];
        $this->form_validation->set_rules('nama_kategori_project', 'Nama kategori project', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            

        }
        else
        {
            $this->kategoriprojectmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
        $id = $this->uri->segment(4);
        $this->kategoriprojectmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
