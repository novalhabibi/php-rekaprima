<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('projectmodel');
        $this->load->model('gambarmodel');
        
        
        
    }

    public function index()
    {
        // echo "ini";
        $data['setting'] = $this->db->get('setting')->row();
        $data['projects']= $this->projectmodel->getAllJoin();
        
        $this->load->view('admin/projects/index',$data);

        // $data['setting'] = $this->db->get('setting')->row();

        // $data['_project']= $this->projectmodel->getById($id);
        // $this->load->view('admin/projects/s/index',$data);
    }

    public function tambah()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama_project', 'Nama Project', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('id_kategori_project', 'Kategori Project', 'trim|required');
        
        $this->form_validation->set_rules('deskripsi_project', 'Deskripsi Project', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/projects/tambah',$data);

        }
        else
        {
            $this->projectmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/projek');
        }
        
    }

    public function tambahgambar()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
        $this->form_validation->set_rules('deskripsi_gambar', 'Deskripsi Gambar', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
            $data['setting'] = $this->db->get('setting')->row();
            $this->load->view('admin/projects/tambah',$data);

        }
        else
        {
            $this->gambarmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard/projek');
        }
        
    }



    public function edit()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(4);
        $id_project = $this->uri->segment(4);
        $data['setting'] = $this->db->get('setting')->row();
        // $data['_projects']= $this->projectmodel->getAll();
        $data['project']= $this->projectmodel->getById($id);
        $data['gambars']= $this->gambarmodel->getById($id_project);
        $this->load->view('admin/projects/edit',$data);
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
            $this->projectmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard/projek');
        
        
    }

    public function simpafn()
    {
        $_POST['nama_project'];
        $this->form_validation->set_rules('nama__project', 'Nama  project', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            

        }
        else
        {
            $this->projectmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }


    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        $id = $this->uri->segment(3);
        $this->projectmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
        redirect($_SERVER['HTTP_REFERER']);

    }
}
