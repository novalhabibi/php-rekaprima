<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminController extends CI_Controller
{
    public $password;

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('adminmodel');
        
    }

    public function index()
    {

        $data['setting'] = $this->db->get('setting')->row();
        $data['kategori_projects']= $this->adminmodel->getAll();
        $this->load->view('admin/projects/kategoris/index',$data);

    }

    public function simpan()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }

        // $id = $this->uri->segment(5);
        
        
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        $this->form_validation->set_rules('username_admin', 'Username Admin', 'required');
        $this->form_validation->set_rules('password_admin', 'Password Admin', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            
            $this->session->set_flashdata('error', 'Gagal disimpan');
            redirect('dashboard');

        }
        else
        {
            $this->adminmodel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
            redirect('dashboard');
        }
        
    }

    public function update()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }

        $id =$this->input->post('id_admin');
        $hm=$this->input->post('password_admin_lama');
        if (empty($this->input->post('password_admin'))) {
            $password = $this->input->post('password_admin_lama');
        } else {
            $password = $this->input->post('password_admin');
        }
        
        

        $data = array(
            'nama_admin' => $this->input->post('nama_admin'),
            'username_admin' => $this->input->post('username_admin'),
            'password_admin' => $password
        );

        $this->db->where('id_admin', $id);
        $this->db->update('admins', $data);

        // $this->form_validation->set_rules('id_admin', 'Id Admin', 'required');
        // $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        // $this->form_validation->set_rules('usrname_admin', 'Username Admin', 'required');
        // $this->form_validation->set_rules('password_admin', 'Password Admin', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            redirect('dashboard');
            echo "Hmmm";    

        }
        else
        {
            // $this->adminmodel->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            
            redirect('dashboard');

        }
        
    }

    public function hapus()
    {
        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }
        
        $id = $this->uri->segment(3);
        $this->adminmodel->hapus($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        
         redirect('dashboard');

    }


}