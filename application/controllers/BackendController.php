<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackendController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->has_userdata('logged_in') == FALSE) {
            redirect('auth/login');
        }

    }

    public function index()
    {
        $data['setting'] = $this->db->get('setting')->row();

        $this->load->view('admin/overview',$data);
    }
}
